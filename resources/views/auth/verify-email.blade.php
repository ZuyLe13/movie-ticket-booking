<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/verifyemail.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/login.css') }}"> --}}

    {{-- <div class="noti">
        <p>
            Đã xác nhận tài khoản thành công. Chào mừng bạn đã trở thành thành viên của IS207CINE!
            <br>Để tìm hiểu thêm nhiều thông tin hơn về các phim đang chiếu ở rạp, bạn hãy <a href="..\menu/menu.html">nhấn vào đây</a> để xem nhé!
        </p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Link xác nhận tài khoản vừa được gửi lại vào email của bạn, hãy kiểm tra email nhé.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
    <div class="noti">
        <p>
            Đã xác nhận tài khoản thành công. Chào mừng bạn đã trở thành thành viên của IS207CINE!
            <br>Để tìm hiểu thêm nhiều thông tin hơn về các phim đang chiếu ở rạp, bạn hãy <a href="..\menu/menu.html">nhấn vào đây</a> để xem nhé!
        </p>
    </div> --}}
    <div class="noti">
        
        {{ __('Đăng ký tài khoản thành công. Chúng tôi vừa gửi cho bạn một email xác nhận tài khoản, hãy bấm vào link xác nhận email đó trước khi có thể đăng nhập và tận hưởng quyền lợi thành viên của WCINEMA nhé!') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="noti">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="noti-resend">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="resend">
                <button type="submit">
                    Gửi lại email xác nhận tài khoản
                </button>
            </div>
        </form>

        {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form> --}}
    </div>
  
      <!-- film đang chiếu liên quan -->
      {{-- <div class="film-rela">
        <div class="film-rela-title">
          <button class="rela-title">
            <a href="..\film\film_rc.html" class="r-title"> 
              <strong> PHIM ĐANG CHIẾU </strong>
            </a>
          </button>
        </div>
        <div class="film-rc">
            <div class="film"> 
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f1"> <img src="image/6.png" alt=""> </a> 
              </div>
            </div>
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f2"> <img src="image/7.png" alt=""> </a> 
              </div>
            </div>
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f3"> <img src="image/8.png" alt=""> </a> 
              </div>
            </div>
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f4"> <img src="image/10.png" alt=""> </a> 
              </div>
            </div>
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f5"> <img src="image/11.png" alt=""> </a> 
              </div>
            </div>
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f6"> <img src="image/12.png" alt=""> </a> 
              </div>
            </div>
            <div class="film-slider">
              <div class="film-img"> 
                <a href="#f7"> <img src="image/13.png" alt=""> </a> 
              </div>
            </div>
          </div>
        </div>
      </div> --}}

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


    <!-- java film -->
    <script>
        $(document).ready(function(){
  
  $(".film").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
      prevArrow:"<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow:"<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",

      responsive: [
        {
          breakpoint: 1201,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 951,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 751,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
  
    });
});

      </script>
</x-guest-layout>









{{-- <x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="mb-4 text-sm text-gray-600">
        
        {{ __('Đăng ký tài khoản thành công. Chúng tôi vừa gửi cho bạn một email xác nhận tài khoản, hãy bấm vào link xác nhận email đó trước khi có thể đăng nhập và tận hưởng quyền lợi thành viên của WCINEMA nhé!') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}
