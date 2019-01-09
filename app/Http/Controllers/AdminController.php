<?php

namespace App\Http\Controllers;

use App\Book;
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
    ]);

    $order = Order::find($request->order_id);
    $trace_no = $request->trace_no;
    if($trace_no == null) $trace_no = ' ';
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


  public function books(){
    $books = Book::orderBy('id', 'desc')->paginate(10);
    return view('admin.books', compact('books'));
  }


  public function bookInsert(Request $request){
    $this->validate($request, [
      'name' => 'required|min:2|max:200|string',
      'author' => 'required|min:2|max:200|string',
      'description' => 'required|min:2|max:6000|string',
      'publisher' => 'required|min:2|max:200|string',
      'publication_date' => 'required|min:2|max:200|string',
      'price' => 'required|min:0|max:20000000|numeric',
      'stock' => 'required|min:0|max:200000|numeric',
      'image' => 'required|image',
    ]);

    $image = $request->file('image');

    $file_extension = $image->getClientOriginalExtension();
    $dir = FileHelper::getFileDirName('images/books');
    $file_name = FileHelper::getFileNewName();
    $image_name = $file_name . '.' . $file_extension;
    $file_path = $dir . '/' . $file_name . '.'.$file_extension;
    $image->move($dir, $image_name);

    $book = Book::create([
      'name' => $request->name,
      'author' => $request->author,
      'description' => $request->description,
      'publisher' => $request->publisher,
      'publication_date' => $request->publication_date,
      'price' => $request->price,
      'stock' => $request->stock,
      'image_path' => $file_path,
    ]);

    return redirect(route('admin-books'));
  }


  public function book($id){
    $book = Book::find($id);

    return view('admin.book', compact('book'));
  }


  public function bookEdit(Request $request){
    $this->validate($request, [
      'book_id' => 'required|numeric',
      'name' => 'required|min:2|max:200|string',
      'author' => 'required|min:2|max:200|string',
      'description' => 'required|min:2|max:6000|string',
      'publisher' => 'required|min:2|max:200|string',
      'publication_date' => 'required|min:2|max:200|string',
      'price' => 'required|min:0|max:20000000|numeric',
      'stock' => 'required|min:0|max:200000|numeric',
      'image' => 'image',
    ]);

    $book = Book::find($request->book_id);

    $image = $request->file('image');
    if ($image !== null) {
      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/books');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.' . $file_extension;
      $image->move($dir, $image_name);
    }else{
      $file_path = $book->image_path;
    }


    $book->name = $request->name;
    $book->author = $request->author;
    $book->description = $request->description;
    $book->publisher = $request->publisher;
    $book->publication_date = $request->publication_date;
    $book->price = $request->price;
    $book->stock = $request->stock;
    $book->image_path = $file_path;
    $book->save();

    return redirect(route('admin-books'));
  }



}
