@if(session('message'))
    <div class="alert alert-success text-right">
        {{session('message')}}
    </div>
@endif
@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger text-right" dir="rtl">
            {{$error}}
        </div>
    @endforeach
@endif