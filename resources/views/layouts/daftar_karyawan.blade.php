@extends('main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 row-cols-5">
                    <h4 class="card-title mb-4">Daftar Karyawan</h4>
                        <button type="button" class="btn btn-primary p-2 icon-close btn-sm btn-rounded waves-effect waves-light" >
                           <span> Tambah karyawan <i class="bx bx-add-to-queue"></i> </span>
                        </button>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">ID Karyawan</th>
                                <th class="align-middle">Nama</th>
                                <th class="align-middle">Jabatan</th>
                                <th class="align-middle">No.Telp</th>
                                <th class="align-middle">Alamat</th>
                                {{-- <th class="align-middle">Pembayaran</th> --}}
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)

                            <tr>
                                
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                                
                            @endforeach
                            <tr>
                                
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                <td>Shofa</td>
                                <td>
                                    karyawan
                                </td>
                                <td>
                                    0852-1111-9246
                                </td>
                                <td>
                                    Tegal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <!-- end table-responsive -->
                <div class="d-flex justify-content-end mt-3">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection