<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
   
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">



    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="slider">
        <div class="container">
            <div class="slider-content">
                <div class="slider-content-left">
                    <!--Tạo khung đăng nhập-->
                    <div class="user-modal">

                        <div class="form-header">
                            <span class="login active">
                                <a href="/login" class="valid_login"> ĐĂNG NHẬP </a> 
                            </span>
                            <span class="regis">
                                <a href="/register" class="valid_regis"> ĐĂNG KÝ</a> 
                            </span>
                        </div>
                        <div class="form-content"> 
                            <div class="form">

                                <!-------------------- login ----------------------->
                                <div class="form login">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <label class="input-title" for="email">Email: <span
                                            class="required">*</span></label>
                                    <input id="email" placeholder="Nhập Email " type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="cus_name" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div>
                                    <label class="input-title" for="password">Mật khẩu: <span class="required">*</span>
                                        <input id="password" type="password" name="password" placeholder="Nhập mật khẩu " required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                {{-- <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div> --}}
                                <button id="login-submit" type="submit" class="submit">ĐĂNG NHẬP</button>

                                <div class="forget-paswd">

                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Quên mật khẩu?') }}
                                        </a>
                                    @endif
                                </div>

                            </form>
                        </div>

                           <!-------------------- register ----------------------->
                           <div class="form regis">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div>
                                    <label for="cus_name">Họ và tên:<span class="required"> *</span></label><br>
                                    <input id="cus_name" class="form-control" type="text" name="cus_name"
                                        :value="old('cus_name')" required autofocus autocomplete="cus_name" /><br>
                                    <x-input-error :messages="$errors->get('cus_name')" class="mt-2" />
                                </div>

                                <div>
                                    <label for="cus_phone">Số điện thoại:<span class="required"> *</span></label><br>
                                    <input id="cus_phone" class="form-control" type="tel" name="cus_phone"
                                        :value="old('cus_phone')" required autofocus autocomplete="cus_phone" /><br>
                                    <x-input-error :messages="$errors->get('cus_phone')" class="mt-2" />


                                </div>

                                <!-- Email Address -->
                                <div>
                                    <label for="email">Email:<span class="required"> *</span></label><br>
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autocomplete="cus_name" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>


                                <div>
                                    <label for="cus_dob">Ngày sinh (DD/MM/YYYY):<span class="required">
                                            *</span></label>
                                    <input type="date" id="cus_dob" name="cus_dob" required />
                                    <x-input-error :messages="$errors->get('cus_dob')" class="mt-2" />

                                    <div class="gender-container">
                                        <input type="radio" class="round" id="gender-male" name="cus_gender"
                                            value="men">
                                        <label for="gender-male" class="gender-label">Nam</label>

                                        <input type="radio" class="round" id="gender-female" name="cus_gender"
                                            value="women">
                                        <label for="gender-female" class="gender-label">Nữ</label>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div>
                                    <label for="password">Mật khẩu:<span class="required"> *</span></label> <br>
                                    <input id="password" class="form-control" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div>
                                    <label for="password_confirmation">Xác nhận mật khẩu:<span class="required"> *</span></label><br>
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <label for="agreelaw" class="law">Bấm ĐĂNG KÝ đồng nghĩa với việc bạn đồng ý với <span>điều khoản sử dụng</span> của chúng tôi.</label>
                                
                                <button class="submit" id="registerSubmit" type="submit">        
                                    <span>ĐĂNG KÝ</span> 
                                </button>
                            </form>
                        </div>                                    
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
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  

  <!-- js login/regis -->
  <script>

      let login = document.querySelector('.form-header .login');
      let regis = document.querySelector('.form-header .regis');
      let loginForm = document.querySelectorAll('.form-content .form .login');
      let regisForm = document.querySelectorAll('.form-content .form .regis');

      regis.onclick = () =>{
      regis.classList.add('active');
      login.classList.remove('active');

      loginForm.forEach(login =>{ login.style.display = 'none' });
      regisForm.forEach(regis =>{ regis.style.display = 'block' });
      };

      login.onclick = () =>{
      regis.classList.remove('active');
      login.classList.add('active');

      loginForm.forEach(login =>{ login.style.display = 'block' });
      regisForm.forEach(regis =>{ regis.style.display = 'none' });
      };

  </script>

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


