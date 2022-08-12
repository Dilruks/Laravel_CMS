<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WidgetFormRequest;
use App\Models\Widget;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
  public function index()
  {
    $widget = Widget::all();
    return view('admin.widget.index' ,compact('widget'));
  }

  public function create()
  {
    $category = Category::where('status',0)->get();
    return view('admin.widget.create',compact('category'));
  }

  public function store(WidgetFormRequest $request)
    {
        $data = $request->validated();

        $widget = new Widget;
        $widget->name = $data['name'];
        $widget->description = $data['description'];
        $widget->slug = $data['slug'];
        $widget->type = $request['type'];
        $widget->image_id = $data['image_id'];
        $widget->status = $request->status == true ? '1': '0';
        $widget->archive= $data['archive'];
        $widget->sort= $data['sort'];
        $widget->save();

        return redirect('admin/widget')->with('message','Widget Added Successfully');

    }

    public function edit($widget_id)
    {
        $category = Category::where('status','0')->get();
        $widget = Widget::find($widget_id);
        return view('admin.widget.edit', compact('widget','category'));
    }

    public function update(WidgetFormRequest $request, $widget_id)
    {
        $data = $request->validated();

        $widget = Widget::find($widget_id);
        $widget->name = $data['name'];
        $widget->description = $data['description'];
        $widget->slug = $data['slug'];
        $widget->type = $request['type'];
        $widget->image_id = $data['image_id'];
        $widget->status = $request->status == true ? '1': '0';
        $widget->archive= $data['archive'];
        $widget->sort= $data['sort'];
        $widget->save();

        return redirect('admin/widget')->with('message','Widget Update Successfully');

    }
}
