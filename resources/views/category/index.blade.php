@extends('template.main')


@section('content')
    <div class="az-content-body">
        <h2 class="az-content-title">Stocks Categories</h2>

        <div class="row">

            <div class="col-md-2">

            </div>
            <div class="col-md-9">
                <p>
                    <button class="btn btn-rounded btn-success"><i class="typcn typcn-plus"></i>&nbsp;Add Stock Category</button>
                </p>

                <table class="table">
                    <thead>
                    <tr class="text-center">
                        <th>Item Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center">
                        <td>Tiger Nixon</td>
                        <td>
                                <button class="btn btn-rounded btn-primary"><i class="typcn typcn-edit"></i>&nbsp;Edit</button>
                                <button class="btn btn-rounded btn-danger"><i class="typcn typcn-trash"></i>&nbsp;Delete</button>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>




    </div>





@endsection
