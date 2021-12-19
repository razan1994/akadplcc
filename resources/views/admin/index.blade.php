@extends('admin.layouts.app')

@section('content')
    {{-- =========================================================== --}}
    {{-- ================== Sweet Alert Section ==================== --}}
    {{-- =========================================================== --}}
    <div>
        @if (session()->has('success'))
            <script>
                swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                    button: "OK",
                });
            </script>
        @endif
        @if (session()->has('danger'))
            <script>
                swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
                    button: "Close",
                });
            </script>
        @endif
    </div>

    {{-- ====================================================================== --}}
    {{-- =========================== All Counters ============================= --}}
    {{-- ====================================================================== --}}
    <div class="row">
        <div class="col-xl-6 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1"> {{ isset($customers) ? $customers->count() : 0 }} </h2>
                    <h5 style="color: blue;"><i class="mdi mdi-star mdi-spin"></i> All Customers</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1"> {{ isset($stopedCustomers) ? $stopedCustomers->count() : 0 }} </h2>
                    <h5 style="color: blue;"><i class="mdi mdi-star mdi-spin"></i> Blocked Customers</h5>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-xl-6 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">  </h2>
                    <h5 style="color: blue;"><i class="mdi mdi-star mdi-spin"></i> All Categories</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1"> {{ isset($public_products) ? $public_products->count() : 0 }} </h2>
                    <h5 style="color: blue;"><i class="mdi mdi-star mdi-spin"></i> All Products</h5>

                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="media widget-media p-4 bg-white border">
                <div class="icon rounded-circle mr-4 bg-success">
                    <i class="mdi mdi-timer-sand mdi-spin text-white "></i>
                </div>
                <div class="media-body align-self-center">
                    <h4 class="text-primary mb-2"><a href="{{ route('super_admin.orders-index') }}">{{ isset($CartSales) ? $CartSales->count() : 0 }}</a></h4>
                    <p style="color: black;"><a href="{{ route('super_admin.orders-index') }}">All Orders</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="media widget-media p-4 bg-white border">
                <div class="icon bg-danger rounded-circle mr-4">
                    <i class="mdi mdi-timer-sand mdi-spin text-white "></i>
                </div>
                <div class="media-body align-self-center">
                    <h4 class="text-primary mb-2"><a href="{{ route('super_admin.products-index') }}">{{ isset($penddingCartSales) ? $penddingCartSales->count() : 0 }}</a></h4>
                    <p style="color: black;"><a href="{{ route('super_admin.products-index') }}">Pendding Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="media widget-media p-4 bg-white border">
                <div class="icon rounded-circle mr-4 bg-warning">
                    <i class="mdi mdi-timer-sand mdi-spin text-white "></i>
                </div>
                <div class="media-body align-self-center">
                    <h4 class="text-primary mb-2"><a href="{{ route('super_admin.orders-index') }}">{{ isset($deliveryCartSales) ? $deliveryCartSales->count() : 0 }}</a></h4>
                    <p style="color: black;"><a href="{{ route('super_admin.orders-index') }}">Delivery Orders</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="media widget-media p-4 bg-white border">
                <div class="icon rounded-circle bg-primary mr-4">
                    <i class="mdi mdi-timer-sand mdi-spin text-white "></i>
                </div>
                <div class="media-body align-self-center">
                    <h4 class="text-primary mb-2"><a href="{{ route('super_admin.orders-index') }}">{{ isset($completeCartSales) ? $completeCartSales->count() : 0 }}</a></h4>
                    <p style="color: black;"><a href="{{ route('super_admin.orders-index') }}">Completed Orders</a></p>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- =========================================================== --}}
    {{-- ================== New Customers & Orders ================= --}}
    {{-- =========================================================== --}}
    <div class="row">
        {{-- New Customers : --}}
        <div class="col-xl-6">
            <div class="card card-table-border-none" data-scroll-height="580">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                    <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> New Customers :</h2>
                </div>
                <div class="card-body pt-0">
                    <table class="table">
                        <tbody>
                            @if (isset($newCustomers))
                                @if ($newCustomers->count() > 0)
                                    @foreach ($newCustomers as $user)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="media-image mr-3 rounded-circle">
                                                        @if ($user->profile_photo_path && file_exists($user->profile_photo_path))
                                                            <a
                                                                href="{{ route('super_admin.users-show', [$user->id, 'Customer']) }}"><img
                                                                    class="rounded-circle w-45"
                                                                    src="{{ asset($user->profile_photo_path) }}"
                                                                    alt="customer image"></a>
                                                        @else
                                                            <a
                                                                href="{{ route('super_admin.users-show', [$user->id, 'Customer']) }}"><img
                                                                    class="rounded-circle w-45"
                                                                    src="{{ asset('front_end_style/images/profilesf.png') }}"
                                                                    alt="image"></a>
                                                        @endif
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a
                                                            href="{{ route('super_admin.users-show', [$user->id, 'Customer']) }}">
                                                            <h6 class="mt-0 text-dark font-weight-medium">
                                                                <i class="mdi mdi-account"></i>
                                                                {{ isset($user->name_ar) ? $user->name_ar : 'Undefined' }}
                                                            </h6>
                                                        </a>
                                                        <small><i class="mdi mdi-email"></i> {{ isset($user->email) ? $user->email : 'Undefined' }}<br>
                                                            <i class="mdi mdi-phone"></i> {{ isset($user->phone) ? $user->phone : 'Undefined' }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            </td>
                                            <td class="text-dark d-none d-md-block"><i class="mdi mdi-clock-outline mdi-spin"></i> <a
                                                    href="{{ route('super_admin.users-show', [$user->id, 'Customer']) }}">{{ isset($user->created_at) ? $user->created_at->diffForHumans() : 'Undefined' }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h2 style="color: red;">There are no new customers !!</h2>
                                @endif
                            @else
                                <h4 style="color: red;">There are no new customers !!</h4>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- New Orders : --}}
        {{-- <div class="col-xl-6">
            <div class="card card-table-border-none" data-scroll-height="580">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                    <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> New Orders :</h2>
                </div>
                <div class="card-body pt-0">
                    <table class="table">
                        <tbody>
                            @if (isset($newCartSales))
                                @if ($newCartSales->count() > 0)
                                    @foreach ($newCartSales as $newCartSale)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="media-image mr-3 rounded-circle">
                                                        @if ($newCartSale->customer->profile_photo_path && file_exists($newCartSale->customer->profile_photo_path))
                                                            <a
                                                                href="{{ route('super_admin.orders-show', [$newCartSale->id]) }}"><img
                                                                    class="rounded-circle w-45"
                                                                    src="{{ asset($newCartSale->customer->profile_photo_path) }}"
                                                                    alt="customer image"></a>
                                                        @else
                                                            <a
                                                                href="{{ route('super_admin.orders-show', [$newCartSale->id]) }}"><img
                                                                    class="rounded-circle w-45"
                                                                    src="{{ asset('front_end_style/images/profilesf.png') }}"
                                                                    alt="customer image"></a>
                                                        @endif
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a
                                                            href="{{ route('super_admin.orders-show', [$newCartSale->id]) }}">
                                                            <h6 class="mt-0 text-dark font-weight-medium"><i class="mdi mdi-account"></i>
                                                                {{ isset($newCartSale->customer->name_ar) ? $newCartSale->customer->name_ar : 'Undefined' }}
                                                            </h6>
                                                        </a>
                                                        <small>
                                                            <i class="mdi mdi-email"></i> {{ isset($newCartSale->customer->email) ? $newCartSale->customer->email : 'Undefined' }} <br>
                                                            <i class="mdi mdi-phone"></i> {{ isset($newCartSale->customer->phone) ? $newCartSale->customer->phone : 'Undefined' }}
                                                        </small>
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-dark d-none d-md-block"><i class="mdi mdi-clock-outline mdi-spin"></i> <a
                                                href="{{ route('super_admin.orders-show', [$newCartSale->id]) }}">{{ isset($newCartSale->created_at) ? $newCartSale->created_at->diffForHumans() : 'Undefined' }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h2 style="color: red;">There are no new orders !!</h2>
                                @endif
                            @else
                                <h4 style="color: red;">There are no new orders !!</h4>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>


    {{-- =========================================================== --}}
    {{-- ================= Pending delivery orders ================= --}}
    {{-- =========================================================== --}}
    {{-- <div class="row">
        <div class="col-12">
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                    <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Pending delivery orders :</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-dark font-weight-mediu">#</th>
                                <th class="text-dark font-weight-mediu"> Date/Time</th>
                                <th class="text-dark font-weight-mediu"> Status</th>
                                <th class="text-dark font-weight-mediu"> Payment</th>
                                <th class="text-dark font-weight-mediu"> Delivery</th>
                                <th class="text-dark font-weight-mediu"> Sub Total</th>
                                <th class="text-dark font-weight-mediu"> Delivery Fees</th>
                                <th class="text-dark font-weight-mediu"> Total</th>
                                <th class="text-dark font-weight-mediu"><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($deliveryCartSales))
                                @if ($deliveryCartSales->count() > 0)
                                    @foreach ($deliveryCartSales as $order)
                                        <tr>
                                            <td>{!! isset($order->id) ? $order->id : "<span style='color:rgb(83, 83, 83);'>Undefined</span>" !!}</td>
                                            <td>{{ date('Y.d.m / h:i A', strtotime($order->created_at)) }}</td>
                                            <td>
                                                @if (isset($order->status))
                                                    @if ($order->status == 'Accepted')
                                                        <span style="color: green;">{{ isset($order->status) ? $order->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @else
                                                        <span style="color: red;">{{ isset($order->status) ? $order->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @endif
                                                @else
                                                    <span style='color:red;'>Undefined</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($order->payment_status))
                                                    @if ($order->payment_status == 'Pendding')
                                                        <span style="color:rgba(182, 121, 7, 0.87);">{!! $order->payment_status !!}</span>
                                                    @elseif($order->payment_status == 'Accepted')
                                                        <span style="color:green;">{!! $order->payment_status !!}</span>
                                                    @elseif($order->payment_status == 'Rejected')
                                                        <span style="color:red;">{!! $order->payment_status !!}</span>
                                                    @endif
                                                @else
                                                    <span>------</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($order->delivery_status))
                                                    @if ($order->delivery_status == 'Pendding')
                                                        <span style="color:red">{!! $order->delivery_status !!}</span>
                                                    @elseif($order->delivery_status == 'In Progress')
                                                        <span style="color:rgba(182, 121, 7, 0.87)">{!! $order->delivery_status !!}</span>
                                                    @elseif($order->delivery_status == 'Received')
                                                        <span style="color:green">{!! $order->delivery_status !!}</span>
                                                    @endif
                                                @else
                                                    <p class="cart_amount">------</p>
                                                @endif
                                            </td>
                                            <td>{!! isset($order->sub_total) ? $order->sub_total . '<small> SAR</small>' : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>25 <small>SAR</small></td>
                                            <td>{!! isset($order->total) ? $order->total + 25 . '<small> SAR</small>' : "<span style='color:red;'>Undefined</span>" !!}</td>

                                            <td>
                                                <a href="{{ route('super_admin.orders-show', [$order->id]) }}" title="Show Order Details" class="mb-1 btn btn-sm btn-info"><i class="mdi mdi-eye"></i></a>
                                                @if (!isset($order->delivery_status) )
                                                    <a href="{{ route('super_admin.orders-sendToDelivery', [$order->id]) }}" title="Send To Delivery" class="process mb-1 btn btn-sm btn-success"><i class="mdi mdi-send"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="8">
                                        <h3 style="color: red; text-align:center;">There are no new pending delivery orders !!</h3>
                                    </td>
                                @endif
                            @else
                                <td colspan="8">
                                    <h3 style="color: red; text-align:center;">There are no new pending delivery orders !!</h3>
                                </td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- =========================================================== --}}
    {{-- ================ Products Under The Limit ================= --}}
    {{-- =========================================================== --}}
    {{-- <div class="row">
        <div class="col-12">
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                    <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Products Under The Limit :</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="mdi mdi-account"></i> Name EN</th>
                                <th><i class="mdi mdi-account"></i> Category</th>
                                <th><i class="mdi mdi-email"></i> Quantity Available</th>
                                <th><i class="mdi mdi-email"></i> Quantity Limit</th>
                                <th><i class="mdi mdi-image"></i> Image</th>
                                <th><i class="mdi mdi-account-switch"></i> Status</th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($productUnderLimit))
                                @if ($productUnderLimit->count() > 0)
                                    @foreach ($productUnderLimit as $index => $product)
                                        <tr>
                                            <td>{!! isset($product->id) ? $product->id : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($product->name_en) ? $product->name_en : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($product->quantity_available) ? $product->quantity_available : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($product->quantity_limit) ? $product->quantity_limit : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>
                                                @if (isset($product->image) && $product->image && file_exists($product->image))
                                                    <img src="{{ asset($product->image) }}" width="70" height="70" style="border-radius: 10px; border:solid 1px black;">
                                                @else
                                                    <img src="{{ asset('front_end_style/images/default.png') }}" width="70" height="50">
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($product->status))
                                                    @if ($product->status == 'Active')
                                                        <span style="color: green;">{{ isset($product->status) ? $product->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @else
                                                        <span style="color: red;">{{ isset($product->status) ? $product->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @endif
                                                @else
                                                    <span style='color:red;'>Undefined</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('super_admin.products-show', [$product->id]) }}" title="Show" class="mb-1 btn btn-sm btn-info"><i class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('super_admin.products-edit', [$product->id]) }}" title="Edit" class="mb-1 btn btn-sm btn-primary"><i class="mdi mdi-playlist-edit"></i></a>
                                                <a href="{{ route('super_admin.products-activeInactiveSingle', [$product->id]) }}" title="Active / Inactive" class="process mb-1 btn btn-sm btn-warning"><i class="mdi mdi-stop"></i></a>
                                                <a href="{{ route('super_admin.products-softDelete', [$product->id]) }}" title="Archive" class="confirm mb-1 btn btn-sm btn-danger"><i class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="8">
                                        <h3 style="color: red; text-align:center;">There are no new product under the limit !!</h3>
                                    </td>
                                @endif
                            @else
                                <td colspan="8">
                                    <h3 style="color: red; text-align:center;">There are no new product under the limit !!</h3>
                                </td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
