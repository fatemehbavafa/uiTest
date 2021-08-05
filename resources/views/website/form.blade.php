<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('name', null, ['class' => 'form-control text-right'])}}
        <span>نام سایت </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('tester_count', null, ['class' => 'form-control text-left d-ltr', 'id'=>'tester_count'])}}
        <span>تعداد تست کنندگان </span>
    </label>
    <div class="w-100 text-center">
        <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
    </div>


{{Form::close()}}
