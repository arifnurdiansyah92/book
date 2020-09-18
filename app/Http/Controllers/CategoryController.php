<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
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
                "Category",
                route("home")
            ]
        );
        $data = Category::get();
        return view('pages.category.index',["breadcrumbs" => $breadcrumbs, "data" => $data]);
    }
    public function create(){
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
                "Category",
                route("home")
            ]
        );
        $data = Category::get();
        return view('pages.category.create',["breadcrumbs" => $breadcrumbs, "category" => $data]);
    }
    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->pretty_url = $request->pretty_url;
        $category->save();
        return redirect()->route('category.index')->with('success','Data created!');
    }
    public function show($id){
        $category = Category::findOrFail($id);
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
                "Category",
                route("home")
            ],
            [
                "Details",
                route("home")
            ]
        );
        return view('pages.category.show',["breadcrumbs" => $breadcrumbs, "data" => $category]);
        
    }
    public function update(Request $request, $id){
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->pretty_url = $request->pretty_url;
        $category->save();
        return redirect()->route('category.index')->with('success','Data updated!');
    }
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success','Data deleted!');
    }
}
