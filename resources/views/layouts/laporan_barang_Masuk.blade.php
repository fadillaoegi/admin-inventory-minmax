@extends('main')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Laporan Barang Masuk</h4>
            <div class="table-responsive">
                <table class="table align-middle table-nowrap mb-0">
                    <thead class="table-light">
                        <tr>
                            
                            <th class="align-middle">ID Barang</th>
                            <th class="align-middle">Nama Barang</th>
                            <th class="align-middle">Jumlah</th>
                            <th class="align-middle">Supplier</th>
                            <th class="align-middle">Tanggal</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                            <td>Beras 3 Kg</td>
                            <td>
                                250
                            </td>
                            <td>
                                Hj.Jani
                            </td>
                            <td>
                                23-05-2023
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    Download Laporan
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                            <td>Beras 5 Kg</td>
                            <td>
                                250
                            </td>
                            <td>
                                Hj.Jani
                            </td>
                            <td>
                                23-05-2023
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    Download Laporan
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                            <td>Beras 10 Kg</td>
                            <td>
                                250
                            </td>
                            <td>
                                Hj.Jani
                            </td>
                            <td>
                                23-05-2023
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    Download Laporan
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                            <td>Beras 25 Kg</td>
                            <td>
                                250
                            </td>
                            <td>
                                Hj.rozy
                            </td>
                            <td>
                                25-05-2023
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    Download Laporan
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                            <td>Minyak Bimoli 2 liter</td>
                            <td>
                                220
                            </td>
                            <td>
                                Superindo
                            </td>
                            <td>
                                220-05-2023
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    Download Laporan
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                            <td>Minyak Fortune 2 liter</td>
                            <td>
                                2230
                            </td>
                            <td>
                                Superindo
                            </td>
                            <td>
                                20-05-2023
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    Download Laporan
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
@endsection