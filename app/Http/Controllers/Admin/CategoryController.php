<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()

    {
        $category = Category::where('status',0)->get();
        return view('admin.category.create',compact('category'));
    }

    public function store(CategoryFormRequest $request)

    {
        $data = $request->validated();

        $category = new Category;
        $category->name =$data['name'];
        $category->body =$data['body'];
        $category->slug = Str::slug($data['slug']);
        $category->parent =$data['parent'];
        $category->image_id =$data['image_id'];
        $category->status = $request->status == true ? '1':'0';
        $category->archive =$data['archive'];
        $category->sort =$data['sort'];
        $category->save();

        return redirect('admin/category')->with('massege','Category Added Successfully');
    }

    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();

        $category =Category::find($category_id);
        $category->name =$data['name'];
        $category->body =$data['body'];
        $category->slug =Str::slug($data['slug']);
        $category->parent =$data['parent'];
        $category->image_id =$data['image_id'];
        $category->status = $request->status == true ? '1':'0';
        $category->archive =$data['archive'];
        $category->sort =$data['sort'];
        $category->update();

        return redirect('admin/category')->with('massege','Category Updated Successfully');  
    }

    public function destroy($category_id)
    {
        $category = Category::find($category_id);
        if($category)
        {
            $category->delete();
            return redirect('admin/category')->with('message','Category Deleted Successfully');
        }
        else{
            return redirect('admin/category')->with('massege','No Category Id Found');
        }
    }

}
