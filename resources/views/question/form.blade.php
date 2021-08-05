<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('statement', null, ['class' => 'form-control text-right'])}}
        <span>شرح سوال</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('price', null, ['class' => 'form-control text-left d-ltr', 'id'=>'price'])}}
        <span>قیمت </span>
    </label>
    <div class="w-100 text-center">
        <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
    </div>


{{Form::close()}}
