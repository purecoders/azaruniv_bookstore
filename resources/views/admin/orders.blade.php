@extends('admin.dashboard')
@section('admin_content')
    <div class="container p-1 p-sm-2">
        <h6 class="alert alert-warning"><i class="fa fa-hourglass mr-1"></i>لیست سفارشات ارسال نشده</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">لیست محصولات</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">اطلاعات کاربر</th>
                    <th scope="col" style="width: 310px">آدرس</th>
                    <th scope="col" style="width: 140px">وضعیت</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریهنظریهنظریهنظریهنظریه</a>
                        <a class="or-link" href="{{route('detail')}}">الگوریتم</a>
                    </td>
                    <td class="">
                        <div class="d-flex flex-column">
                            <span class="p-or">26،000 تومان</span>
                            <span class="p-or">86،000 تومان</span>
                            <span class="p-or">16،000 تومان</span>
                        </div>
                    </td>
                    <td>
                        <div>پویا آکلیون</div>
                        <div>09388584677</div>
                    </td>
                    <td >
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجل
                    </td>
                    <td>
                        <form action="" class="text-center">
                            <input type="text" class="form-control" placeholder="کد رهگیری" style="font-size: 0.85em" required>
                            <input type="submit" class="btn btn-sm btn-info mt-2" value="ارسال شد">
                        </form>
                    </td>

                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریهنظریهنظریهنظریهنظریه</a>
                        <a class="or-link" href="{{route('detail')}}">الگوریتم</a>
                    </td>
                    <td class="">
                        <div class="d-flex flex-column">
                            <span class="p-or">26،000 تومان</span>
                            <span class="p-or">86،000 تومان</span>
                            <span class="p-or">16،000 تومان</span>
                        </div>
                    </td>
                    <td>
                        <div>پویا آکلیون</div>
                        <div>09388584677</div>
                    </td>
                    <td >
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجل
                    </td>
                    <td>
                        <form action="" class="text-center">
                            <input type="text" class="form-control" placeholder="کد رهگیری" style="font-size: 0.85em" required>
                            <input type="submit" class="btn btn-sm btn-info mt-2" value="ارسال شد">
                        </form>
                    </td>

                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریهنظریهنظریهنظریهنظریه</a>
                        <a class="or-link" href="{{route('detail')}}">الگوریتم</a>
                    </td>
                    <td class="">
                        <div class="d-flex flex-column">
                            <span class="p-or">26،000 تومان</span>
                            <span class="p-or">86،000 تومان</span>
                            <span class="p-or">16،000 تومان</span>
                        </div>
                    </td>
                    <td>
                        <div>پویا آکلیون</div>
                        <div>09388584677</div>
                    </td>
                    <td >
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجل
                    </td>
                    <td>
                        <form action="" class="text-center">
                            <input type="text" class="form-control" placeholder="کد رهگیری" style="font-size: 0.85em" required>
                            <input type="submit" class="btn btn-sm btn-info mt-2" value="ارسال شد">
                        </form>
                    </td>

                </tr>



                </tbody>
            </table>
        </div>

        <h6 class="alert alert-success mt-5"><i class="fa fa-check mr-1"></i>لیست سفارشات ارسال شده</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">لیست محصولات</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">اطلاعات کاربر</th>
                    <th scope="col" style="width: 310px">آدرس</th>
                    <th scope="col" style="width: 140px">وضعیت</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریهنظریهنظریهنظریهنظریه</a>
                        <a class="or-link" href="{{route('detail')}}">الگوریتم</a>
                    </td>
                    <td class="">
                        <div class="d-flex flex-column">
                            <span class="p-or">26،000 تومان</span>
                            <span class="p-or">86،000 تومان</span>
                            <span class="p-or">16،000 تومان</span>
                        </div>
                    </td>
                    <td>
                        <div>پویا آکلیون</div>
                        <div>09388584677</div>
                    </td>
                    <td >
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجل
                    </td>
                    <td>
                        <form action="" class="text-center">
                            <input type="text" class="form-control text-center" placeholder="کد رهگیری" style="font-size: 0.85em" required readonly value="123468463">
                            <input type="submit" class="btn btn-sm btn-info mt-2" value="کد رهگیری" disabled="ture">
                        </form>
                    </td>

                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریهنظریهنظریهنظریهنظریه</a>
                        <a class="or-link" href="{{route('detail')}}">الگوریتم</a>
                    </td>
                    <td class="">
                        <div class="d-flex flex-column">
                            <span class="p-or">26،000 تومان</span>
                            <span class="p-or">86،000 تومان</span>
                            <span class="p-or">16،000 تومان</span>
                        </div>
                    </td>
                    <td>
                        <div>پویا آکلیون</div>
                        <div>09388584677</div>
                    </td>
                    <td >
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجل
                    </td>
                    <td>
                        <form action="" class="text-center">
                            <input type="text" class="form-control text-center" placeholder="کد رهگیری" style="font-size: 0.85em" required readonly value="123468463">
                            <input type="submit" class="btn btn-sm btn-info mt-2" value="کد رهگیری" disabled="ture">
                        </form>
                    </td>

                </tr>



                </tbody>
            </table>
        </div>
    </div>
@endsection