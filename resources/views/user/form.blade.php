<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('first_name', null, ['class' => 'form-control text-right'])}}
        <span>نام</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('last_name', null, ['class' => 'form-control text-left d-ltr', 'id'=>'last_name'])}}
        <span>نام خانوادگی </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('username', null, ['class' => 'form-control text-left d-ltr', 'id'=>'username'])}}
        <span> نام کاربری</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('email', null, ['class' => 'form-control text-left d-ltr', 'id'=>'email'])}}
        <span>ایمیل </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('phone', null, ['class' => 'form-control text-left d-ltr', 'id'=>'phone'])}}
        <span>تلفن </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('gender', $gender, null, ['class' => 'form-control text-right', 'required'])}}
        <span>جنسیت</span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::select('roles[]', $roles, null, ['class' => 'form-control   select2-multiple text-right','multiple  ' ,'required' ,'id' => 'roles','dir' => 'rtl'])}}
        <span>نقش</span>
    </label>
    <div class="w-100 text-center">
        <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
    </div>


{{Form::close()}}
