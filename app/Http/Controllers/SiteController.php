<?php

namespace App\Http\Controllers;

use App\Book;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{


  public function index(){
    $sliders = Slider::all();
    $books = Book::orderBy('id', 'desc')->paginate(12);
    $best_seller_ids = DB::select("SELECT book_id,count(book_id) as total FROM `order_contents`  group by(book_id) order by total desc limit 10");
    $best_sellers = array();
    foreach ($best_seller_ids as $id) {
      $book = Book::find($id->book_id);
      if ($book !== null){
        $best_sellers [] = $book;
      }
    }
    return view('site.welcome', compact(['sliders', 'books', 'best_sellers']));
  }


  public function bookDetail($id){
    $best_seller_ids = DB::select("SELECT book_id,count(book_id) as total FROM `order_contents`  group by(book_id) order by total desc limit 10");
    $best_sellers = array();
    foreach ($best_seller_ids as $book_id) {
      $book = Book::find($book_id->book_id);
      if ($book !== null){
        $best_sellers [] = $book;
      }
    }

    $book = Book::find($id);

    return view('site.detail', compact(['book', 'best_sellers']));
  }

}
