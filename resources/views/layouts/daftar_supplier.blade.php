@extends('main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 row-cols-5">
                    <h4 class="card-title mb-4">Daftar Supplier</h4>
                        <button type="button" class="btn btn-primary p-2 icon-close btn-sm waves-effect waves-light" >
                           <span> Tambah supplier <i class="bx bx-add-to-queue"></i> </span>
                        </button>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                
                                <th class="align-middle">ID Supplier</th>
                                <th class="align-middle">Nama Supplier</th>
                                <th class="align-middle">No_Hp</th>
                                <th class="align-middle">Alamat</th>
                                {{-- <th class="align-middle">Pembayaran</th> --}}
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>H.Jani</td>
                                <td>
                                    087709807654
                                </td>
                                <td>
                                    Lamongan, Jl.babat, no.21
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>H.Jani</td>
                                <td>
                                    087709807654
                                </td>
                                <td>
                                    Lamongan, Jl.babat, no.21
                                </td>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>H.Jani</td>
                                <td>
                                    087709807654
                                </td>
                                <td>
                                    Lamongan, Jl.babat, no.21
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>H.Jani</td>
                                <td>
                                    087709807654
                                </td>
                                <td>
                                    Lamongan, Jl.babat, no.21
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                <td>H.Jani</td>
                                <td>
                                    087709807654
                                </td>
                                <td>
                                    Lamongan, Jl.babat, no.21
                                </td>
                                
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                <td>Beras H.Jani</td>
                                <td>
                                    087709807654
                                </td>
                                <td>
                                    Lamongan, Jl.babat, no.21
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light">
                                        Edit     
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm  waves-effect waves-light">
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