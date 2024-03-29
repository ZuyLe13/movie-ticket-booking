<x-guest-layout>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href={{ asset('css/reset_password.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="slider">
        <div class="container">
            <div class="slider-content">
                <div class="slider-content-left">
                    <!--Tạo khung nhập-->
                    <div class="form">
                        <div class="form-header">
                            <h3>LẤY LẠI MẬT KHẨU</h3>
                        </div>

                        <div class="form-content">
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div>
                                    <label for="email" >Email/Số điện thoại:<span class="required"> *</span></label><br>
                                    <input id="email" class="gform" type="email" name="email"
                                        :value="old('email', $request->email)" required autofocus autocomplete="username" /><br>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <label for="password">Mật khẩu:<span class="required"> *</span></label><br>
                                    <input id="password" class="gform" type="password"
                                        name="password" required autocomplete="new-password" /><br>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <label for="password_confirmation">Xác nhận mật khẩu:<span class="required"> *</span></label><br>

                                    <input id="password_confirmation" class="gform" type="password"
                                        name="password_confirmation" required autocomplete="new-password" /><br><br>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button  type="submit" class="submit">
                                        {{ __('Đặt lại mật khẩu') }}
                                    </button>
                                </div>
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
        </div>
    </section>

    <div class="footblank"> </div>

    <!-- java -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- js ảnh -->
    <script>
        $(document).ready(function() {
            $(".wrapper").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000,

                prevArrow: "<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow: "<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",

            });
        });
    </script>

</x-guest-layout>


