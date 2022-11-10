@extends("template.main")

@section("content")
    @push("styles")
        <link rel="stylesheet" href="{{asset("assets/vendors/choices.js/choices.min.css")}}"/>
    @endpush


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add User Record</h3>
                    <p class="text-subtitle text-muted">&nbsp;</p>
                </div>

            </div>
        </div>

        <div class="row match-height">
            <div class="col-md-1 col-12"></div>
            <div class="col-md-7 col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">

                            @include('template.alert')

                            {!! Form::open(
                        [
                            'url' => 'users',
                            'method' => 'POST',
                            'class' => 'form form-horizontal'
                            ])  !!}

                            <div class="form-body">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Username:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!! Form::text('username',null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Password:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!! Form::password('password', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Firstname:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!! Form::text('firstname',null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Lastname:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!! Form::text('lastname',null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Role:</label>
                                        </div>
                                        <div class="col-md-8 form-group">

                                            {!!
                                             Form::select('role', [
												 'admin' => 'Admin',
												  'stocks_personnel' => 'Stocks Personnel'
												 ], null, [
                                              'class' => 'form-control'
                                              ]);
                                             !!}

                                        </div>
                                    </div>


                                    <div class="col-sm-12 d-flex justify-content-center">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary me-1 mb-1']);  !!}

                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push("scripts")

    <!-- Include Choices JavaScript -->

    <script src="{{asset("assets/vendors/choices.js/choices.min.js")}}"></script>
@endpush

