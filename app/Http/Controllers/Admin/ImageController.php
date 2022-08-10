<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\ImageFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  public function index()
  {
    $image = Image::all();
    return view('admin.image.index', compact('image'));
  }

  public function create()
  {
    return view('admin.image.create');
  }

  public function store(ImageFormRequest $request)
  {
    $data = $request->validated();

    $image= new Image;
    $image->name =$data['name'];
    $image->uni =$data['uni'];
    $image->ext =$data['ext'];
    $image->archive =$data['archive'];
    $image->status = $request->status == true ? '1':'0';
    $image->save();

    return redirect('admin/ image')->with('massege','Image Added Successfully');
  }

  public function edit($image_id)
  {
      $image= Image::find($image_id);
      return view('admin.image.edit',compact('image'));
  }
  public function update(ImageFormRequest $request, $image_id)
  {
      $data = $request->validated();

      $image = Image::find($image_id);
      $image->name =$data['name'];
      $image->uni =$data['uni'];
      $image->ext =$data['ext'];
      $image->archive =$data['archive'];
      $image->status = $request->status == true ? '1':'0';
      $image->update();

      return redirect('admin/image')->with('massege','Image Updated Successfully');  
  }

  public function destroy($image_id)
    {
        $image = Image::find($image_id);
        if($image)
        {
            $image->delete();
            return redirect('admin/image')->with('message','Image Deleted Successfully');
        }
        else{
            return redirect('admin/Image')->with('massege','No Image Id Found');
        }
    }
}
