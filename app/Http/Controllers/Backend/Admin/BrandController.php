<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Brands\BrandStoreFromRequest;
use App\Models\Brand;
use App\Traits\GeneralTrait;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    use GeneralTrait;
    use UploadImageTrait;

    function index(){

        $brands = Brand::get();
        return view('admin.brands.index',compact('brands'));

    }



    function create(){
        return view('admin.brands.create');
    }

    function store(BrandStoreFromRequest $request){

        // return $request;
        $image = null;

        // Upload Image Section :
        if (isset($request->image)) {
            $orginal_image = $request->file('image');
            $upload_location = 'storage/brands/';
            $original_name = $orginal_image->getClientOriginalName();
            $image = $this->saveFileWithOriginalName('brands', 'image', $orginal_image, $original_name, $upload_location);
        } else {
            $image = null;
        }

        Brand::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'status'=>$request->status,
            'image'=>$image
        ]);

        return redirect()->route('super_admin.brands-index')->with('success','Added Successfully');

    }



    function edit($id){
        $brand = Brand::find($id);
        return view('admin.brands.edit',compact('brand'));
    }


    function update($id,Request $request){
        $brand = Brand::find($id);
        if($brand){
            // return $request;
        $image = null;

        // Upload Image Section :
        if (isset($request->image)) {
            $orginal_image = $request->file('image');
            $upload_location = 'storage/brands/';
            $original_name = $orginal_image->getClientOriginalName();
            $image = $this->saveFileWithOriginalName('brands', 'image', $orginal_image, $original_name, $upload_location);
        } else {
            $image = $brand->image;
        }


        $brand->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'status'=>$request->status,
            'image'=>$image
        ]);


        return redirect()->route('super_admin.brands-index')->with('success','Updated Successfully');

        }else{
            return redirect()->back()->with('danger',"The Record Not Found !!!!");
        }


    }




    function destroy($id){
        $brand = Brand::find($id);
        if($brand){

            File::delete($brand->image);
            $brand->delete();

            return redirect()->route('super_admin.brands-index')->with('success','Deleted Successfully');

        }else{
            return redirect()->back()->with('danger',"The Record Not Found !!!!");
        }


    }


}
