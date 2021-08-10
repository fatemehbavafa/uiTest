
<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('first_name', null, ['class' => 'form-control text-right', 'required'])}}
        <span>نام</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('last_name', null, ['class' => 'form-control text-left d-ltr', 'id'=>'last_name', 'required'])}}
        <span>نام خانوادگی </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('username', null, ['class' => 'form-control text-left d-ltr', 'id'=>'username', 'required'])}}
        <span> نام کاربری</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::number('password', null, ['class' => 'form-control text-left d-ltr', 'id'=>'password', 'required'])}}
        <span> رمز عبور</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('email', null, ['class' => 'form-control text-left d-ltr', 'id'=>'email', 'required'])}}
        <span>ایمیل </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::number('phone', null, ['class' => 'form-control text-left d-ltr', 'id'=>'phone','required'])}}
        <span>تلفن </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('gender', $gender, null, ['class' => 'form-control text-right', 'required'])}}
        <span>جنسیت</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('roles[]', $roles, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'required' ,'dir' => 'rtl'])}}
        <span>نقش</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('ages', $ages, null, ['class' => 'form-control text-right'])}}
        <span>سن</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('jobs', $jobs, null, ['class' => 'form-control text-right'])}}
        <span>شغل</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('types[]', $types, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'dir' => 'rtl'])}}
        <span>به چه نوع وبسایت هایی بیشتر علاقمندید؟</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('interests[]', $interests, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'dir' => 'rtl'])}}
        <span>به چه موضوعاتی بیشتر علاقمندید؟</span>
    </label>

    <div class="w-100 text-center">
        <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
    </div>
</div>
{{Form::close()}}
