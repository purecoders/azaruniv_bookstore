@extends('admin.dashboard')
@section('admin_content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-6">
                <h6>تغییر رمز عبور</h6>
                <form class="mt-5" action="" onsubmit="return confirm('آیا از تغییر رمز عبور مطمئن هستید؟')">
                    <div class="form-group row">
                        <label for="oldPassword" class="col-sm-4 col-form-label">رمز عبور قبلی</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="oldPassword"
                                   placeholder="رمز عبور قبلی را وارد کنید...">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="newPassword" class="col-sm-4 col-form-label">رمز عبور جدید</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="newPassword" name=""
                                       placeholder="رمز عبور جدید را وارد کنید..."/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="confirmNewPassword" class="col-sm-4 col-form-label">رمز عبور جدید</label>
                            <div class="col-sm-6">
                                <input class="form-control d-inline" id="confirmNewPassword" type="number" name=""
                                       placeholder="تکرار رمز عبور جدید را وارد کنید"/>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-info" value="تغییر">
                </form>

            </div>
            <div class="col-xl-4">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <span><i class="fal fa-key" style="font-size: 10em;color: rgba(26,121,147,0.38);"></i></span>
                </div>
            </div>
        </div>
    </div>

@endsection