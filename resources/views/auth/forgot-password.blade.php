<x-guest-layout>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href={{ asset('css/forgot_password.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="slider">
        <div class="container">
            <div class="slider-content">
                <div class="slider-content-left">
                    <!--Tạo khung nhập-->
                    <div class="form">
                        <div class="form-header">
                            <h3>QUÊN MẬT KHẨU</h3>
                        </div>

                        <div class="form-content">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address or Phone -->
                                    <label for="name">Email:<span class="required"> *</span></label><br>
                                    <input id="email" class="gform" type="email" name="email"
                                        :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                <button type="submit" class="submit"> LẤY LẠI MẬT KHẨU QUA EMAIL</button>

                            </form>
                             <div class="return">
                                    <a href="/login">Quay về trang đăng nhập</a>
                                </div>
                        </div>
                    </div>                 
                </div>

                  <!--Khung banner chương trình đang diễn ra-->
                  <div class="slider-content-right">
                    <div class="wrapper">
                        <div class="image-container">
                            <div class="carousel">
                                <img src="{{ asset('images/login/login1.jpg') }}" alt="" />
                            </div>
                        </div>
    
                        <div class="image-container">
                            <div class="carousel">
                                <img src="{{ asset('images/login/login2.jpg') }}" alt="" />
                            </div>
                        </div>
    
                        <div class="image-container">
                            <div class="carousel">
                                <img src="{{ asset('images/login/login3.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                  </div>
                </section>


                <button class="backtop">         
                    <a href="#top"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
                  </button>
          
                <div class="footblank"> </div>
        
                  <!-- java -->
                <script
                  type="text/javascript"
                  src="https://code.jquery.com/jquery-1.11.0.min.js"
                ></script>
                <script
                  type="text/javascript"
                  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
                ></script>
                <script
                  type="text/javascript"
                  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
                ></script>
                  <!-- js ảnh -->
                <script>
                    $(document).ready(function(){
                        $(".wrapper").slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true,
                            dots: true,
                            autoplay: true,
                            autoplaySpeed: 3000,
                            
                prevArrow:"<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow:"<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        
                        });
                    });
                </script>
</x-guest-layout>




