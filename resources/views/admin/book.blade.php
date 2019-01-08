@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-10 m-auto">
                <h6 class="mb-3">ویرایش کتاب</h6>
                <form>
                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان کتاب</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان کتاب را وارد کنید" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تصویر روی جلد</legend>
                            <div class="col-sm-7">
                                <input type="file" name="" accept="image/*" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">قیمت کتاب</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="قیمت کتاب را به تومان وارد کنید" type="number" name="" required/>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">نویسنده کتاب</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="نویسنده کتاب" type="text" name="" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">ناشر</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="انتشارات" type="text" name="" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">سال نشر</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="سال نشر" type="text" name="" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تعداد</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="تعداد موجودی کتاب" type="number" name="" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">توضیحات کتاب</div>
                        <div class="col-sm-10">
                            <textarea name="course_content" class="form-control rtl "
                                      placeholder="توضیحات کتاب را وارد کنید"
                                      rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-blue">ویرایش</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection