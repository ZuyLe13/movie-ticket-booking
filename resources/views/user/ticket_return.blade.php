<link
rel="stylesheet"
type="text/css"
href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
/>
<link rel="stylesheet" href={{ asset('css/payment_return.css') }}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<section class="booking-body">
<div class="top-content">
{{-- <table class="text-center">
    <tr>
    <td>
    <span class="form-header--unselected ">CHỌN VÉ</span>
    </td>
    <td>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="56" viewBox="0 0 32 56" fill="none">
        <path d="M2 54L29.2108 28.7328C29.6369 28.3372 29.6369 27.6628 29.2108 27.2672L16 15L2 2" stroke="black" stroke-opacity="0.5" stroke-width="3" stroke-linecap="round"/>
    </svg>              </td>
    <td>
    <span class="form-header--unuselected ">THANH TOÁN</span>
    </td>
    <td>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="56" viewBox="0 0 32 56" fill="none">
        <path d="M2 54L29.2108 28.7328C29.6369 28.3372 29.6369 27.6628 29.2108 27.2672L16 15L2 2" stroke="black" stroke-opacity="0.5" stroke-width="3" stroke-linecap="round"/>
    </svg>
    </td>
    <td> 
    <span class="form-header--selected ">HOÀN TẤT</span>
    </td>
</tr>
</table> --}}
</div>
<!--Payment-->
    <div class="container">
        <div class="left-content">
            <div class="qr-code">
              <?php
              use SimpleSoftwareIO\QrCode\Facades\QrCode;
              $qrCode = QrCode::size(250)->encoding('UTF-8')->generate(json_encode($data,true));
              $qrCodeBase64 = base64_encode($qrCode);

              ?>
              <img src="data:image/png;base64,{{ $qrCodeBase64 }}" alt="QR Code">
            </div>
        </div>
        <div class="right-content">
            <div class="instruction">
              <p class="info">THÔNG TIN VÉ XEM PHIM </p><hr>
                <table>
                  <tr>
                    <td><p class="label">Mã vé xem phim:</p></td>
                    <td><span id="bi_id">
                      <?php
                                  $ticket = json_decode($data['Tickets id']);
                                  $count = count($ticket);
                                  $index = 0;
                                  ?>

                                  @foreach ($ticket as $s)
                                      {{ $s }}@if (++$index !== $count)
                                          ,
                                      @endif
                                  @endforeach
                        </span></span> </td>
                  </tr>
                  <tr>
                    <td><p class="label">Tên phim:</p></td>
                    <td><span id="mv_name">
                      {{$data['Movie']  }}
                    </span> </td>
                  </tr>
                  <tr>
                    <td><p class="label">Suất chiếu:</p></td>
                    <td><span id="sl_id">
                      {{$data['Start']  }}
                    </span> </td>
                  </tr>
                  <tr>
                    <td><p class="label">Phòng:</p></td>
                    <td><span id="r_id">
                      {{$data['Room']  }}
                    </span> </td>
                  </tr>
                  <tr>
                    <td><p class="label">Số ghế:</p></td>
                    <td><span id="st_id">
                      <?php
                                  $seat = json_decode($data['Seats']);
                                  $count = count($seat);
                                  $index = 0;
                                  ?>

                                  @foreach ($seat as $s)
                                      {{ $s }}@if (++$index !== $count)
                                          ,
                                      @endif
                                  @endforeach
                    </span> </td>
                  </tr>
                  <tr>
                    <td><p class="label">Thời gian thanh toán:</p></td>
                    <td><span id="bi_date">
                      {{$data['Transaction date']  }}
                    </span> </td>
                  </tr>
                  <tr>
                    <td><p class="label">Tổng tiền:</p></td>
                    <td><span id="bi_value">
                      {{$data['Total'] }}
                    </span> </td>
                  </tr>
                </table>
            </div>
        </div>
    </div>
    <p class="note">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi. Chúc bạn có trải nghiệm xem phim vui vẻ.</p>
</section>