@extends('admin.dashboard')
@section('admin_content')
    <div class="container pb-5">
        <h6>اسلاید جدید</h6>

        <div class="my-4">
            <form action="{{route('admin-slider-insert')}}" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="slideImg" class="col-sm-2 col-form-label">تصویر</label>
                    <div class="col-sm-4">
                        <input type="file" id="slideImg" name="image">
                    </div>
                </div>
                @csrf
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-info">ثبت </button>
                    </div>
                </div>
            </form>
        </div>
        <h6>اسلاید های فعلی سایت</h6>
        <div class="row">

            @foreach($sliders as $slider)
            <div class="mt-2 col-md-3">
                <form action="{{route('admin-slider-remove')}}" method="post">
                    <div class="user-img-container d-flex justify-content-center align-items-center">
                        <img src="{{asset($slider->image_path)}}" alt="">
                    </div>
                    @csrf
                    <input name="slider_id" type="hidden" value="{{$slider->id}}">
                    <button type="submit" class="btn mt-1 btn-delete ">حذف</button>
                </form>
            </div>
            @endforeach




        </div>
    </div>
@endsection