<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    {{-- <link rel="stylesheet" type="text/css" href="event.css"> --}}
    
          <!----------------- event --------------------->
         <div class="event-heading">
            <h2>CÁC CHƯƠNG TRÌNH KHUYẾN MÃI</h2>

         </div>

         <section id="event-list">
            <!-------- box 1 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/15.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Happy Monday </strong>
                </a>
            </div>   

            <!-------- box 2 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/16.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Học sinh - sinh viên </strong>
                </a>
            </div>
                  
            <!-------- box 3 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/17.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Flash sale 11.11 </strong>
                </a>
            </div>
                  
            <!-------- box 4 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/18.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Grand Opening </strong>
                </a>
            </div>
                  
            <!-------- box 5 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/19.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Merry Christmas </strong>
                </a>
            </div>
                  
            <!-------- box 6 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/20.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Black Friday </strong>
                </a>
            </div>
                  
            <!-------- box 7 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/1.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Chương trình tích điểm </strong>
                </a>
            </div>
                  
            <!-------- box 8 --------->
            <div class="event-box">
              <!-- img -->
              <div class="event-img">
                <img src="{{ asset('images/dashboard/2.png') }}" alt="">
              </div>

              <!-- text -->
                <a href="">
                  <strong> Quà tặng sinh nhật </strong>
                </a>
            </div>
          </section>

    <button class="backtop">         
        <a href="#top"><i class="fa-solid fa-arrow-up fa-2x"></i></a>
    </button>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script src="menu.js"></script>


</x-app-layout>