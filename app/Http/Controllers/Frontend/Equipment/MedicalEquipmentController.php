<?php

namespace App\Http\Controllers\Frontend\Equipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Equipment\MedicalEquipmentStoreCategoryFormRequest;
use App\Http\Requests\Frontend\Equipment\MedicalEquipmentStoreImageFormRequest;
use App\Http\Requests\Frontend\Equipment\MedicalEquipmentStoreProductFormRequest;
use App\Http\Requests\Frontend\Equipment\MedicalEquipmentUpdateCategoryFormRequest;
use App\Http\Requests\Frontend\Equipment\MedicalEquipmentUpdateProfileFormRequest;
use App\Models\EquipmentCategory;
use App\Models\EquipmentImage;
use App\Models\EquipmentProduct;
use App\Models\EquipmentProductImage;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class MedicalEquipmentController extends Controller
{
    use UploadImageTrait;

    function dashboard(Route $route,$active = null)
    {
        try {

            if (!Auth::guard('medical_equipment')->check()) {
                return redirect()->route('welcome')->with('Uautherized');
            }

            $auth = Auth::guard('medical_equipment')->user();

            return view('front_end_inners.medical_equipments.medical_equipment_dashboard', compact('auth','active'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentUpdateProfile(MedicalEquipmentUpdateProfileFormRequest $request,$id,Route $route)
    {
        try {
            if(!Auth::guard('medical_equipment')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $user = Auth::guard('medical_equipment')->user();

            $created_data =[
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'username'=>$request->name_en,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'country_id'=>$request->country_id,
            'region_id'=>$request->region_id,
            'address_ar'=>$request->address_ar,
            'address_en'=>$request->address_en,
            'speciality_id'=>$request->speciality_id,
            'alias_name_en'=>str_replace(' ','',$request->name_en),
            'alias_name_ar'=>str_replace(' ','',$request->name_en),
            'user_description_en'=>$request->overview_en,
            'user_description_ar'=>$request->overview_en,
            'gender'=>$request->gender,
            'languages'=>isset($request->language_id) ? implode(',',$request->language_id) : null
            ];

            if (isset($request->password)) {
                $created_data['password'] = Hash::make($request->password);
            }

            if (isset($request->profile_photo_path)) {
                $orginal_image = $request->file('profile_photo_path');
                $upload_location = 'storage/profile-photos/';
                $original_name = $orginal_image->getClientOriginalName();
                $last_image = $this->saveFileWithOriginalName('medical_equipments', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                $created_data['profile_photo_path']= $last_image;
                File::delete($user->profile_photo_path);
            }

            DB::transaction(function () use ($created_data, $user) {
                $user->update($created_data);
            });

            return redirect()->route('medical_equipment.medical_equipment-dashboard','MedicalEquipmentUpdateProfile')->with('success','updated successfully');

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentStoreImages(MedicalEquipmentStoreImageFormRequest $request,Route $route){
        try {

            if(!Auth::guard('medical_equipment')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $medical_equipment = Auth::guard('medical_equipment')->user();


            // Upload Main Image Blog :
            if (isset($request->image)) {
                $request_data = [
                    'equipment_id' => $medical_equipment->id,
                ];
                foreach ($request->image as $key => $value) {
                    $orginal_image = $value;
                    $upload_location = 'storage/medical_equipment_gallery/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $file_name = $this->saveFileWithOriginalName('equipment_images', 'image', $orginal_image, $original_name, $upload_location);
                    $request_data['image'] = $file_name;
                    DB::transaction(function () use ($request_data) {
                        EquipmentImage::create($request_data);
                    });
                }
            } else {
                return redirect()->back()->with('danger', 'You must add an image to the news blog ');
            }


            return redirect()->route('medical_equipment.medical_equipment-dashboard','gallery')->with('success','Images Added Successfully');


        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentDeleteImage($id,Route $route){
        try {
            if(!Auth::guard('medical_equipment')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $image = EquipmentImage::find($id);
            if($image){
                DB::transaction(function () use ($image) {
                    File::delete($image->image);
                    $image->delete();
                });

                return redirect()->route('medical_equipment.medical_equipment-dashboard','gallery')->with('success','Image Deleted Succesfully');
            }else{
                return redirect()->route('medical_equipment.medical_equipment-dashboard','gallery')->with('danger','Image Not Found');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentCategories(Route $route){
        try {
            $categories = EquipmentCategory::where('equipment_id',auth()->user()->id)->get();
            $auth = Auth::guard('medical_equipment')->user();
            return view('front_end_inners.medical_equipments.categories',compact('auth','categories'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentStoreCategory(MedicalEquipmentStoreCategoryFormRequest $request,Route $route){
        try {

            $data = [
                'equipment_id'=>auth()->user()->id,
                'name_ar'=>$request->name_ar,
                'name_en'=>$request->name_en,
                'status'=>1
            ];

            EquipmentCategory::create($data);

            return redirect()->route('medical_equipment.medical_equipment-categories')->with('success','Added Successfully');

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentEditCategory(Route $route,$id){
        try {

            $id = decrypt($id);
            $category =  EquipmentCategory::find($id);
            $auth = Auth::guard('medical_equipment')->user();
            return view('front_end_inners.medical_equipments.edit_category',compact('category','auth'));

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentUpdateCategory(Route $route,$id,MedicalEquipmentUpdateCategoryFormRequest $request){
        try {

            $id = decrypt($id);

            $category = EquipmentCategory::find($id);
            if($category){
                $category->update([
                    'name_ar'=>$request->name_ar,
                    'name_en'=>$request->name_en,
                    'status'=>$request->status,
                ]);

                return redirect()->route('medical_equipment.medical_equipment-categories')->with('success','Updated Successfully');
            }
            else{
                return redirect()->back()->with('danger','Category Not Found !!!!');
            }

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentProducts(Route $route){
        try {
            $products = EquipmentProduct::where('equipment_id',auth()->user()->id)->get();
            $auth = Auth::guard('medical_equipment')->user();
            return view('front_end_inners.medical_equipments.products',compact('auth','products'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentStoreProduct(MedicalEquipmentStoreProductFormRequest $request,Route $route){
        try {

            $data = [
                'equipment_id'=>auth()->user()->id,
                'category_id'=>$request->category_id,
                'name_ar'=>$request->name_ar,
                'name_en'=>$request->name_en,
                'description_en'=>$request->description_en,
                'description_ar'=>$request->description_ar,
                'status'=>1,
            ];

            if (isset($request->image)) {
                $orginal_image = $request->file('image');
                $upload_location = 'storage/equipment_products/';
                $original_name = $orginal_image->getClientOriginalName();
                $last_image = $this->saveFileWithOriginalName('equipment_products', 'image', $orginal_image, $original_name, $upload_location);
                $data['image']= $last_image;
            }

            EquipmentProduct::create($data);

            return redirect()->route('medical_equipment.medical_equipment-products')->with('success','Added Successfully');

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentEditProduct(Route $route,$id){
        try {

            $id = decrypt($id);
            $product =  EquipmentProduct::find($id);
            $auth = Auth::guard('medical_equipment')->user();
            return view('front_end_inners.medical_equipments.edit_product',compact('product','auth'));

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    function MedicalEquipmentUpdateProduct(Route $route,$id,MedicalEquipmentUpdateCategoryFormRequest $request){
        try {

            $id = decrypt($id);

            $category = EquipmentCategory::find($id);
            if($category){
                $category->update([
                    'name_ar'=>$request->name_ar,
                    'name_en'=>$request->name_en,
                    'status'=>$request->status,
                ]);

                return redirect()->route('medical_equipment.medical_equipment-categories')->with('success','Updated Successfully');
            }
            else{
                return redirect()->back()->with('danger','Category Not Found !!!!');
            }

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentShowProduct(Route $route,$id){
        try {

            $id = decrypt($id);
            $product =  EquipmentProduct::find($id);
            $auth = Auth::guard('medical_equipment')->user();
            return view('front_end_inners.medical_equipments.show_product',compact('product','auth'));

        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentStoreProductImages($id,Request $request,Route $route){
        try {

            $request->validate([
                "image" => 'required',
                "image.*" => 'required|mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            ]);
            if(!Auth::guard('medical_equipment')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $product = EquipmentProduct::find($id);


            if($product){

                // Upload Main Image Blog :
                if (isset($request->image)) {
                    $request_data = [
                        'product_id' => $product->id,
                    ];
                    foreach ($request->image as $key => $value) {
                        $orginal_image = $value;
                        $upload_location = 'storage/equipment_product_images/';
                        $original_name = $orginal_image->getClientOriginalName();
                        $file_name = $this->saveFileWithOriginalName('equipment_product_images', 'image', $orginal_image, $original_name, $upload_location);
                        $request_data['image'] = $file_name;
                        DB::transaction(function () use ($request_data) {
                            EquipmentProductImage::create($request_data);
                        });
                    }
                } else {
                    return redirect()->back()->with('danger', 'You must add an image to the news blog ');
                }


                return redirect()->route('medical_equipment.medical_equipment-edit-show',encrypt($product->id))->with('success','Images Added Successfully');

            }

            } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }



    function MedicalEquipmentDeleteProductImage($id,Route $route){
        try {
            if(!Auth::guard('medical_equipment')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $image = EquipmentProductImage::find($id);
            if($image){
                DB::transaction(function () use ($image) {
                    File::delete($image->image);
                    $image->delete();
                });

                return redirect()->back()->with('success','Image Deleted Succesfully');
            }else{
                return redirect()->back()->with('danger','Image Not Found');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


}
