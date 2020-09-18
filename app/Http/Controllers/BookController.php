<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;

class BookController extends Controller
{
    public function index(){
        $breadcrumbs = collect();
        $breadcrumbs->push(
            [
                "Home", 
                route("home")
            ],
            [
                "Book",
                route("book.index")
            ]
        );
        $data = Book::get();
        return view('pages.book.index',["breadcrumbs" => $breadcrumbs, "data" => $data]);
    }
    public function create(){
        $breadcrumbs = collect();
        $breadcrumbs->push(
            [
                "Home", 
                route("home")
            ],
            [
                "Book",
                route("book.index")
            ]
        );
        $data = Category::get();
        return view('pages.book.create',["breadcrumbs" => $breadcrumbs, "categories" => $data]);
    }
    public function store(Request $request){
        $book = new Book;
        $book->title = $request->title;
        $book->pretty_url = $request->pretty_url;
        $book->pages = $request->pages;
        $book->isbn = $request->ISBN;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->publication_date = $request->publication_date;
        $book->save();
        foreach($request->categories as $cat){
            $bc = new BookCategory;
            $bc->book_id = $book->id;
            $bc->category_id = $cat;
            $bc->save();
        }
        return redirect()->route('book.index')->with('success','Data created!');
    }
    public function show($id){
        $book = Book::findOrFail($id);
        $breadcrumbs = collect();
        $breadcrumbs->push(
            [
                "Home", 
                route("home")
            ],
            [
                "Master Data",
                route("home")
            ],
            [
                "Book",
                route("home")
            ],
            [
                "Details",
                route("home")
            ]
        );
        return view('pages.book.show',["breadcrumbs" => $breadcrumbs, "data" => $book, 'categories' => Category::get()]);
        
    }
    public function update(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->pretty_url = $request->pretty_url;
        $book->pages = $request->pages;
        $book->isbn = $request->ISBN;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->publication_date = $request->publication_date;
        $book->save();
        BookCategory::where('book_id',$id)->delete();
        foreach($request->categories as $cat){
            $bc = new BookCategory;
            $bc->book_id = $book->id;
            $bc->category_id = $cat;
            $bc->save();
        }
        return redirect()->route('book.index')->with('success','Data updated!');
    }
    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->back()->with('success','Data deleted!');
    }
}
