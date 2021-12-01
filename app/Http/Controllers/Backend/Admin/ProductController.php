<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Products\StoreImageProductFormRequest;
use App\Http\Requests\Backend\Products\StoreProductFormRequest;
use App\Http\Requests\Backend\Products\UpdateProductFormRequest;
use App\Models\CartOperation;
use App\Models\CartSale;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\SuperCategory;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;

class ProductController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // ================================================================
    // ======================== index Function ========================
    // ================================================================
    public function index(Request $request, Route $route)
    {
        try {
            $products = Product::select('*')->orderBy('created_at', 'desc')->get();
            return view('admin.products.index', compact('products'));
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

    // ================================================================
    // ======================= Create Function ========================
    // ================================================================
    public function create(Route $route)
    {
        try {
            $categories = SuperCategory::get();
            return view('admin.products.create', compact('categories'));
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

    // ================================================================
    // ======================= Store Function =========================
    // ================================================================
    public function store(StoreProductFormRequest $request, Route $route)
    {
        try {
            // Upload Image Section :
            if (isset($request->image)) {
                $orginal_image = $request->file('image');
                $upload_location = 'storage/products/';
                $original_name = $orginal_image->getClientOriginalName();
                $last_image = $this->saveFileWithOriginalName('products', 'image', $orginal_image, $original_name, $upload_location);
            } else {
                $last_image = null;
            }

            $created_data = [
                'super_category_id' => $request->super_category_id,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => $request->sub_category_id,
                'name_ar' => $request->name_ar,
                'name_en' => $request->name_en,
                'main_description_ar' => $request->main_description_ar,
                'main_description_en' => $request->main_description_en,
                'sub_description_ar' => $request->sub_description_ar,
                'sub_description_en' => $request->sub_description_en,
                'weight' => $request->weight,
                'sale_price' => $request->sale_price,
                'on_sale_price_status' => $request->on_sale_price_status,
                'on_sale_price' => $request->on_sale_price,
                'quantity_available' => $request->quantity_available,
                'quantity_limit' => $request->quantity_limit,
                'image' => $last_image,
                'status' => $request->status,
                'updated_by' => auth()->user()->id,
                // Added After Migrate :
                'weight_unit' => $request->weight_unit,
            ];

            DB::transaction(function () use ($created_data) {
                Product::create($created_data);
            });

            return redirect()->route('super_admin.products-index')->with('success', 'The data has been successfully updated');
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

    // ================================================================
    // ======================== Show Function =========================
    // ================================================================
    public function show($id, Route $route)
    {
        try {
            $product = Product::find($id);
            $penddingOrders = CartOperation::where('product_id', $id)->orderBy('created_at', 'desc')->get(); // 1 => Pendding
            foreach ($penddingOrders as $key => $penddingOrder) {
                if ($penddingOrder->cartSale->status != 'Pendding') {
                    $penddingOrders->forget($key);
                }
            }
            $acceptedOrders = CartOperation::where('product_id', $id)->orderBy('created_at', 'desc')->get(); // 1 => Pendding
            foreach ($acceptedOrders as $key => $acceptedOrder) {
                if ($acceptedOrder->cartSale->status != 'Accepted') {
                    $acceptedOrders->forget($key);
                }
            }

            $deliveryOrders = CartOperation::where('product_id', $id)->orderBy('created_at', 'desc')->get(); // 1 => Pendding
            foreach ($deliveryOrders as $key => $deliveryOrder) {
                if ($deliveryOrder->cartSale->delivery_status != 'Pendding' && $deliveryOrder->cartSale->delivery_status != 'In Progress') {
                    $deliveryOrders->forget($key);
                }
            }
            if ($product) {
                return view('admin.products.show', compact('product', 'penddingOrders', 'acceptedOrders', 'deliveryOrders'));
            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This record is not in the records');
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

    // ================================================================
    // ======================== Edit Function =========================
    // ================================================================
    public function edit($product_id, Route $route)
    {
        try {
            $categories = SuperCategory::get();
            $product = Product::find($product_id);
            if ($product) {
                return view('admin.products.edit', compact('product', 'categories'));
            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This record is not in the records');
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

    // ================================================================
    // ======================= Update Function ========================
    // ================================================================
    public function update($product_id, UpdateProductFormRequest $request, Route $route)
    {
        try {
            $product = Product::find($product_id);
            if ($product) {
                // Standard Updated Data :
                $update_data['super_category_id'] = $request->super_category_id;
                $update_data['main_category_id'] = $request->main_category_id;
                $update_data['sub_category_id'] = $request->sub_category_id;
                $update_data['name_ar'] = $request->name_ar;
                $update_data['name_en'] = $request->name_en;
                $update_data['main_description_ar'] = $request->main_description_ar;
                $update_data['main_description_en'] = $request->main_description_en;
                $update_data['sub_description_ar'] = $request->sub_description_ar;
                $update_data['sub_description_en'] = $request->sub_description_en;
                $update_data['weight'] = $request->weight;
                $update_data['sale_price'] = $request->sale_price;
                $update_data['on_sale_price_status'] = $request->on_sale_price_status;
                $update_data['on_sale_price'] = $request->on_sale_price;
                $update_data['quantity_available'] = $request->quantity_available;
                $update_data['quantity_limit'] = $request->quantity_limit;
                $update_data['status'] = $request->status;
                // Added After Migrate :
                $update_data['weight_unit'] = $request->weight_unit;
                $update_data['ingredient_en'] = $request->ingredient_en;
                $update_data['ingredient_ar'] = $request->ingredient_ar;
                $update_data['benefit_en'] = $request->benefit_en;
                $update_data['benefit_ar'] = $request->benefit_ar;
                // Upload Image Section :
                if (isset($request->image)) {
                    $orginal_image = $request->file('image');
                    $upload_location = 'storage/products/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image'] = $this->saveFileWithOriginalName('products', 'image', $orginal_image, $original_name, $upload_location);
                    File::delete($product->image);
                }

                DB::table('products')->where('id', $product_id)->update($update_data);

                return redirect()->route('super_admin.products-index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This record does not exist in the records');
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

    // ================================================================
    // ================== Active/Inactive Single ======================
    // ================================================================
    public function activeInactiveSingle($product_id, Route $route)
    {
        try {
            $product = Product::find($product_id);
            if ($product) {
                if ($product->status == 'Active') {
                    $product->status = 2;  // 2 => Inactive
                    $product->save();
                } elseif ($product->status == 'Inactive') {
                    $product->status = 1;  // 1 => Active
                    $product->save();
                }
                return redirect()->back()->with('success', 'The process has successfully');
            } else {
                return redirect()->back()->with('danger', 'This record is not in the records');
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

    // ================================================================
    // ===================== Soft Delete Function =====================
    // ================================================================
    public function softDelete($id, Route $route)
    {
        try {
            $product = Product::find($id);
            if ($product) {
                DB::transaction(function () use ($product) {
                    $product->delete();
                });
                return redirect()->route('super_admin.products-index')->with('success', 'The deletion process has been successful');
            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This record is not in the records');
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

    // ================================================================
    // ====================== Show Soft Delete ========================
    // ================================================================
    public function showSoftDelete(Request $request, Route $route)
    {
        try {
            $products = new Product();
            $products = $products->onlyTrashed()->select('*')->orderBy('created_at', 'asc')->get();
            return view('admin.products.trashed', compact('products'));
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

    // ================================================================
    // ===================== Soft Delete Restore ======================
    // ================================================================
    public function softDeleteRestore($id, Route $route)
    {
        try {
            $product = Product::onlyTrashed()->find($id);
            if ($product) {
                $product->restore();
                return redirect()->route('super_admin.products-index')->with('success', 'Restore Completed Successfully');
            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This section does not exist in the records');
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

    // ========================================================================
    // ========================== Destroy Function ============================
    // ==================== Created By : Mohammed Salah ======================
    // ========================================================================
    public function destroy($category_id, Route $route)
    {
        try {
            $product = Product::where('id', $category_id)->withTrashed()->get()->first();
            if ($product) {
                File::delete($product->image);
                $product->forceDelete();
                return redirect()->back()->with('success', 'The process has successfully');
            } else {
                return redirect()->back()->with('danger', 'This record is not in the records');
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

    // ========================================================================
    // ====================== Add Other Images Function =======================
    // ==================== Created By : Mohammed Salah ======================
    // ========================================================================
    public function AddImages(StoreImageProductFormRequest $request, $id, Route $route)
    {
        try {
            $product = Product::find($id);
            if ($product) {
                // Upload Image :
                if (isset($request->product_other_images)) {
                    $request_data = [
                        'product_id' => $id,
                    ];
                    foreach ($request->product_other_images as $key => $value) {
                        $orginal_image = $value;
                        $upload_location = 'storage/products/product_other_images/';
                        $original_name = $orginal_image->getClientOriginalName();
                        $request_data['image'] = $this->saveFileWithOriginalName('product_images', 'image', $orginal_image, $original_name, $upload_location);
                        DB::transaction(function () use ($request_data) {
                            ProductImage::create($request_data);
                        });
                    }
                } else {
                    return redirect()->back()->with('danger', 'You must add an ImageS');
                }
                return redirect()->back()->with('success', 'The data has been successfully Added');
            } else {
                return redirect()->back()->with('danger', 'This record does not exist in the records');
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
    // ========================================================================
    // ==================== Delete Other Images Function ======================
    // ==================== Created By : Mohammed Salah ======================
    // ========================================================================
    public function deleteImages($id, Route $route)
    {
        try {
            // check if id exists and deleted it :
            $image = ProductImage::findOrFail($id);
            if ($image) {
                DB::transaction(function () use ($image) {
                    $image->delete();
                    File::delete($image->image);
                });
                return redirect()->back()->with('success', 'Deleted Successfully');
            } else {
                return redirect()->back()->with('danger', 'This record does not exist in the records');
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



    // ========================================================================
    // ==================== get Sub Categories Function =======================
    // ==================== Created By : Mohammed Salah ======================
    // ========================================================================
    function getSubCategories(Request $request){
        $request->validate([
            'main_category_id'=>'required',
        ]);

        $subCategories = SubCategory::where('main_category_id',$request->main_category_id)->get();

        if($subCategories && $subCategories->count() > 0){
            return response()->json(['status'=>true,'subCategories'=>$subCategories]);
        }
        else{

            return response()->json(['status'=>true,'subCategories'=>[]]);
        }
    }
}
