@extends('user.dashboard')
@section('user_content')
    <div class="container p-1 ">
        <h6>لیست سفراشات شما</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col" >لیست محصولات</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">وضعیت</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریه</a>
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
                        <div><i class="fa fa-hourglass text-info mr-1 "></i>درحال ارسال...</div>
                    </td>

                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td class="d-flex flex-column">
                        <a class="or-link" href="{{route('detail')}}">ساختمان داده</a>
                        <a class="or-link" href="{{route('detail')}}">نظریه</a>
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
                        <div><i class="fa fa-check mr-1 text-success"></i>ارسال شده</div>
                        <div><span>کد رهگیری: 5522112253</span></div>
                        <div><a href="">برای مشاهده وضعیت مرسوله اینجا کلیک کیند</a></div>
                    </td>

                </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection