@extends('main')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Daftar Rata-rata Penjualan</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                
                                {{-- <th class="align-middle">ID Penjualan</th> --}}
                                <th class="align-middle">Nama Barang</th>
                                <th class="align-middle">Penjualan Terbanyak</th>
                                <th class="align-middle">Penjualan Terkecil</th>
                                <th class="align-middle">Rata-rata Penjualan</th>
                                <th class="align-middle">Satuan</th>
                                <th class="align-middle">Jumlah Permintaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td> --}}
                                <td>Beras 3 Kg</td>
                                <td>
                                    700
                                </td>
                                <td>
                                    203
                                </td>
                                <td>
                                    386
                                </td>
                                <td>
                                    pcs
                                </td>
                                <td>
                                    15
                                </td>
                            </tr>

                            <tr>
                                {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td> --}}
                                <td>Beras 5 Kg</td>
                                <td>
                                    700
                                </td>
                                <td>
                                    203
                                </td>
                                <td>
                                    386
                                </td>
                                <td>
                                    pcs
                                </td>
                                <td>
                                    15
                                </td>
                            </tr>

                            <tr>
                                {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td> --}}
                                <td>Beras 10 Kg</td>
                                <td>
                                    700
                                </td>
                                <td>
                                    203
                                </td>
                                <td>
                                    386
                                </td>
                                <td>
                                    pcs
                                </td>
                                <td>
                                    15
                                </td>
                            </tr>
                            <tr>
                                {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td> --}}
                                <td>Beras 25 Kg</td>
                                <td>
                                    700
                                </td>
                                <td>
                                    203
                                </td>
                                <td>
                                    386
                                </td>
                                <td>
                                    pcs
                                </td>
                                <td>
                                    15
                                </td>
                            </tr>
                            <tr>
                                {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td> --}}
                                <td>Minyak Bimoli 2 liter</td>
                                <td>
                                    700
                                </td>
                                <td>
                                    203
                                </td>
                                <td>
                                    386
                                </td>
                                <td>
                                    pcs
                                </td>
                                <td>
                                    15
                                </td>
                            </tr>
                            <tr>
                                {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td> --}}
                                <td>Minyak Fortune 2 liter</td>
                                <td>
                                    700
                                </td>
                                <td>
                                    203
                                </td>
                                <td>
                                    386
                                </td>
                                <td>
                                    pcs
                                </td>
                                <td>
                                    15
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <!-- end table-responsive -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
    
@endsection