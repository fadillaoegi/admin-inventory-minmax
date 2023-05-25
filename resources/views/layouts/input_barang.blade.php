@extends('main')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Input Barang</h4>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" 
                            id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search"
                            id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email"  placeholder="Enter Email"
                            id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                    <div class="col-md-10">
                        <input class="form-control" type="url"  placeholder="Enter URL"
                            id="example-url-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                    <div class="col-md-10">
                        <input class="form-control" type="tel"  placeholder="Enter Telephone"
                            id="example-tel-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password"  placeholder="Enter Password"
                            id="example-password-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number"  placeholder="Enter Number" id="example-number-input">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" value="2019-08-19"
                            id="example-date-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                    <div class="col-md-10">
                        <input class="form-control" type="month" value="2019-08"
                            id="example-month-input">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Select</label>
                    <div class="col-md-10">
                        <select class="form-select">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <label for="exampleDataList" class="col-md-2 col-form-label">Datalists</label>
                    <div class="col-md-10">
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->



    
@endsection