{{-- @extends ('user.main')



@section('content')
    

@endsection --}}

<x-app-layout>

    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <section class="booking-body">
        <div class="top-content">
            <table class="text-center">
                <tr>
                    <td>
                        <span class="form-header--unselected">CHỌN VÉ</span>
                    </td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="56" viewBox="0 0 32 56"
                            fill="none">
                            <path d="M2 54L29.2108 28.7328C29.6369 28.3372 29.6369 27.6628 29.2108 27.2672L16 15L2 2"
                                stroke="black" stroke-opacity="0.5" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </td>
                    <td>
                        <span class="form-header--selected">THANH TOÁN</span>
                    </td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="56" viewBox="0 0 32 56"
                            fill="none">
                            <path d="M2 54L29.2108 28.7328C29.6369 28.3372 29.6369 27.6628 29.2108 27.2672L16 15L2 2"
                                stroke="black" stroke-opacity="0.5" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </td>
                    <td>
                        <span class="form-header--unselected ">HOÀN TẤT</span>
                    </td>
                </tr>
            </table>
        </div>
        <!--Thông tin thanh toán-->
        <div class="container">
            <div class="left-content">
                <div class="info-filled">
                    <span class="description">THÔNG TIN NGƯỜI NHẬN VÉ</span><br>
                    <table>
                        <tr>
                            <td colspan="2">
                                <label for="name">
                                    <p class="label">Họ và tên: <span class="required">*</span></p>
                                </label>
                                @if (Auth::check())
                                    <input id="name" type="text" class="fill" name="name"
                                        value="{{ Auth::check() ? Auth::user()->cus_name : '' }}">
                                @else
                                    <input id="name" type="text" class="fill" name="name"
                                        placeholder="Nhập họ tên">
                                @endif

                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label for="phone">
                                    <p class="label">SĐT: <span class="required">*</span></p>
                                </label>

                                @if (Auth::check())
                                    <input id="phone" type="text" class="fill" name="phonenum"
                                        value="{{ Auth::check() ? Auth::user()->cus_phone : '' }}">
                                @else
                                    <input id="phone" type="text" class="fill" name="phonenum"
                                        placeholder="Nhập số điện thoại">
                                @endif
                            </td>
                            <td>
                                <label for="email">
                                    <p class="label">Email: <span class="required">*</span></p>
                                </label>


                                @if (Auth::check())
                                    <input id="email" type="text" class="fill" name="email"
                                        value="{{ Auth::check() ? Auth::user()->email : '' }}" style="width: 300px;">
                                @else
                                    <input id="email" type="text" class="fill" name="email"
                                        placeholder="Nhập email của bạn" style="width: 300px;">
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="payment-method">
                    <span class="description">HÌNH THỨC THANH TOÁN</span><br>
                    <hr>
                    <input type="radio" class="round" id="paypal" name="payment" value="Paypal">
                    <i class="fa-solid fa-building-columns"></i>
                    <label for="paypal" class="payment-label">Thanh toán thông qua Paypal</label>
                    {{-- <p for="paypal" class="payment-label">Thanh toán thông qua Paypal</p> --}}

                    <br>

                    <input type="radio" class="round" id="vnpay" name="payment" value="VNPay">
                    <img src="images/invoice/vnpay.jpg" style="width: 20px;" alt="">
                    <label for="vnpay" class="payment-label">Thanh toán bằng VNPay</label>
                    {{-- <p for="vnpay" class="payment-label">Thanh toán bằng VNPay</p> --}}

                    <br>

                    <input type="radio" class="round" id="momo" name="payment" value="Momo">
                    <img src="images/invoice/momo.png" style="width: 20px;" alt="">
                    <label for="momo" class="payment-label">Thanh toán trực tuyến MoMo</label>
                    {{-- <p for="momo" class="payment-label">Thanh toán trực tuyến MoMo</p> --}}

                    <br>
                </div>
            </div>
            <div class="right-content">
                <form action="/user/payment" method="POST" class="info-show">
                    @csrf

                    <table>
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: left;">
                                    <span class="description">THÔNG TIN NGƯỜI NHẬN VÉ</span>
                                    <hr>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left label"><i class="fa-solid fa-user"></i>
                                    <p> Họ tên</p>
                                </td>
                                <td class="text-right"><span id="nameSpan"></span></td>
                            </tr>
                            <tr>
                                <td class="text-left label"><i class="fa-solid fa-envelope"></i>
                                    <p> Email</p>
                                </td>
                                <td class="text-right"><span id="emailSpan"></span></td>
                            </tr>
                            <tr>
                                <td class="text-left label"><i class="fa-solid fa-phone"></i>
                                    <p> Điện thoại</p>
                                </td>
                                <td class="text-right"><span id="phoneSpan"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: left;">
                                    <span class="description">HÌNH THỨC THANH TOÁN</span>
                                    <hr>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h4 id="pay by" name="pay by"></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: left;">
                                    <span class="description">THÔNG TIN ĐẶT VÉ</span>
                                    <hr>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">
                                    <p>Ghế</p>
                                </td>
                                <td class="text-right">
                                    <p>Số lượng</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" name="seats"><span>
                          
                                        <?php
                                        $seat = json_decode($seats);
                                        $count = count($seat);
                                        $index = 0;
                                        ?>

                                        @foreach ($seat as $s)
                                            {{ $s }}@if (++$index !== $count)
                                                ,
                                            @endif
                                        @endforeach
                                    </span>
                                </td>
                                <td class="text-right" name="num_seats"><span>{{ $count }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Tổng cộng</strong></td>
                                <td class="text-right"><strong>
                                        <span name="total payment">{{ $totalpay }}</span>
                                        <span>VND</span>
                                    </strong></td>
                            </tr>
                        </tbody>
                        {{-- @if (!empty($payBy))
                        <button type="submit" name="submit" value="submit">HOÀN TẤT</button>
                        @endif --}}
                        <button id="submit-button" type="submit" name="redirect" value="submit"
                            style="display: none;">HOÀN TẤT</button>

                        <input type="hidden" name="total_payment" value="{{ $totalpay }}">
                        <input type="hidden" name="count" value="{{ $count }}">
                        <input type="hidden" name="hidden_email"
                            value="{{ Auth::check() ? Auth::user()->email : '' }}">
                        <input type="hidden" name="slotid" value="{{ $slot->sl_id }}">
                        <input type="hidden" name="slotprice" value="{{ $slot->sl_price }}">
                        <input type="hidden" name="seats" value="{{ $seats }}">
                        <input type="hidden" name="movieid" value="{{ $movie->mv_id }}">
                        <input type="hidden" name="roomid" value="{{ $roomid }}">



                    </table>
                </form>


            </div>
        </div>

        <div class="sbm-btn"><button type="submit" name="submit" value="submit">HOÀN TẤT</button></div>
        <div class="bottom-content">
            <div class="format-bg-top"></div>
            <div class="minicart-wrapper">
                <ul>
                    <li class="item">
                        <div class="product-detail">
                            <table class="info-wrapper">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src={{ $movie->mv_link_poster }} alt="{{ $movie->mv_id }}">
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="item">
                        <div class="product-detail">
                            <table class="info-wrapper">
                                <tbody>
                                    <tr>
                                        <td class="label" colspan="2">
                                            {{ $movie ? $movie->mv_name : 0 }}
                                    <tr>
                                        <td class="label">Suất chiếu</td>
                                        <div id="time"></div>
                                    </tr>
                                    <tr>
                                        <td class="label">Ngày:</td>
                                        <td>
                                            <div id="date"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">Rạp:</td>
                                        <td> {{ $roomid }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="item">
                        <div class="product-detail">
                            <table class="info-wrapper">
                                <tr><td class="label">THỜI GIAN GIỮ GHẾ</td></tr>
                                <tr><td><span id="timer"></span></td></tr>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="format-bg-bottom"></div>
        </div>
    </section>

    <script src="/template/js/invoice.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sl_start = "{{ $slot->sl_start }}";
            var dateTime = new Date(sl_start);

            var time = dateTime.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            var date = dateTime.toLocaleDateString();

            document.getElementById('time').innerHTML = time;
            document.getElementById('date').innerHTML = date;
        });
    </script>

</x-app-layout>
