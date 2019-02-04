@extends('layouts.app')
@section('content')
    <section id="detail" class="w-100 bg-texture">
        <div class="container p-3">
            <div class="shadow-box p-3">
                <div class="row">
                    <div class="col-md-4 img-container">
                        <img src="{{asset($book->image_path)}}" alt="">
                    </div>
                    <div class="col-md-8 mt-2 mt-md-0">
                        <h4>{{$book->name}}</h4>
                        <h5 class="mt-4">
                            <span>{{number_format($book->price)}}</span>
                            <span class="ml-2">تومان</span>
                        </h5>


                        @if(auth()->user() !== null)
                            @if(auth()->user()->role !== 'admin')

                                @if($book->stock > 0)
                                    <a href="{{route('user-cart-add', $book->id)}}">
                                        <button type="submit" class="btn btn-success mt-4 "> افزودن به سبد خرید
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </a>
                                @endif
                                <a href="{{route('user-cart')}}" class="btn btn-outline-info mt-4 ">مشاهده سبد خرید</a>

                            @endif
                        @else

                            @if($book->stock > 0)
                                <a href="{{route('user-cart-add', $book->id)}}">
                                    <button type="submit" class="btn btn-success mt-4 "> افزودن به سبد خرید
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </a>
                            @endif
                            <a href="{{route('user-cart')}}" class="btn btn-outline-info mt-4 ">مشاهده سبد خرید</a>

                        @endif
                        @if($book->stock < 1)
                            <div class="mt-4">
                                <span class="alert alert-danger p-1 text-center alert-unavailable ">نا موجود!</span>
                            </div>
                        @endif



                        <div class="mt-5">
                            <h5>توضیحات</h5>
                            <h6 class="mt-3">نویسنده: <strong>{{$book->author}}</strong></h6>
                            <h6 class="mt-2">ناشر: <strong>{{$book->publisher}}</strong></h6>
                            <h6 class="mt-2">تاریخ و نوبت نشر: <strong>{{$book->publication_date}}</strong></h6>
                            <h6 class="mt-2">تعداد صفحات: <strong>{{$book->page_count}}</strong></h6>
                            <h6 class="mt-3">شرح کتاب:</h6>
                            <p class="mt-1">
                                {{$book->description}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        @if($message)
            <span class="server-response sr-success active">{{$message}}</span>
        @endif
    </section>
@endsection