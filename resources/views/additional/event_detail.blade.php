<x-app-layout>
  <link rel="stylesheet" href="{{ asset('css/event-detail.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="event-detail.css">
    
        <div class="body-banner">
            <div class="banner">
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href=""> <img src="image/1.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href=""> <img src="image/2.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href=""> <img src="image/3.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href=""> <img src="image/4.png" alt=""> </a>
                </div>
              </div>
              <div class="banner-slider">
                <div class="banner-img"> 
                  <a href=""> <img src="image/5.png" alt=""> </a>
                </div>
              </div>
            </div>
          </div>
        
          <div class="event-heading">
            <h2>CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
          </div>

          <div class="event-detail">
                <section class="detail">
                    <div class="detail-img">
                        <!--<img src="image/9.png" alt="">-->
                        <img src="{{$event->ev_link_poster}}" alt="">
                    </div>

                    <div class="detail-content">
                        <h2> {{$event->ev_name}} </h2>
                        <div class="content">
                            <p> <strong> 1. Thời gian chương trình: </strong> Từ {{$event->ev_start}} đến {{$event->ev_end}}</p>
                            <p> <strong> 2. Nội dung: </strong> 
                                <input type="hidden" id="mydetail" value = "{{$event->ev_detail}}">
                                <p id="eventdetail"></p>                        
                            </p>
                            <p> <strong> 3. Điều kiện và điều khoản: </strong> 
                                <input type="hidden" id="myterm" value = "{{$event->ev_term}}">
                                <p id="eventterm"></p>                        
                            </p>
                            
                    
                        </div>
                        
                        <div class="btns">
                            <a href="" clas="booking">Đặt phim ngay</a>
                        </div>
                    </div>
                </section>
          </div>

          <!-- film đang chiếu liên quan -->
          <div class="film-rela">
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
          </div>
    
        <button class="backtop">         
            <a href="#top"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
          </button>

    <div class="footblank"> </div>

    <!-- java -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
        <!-- java banner -->
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
            breakpoint: 801,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 601,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 501,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
    
      });
  });

        </script>


      <script>
    $(document).ready(function() {
      var textareaValue = $("#mydetail").val();
      $("#moviedetail").html(textareaValue);
    })
  </script>

</x-app-layout>
