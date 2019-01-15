@extends('layouts.app')
@section('content')
    <section id="detail" class="w-100 bg-texture">
        <div class="container p-3">
            <div class="shadow-box p-3">
                <div class="row">
                    <div class="col-md-4 img-container">
                        <img src="{{asset('img/book1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-8 mt-2 mt-md-0">
                        <h4>مهدنسی نرم افزار</h4>
                        <h5 class="mt-4">
                            <span>8،000</span>
                            <span class="ml-2">تومان</span>
                        </h5>
                        <form action="" class="d-inline" onsubmit="return confirm('آیا می خواهید این کتاب به سبد خرید شما اضافه شود؟')">
                            <button type="submit" class="btn btn-success mt-4 "> افزودن به سبد خرید <i
                                        class="fa fa-shopping-cart"></i>
                            </button>
                        </form>

                        <a href="{{route('user-cart')}}" class="btn btn-outline-info mt-4 ">مشاهده سبد خرید</a>
                        <div class="mt-4">
                            <span class="alert alert-danger p-1 text-center alert-unavailable d-none">نا موجود !</span>
                        </div>

                        <div class="mt-5">
                            <h5>توضیخات</h5>
                            <h6 class="mt-3">نویسند: <strong>پویا آکلیون</strong></h6>
                            <h6 class="mt-2">ناشر: <strong>انتشارات دانشگاه شهید مدنی آذربایجان</strong></h6>
                            <h6 class="mt-2">تاریخ و نوبت نشر: <strong>1397 چاپ دهم</strong></h6>
                            <h6 class="mt-3">شرح کتاب:</h6>
                            <p class="mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری
                                موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="detail-container mt-4 p-3">
                <h4 class="mt-3 mb-3">کتاب های پر فروش</h4>
                <div id="DetailSlides"  class="swiper-container" dir="rtl">
                    <div class="swiper-wrapper text-center">
                        <div class="swiper-slide">
                            <div class=" text-center d-felx flex-column m-3">
                                <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                                <div class="d-flex flex-column ">
                                    <span class="mb-1">روانشناسی عمومی</span>
                                    <span class="mb-2">محمد علی پاینده</span>
                                    <span class="book-price">۲۵،۰۰۰ تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" text-center d-felx flex-column m-3">
                                <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                                <div class="d-flex flex-column ">
                                    <span class="mb-1">روانشناسی عمومی</span>
                                    <span class="mb-2">محمد علی پاینده</span>
                                    <span class="book-price">۲۵،۰۰۰ تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" text-center d-felx flex-column m-3">
                                <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                                <div class="d-flex flex-column ">
                                    <span class="mb-1">روانشناسی عمومی</span>
                                    <span class="mb-2">محمد علی پاینده</span>
                                    <span class="book-price">۲۵،۰۰۰ تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" text-center d-felx flex-column m-3">
                                <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                                <div class="d-flex flex-column ">
                                    <span class="mb-1">روانشناسی عمومی</span>
                                    <span class="mb-2">محمد علی پاینده</span>
                                    <span class="book-price">۲۵،۰۰۰ تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" text-center d-felx flex-column m-3">
                                <img src="{{asset('img/book4.jpg')}}" class="book-img"/>
                                <div class="d-flex flex-column ">
                                    <span class="mb-1">روانشناسی عمومی</span>
                                    <span class="mb-2">محمد علی پاینده</span>
                                    <span class="book-price">۲۵،۰۰۰ تومان</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
@endsection