<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="/kasir" class="waves-effect">
                        <i class="bx bx-archive"></i>
                        <span key="t-chat">Kasir</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/daftarbarang" key="t-basic-tables">Daftar Barang</a></li>
                        <li><a href="/daftarsupplier" key="t-data-tables">Daftar Supplier</a></li>
                        <li><a href="/daftarpenjualan" key="t-responsive-table">Daftar Penjualan</a></li>
                        <li><a href="/daftarratarata" key="t-editable-table">Daftar Rata-rata</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span key="t-forms">Input Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- <li><a href="form-validation.html" key="t-form-validation">Input Data Penjualan</a></li> --}}
                        <li><a href="/inputbarang" key="t-form-elements">Input Data Barang</a></li>
                        <li><a href="/inputsupplier" key="t-form-layouts">Input Data Supplier</a></li>
                    </ul>
                </li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Laporan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/laporanbarangmasuk" key="t-invoice-detail">Laporan Barang Masuk</a></li>
                        <li><a href="/laporanbarangkeluar" key="t-invoice-list">Laporan Barang Keluar</a></li>
                        <li><a href="/laporanrestok" key="t-invoice-detail">Laporan Rekomendasi Re-Stock</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/karyawan" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-file-manager">Daftar Karyawan</span>
                    </a>
                </li>
               
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->