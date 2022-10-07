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
            <h2>Under Development</h2>
        </div>


    </div>
@endsection


@push("scripts")
    <script>
        $(document).ready(function () {


            $(".button_delete").click(function () {
                if (confirm("Are you sure you want to delete this?")) {
                    let id = $(this).attr("id");
                    $.ajax({
                        url: `category/${id}`,
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

