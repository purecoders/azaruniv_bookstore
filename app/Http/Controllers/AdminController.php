<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Order;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
    $users = User::where('role', '=', 'user')->get();
    return view('admin.site', compact('sliders', 'users'));
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
    $categories = Category::all();
    return view('admin.books', compact(['books', 'categories']));
  }


  public function bookInsert(Request $request){
    $this->validate($request, [
      'category_id' => 'numeric',
      'name' => 'required|min:1|max:200|string',
      'author' => 'required|min:1|max:200|string',
      'description' => 'required|min:1|max:6000|string',
      'publisher' => 'required|min:1|max:200|string',
      'publication_date' => 'required|min:1|max:200|string',
      'price' => 'required|min:0|max:20000000|numeric',
      'page_count' => 'required|min:0|max:200000|numeric',
      'stock' => 'required|min:0|max:200000|numeric',
      'image' => 'required|image',
    ]);

    $is_important = 0;
    if($request->is_important !== null) $is_important = 1;

    $image = $request->file('image');
    $demo = $request->file('demo_file');

    $file_extension = $image->getClientOriginalExtension();
    $dir = FileHelper::getFileDirName('images/books');
    $file_name = FileHelper::getFileNewName();
    $image_name = $file_name . '.' . $file_extension;
    $file_path = $dir . '/' . $file_name . '.'.$file_extension;
    $image->move($dir, $image_name);


    $file_path2 = null;
    if($demo !== null) {
      $file_extension2 = $demo->getClientOriginalExtension();
      $dir2 = FileHelper::getFileDirName('demo/books');
      $file_name2 = FileHelper::getFileNewName();
      $demo_name = $file_name2 . '.' . $file_extension2;
      $file_path2 = $dir2 . '/' . $file_name2 . '.' . $file_extension2;
      $demo->move($dir2, $demo_name);
    }

    $book = Book::create([
      'category_id' => $request->category_id,
      'name' => $request->name,
      'author' => $request->author,
      'description' => $request->description,
      'publisher' => $request->publisher,
      'publication_date' => $request->publication_date,
      'price' => $request->price,
      'page_count' => $request->page_count,
      'stock' => $request->stock,
      'image_path' => $file_path,
      'is_important' => $is_important,
      'demo_file' => $file_path2,
    ]);

    return redirect(route('admin-books'));
  }


  public function book($id){
    $book = Book::find($id);
    $categories = Category::all();

    return view('admin.book', compact(['book', 'categories']));
  }


  public function bookEdit(Request $request){
    $this->validate($request, [
      'book_id' => 'required|numeric',
      'category_id' => 'numeric',
      'name' => 'required|min:2|max:200|string',
      'author' => 'required|min:2|max:200|string',
      'description' => 'required|min:2|max:6000|string',
      'publisher' => 'required|min:2|max:200|string',
      'publication_date' => 'required|min:2|max:200|string',
      'price' => 'required|min:0|max:20000000|numeric',
      'page_count' => 'required|min:0|max:200000|numeric',
      'stock' => 'required|min:0|max:200000|numeric',
      'image' => 'image',
    ]);

    $is_important = 0;
    if($request->is_important !== null) $is_important = 1;


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



    $file_path2 = $book->demo_file;
    $demo = $request->file('demo_file');
    if($demo !== null) {
      $file_extension2 = $demo->getClientOriginalExtension();
      $dir2 = FileHelper::getFileDirName('demo/books');
      $file_name2 = FileHelper::getFileNewName();
      $demo_name = $file_name2 . '.' . $file_extension2;
      $file_path2 = $dir2 . '/' . $file_name2 . '.' . $file_extension2;
      $demo->move($dir2, $demo_name);
    }


    $book->category_id = $request->category_id;
    $book->name = $request->name;
    $book->author = $request->author;
    $book->description = $request->description;
    $book->publisher = $request->publisher;
    $book->publication_date = $request->publication_date;
    $book->price = $request->price;
    $book->page_count = $request->page_count;
    $book->stock = $request->stock;
    $book->image_path = $file_path;
    $book->is_important = $is_important;
    $book->demo_file = $file_path2;
    $book->save();

    return redirect(route('admin-books'));
  }


  public function bookRemove(Request $request){
    $this->validate($request, [
      'book_id' => 'required|numeric',
    ]);

    $book = Book::find($request->book_id);
    $book->delete();
    return redirect(route('admin-books'));
  }


  public function changePasswordPage(){
    $message = Session::get('message');
    return view('admin.change_password', compact('message'));
  }


  public function changePassword(Request $request){
    $this->validate($request, [
      'old_password' => 'required|min:6',
      'new_password' => 'required|min:6',
      'new_password_repeat' => 'required|min:6',
    ]);

    $user = Auth::user();
    $message = null;
    if(Hash::check($request->old_password, $user->password)){
      if($request->new_password === $request->new_password_repeat){
        $user->password = Hash::make($request->new_password);
        $user->save();
        $message = 'رمز شما با موفقیت تغییر یافت';
      }
    }

    if($message === null){
      $message = 'متاسفانه رمز شما تغییر نیافت.لطفا رمز قبلی و رمز جدید را با دقت وارد نمایید.';
    }

    return redirect(route('admin-change-password-page'))->with('message', $message);



  }


  public function userRemove($id){
    $user = User::find($id);
    $user->delete();
    return back();
  }


}
