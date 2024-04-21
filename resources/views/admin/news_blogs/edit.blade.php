@extends('admin.layouts.app')

@section('admin_css')
    <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">

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


            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Edite Blogs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.news_blogs-index') }}">
                                    <i class="far fa-newspaper"></i></span> List Blogs
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"> Edite </li>
                        </ol>
                    </nav>
                </div>

                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2> Edite Blogs : </h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.news_blogs-update', $news_blog->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">

                                                {{-- Title --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Title <strong class="text-danger"> *
                                                            @error('title_ar')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_ar"
                                                            class="form-control @error('title_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Title "
                                                            value="{{ $news_blog->title_ar }}">
                                                    </div>
                                                </div>

                                                {{-- Main Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Image <strong class="text-danger">
                                                            * @error('image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="image" class="form-control"
                                                            id="validationServer01" placeholder="image" accept="image/*">
                                                    </div>
                                                    <div style="text-align: center">
                                                        @if ($news_blog->image && file_exists($news_blog->image))
                                                            <img src="{{ asset($news_blog->image) }}" width="100"
                                                                height="100"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @else
                                                            <img src="{{ asset('images_default/default.jpg') }}"
                                                                width="100" height="100"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @endif
                                                    </div>
                                                </div>
                                                {{-- Title EN --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">Titl EN <strong
                                                            class="text-danger"> * @error('title_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Titl_EN"
                                                            value="{{ $news_blog->title_en }}">
                                                        </div>
                                                </div> --}}

                                                {{-- Status --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"> Status
                                                        <strong class="text-danger"> * @error('status')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="status" class="selectpicker" data-live-search="true"
                                                            data-width="88%" id="inlineFormCustomSelectPref">
                                                            <option value="" selected>Choose...</option>
                                                            <option value="1"
                                                                @if ($news_blog->status == '1') selected @endif>Active
                                                            </option>
                                                            <option value="2"
                                                                @if ($news_blog->status == '2') selected @endif>Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Short Sescription --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">
                                                        Short Description
                                                        <strong class="text-danger">

                                                            @error('short_description')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong>
                                                        <small class="text-danger">
                                                            this description will only shown on the news card
                                                        </small>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Short Description">{{ old('short_description', $news_blog->short_description) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">

                                                {{-- Main Categories --}}
                                                <div class="col-md-6" id="mainCategoryContainer">
                                                    <div class="form-group">
                                                        <label for="main_category_id">Main Category</label>
                                                        <div class="">
                                                            <select class="form-control"
                                                                data-placeholder="Select a Category" name="main_category_id"
                                                                id="main_category_id" style="width: 100%;">
                                                                @foreach ($mainCategories as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        @selected($item->id == $news_blog->category->parent->id)>
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>

                                                {{-- Categories --}}
                                                <div class="col-md-6" id="mainCategoryContainer">
                                                    <div class="form-group">
                                                        <label for="categories">Category
                                                            <strong class="text-danger"> * @error('category_id')
                                                                    - {{ $message }}
                                                                @enderror
                                                            </strong>

                                                        </label>
                                                        <div class="">
                                                            <select class="form-control" required
                                                                data-placeholder="Select a Category" name="category_id"
                                                                id="categories" style="width: 100%;">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>




                                                {{-- @lang('front_end.News_Blog_Details_AR') --}}
                                                <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium"> Blog Details :
                                                        <strong class="text-danger"> * @error('desc_ar')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <textarea id="desc_ar" name="desc_ar" class="form-control ">{{ $news_blog->desc_ar }}</textarea>
                                                </div>

                                                {{-- @lang('front_end.News_Blog_Details_EN') --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium" > Blog Details EN :
                                                        <strong class="text-danger">* @error('desc_en') - {{ $message }}@enderror</strong>
                                                    </label>
                                                    <textarea id="desc_en" name="desc_en" class="form-control" rows="10">{{ $news_blog->desc_en }}</textarea>
                                                </div> --}}


                                                {{-- alt text Ar --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">Alt Text Ar <strong
                                                            class="text-danger"> * @error('alt_text_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="alt_text_ar" class="form-control @error('alt_text_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Alt Text Ar"
                                                            value="{{ $news_blog->alt_text_ar }}">
                                                    </div>
                                                </div> --}}
                                                {{-- alt text En --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">Alt Text En <strong
                                                            class="text-danger"> * @error('alt_text_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="alt_text_en" class="form-control @error('alt_text_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Alt Text EN"
                                                            value="{{ $news_blog->alt_text_en }}">
                                                    </div>
                                                </div> --}}
                                                {{-- image title text Ar --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">Image Title Text AR <strong
                                                            class="text-danger"> * @error('image_title_text_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="image_title_text_ar" class="form-control @error('image_title_text_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Image Titl Text Ar"
                                                            value="{{ $news_blog->image_title_text_ar }}">

                                                    </div>
                                                </div> --}}
                                                {{-- image title text En --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">Image Title Text En <strong
                                                            class="text-danger"> * @error('image_title_text_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="image_title_text_en" class="form-control @error('image_title_text_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Image Titl Text En"
                                                            value="{{ $news_blog->image_title_text_en }}">
                                                    </div>
                                                </div> --}}
                                                {{-- H2 Ar --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">H2 AR <strong
                                                            class="text-danger"> * @error('h2_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="h2_ar" class="form-control @error('h2_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="H2 AR"
                                                            value="{{ $news_blog->h2_ar }}">
                                                    </div>
                                                </div> --}}
                                                {{-- H2 EN --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">H2 EN <strong
                                                            class="text-danger"> * @error('h2_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="h2_en" class="form-control @error('h2_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="H2 AR"
                                                            value="{{ $news_blog->h2_en }}">
                                                    </div>
                                                </div> --}}
                                                {{-- seo title AR --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">SEO Title AR <strong
                                                            class="text-danger"> * @error('seo_title_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="seo_title_ar" class="form-control @error('seo_title_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="SEO Titl AR"
                                                            value="{{ $news_blog->seo_title_ar }}">
                                                    </div>
                                                </div> --}}
                                                {{-- seo title En --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">SEO Title En <strong
                                                            class="text-danger"> * @error('seo_title_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="seo_title_en" class="form-control @error('seo_title_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="SEO Titl En"
                                                            value="{{ $news_blog->seo_title_en }}">
                                                    </div>
                                                </div> --}}
                                                {{-- SEO Meta data AR --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium" > keywords AR :
                                                        <strong class="text-danger"> * @error('keywords_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <textarea name="keywords_ar" class="form-control" placeholder="Kewords AR">{{ str_replace(',',' ',$news_blog->keywords_ar) }}</textarea>
                                                </div> --}}
                                                {{-- SEO Meta data EN --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium" > keywords EN :
                                                        <strong class="text-danger"> * @error('keywords_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <textarea name="keywords_en" class="form-control" placeholder="Kewords EN">{{ str_replace(',',' ',$news_blog->keywords_en) }}</textarea>
                                                </div> --}}
                                                {{-- Redirect 301 AR --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium"> Redirect 301 AR :
                                                        <strong class="text-danger"> * @error('redirect_301_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <textarea name="redirect_301_ar" class="form-control" placeholder="Redirect 301 AR">{{ $news_blog->redirect_301_ar }}</textarea>
                                                </div> --}}
                                                {{-- Redirect 301 EN --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium" > Redirect 301 EN :
                                                        <strong class="text-danger"> * @error('redirect_301_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <textarea name="redirect_301_en" class="form-control" placeholder="Redirect 301 EN">{{ $news_blog->redirect_301_en }}</textarea>
                                                </div> --}}
                                                {{-- @lang('front_end.News_Blog_Details_AR') --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium" > Meta Desc AR :
                                                        <strong class="text-danger"> * @error('meta_desc_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <textarea  name="meta_desc_ar" rows="10" class="form-control" placeholder="Meta Desc AR">{{ $news_blog->meta_desc_ar }}</textarea>
                                                </div> --}}

                                                {{-- @lang('front_end.News_Blog_Details_EN') --}}
                                                {{-- <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium" > Meta Desc EN :
                                                        <strong class="text-danger">* @error('meta_desc_en') - {{ $message }}@enderror</strong>
                                                    </label>
                                                    <textarea name="meta_desc_en" class="form-control" rows="10" placeholder="Meta Desc EN">{{ $news_blog->meta_desc_en }}</textarea>
                                                </div> --}}

                                                <div class="mb-3 col-md-12">
                                                    <div class="input-group">
                                                        <button class="btn btn-primary" type="submit">Update</button>
                                                    </div>
                                                </div>
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

        {{-- ========================================================== --}}
        {{-- ================ Advance Text Area Section =============== --}}
        {{-- ========================================================== --}}
        <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

        <script>
            CKEDITOR.replace('desc_ar', {
                fullPage: true,
                allowedContent: true
            });
            CKEDITOR.replace('desc_en', {
                fullPage: true,
                allowedContent: true
            });
        </script>
        {{-- ========================================================== --}}
        {{-- ================ Advance Text Area Section =============== --}}
        {{-- ========================================================== --}}
    @endsection


    @push('scripts')
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#mainCategoriesContainer').hide();

                setTimeout(() => {
                    super_id = $("#main_category_id").val();
                    if (super_id !== "") {
                        getSubCategories();
                    }
                }, 1000);


                $(document).on("change", "#main_category_id", function() {
                    getSubCategories();
                    // getBrand();
                });
            });

            function getSubCategories() {

                main_category_id = $("#main_category_id").val();

                formData = new FormData();
                formData.append('main_category_id', main_category_id);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: "{{ route('super_admin.getSubCategories') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(data) {
                        if (data['status'] == true) {
                            console.log(data)
                            let subCategories = data?.subCategories ?? [];
                            old_super = $("#old_super").val();
                            // old_brand = $("#old_brand").val();

                            $("#categories").html('');
                            html = '<option value="">Select Sub Category....</option>';
                            for (let key = 0; key < subCategories.length; key++) {
                                // console.log(data.mainCategories[key]['id']);
                                let catId = subCategories[key]['id'];

                                if (catId == {{ $news_blog->category->id }}) {

                                    html += '<option value="' + subCategories[key]['id'] + '" selected>' +
                                        subCategories[key]['name_en'] + '</option>';
                                } else {
                                    html += '<option value="' + subCategories[key]['id'] + '">' +
                                        subCategories[key]['name_en'] + '</option>';
                                }
                            }
                            $("#categories").html(html);
                            // $('.selectpicker').selectpicker('refresh');
                        }
                    },
                    error: function(data) {

                    }
                });
            }
        </script>
    @endpush
