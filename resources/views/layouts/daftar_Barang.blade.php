{{-- @dd('title') --}}
@extends('main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 row-cols-5">
                    <h4 class="card-title mb-4">Daftar Barang</h4>
                        <button type="button" class="btn btn-primary p-2 icon-close btn-sm btn-rounded waves-effect waves-light" >
                           <span> Tambah barang <i class="bx bx-add-to-queue"></i> </span>
                        </button>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                
                                <th class="align-middle">ID Barang</th>
                                <th class="align-middle">Nama Barang</th>
                                <th class="align-middle">Harga</th>
                                <th class="align-middle">Lead Time</th>
                                <th class="align-middle">Stock</th>
                                {{-- <th class="align-middle">Pembayaran</th> --}}
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Beras 3 Kg</td>
                                <td>
                                    Rp. 30.000
                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    250
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Beras 5 Kg</td>
                                <td>
                                    Rp. 50.000
                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    760
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
                                <td>Beras 10 Kg</td>
                                <td>
                                    Rp. 100.000
                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    390
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
                                <td>Beras 25 Kg</td>
                                <td>
                                    Rp. 250.000
                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    250
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
                                <td>Minyak Bimoli 2 liter</td>
                                <td>
                                    Rp. 30.000
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    220
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
                                <td>Minyak Fortune 2 liter</td>
                                <td>
                                    Rp. 30.000
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    220
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