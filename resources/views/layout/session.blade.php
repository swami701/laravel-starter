@if($flash = session('message'))
    <div class="alert-success alert flash-message role=alert">
        {{$flash}}
    </div>
@endif
