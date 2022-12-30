<?php

namespace App\Http\Controllers;

use App\Model\MasterBarang;
use App\Model\MasterMerk;
use App\Model\MasterSatuan;
use App\Model\SingleInvoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class SingleInvoiceController extends Controller
{
    public function index (Request $request){
        return view('single_invoice.content');
    }

    public function getDatatable(Request $request){
        $model = SingleInvoice::leftjoin('master_barang', 'master_barang.id', 'barang_id')
            ->leftjoin('master_merk', 'master_merk.id', 'merk_id')
            ->leftjoin('master_satuan', 'master_satuan.id', 'satuan_id')
            ->select('single_invoice.*', 'master_merk.name as nama_merk', 'master_barang.name as nama_barang', 'master_satuan.name as nama_satuan')
            ->get();
        return DataTables::of($model)
        ->addColumn('barang', function($query){
            return $query->nama_merk.' - '.$query->nama_barang;
        })
        ->editColumn('jumlah_barang', function($query){
            return $query->jumlah.' '.$query->nama_satuan;
        })
        ->addColumn('aksi', function(){
            return '
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary d-flex align-items-center" id="edit-modal" data-bs-toggle="modal" data-bs-target="#single-invoice-edit-modal">
                        <i class="bi bi-pencil"></i>
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-danger d-flex align-items-center" id="delete-modal">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function store(Request $request){
        DB::beginTransaction();
        try {
            $carbon = Carbon::now();
            $date_check = DB::table('nomer_invoice')->where('bulan', $carbon->month)->where('tahun', $carbon->year)->first();
            if(!$date_check){
                DB::table('nomer_invoice')->insert([
                    'bulan' => $carbon->month,
                    'tahun' => $carbon->year,
                    'nomor' => 1
                ]);
                $date_check = DB::table('nomer_invoice')->where('bulan', $carbon->month)->where('tahun', $carbon->year)->first();
            }
            SingleInvoice::create([
                'id'            => 'TRSC-'.$carbon->year.'/'.sprintf("%02d", $carbon->month).'/'.sprintf("%05d", $date_check->nomor),
                'barang_id'     => $request->barang_id,
                'merk_id'       => $request->merk_id,
                'satuan_id'     => $request->satuan_id,
                'jumlah'        => $request->jumlah,
                'batch_number'  => $request->batch_number,
                'delivery_time' => $request->delivery_time,
            ]);
            DB::table('nomer_invoice')->where('bulan', $carbon->month)->where('tahun', $carbon->year)->update([
                'nomor' => $date_check->nomor + 1
            ]);
            DB::commit();
            return [
                'code'      => 200,
                'message'   => 'Invoice Added'
            ];
        }
        catch (\Exception $e){
            DB::rollback();
            return [
                'code'      => $e->getCode(),
                'message'   => $e->getMessage()
            ];
        }
    }

    public function delete(Request $request){
        try{
            SingleInvoice::where('id', $request->delete_id)->delete();
            return [
                'code'      => 200,
                'message'   => 'ID '.$request->delete_id.' terhapus'
            ];
        }catch (\Exception $e){
            return [
                'code'      => $e->getCode(),
                'message'   => $e->getMessage()
            ];
        }
    }

    public function getBarang(Request $request){
        if ($request->search!='undefined') $result = MasterBarang::select('id', 'name')->where('name', 'like', "%".$request->search."%")->get();
        else $result = MasterBarang::select('id', 'name')->limit(10)->get();
        $response = array();
        foreach($result as $data){
            $response[] = array(
                "id"=>$data->id,
                "text"=>$data->name
            );
        }
        return response()->json($response);
    }

    public function getMerk(Request $request){
        if ($request->search!='undefined') $result = MasterMerk::select('id', 'name')->where('name', 'like', "%".$request->search."%")->get();
        else $result = MasterMerk::select('id', 'name')->limit(10)->get();
        $response = array();
        foreach($result as $data){
            $response[] = array(
                "id"=>$data->id,
                "text"=>$data->name
            );
        }
        return response()->json($response);
    }

    public function getSatuan(Request $request){
        if ($request->search!='undefined') $result = MasterSatuan::select('id', 'name')->where('name', 'like', "%".$request->search."%")->get();
        else $result = MasterSatuan::select('id', 'name')->limit(10)->get();
        $response = array();
        foreach($result as $data){
            $response[] = array(
                "id"=>$data->id,
                "text"=>$data->name
            );
        }
        return response()->json($response);
    }
}
