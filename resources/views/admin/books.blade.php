@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8">
                <h6 class="mb-3">کتاب جدید</h6>
                <form action=""  method="" >
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
                            <button type="submit" class="btn btn-info">ثبت کتاب</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        <div class="red-divider"></div>
        <h6 class="mt-4">همه کتاب ها</h6>
        <div class="mt-1 d-flex flex-wrap">
            <div class="m-1 admin-book-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-book-img-container">
                            <img src="{{asset('img/book1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex justify-content-between align-items-center admin-book-card-header my-md-0">
                            <h6>ساختمان داده</h6>
                            <span class="btn-sm course-price align-self-start ">36000 تومان</span>
                        </div>
                        <p class="mt-2">
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طرا
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between align-items-center flex-wrap">
                    <span><i class="fal fa-books"></i> 24</span>
                    <span><i class="fal fa-user"></i> پویا آکلیون</span>
                    <a href="{{route('admin-book')}}" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>ویرایش کتاب</a>
                </div>
            </div>

            <div class="m-1 admin-book-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-book-img-container">
                            <img src="{{asset('img/book1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex justify-content-between align-items-center admin-book-card-header my-md-0">
                            <h6>ساختمان داده</h6>
                            <span class="btn-sm course-price align-self-start ">36000 تومان</span>
                        </div>
                        <p class="mt-2">
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طرا
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between align-items-center flex-wrap">
                    <span><i class="fal fa-books"></i> 24</span>
                    <span><i class="fal fa-user"></i> پویا آکلیون</span>
                    <a href="{{route('admin-book')}}" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>ویرایش کتاب</a>
                </div>
            </div>

            <div class="m-1 admin-book-container d-flex flex-column">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="admin-book-img-container">
                            <img src="{{asset('img/book1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="d-flex justify-content-between align-items-center admin-book-card-header my-md-0">
                            <h6>ساختمان داده</h6>
                            <span class="btn-sm course-price align-self-start ">36000 تومان</span>
                        </div>
                        <p class="mt-2">
                            مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            اهل دنیای موجود طرا
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between align-items-center flex-wrap">
                    <span><i class="fal fa-books"></i> 24</span>
                    <span><i class="fal fa-user"></i> پویا آکلیون</span>
                    <a href="{{route('admin-book')}}" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>ویرایش کتاب</a>
                </div>
            </div>

        </div>
    </div>
@endsection