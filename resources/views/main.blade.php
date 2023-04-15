<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>Main Dashboard | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">

                            <a href="index.html" class="logo logo-light text-decoration-none text-light mt-2">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-duaputri.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-duaputri.png" alt="" height="50">
                                </span>
                                <span class="logo-lg">
                                    <small class="text-decoration-none">Dua Putri</small>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifikasi </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> Lihat Semua</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">Waktunya Re-Stock</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    
                                </div>
                                
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Nabila</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-list-ul"></i>
                                    <span key="t-tables">Master Data</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html" key="t-basic-tables">Data Barang</a></li>
                                    <li><a href="tables-datatable.html" key="t-data-tables">Data Supplier</a></li>
                                    <li><a href="tables-responsive.html" key="t-responsive-table">Data Penjualan</a></li>
                                    <li><a href="tables-editable.html" key="t-editable-table">Data Rata-rata</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-eraser"></i>
                                    <span key="t-forms">Input</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html" key="t-form-elements">Form Elements</a></li>
                                    <li><a href="form-layouts.html" key="t-form-layouts">Form Layouts</a></li>
                                    <li><a href="form-validation.html" key="t-form-validation">Form Validation</a></li>
                                    <li><a href="form-advanced.html" key="t-form-advanced">Form Advanced</a></li>
                                    <li><a href="form-editors.html" key="t-form-editors">Form Editors</a></li>
                                    <li><a href="form-uploads.html" key="t-form-upload">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html" key="t-form-xeditable">Form Xeditable</a></li>
                                    <li><a href="form-repeater.html" key="t-form-repeater">Form Repeater</a></li>
                                    <li><a href="form-wizard.html" key="t-form-wizard">Form Wizard</a></li>
                                    <li><a href="form-mask.html" key="t-form-mask">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="apps-filemanager.html" class="waves-effect">
                                    <i class="bx bx-file"></i>
                                    <span key="t-file-manager">File Manager</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">Projects</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                                    <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                                    <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                                    <li><a href="projects-create.html" key="t-create-new">Create New</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-tasks">Tasks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                                    <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" key="t-user-grid">Users Grid</a></li>
                                    <li><a href="contacts-list.html" key="t-user-list">Users List</a></li>
                                    <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-detail"></i>
                                    <span key="t-blog">Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                    <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                    <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                                </ul>
                            </li>       
                           
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12 mt-1">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Beras 3 Kg</p>
                                                        <h4 class="mb-0">500</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Beras 5 Kg</p>
                                                        <h4 class="mb-0">345</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Beras 10 Kg</p>
                                                        <h4 class="mb-0">232</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Beras 25 Kg</p>
                                                        <h4 class="mb-0">462</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Minyak Bimoli 2 Lt</p>
                                                        <h4 class="mb-0">232</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Minyak Fortune 2 Lt</p>
                                                        <h4 class="mb-0">78</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Transaksi Terakhir</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        
                                                        <th class="align-middle">ID Penjualan</th>
                                                        <th class="align-middle">Nama Produk</th>
                                                        <th class="align-middle">Harga Produk</th>
                                                        <th class="align-middle">Jumlah</th>
                                                        <th class="align-middle">Total Harga</th>
                                                        {{-- <th class="align-middle">Pembayaran</th> --}}
                                                        <th class="align-middle">View Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                                        <td>Telur</td>
                                                        <td>
                                                            Rp. 50.000
                                                        </td>
                                                        <td>
                                                            27
                                                        </td>
                                                        <td>
                                                            Rp.500.000
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                                        <td>Jamal Burnett</td>
                                                        <td>
                                                            Rp. 50.000
                                                        </td>
                                                        <td>
                                                            27
                                                        </td>
                                                        <td>
                                                            Rp. 800.000
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                                        <td>Juan Mitchell</td>
                                                        <td>
                                                            Rp. 50.000
                                                        </td>
                                                        <td>
                                                            27
                                                        </td>
                                                        <td>
                                                            Rp. 440.000
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                                        <td>Barry Dick</td>
                                                        <td>
                                                            Rp. 50.000
                                                        </td>
                                                        <td>
                                                            27
                                                        </td>
                                                        <td>
                                                            Rp. 450.000
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                                        <td>Ronald Taylor</td>
                                                        <td>
                                                            Rp. 50.000
                                                        </td>
                                                        <td>
                                                            27
                                                        </td>
                                                        <td>
                                                            Rp. 150.0000
                                                        </td>
                                                        
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                                        <td>Jacob Hunter</td>
                                                        <td>
                                                            Rp. 50.000
                                                        </td>
                                                        <td>
                                                            22
                                                        </td>
                                                        <td>
                                                            Rp. 300.000
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Transaction Modal -->
                <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 255</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 145</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                <!-- subscribeModal -->
               
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Dua Putri.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Develop by fadil
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>