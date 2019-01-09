@extends('user.dashboard')
@section('user_content')
    <section id="cart" class="w-100 ">
        <div class="container p-1 p-md-3">
            <div class=" p-1 p-md-3">
                <h5 class="mb-3">سبد خرید شما:</h5>


                @if(count($contents) == 0)
                    <span>خالی</span><br><br><br>
                @else



                    @foreach($contents as $content)
                        <div class="row">
                            <a href="{{route('detail', $content->book->id)}}" class="col-md-2 cart-img-container">
                                <img src="{{asset($content->book->image_path)}}" alt="">
                            </a>
                            <div class="col-md-10 d-flex justify-content-between align-items-center mt-2 mt-md-0">
                                <h6>{{$content->book->name}}</h6>
                                <h6 class="">
                                    <span>{{number_format($content->book->price)}} </span>
                                    <span class="ml-2">تومان</span>
                                </h6>


                                    <div class="d-flex align-items-center">
                                        <span class="mr-1">تعداد</span>


                             <div class="input-group">

                                 <a class="input-group-btn mr-1" href="{{route('user-cart-minus', $content->id)}}">
                                    <button type="button" class="btn btn-default " href="{{route('user-cart-minus', $content->id)}}"
                                            {{--disabled="disabled"--}}
                                            {{--data-type="minus"--}}
{{--                                            data-field="quant[{{$content->id}}]"--}}
                                    >
                                        <span class="fa fa-minus"></span>
                                    </button>
                                 </a>


                                            <input type="text" name="quant[{{$content->id}}]" class="form-control input-number mr-1" value="{{$content->count}}"
                                                   min="1"
                                                   max="1000">


                                  <a class="input-group-btn" href="{{route('user-cart-plus', $content->id)}}">
                                    <button type="button" class="btn btn-default "
                                            {{--data-type="plus"--}}
                                            {{--data-field="quant[{{$content->id}}]"--}}
                                    >
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </a>
                             </div>

                                    </div>


                                <form action="{{route('user-cart-remove')}}" method="post" class="d-inline" onsubmit="">
                                    @csrf
                                    <input type="hidden" name="content_id" value="{{$content->id}}">
                                    <button type="submit" class="btn btn-delete"> حذف
                                    </button>
                                </form>


                            </div>
                        </div>
                        <hr>
                    @endforeach






                    <div>
                        <h5>تکمیل فرآیند خرید</h5>
                        <div class="">
                            <form action="{{route('user-cart-pay')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">آدرس: </label>
                                    <div class="col-sm-8">
                                    <textarea name="address" type="text" class="form-control" rows="5" id="address"
                                              placeholder="آدرس دقیق خود را وارد کنید" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">شماره تلفن همراه: </label>
                                    <div class="col-sm-8">
                                        <input name="phone" type="number" class="form-control" rows="5" id="address"
                                               placeholder="مثال: 09140000000" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">کد پستی:</label>
                                    <div class="col-sm-8">
                                        <input name="postal_code" type="number" class="form-control" rows="5" id="address"
                                               placeholder="مثال: 00000-11111" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">مجموع مبلغ پرداختی: </label>
                                    <div class="col-sm-8 align-content-center pt-1">
                                        <span class="text-dark" style="font-size: 1.1em">{{number_format($sum)}} تومان</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-success mt-2 ml-2 col-sm-2">پرداخت</button>
                                    <div class="col-sm-8">

                                    </div>
                                </div>

                            </form>



                        </div>
                    </div>


                @endif


            </div>
        </div>
        @if($message)
            <span class="server-response sr-success active">{{$message}}</span>
        @endif
    </section>
@endsection
