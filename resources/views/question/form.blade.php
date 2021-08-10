<div class="row">
    <label class="form-group col-sm-3 col-md-12 col-lg-0 has-float-label">
        {{Form::text('statement', null, ['class' => 'form-control text-right', 'required'])}}
        <span>صورت سوال </span>
    </label>
    <label class="form-group col-sm-3 col-md-4 col-lg-0 has-float-label">
        {{Form::number('price', null, ['class' => 'form-control text-left d-ltr', 'id'=>'price', 'required'])}}
        <span>قیمت </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('types[]', $types, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'dir' => 'rtl'])}}
        <span>این سوال برای چه نوع سایتی مناسب می باشد ؟</span>
    </label>
{{--    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">--}}
{{--        {{Form::select('interests[]', $interests, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'dir' => 'rtl'])}}--}}
{{--        <span>این سوال برای چه موضوعی مناسب می باشد ؟</span>--}}
{{--    </label>--}}
    <div class="w-100 text-center">
        <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
    </div>
</div>
{{Form::close()}}
