@extends('front_end_inners.app_front_end')

@section('content')
    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Slider Area ================================================= --}}
    {{-- =================================================================================================================== --}}

        {{-- =========================================================== --}}
        {{-- ================== Sweet Alert Section ==================== --}}
        {{-- =========================================================== --}}
        <div>
            @if (session()->has('success'))
                <script>
                    swal("@lang('front_end.great_job') !!!", "{!! Session::get('success') !!}", "success", {
                        button: "OK",
                    });
                </script>
            @endif
            @if (session()->has('danger'))
                <script>
                    swal("@lang('front_end.ops') !!!", "{!! Session::get('danger') !!}", "error", {
                        button: "Close",
                    });
                </script>
            @endif
        </div>


     <!--breadcrumbs area start-->
     <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">@lang('front_end.home')</a></li>
                            <li><a href="my-account.html">@lang('front_end.my_account')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-2">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">@lang('front_end.dashboard')</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">@lang('front_end.my_orders')</a></li>
                                <li><a href="{{ Auth::check() ? route('cartAuth') :  route('cart') }}" class="nav-link">@lang('front_end.my_cart')</a></li>
                                <li><a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}" class="nav-link">@lang('front_end.shop')</a></li>
                                <li><a href="{{ Auth::check() ? route('productWishlistShow') :  route('welcome') }}" class="nav-link">@lang('front_end.wishlist')</a></li>
                                {{-- <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li> --}}
                                {{-- <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li> --}}
                                <li><a href="{{ route('customer.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">@lang('front_end.logout')</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>@lang('front_end.dashboard') </h3>
                                <p>@lang('front_end.from_your_account') &amp; @lang('front_end.view_your') <a href="#">@lang('front_end.recent_orders')</a>@lang('front_end.manage_your') <a href="#">@lang('front_end.shipping_billing')</a> @lang('front_end.and') <a href="#">@lang('front_end.edit_your_pass')</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>@lang('front_end.my_orders')</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>@lang('front_end.id')</th>
                                                {{-- <th>Added At</th> --}}
                                                <th>@lang('front_end.date_time')</th>
                                                <th>@lang('front_end.status')</th>
                                                <th>@lang('front_end.payment_status')</th>
                                                <th>@lang('front_end.invoice_url')</th>
                                                {{-- <th>Delivery Status</th> --}}
                                                <th>@lang('front_end.sub_total')</th>
                                                <th>@lang('front_end.delivery_fees')</th>
                                                <th>@lang('front_end.total')</th>
                                                <th>@lang('front_end.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($customerOrders) && $customerOrders->count() > 0)
                                                @foreach ($customerOrders as $customerOrder)
                                                    <tr>
                                                        <td>{{ $customerOrder->id }}</td>
                                                        {{-- <td>{{ $customerOrder->created_at->diffForHumans() }}</td> --}}
                                                        <td>{{ date('Y.d.m / h:i A', strtotime($customerOrder->created_at)) }}</td>
                                                        @if ($customerOrder->status == 'Pendding')
                                                            <td style="color:rgba(182, 121, 7, 0.87);">{{ $customerOrder->status }}</td>
                                                        @elseif($customerOrder->status == 'Accepted')
                                                            <td style="color:green;">{{ $customerOrder->status }}</td>
                                                        @elseif($customerOrder->status == 'Rejected')
                                                            <td style="color:red;">{{ $customerOrder->status }}</td>
                                                        @endif
                                                        {{-- Delivery : --}}
                                                        @if ($customerOrder->payment_status == 'Pendding')
                                                            <td style="color:rgba(182, 121, 7, 0.87);">{{ $customerOrder->payment_status }}</td>
                                                        @elseif($customerOrder->payment_status == 'Accepted')
                                                            <td style="color:green;">{{ $customerOrder->payment_status }}</td>
                                                        @elseif($customerOrder->payment_status == 'Rejected')
                                                            <td style="color:red;">{{ $customerOrder->payment_status }}</td>
                                                        @else
                                                            <td>------</td>
                                                        @endif
                                                        <td>{!! isset($customerOrder->invoice_url) ? '<a href="'. $customerOrder->invoice_url .'" target ="_blank">View Invoice</a>' : '------' !!} </td>
                                                        {{-- Payment : --}}
                                                        {{-- @if ($customerOrder->delivery_status == 'Pendding')
                                                            <td style="color:red;">{{ $customerOrder->delivery_status }}</td>
                                                        @elseif($customerOrder->delivery_status == 'In Progress')
                                                            <td style="color:rgba(182, 121, 7, 0.87);">{{ $customerOrder->delivery_status }}</td>
                                                        @elseif($customerOrder->delivery_status == 'Received')
                                                            <td style="color:green;">{{ $customerOrder->delivery_status }}</td>
                                                        @else
                                                            <td>------</td>
                                                        @endif --}}
                                                        <td>{{ $customerOrder->sub_total }} <small>@lang('front_end.sar')</small> </td>
                                                        <td>25 <small>@lang('front_end.sar')</small> </td>
                                                        <td>{{ $customerOrder->total }} <small>@lang('front_end.sar')</small> </td>
                                                        <td><a href="{{ Auth::check() ? route('showOrderDetailsAuth', $customerOrder->id) :  route('showOrderDetails', $customerOrder->id) }}" class="view">view</a></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                               <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    House #15<br>
                                    Road #1<br>
                                    Block #C <br>
                                    Banasree <br>
                                    Dhaka <br>
                                    1212
                                </address>
                                <p>Bangladesh</p>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                </div> <br>
                                                <label>First Name</label>
                                                <input type="text" name="first-name">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name">
                                                <label>Email</label>
                                                <input type="text" name="email-name">
                                                <label>Password</label>
                                                <input type="password" name="user-password">
                                                <label>Birthdate</label>
                                                <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                <span class="example">
                                                  (E.g.: 05/31/1970)
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                </span>
                                                <div class="save_button primary_btn default_button">
                                                   <button type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->
@endsection
