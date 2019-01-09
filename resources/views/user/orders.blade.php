@extends('user.dashboard')
@section('user_content')
    <div class="container p-1 ">
        <h6>لیست سفارشات شما</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col" >لیست محصولات</th>
                    <th scope="col">تعداد</th>
                    <th scope="col">قیمت مجموع</th>
                    <th scope="col">وضعیت</th>

                </tr>
                </thead>
                <tbody>

                @php($i=0)
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td class="d-flex flex-column">
                        @foreach($order->content as $content)
                            <a class="or-link" href="{{route('detail', $content->book->id)}}">{{$content->book->name}}</a>
                        @endforeach
                    </td>

                    <td class="">
                        <div class="d-flex flex-column">
                            @foreach($order->content as $content)
                                <span class="p-or">{{$content->count}} </span>
                            @endforeach
                        </div>
                    </td>

                    <td class="">
                        <div class="d-flex flex-column">
                            @foreach($order->content as $content)
                                <span class="p-or">{{number_format($content->price)}} تومان</span>
                            @endforeach
                        </div>
                    </td>

                    @if($order->is_sent == 0)
                    <td>
                        <div><i class="fa fa-hourglass text-info mr-1 "></i>درحال ارسال...</div>
                    </td>
                    @else
                        <td>
                            <div><i class="fa fa-check mr-1 text-success"></i>ارسال شده</div>
                            <div><span>کد رهگیری پستی : {{$order->trace_no}}</span></div>
                            <div><a href="http://newtracking.post.ir" target="_blank">برای مشاهده وضعیت مرسوله اینجا کلیک کنید</a></div>
                        </td>
                    @endif

                </tr>
                @endforeach




                </tbody>
            </table>
        </div>
    </div>
@endsection