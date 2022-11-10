@extends("template.main")
@section("title", "Dashboard")
@section("content")

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Inventory Records</h3>
                    <p class="text-subtitle text-muted">&nbsp;</p>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">

                            @include('template.alert')

                            <div class="row" id="table-bordered">
                                <div class="col-12">
                                    <div class="row">
{{--                                      
                                            <div class="col-md-8">
dfd
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::text('track_code',null, ['class' => 'form-control', 'placeholder' => 'Search by Tracker Code']) !!}
                                            </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">







                                            <!-- table bordered -->
                                            <div class="table-responsive">
                                                <table class="table table-striped text-center" id="table1">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Tracking Code</th>
                                                        <th class="text-center">Item</th>
                                                        <th class="text-center">Category</th>
                                                        <th class="text-center">Balance</th>
                                                        <th class="text-center"></th>
                                                        <th class="text-center">Show All Records</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($items as $item)
                                                        <tr>
                                                            <td>{{$item->track_code}}</td>
                                                            <td>{{$item->item_name}}</td>
                                                            <td>
                                                                {{$item->getCategory()}}
                                                            </td>

                                                            <td>{{$item->getBalance()}}</td>
                                                            <td>
                                                                <button
                                                                    data-id="{{$item->id}}"
                                                                    type="button"
                                                                    class="btn btn-sm btn-outline-primary block inventory_record"
                                                                    data-bs-toggle="modal"
                                                                >
                                                                    Add Record
                                                                </button>
                                                            </td>
                                                            <td>

                                                                <a href="/incoming?item-id={{$item->id}}" type="button"
                                                                   class="btn btn-success btn-sm">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                         height="16" fill="currentColor"
                                                                         class="bi bi-plus-square" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                                        <path
                                                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                                    </svg>
                                                                    View Incoming
                                                                </a>

                                                                <a href="/outgoing?item-id={{$item->id}}"
                                                                   class="btn btn-danger btn-sm">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                         height="16" fill="currentColor"
                                                                         class="bi bi-patch-minus" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                              d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"></path>
                                                                        <path
                                                                            d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                                                                    </svg>
                                                                    View Outgoing
                                                                </a>


                                                                {{--                                                                <a href="item/{{$item->id}}" type="button"--}}
                                                                {{--                                                                   class="btn btn-primary">--}}
                                                                {{--                                                                    <i class="bi bi-patch-minus"></i>--}}
                                                                {{--                                                                    OUT--}}
                                                                {{--                                                                </a>--}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>
                                                <div class="d-flex justify-content-center">
                                                    {!! $items->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <div
        class="modal fade"
        id="exampleModalCenter"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-sm modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
            role="document"
        >
            <form id="submit_inventory">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="exampleModalCenterTitle"
                        >
                            Create Inventory Record
                        </h5>
                    </div>
                    <div class="modal-body">


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="basicInput">Date:</label>
                                    <input value="<?php echo date('Y-m-d'); ?>" type="date" name="date"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Operation:</label>
                                    {!!
                                                Form::select('operation', [
                                                    'in' => 'IN',
                                                    'out' => 'OUT'
    ], null, [
                                                 'class' => 'form-control'
                                                 ]);
                                                !!}
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Qty:</label>
                                    <input type="number" name="qty" class="form-control"/>
                                </div>


                            </div>

                        </div>
                    </div>
                    <input type="hidden" id="item_id" name="item_id" class="form-control"/>
                    <input type="hidden" value="{{ csrf_token() }}" name="_token" class="form-control"/>

                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-light-secondary"
                            data-bs-dismiss="modal"
                        >
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button
                            type="submit"
                            class="btn btn-primary ml-1"
                            data-bs-dismiss="modal"
                        >
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


@push("scripts")
    <script>
        $(document).ready(function () {

            $('#submit_inventory').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'inventory',
                    type: 'POST',
                    dataType: 'json',
                    data: $('#submit_inventory').serialize(),
                    success: function (data) {
                        location.reload();
                    }
                });
            });


            $(".inventory_record").click(function () {
                const id = $(this).attr('data-id');
                $("#item_id").val(id);
                $("#exampleModalCenter").modal('show');
            });


            $(".button_delete").click(function () {
                if (confirm("Are you sure you want to delete this?")) {
                    let id = $(this).attr("id");
                    $.ajax({
                        url: `item/${id}`,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (result) {
                            location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });
        });


    </script>
@endpush

