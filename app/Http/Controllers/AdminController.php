<?php

namespace App\Http\Controllers;

use App\Order;
use App\Slider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
    $this->middleware('admin');
  }


  public function orders(){
    $new_orders = Order::orderBy('id', 'desc')->where('is_sent', '=', 0)->get();
    $old_orders = Order::orderBy('id', 'desc')->where('is_sent', '=', 1)->paginate(20);
    return view('admin.orders', compact(['old_orders', 'new_orders']));
  }

  public function sendOrder(Request $request){
    $this->validate($request, [
      'order_id' => 'required|numeric',
      'trace_no' => 'string|max:500',
    ]);

    $order = Order::find($request->order_id);
    $trace_no = $request->trace_no;
    $order->trace_no = $trace_no;
    $order->is_sent = 1;
    $order->save();
    return redirect(route('admin-orders'));
  }


  public function site(){
    $sliders = Slider::all();
    return view('admin.site', compact('sliders'));
  }

  public function sliderRemove(Request $request){
    $this->validate($request, [
      'slider_id' => 'required|numeric',
    ]);

    $slider = Slider::find($request->slider_id);
    $slider->delete();

    return redirect(route('admin-site'));
  }


  public function insertSlider(Request $request){
    $this->validate($request, [
      'image' => 'required|image',
    ]);

    $image = $request->file('image');

    $file_extension = $image->getClientOriginalExtension();
    $dir = FileHelper::getFileDirName('images/sliders');
    $file_name = FileHelper::getFileNewName();
    $image_name = $file_name . '.' . $file_extension;
    $file_path = $dir . '/' . $file_name . '.'.$file_extension;
    $image->move($dir, $image_name);

    $slider = Slider::create([
      'image_path' => $file_path,
    ]);

    return redirect(route('admin-site'));

  }



}
