@extends('main')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Form Elements</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Elements</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Textual inputs</h4>
                <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to
                    each
                    textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="Artisanal kale"
                            id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search" value="How do I shoot web"
                            id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" value="bootstrap@example.com" placeholder="Enter Email"
                            id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                    <div class="col-md-10">
                        <input class="form-control" type="url" value="https://getbootstrap.com"  placeholder="Enter URL"
                            id="example-url-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                    <div class="col-md-10">
                        <input class="form-control" type="tel" value="1-(555)-555-5555" placeholder="Enter Telephone"
                            id="example-tel-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" value="hunter2"  placeholder="Enter Password"
                            id="example-password-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="42"  placeholder="Enter Number" id="example-number-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and
                        Time</label>
                    <div class="col-md-10">
                        <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                            id="example-datetime-local-input">
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
                    <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                    <div class="col-md-10">
                        <input class="form-control" type="week" value="2019-W33"
                            id="example-week-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                    <div class="col-md-10">
                        <input class="form-control" type="time" value="13:45:00"
                            id="example-time-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
                    <div class="col-md-10">
                        <input class="form-control form-control-color mw-100" type="color" value="#556ee6"
                            id="example-color-input">
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sizing</h4>
                <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code>
                    and <code>.form-control-sm</code>.</p>
                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label">Default input</label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label class="form-label">Small Input</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder=".form-control-sm">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label class="form-label">Large Input</label>
                                <input class="form-control form-control-lg" type="text"
                                    placeholder=".form-control-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rangea Inputs</h4>
                <p class="card-title-desc">Create custom <code>&lt;input type="range"&gt;</code>
                    controls with <code>.form-range</code>.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label for="customRange1" class="form-label">Example Range</label>
                            <input type="range" class="form-range" id="customRange1">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div>
                            <label for="disabledRange" class="form-label">Disabled Eange</label>
                            <input type="range" class="form-range" id="disabledRange" disabled>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Min and max</h5>
                            <p class="card-title-desc">Range inputs have implicit values for min and
                                max—0 and 100, respectively.</p>
                            <input type="range" class="form-range" min="0" max="5" id="customRange2">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="font-size-14">Steps</h5>
                            <p class="card-title-desc">By default, range inputs “snap” to integer
                                values. To change this, you can specify a <code>step</code> value.</p>
                            <input type="range" class="form-range" min="0" max="5" id="customRange2">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->


    
@endsection