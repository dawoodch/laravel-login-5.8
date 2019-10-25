@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if (session($msg))
        <div class="alert alert-{{$msg}}" role="alert" >
            {{session($msg)}}
        </div>
    @endif    
@endforeach
