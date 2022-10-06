@if($errors->any())

    <div id="alert-danger" class="alert alert-important alert-danger alert-dismissible" role="alert">
        <div class="d-flex">{!! $errors->all()[0] !!}</div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
    </div>

@endif


@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <div id="alert-{{ $msg }}" class="alert alert-important alert-{{ $msg }} alert-dismissible" role="alert">
            <div class="d-flex">{{ Session::get('alert-' . $msg) }}</div>
            <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
    @endif
@endforeach
