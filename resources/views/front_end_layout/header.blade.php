<div class="header">
    <div class="c_top_header">
        <div class="container_1200">
            <div class="c_menus_top">
                
                <ul class="c_social">
                    <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <ul class="c_one">
                    <li><a href="#" >تسجيل جديد </a></li>
                    <li><a href="#" >تسجيل الدخول</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="c_main_header">
        <div class="container_1200">
            <nav class="navbar navbar-expand-lg navbar-light">

                {{-- =========================== Logo Section ======================== --}}
                <div class="logo col-md-3 col-xs-12">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('front_end_style/images/logo.png') }}">
                    </a>
                </div>


                {{-- ====================== Toggle Button Section ==================== --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- ========================== Menu Section ========================= --}}
                <div class="c_main_menu collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">عن الموقع</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">الدورات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">الجهات المعتمدة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""> الأخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">اتصل بنا</a>
                        </li>
                    </ul>
                </div>

                {{-- ========================== Right Menu ========================= --}}
                <div class="c_search">
                    <form action="" enctype="multipart/form-data" class="form-inline c_serch my-2 my-lg-0">
                        @csrf
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <input class="form-control" type="search" name="search_text" value="" placeholder="ابحث في المنصة" aria-label="Search">
                        
                    </form>
                </div>

            </nav>
        </div>

    </div>



</div>
