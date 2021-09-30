<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CATEGORYCONTROLLER extends Controller
{
      /////////////////////////////////
     //  render crate category page //
    /////////////////////////////////

    public function create_category()
    {
    	
    	return view('admin/categories/create_category');
    }

      /////////////////////////////////
     //  store category             //
    /////////////////////////////////

    public function store_category(CategoryRequest $request)
    {
    	Category::create($request->all());
    	return redirect('admin/categories/view_categories')->with('msg','Category Created Successfully');
    }

      /////////////////////////////////
     //    show categories          //
    /////////////////////////////////

    public function view_categories()
    {
    	$categories = Category::get();
    	return view('admin/categories/view_categories', compact('categories'));
    }

      /////////////////////////////////
     //    edit category            //
    /////////////////////////////////

    public function edit_category(Request $request)
    {
    	$category = Category::where(['id'=>$request->id])->get();
    	return view('admin/categories/edit_category', compact('category'));
    }

      /////////////////////////////////
     //    update category          //
    /////////////////////////////////

    public function update_category(Request $request)
    {
       Category::where(['id'=>$request->id])->update(['name'=>$request->name,
                                                      'desc'=>$request->desc
                                                     ]);
    	return redirect('admin/categories/view_categories')->with('msg','Category Updated');
    }

      /////////////////////////////////
     //    delete category          //
    /////////////////////////////////

    public function delete_category(Request $request)
    {
       Category::destroy($request->id);
      return redirect('admin/categories/view_categories')->with('msg','Category Deleted');
    }

}
