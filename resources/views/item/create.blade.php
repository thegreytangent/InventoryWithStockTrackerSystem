@extends("template.main")

@section("content")
    @push("styles")
        <link rel="stylesheet" href="{{asset("assets/vendors/choices.js/choices.min.css")}}"/>
    @endpush


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Stock Item Record</h3>
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
                            'url' => 'item',
                            'method' => 'post',
                            'class' => 'form form-horizontal'
                            ])  !!}

                            <div class="form-body">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Tracking Code:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!! Form::text('track_code',null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Item Name:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!! Form::text('item_name',null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Select Category:</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            {!!
                                            Form::select('category_id', $categories, null, [
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

