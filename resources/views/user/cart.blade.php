@extends('user.dashboard')
@section('user_content')
    <section id="cart" class="w-100 ">
        <div class="container p-1 p-md-3">
            <div class=" p-1 p-md-3">
                <h5 class="mb-3">سبد خرید شما:</h5>
                <div class="row">
                    <a href="{{route('detail')}}" class="col-md-2 cart-img-container">
                        <img src="{{asset('img/book1.jpg')}}" alt="">
                    </a>
                    <div class="col-md-10 d-flex justify-content-between align-items-center mt-2 mt-md-0">
                        <h6>مهدنسی نرم افزار</h6>
                        <h6 class="">
                            <span>8،000</span>
                            <span class="ml-2">تومان</span>
                        </h6>
                        <div class="d-flex align-items-center">
                            <span class="mr-1">تعداد</span>
                            <div class="input-group">
                                 <span class="input-group-btn mr-1">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                            data-type="minus"
                                            data-field="quant[1]">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                 </span>
                                <input type="text" name="quant[1]" class="form-control input-number mr-1" value="1"
                                       min="1"
                                       max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus"
                                            data-field="quant[1]">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <form action="" class="d-inline"
                              onsubmit="">
                            <button type="submit" class="btn btn-delete"> حذف
                            </button>
                        </form>


                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <a href="{{route('detail')}}" class="col-md-2 cart-img-container">
                        <img src="{{asset('img/book1.jpg')}}" alt="">
                    </a>
                    <div class="col-md-10 d-flex justify-content-between align-items-center mt-2 mt-md-0">
                        <h6>مهدنسی نرم افزار</h6>
                        <h6 class="">
                            <span>8،000</span>
                            <span class="ml-2">تومان</span>
                        </h6>
                        <div class="d-flex align-items-center">
                            <span class="mr-1">تعداد</span>
                            <div class="input-group">
                                 <span class="input-group-btn mr-1">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                            data-type="minus"
                                            data-field="quant[2]">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                 </span>
                                <input type="text" name="quant[2]" class="form-control input-number mr-1" value="1"
                                       min="1"
                                       max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus"
                                            data-field="quant[2]">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <form action="" class="d-inline"
                              onsubmit="return confirm('آیا می خواهید این کتاب از سبد خرید شما حذف شود؟')">
                            <button type="submit" class="btn btn-delete"> حذف
                            </button>
                        </form>
                    </div>
                </div>

                <hr>
                <div>
                    <h5>تکمیل فرآیند خرید</h5>
                    <div class="">
                        <form action="">
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">آدرس: </label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" rows="5" id="address"
                                              placeholder="آدرس دقیق خود را وارد کنید" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">شماره تلفن همراه: </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" rows="5" id="address"
                                           placeholder="مثال: 09140000000" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">کد پستی:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" rows="5" id="address"
                                           placeholder="مثال: 00000-11111" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">مجموع مبلغ پرداختی: </label>
                                <div class="col-sm-8 align-content-center pt-1">
                                    <span class="text-dark" style="font-size: 1.1em">16،000 تومان</span>
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
            </div>
        </div>
        <span class="server-response sr-success active">پیام با موفقیت دریافت شد</span>
    </section>
@endsection
