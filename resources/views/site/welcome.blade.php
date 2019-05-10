@extends('layouts.app')
@section('content')
    {{--<div class="container-fluid py-3 slide-background">--}}

    {{--<div class="slide-container m-auto">--}}
    {{--<div id="carousel" class="swiper-container carousel" dir="rtl">--}}
    {{--<div class="swiper-wrapper">--}}
    {{--@foreach($sliders as $slider)--}}
    {{--<div class="swiper-slide"><img class="w-100" src="{{asset($slider->image_path)}}"/></div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--<!-- Add Pagination -->--}}
    {{--<div class="swiper-pagination"></div>--}}
    {{--<!-- Add Arrows -->--}}
    {{--<div class="swiper-button-next"></div>--}}
    {{--<div class="swiper-button-prev"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="intro m-0 p-4 mt-3">--}}
    {{--<div class="row p-3 text-center">--}}
    {{--<div class="col-lg-4 p-2      ">--}}
    {{--<div class="intro-card d-flex flex-column align-items-center justify-content-center rtl text-center p-4">--}}
    {{--<h4 class="text-main-color">همه ی کتاب های انتشارات دانشگاه شهید مدنی آذربایجان در دسترس شما</h4>--}}
    {{--<i class="fa fa-book   position-absolute "></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 p-2 ">--}}
    {{--<div class="intro-card d-flex flex-column align-items-center justify-content-center rtl text-center p-4">--}}
    {{--<h4 class="text-main-color">ارسال رایگان تمامی سفارشات</h4>--}}
    {{--<i class="fa fa-shopping-cart   position-absolute "></i>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="col-lg-4 p-2   ">--}}
    {{--<div class="intro-card d-flex flex-column align-items-center justify-content-center rtl text-center p-4">--}}
    {{--<h4 class="text-main-color">جهت کسب اطلاعات بیشتر با شماره یا ایمیل انتشارات تماس بگیرید</h4>--}}
    {{--<i class="fa fa-info   position-absolute "></i>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}

    <div class=" bg-light books-container p-3">
        <div class="d-flex flex-wrap align-content-center m-3 bg-info p-2" style="border-radius: 0.25rem">
            <span class="mt-2 mr-5 text-white">دسته بندی ها: </span>
            <a href="{{route('site-home')}}" class="btn btn-light m-1  mx-2  @if(\Illuminate\Support\Facades\Request::path() == '/')bg-warning border-0 @endif">همه کتاب ها</a>
            @foreach($categories as $category)
                <a href="{{route('category-books', $category->id)}}" class="btn btn-light m-1  mx-2
                    @if(\Illuminate\Support\Facades\Request::path() == 'category/'.$category->id.'/books')
                        bg-warning border-0
                    @endif">{{$category->name}}
                </a>
            @endforeach
        </div>
        <div id="allBooks" class="d-flex flex-row flex-wrap m-0 p-1 p-sm-3 justify-content-center">
            @foreach($books as $book)
                <a href="{{route('detail', $book->id)}}" class="d-block text-center book-link">
                    <div class="book-container d-flex flex-column align-items-center m-3" style="min-height: 300px !important;">
                        <img src="{{asset($book->image_path)}}" class="book-img mb-2"/>
                        <div class="d-flex flex-column align-self-stretch ">
                            <span class="mb-1" style="min-height: 50px;max-height: 80px;overflow: hidden">{{$book->name}}</span>
                            <span class="mb-2" style="min-height: 25px;max-height: 25px;overflow: hidden">{{$book->author}}</span>
                            <span class="book-price" style="border-radius: 0.25rem">{{number_format($book->price)}} تومان </span>
                        </div>
                    </div>
                </a>
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
@stop