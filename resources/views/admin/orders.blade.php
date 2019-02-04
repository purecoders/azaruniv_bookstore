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
                    <th scope="col">تعداد</th>
                    <th scope="col">قیمت کل</th>
                    <th scope="col">اطلاعات کاربر</th>
                    <th scope="col" style="width: 310px">آدرس</th>
                    <th scope="col" style="width: 140px">وضعیت</th>

                </tr>
                </thead>
                <tbody>

                @php($i=0)
                @foreach($new_orders as $order)
                    <tr>
                        <th scope="row">{{++$i}}</th>

                        <td class="d-flex flex-column">
                            @foreach($order->content as $content)
                                @if($content->book !== null)
                                    <a class="or-link" href="{{route('detail', $content->book->id)}}">{{$content->book->name}}</a>
                                @endif
                            @endforeach
                        </td>
                        <td >
                            <div class="d-flex flex-column">
                                @foreach($order->content as $content)
                                    <span class="p-or">{{$content->count}}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex flex-column">
                                @foreach($order->content as $content)
                                    <span class="p-or">  {{number_format($content->price)}} تومان </span>
                                @endforeach
                            </div>
                        </td>
                        <td>
                            <div> {{$order->user->name}}</div>
                            <div> {{$order->phone}}</div>
                            {{--<div>کد پستی : {{$order->postal_code}}</div>--}}
                        </td>

                        <td >
                            @if($order->is_in_person != 1)
                                {{$order->address }}<br>{{'کدپستی : '.$order->postal_code}}
                            @else
                                {{$order->address}}
                            @endif
                        </td>

                        <td>
                            <form action="{{route('admin-send-order')}}" class="text-center" method="post">
                                @csrf
                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                @if($order->is_in_person != 1)
                                    <input type="text" name="trace_no" class="form-control" placeholder="کد رهگیری پستی" style="font-size: 0.85em" >
                                    <input type="submit" class="btn btn-sm btn-info mt-2" value="ارسال شد">
                                @else
                                    <span>کد خرید</span>
                                    <input type="text" name="trace_no" class="form-control " disabled placeholder="کد خرید حضوری" value="{{$order->buy_code}}" style="font-size: 0.85em" >
                                    <input type="submit" class="btn btn-sm btn-info mt-2" value="تحویل داده شد">
                                @endif
                            </form>
                        </td>

                    </tr>
                @endforeach





                </tbody>
            </table>
        </div>
        <br>
        <hr>
        <br>

        <h6 class="alert alert-success mt-5"><i class="fa fa-check mr-1"></i>لیست سفارشات ارسال شده</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">لیست محصولات</th>
                    <th scope="col">تعداد</th>
                    <th scope="col">قیمت کل</th>
                    <th scope="col">اطلاعات کاربر</th>
                    <th scope="col" style="width: 310px">آدرس</th>
                    <th scope="col" style="width: 140px">کد رهگیری </th>

                </tr>
                </thead>
                <tbody>

                @php($i=0)
                @foreach($old_orders as $order)
                    <tr>
                        <th scope="row">{{++$i}}</th>

                        <td class="d-flex flex-column">
                            @foreach($order->content as $content)
                                @if($content->book !== null)
                                    <a class="or-link" href="{{route('detail', $content->book->id)}}">{{$content->book->name}}</a>
                                @endif
                            @endforeach
                        </td>
                        <td >
                            <div class="d-flex flex-column">
                                @foreach($order->content as $content)
                                    <span class="p-or">{{$content->count}}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex flex-column">
                                @foreach($order->content as $content)
                                    <span class="p-or">  {{number_format($content->price)}} تومان </span>
                                @endforeach
                            </div>
                        </td>
                        <td>
                            <div> {{$order->user->name}}</div>
                            <div> {{$order->phone}}</div>
                            {{--<div>کد پستی : {{$order->postal_code}}</div>--}}
                        </td>

                        <td >
                            @if($order->is_in_person != 1)
                                {{$order->address }}<br>{{'کدپستی : '.$order->postal_code}}
                            @else
                                {{$order->address}}
                            @endif
                        </td>

                        <td>
                            <form action="" class="text-center">
                                @if($order->is_in_person != 1)
                                    <input type="text" class="form-control text-center" placeholder="کد رهگیری" style="font-size: 0.85em" required readonly value="{{$order->trace_no}}">
                                @else
                                    <span>کد خرید</span>
                                    <input type="text" class="form-control text-center"  style="font-size: 0.85em" required readonly value="{{$order->buy_code}}">
                                @endif
                            </form>
                        </td>

                    </tr>
                @endforeach





                </tbody>



            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{$old_orders->links()}}
                </ul>
            </nav>
        </div>
    </div>
@endsection