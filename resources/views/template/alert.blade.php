@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{!! $error !!}</div>

    @endforeach

@endif



@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif



@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
    @endif
@endforeach
