@if(session('message'))
    <div class="alert alert-success text-right rounded">
        {{session('message')}}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger text-right rounded">
        {{session('error')}}
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-warning text-right rounded">
        {{session('warning')}}
    </div>
@endif
@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger text-right rounded" dir="rtl">
            {{$error}}
        </div>
    @endforeach
@endif