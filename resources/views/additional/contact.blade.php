<x-app-layout>
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  {{-- <link rel="stylesheet" type="text/css" href="contact.css"> --}}
  
       <!----------------- Banner ------------->
       <div class="body-banner">
        <div class="banner">
          <div class="banner-slider">
            <div class="banner-img"> 
              <a href="#b1"> <img src="{{ asset('images/dashboard/1.png') }}" alt=""> </a>
            </div>
          </div>
          <div class="banner-slider">
            <div class="banner-img"> 
              <a href="#b2"> <img src="{{ asset('images/dashboard/2.png') }}" alt=""> </a>
            </div>
          </div>
          <div class="banner-slider">
            <div class="banner-img"> 
              <a href="#b3"> <img src="{{ asset('images/dashboard/3.png') }}" alt=""> </a>
            </div>
          </div>
          <div class="banner-slider">
            <div class="banner-img"> 
              <a href="#b4"> <img src="{{ asset('images/dashboard/4.png') }}" alt=""> </a>
            </div>
          </div>
          <div class="banner-slider">
            <div class="banner-img"> 
              <a href="#b5"> <img src="{{ asset('images/dashboard/5.png') }}" alt=""> </a>
            </div>
          </div>
        </div>
      </div>

        <!----------------- contact --------------------->
      <div class="contact">

          <!-- Thông tin liên hệ -->
          <div class="contact-content">
              <h2> LIÊN HỆ VỚI CHÚNG TÔI </h2>

              <div class="contact-info">
                  <h3> THÔNG TIN LIÊN HỆ </h3>
                  <strong> Rạp chiếu phim IS207CINE</strong>
                  <br> <strong> Địa chỉ: </strong> Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh
                  <br> <strong> Email: </strong> IS207CINE@gmail.com
                  <br> <strong> Hotline: </strong> 0974197482
              </div>

              <div class="line"> </div>

              <div class="contact-info">
                  <h3> CHĂM SÓC KHÁCH HÀNG </h3>
                  <strong> Hotline: </strong> 1900 0207
                  <br> <strong> Giờ làm việc </strong> 8:00 - 22:00
                  <br> Tất cả các ngày bao gồm cả Lễ Tết
                  <br> <strong> Email hỗ trợ: </strong> IS207CINE.cskh@gmail.com
              </div>
          </div>

          <div class="split-column">
              <div class="line-column">

              </div>
          </div>

          <!-- Form liên hệ -->
          <div class="contact-form">
              <h2> LIÊN HỆ </h2>
              <div class="form">
                  <form action="" method="post">
                  @csrf
                      <br><label for="cus_name"><strong>Họ và tên:</strong><span class="required"> *</span></label>
                      <input id="cus_name" class="form-control" type="text" name="cus_name" :value="old('cus_name')" required autofocus autocomplete="cus_name" /><br>
                      <x-input-error :messages="$errors->get('cus_name')" class="mt-2" />

                      <label for="cus_phone"><strong>Số điện thoại:</strong><span class="required"> *</span></label>
                      <input id="cus_phone" class="form-control" type="tel" name="cus_phone" :value="old('cus_phone')" required autofocus autocomplete="cus_phone" /><br>
                      <x-input-error :messages="$errors->get('cus_phone')" class="mt-2" />

                      <label for="email"><strong>Email:</strong><span class="required"> *</span></label>
                      <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="cus_name" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                     
                      <br><label for="cus_content"><strong>Nội dung cần liên hệ:</strong><span class="required"> *</span></label>
                      <textarea name="cus_content" id="cus_content" rows="3"></textarea>

                      <button type="submit" class="submit">
                          <span>GỬI</span> 
                      </button>
                  </form>
              </div>

          </div>

      </div>


  <button class="backtop">         
      <a href="#top"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
  </button>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
  <script  >    
              $(document).ready(function(){
              $(".banner").slick({
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true,
                  arrows: false,
                  dots: true,
                  autoplay: true,
                  autoplaySpeed: 3000,
              });
          });
      </script>


</x-app-layout>