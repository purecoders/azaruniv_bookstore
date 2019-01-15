@extends('layouts.app')
@section('content')
    <div class="container-fluid py-3 slide-background">

        <div class="slide-container m-auto">
            <div id="carousel" class="swiper-container carousel" dir="rtl">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="w-100" src="{{asset('/img/cover.jpg')}}"/></div>
                    <div class="swiper-slide"><img class="w-100" src="{{asset('/img/cover.jpg')}}"/></div>
                    <div class="swiper-slide"><img class="w-100" src="{{asset('/img/cover.jpg')}}"/></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="intro m-0 p-4 mt-3">
        <div class="row p-3 text-center">
            <div class="col-lg-4 p-2      ">
                <div class="intro-card d-flex flex-column align-items-center justify-content-center rtl text-center p-4">
                    <h4 class="text-main-color">همه ی کتاب های انتشارات دانشگاه شهید مدنی آذربایجان در دسترس شما</h4>
                    <i class="fa fa-book   position-absolute "></i>
                </div>
            </div>
            <div class="col-lg-4 p-2   ">
                <div class="intro-card d-flex flex-column align-items-center justify-content-center rtl text-center p-4">
                    <h4 class="text-main-color">جهت کسب اطلاعات بیشتر با شماره یا ایمیل انتشارات تماس بگیرید</h4>
                    <i class="fa fa-info   position-absolute "></i>
                </div>
            </div>
            <div class="col-lg-4 p-2 ">
                <div class="intro-card d-flex flex-column align-items-center justify-content-center rtl text-center p-4">
                    <h4 class="text-main-color">کتاب های مورد علاقه خود را بصورت آنلاین خریداری فرمایید.</h4>
                    <i class="fa fa-shopping-cart   position-absolute "></i>
                </div>

            </div>
        </div>
    </div>

    <div class=" bg-light books-container p-3">
        <h4 class="mb-3">کتاب های پر فروش</h4>
        <div id="mostSales" class="swiper-container most-sales" dir="rtl">
            <div class="swiper-wrapper text-center">

                <a href="{{route('detail')}}" class="swiper-slide d-block text-center book-link">
                    <div class=" text-center d-felx flex-column m-3 p-1">
                        <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                        <div class="d-flex flex-column ">
                            <span class="mb-1">روانشناسی عمومی</span>
                            <span class="mb-2">محمد علی پاینده</span>
                            <span class="book-price">۲۵،۰۰۰ تومان</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail')}}" class="swiper-slide d-block text-center book-link">
                    <div class=" text-center d-felx flex-column m-3 p-1">
                        <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                        <div class="d-flex flex-column ">
                            <span class="mb-1">روانشناسی عمومی</span>
                            <span class="mb-2">محمد علی پاینده</span>
                            <span class="book-price">۲۵،۰۰۰ تومان</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail')}}" class="swiper-slide d-block text-center book-link">
                    <div class=" text-center d-felx flex-column m-3 p-1">
                        <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                        <div class="d-flex flex-column ">
                            <span class="mb-1">روانشناسی عمومی</span>
                            <span class="mb-2">محمد علی پاینده</span>
                            <span class="book-price">۲۵،۰۰۰ تومان</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail')}}" class="swiper-slide d-block text-center book-link">
                    <div class=" text-center d-felx flex-column m-3 p-1">
                        <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                        <div class="d-flex flex-column ">
                            <span class="mb-1">روانشناسی عمومی</span>
                            <span class="mb-2">محمد علی پاینده</span>
                            <span class="book-price">۲۵،۰۰۰ تومان</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail')}}" class="swiper-slide d-block text-center book-link">
                    <div class=" text-center d-felx flex-column m-3 p-1">
                        <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                        <div class="d-flex flex-column ">
                            <span class="mb-1">روانشناسی عمومی</span>
                            <span class="mb-2">محمد علی پاینده</span>
                            <span class="book-price">۲۵،۰۰۰ تومان</span>
                        </div>
                    </div>
                </a>


            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <h4 class="mb-1 "> همه کتاب ها</h4>
        <div id="allBooks" class="d-flex flex-row flex-wrap m-0 p-1 p-sm-3">
            <a href="{{route('detail')}}" class="d-block text-center book-link">
                <div class="book-container d-flex flex-column align-items-center m-3">
                    <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                    <div class="d-flex flex-column align-self-stretch">
                        <span class="mb-1">روانشناسی عمومی</span>
                        <span class="mb-2">محمد علی پاینده</span>
                        <span class="book-price">۲۵،۰۰۰ تومان</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@stop