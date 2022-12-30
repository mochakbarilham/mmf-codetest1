<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\MasterBarang;
use Yajra\DataTables\Facades\DataTables;

class MasterBarangController extends Controller
{
    public function index (Request $request){
        try {
            return view('master.barang.content');
        } catch (\Exception $e){
            abort(500);
        }
    }

    public function store(Request $request){
        try {
            MasterBarang::create([
                'id'    => $request->id,
                'name'  => $request->name,
                'desc'  => $request->desc
            ]);
            return [
                'code'      => 200,
                'message'   => 'Data berhasil ditambahkan'
            ];
        } catch (\Exception $e){
            return [
                'code'      => $e->getCode(),
                'message'   => $e->getMessage()
            ];
        }
    }

    public function edit(Request $request){
        try {
            MasterBarang::where('id', $request->edit_id)->update([
                'id'    => $request->id,
                'name'  => $request->name,
                'desc'  => $request->desc
            ]);
            return [
                'code'      => 200,
                'message'   => 'Data berhasil diubah'
            ];
        }catch (\Exception $e){
            return [
                'code'      => $e->getCode(),
                'message'   => $e->getMessage()
            ];
        }
    }

    public function delete(Request $request){
        try {
            MasterBarang::where('id', $request->delete_id)->delete();
            return[
                'code'      => 200,
                'message'   => 'ID '.$request->delete_id.' terhapus!'
            ];
        }catch (\Exception $e){
            return [
                'code'      => $e->getCode(),
                'message'   => $e->getMessage()
            ];
        }
    }

    public function getDatatable (Request $request){
        try {
            $model = MasterBarang::get();
            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('aksi', function(){
                return '
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary d-flex align-items-center" id="edit-modal" data-bs-toggle="modal" data-bs-target="#barang-edit-modal">
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
        } catch (\Exception $e){
            return [
                'code'      => $e->getCode(),
                'message'   => $e->getMessage()
            ];
        }
    }
}
