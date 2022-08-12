<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Widget;
use App\Http\Requests\Admin\PageFormRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $page = Page::all();
        return view('admin.page.index', compact('page'));
    }

    public function create()
    {
        $category = Category::where('status',0)->get();
        return view('admin.page.create',compact('category'));
    }

    public function store(PageFormRequest $request)
    {
        $data = $request->validated();

        $page = new Page;
        $page->name = $data['name'];
        $page->description = $data['description'];
        $page->slug = $data['slug'];
        $page->status = $request->status == true ? '1': '0';
        $page->archive= $data['archive'];
        $page->sort= $data['sort'];
        $page->save();

        return redirect('admin/page')->with('message','Page Added Successfully');

    }

    public function edit($page_id)
    {
        $category = Category::where('status','0')->get();
        $page = Page::find($page_id);
        return view('admin.page.edit', compact('page','category'));
    }

    public function update(PageFormRequest $request, $page_id)
    {
        $data = $request->validated();

        $page = Page::find($page_id);
        $page->name = $data['name'];
        $page->description = $data['description'];
        $page->slug = $data['slug'];
        $page->status = $request->status == true ? '1': '0';
        $page->archive= $data['archive'];
        $page->sort= $data['sort'];
        $page->update();

        return redirect('admin/page')->with('message','Page Updated Successfully');
    }

    public function destroy($page_id)
    {
        $page = Page::find($page_id);
        $page->delete();
        return redirect('admin/page')->with('message','Page Deleted Successfully');
    }
}
