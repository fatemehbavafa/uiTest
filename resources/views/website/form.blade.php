<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('name', null, ['class' => 'form-control text-right', 'required'])}}
        <span>نام</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('domain', null, ['class' => 'form-control text-left d-ltr', 'id'=>'domain', 'required'])}}
        <span>دامنه </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('employer_id', null, ['class' => 'form-control text-left d-ltr', 'id'=>'employer_id', 'required'])}}
        <span> کارفرما</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('tester_count', null, ['class' => 'form-control text-left d-ltr', 'id'=>'tester_count', 'required'])}}
        <span>تعداد تست کنندگان </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('ages', $ages, null, ['class' => 'form-control text-right'])}}
        <span>سایت شما متناسب چه سنینی می باشد ؟</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('jobs', $jobs, null, ['class' => 'form-control text-right'])}}
        <span>سایت شما با کدام مشاغل ارتباط دارد ؟</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('types[]', $types, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'dir' => 'rtl'])}}
        <span>سایت شما از چه نوعی می باشد ؟</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('interests[]', $interests, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'dir' => 'rtl'])}}
        <span>سایت شمادرباره چه موضوعی می باشد ؟</span>
    </label>

    <div class="w-100 text-center">
        <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
    </div>
</div>
{{Form::close()}}
