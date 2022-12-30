<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item {{ Request::routeIs('home') ? 'active' : '' }}">
            <a href="{{route('home')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::routeIs('single-invoice.index') ? 'active' : '' }}">
            <a href="{{route('single-invoice.index')}}" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Single Invoice</span>
            </a>
        </li>
        <li class="sidebar-title">Master</li>
        <li class="sidebar-item {{ Request::routeIs('master.satuan.index') ? 'active' : '' }}">
            <a href="{{route('master.satuan.index')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Master Satuan</span>
            </a>
        </li>
        <li class="sidebar-item  {{ Request::routeIs('master.barang.index') ? 'active' : '' }}">
            <a href="{{route('master.barang.index')}}" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Master Barang</span>
            </a>
        </li>

        <li class="sidebar-item  {{ Request::routeIs('master.merk.index') ? 'active' : '' }}">
            <a href="{{route('master.merk.index')}}" class='sidebar-link'>
                <i class="bi bi-life-preserver"></i>
                <span>Master Merk</span>
            </a>
        </li>
    </ul>
</div>
