@extends('admin.dashboard')
@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8">
                <h6 class="mb-3">کتاب جدید</h6>
                <form action="{{route('admin-book-insert')}}"  method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="postTitle" class="col-sm-2 col-form-label">عنوان کتاب</label>
                        <div class="col-sm-7">
                            <input name="name" type="text" class="form-control" id="postTitle"
                                   placeholder="عنوان کتاب را وارد کنید" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تصویر روی جلد</legend>
                            <div class="col-sm-7">
                                <input type="file" name="image" accept="image/*" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="important" class="col-form-label col-sm-2 pt-0">انتخاب به عنوان مهم</label>
                            <div class="col-sm-7">
                                <input id="important" type="checkbox" name="is_important" style="width: 15px;height: 15px"  />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="category" class="col-form-label col-sm-2 pt-0">دسته بندی</label>

                            <div class="col-sm-7">
                                <select class="form-control" name="category_id" id="category">
                                    <option value="0"></option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">قیمت کتاب</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="قیمت کتاب را به تومان وارد کنید" type="number" name="price" required/>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">نویسنده کتاب</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="نویسنده کتاب" type="text" name="author" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">ناشر</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="انتشارات" type="text" name="publisher" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">سال و نوبت نشر</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="سال و نوبت نشر" type="text" name="publication_date" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تعداد صفحات</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="تعداد صفحات کتاب" type="number" name="page_count" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">تعداد</legend>
                            <div class="col-sm-7">
                                <input class="form-control d-inline" placeholder="تعداد موجودی کتاب" type="number" name="stock" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">توضیحات کتاب</div>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control rtl "
                                      placeholder="توضیحات کتاب را وارد کنید"
                                      rows="5" required></textarea>
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
        <br>
        <hr>
        <br>
        <div class="red-divider"></div>
        <h6 class="mt-4">همه کتاب ها</h6>
        <div class="mt-1 d-flex flex-wrap">

            @foreach($books as $book)
                <div class="m-1 admin-book-container d-flex flex-column">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="admin-book-img-container">
                                <img src="{{asset($book->image_path)}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-between align-items-center admin-book-card-header my-md-0">
                                <h6>{{$book->name}}</h6>
                                <span class="btn-sm course-price align-self-start ">{{number_format($book->price)}} تومان</span>
                            </div>
                            <p class="mt-2">
                                {{$book->description}}
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between align-items-center flex-wrap">
                        <span><i class="fal fa-books"></i> {{$book->stock}}</span>
                        <span><i class="fal fa-user"></i> {{$book->author}}</span>
                        <a href="{{route('admin-book', $book->id)}}" class="btn btn-sm btn-blue"><i class="fal fa-cog mr-1 "></i>ویرایش کتاب</a>
                    </div>
                </div>
            @endforeach





        </div>

        <div class="container" >
            <div class="d-flex justify-content-center">
                <div class="flex-item text-center mt-2" style="">
                    <nav aria-label="Page navigation example"  >
                        <ul class="pagination" >
                            {{$books->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>
@endsection