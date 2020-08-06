<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .header {
            position: relative;
            width: 100%;
            min-height: 100px;
            max-height: 100%;
            background: #27ae60;
        }

        #nav {
            position: absolute;
            min-height: 80px;
            top: 10px;
        }

        .ghtk-box {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .logo-box {
            width: 100%;
            position: relative;
        }

        .ghtk-icon {
            position: absolute;
            width: 55px;
            top: -10px;
            left: 30px;
        }

        .ghtkvn-text {
            position: absolute;
            top: 0px;
            left: 98px;
        }

        .ghtk-text {
            font-size: 11px;
            position: absolute;
            top: 22px;
            left: 105px;
        }

        .fieldset-box {
            margin-top: 50px;
        }

        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
            width:auto;
            padding:0 10px;
            border-bottom:none;
        }

        .form-box {
        }

        .form-group input {
            border-radius: 3px !important;
        }

        ol li{
            list-style:none;
        }

        .address-box {
            border-radius: 3px;
            margin: 0;
            padding: 0;
        }

        .city-box {
            border-radius: 3px;
            margin: 0;
            padding: 0;
        }

        .address-box #inputAddress {
            margin-bottom: 15px;
        }

        .city-box #inputCity {
            margin-bottom: 15px;
        }

        #address li {
            padding: 5px;
            cursor: pointer;
        }

        #city li {
            padding: 5px;
            cursor: pointer;
        }

        #address li:hover {
            background-color: lightskyblue;
        }

        #city li:hover {
            background-color: lightskyblue;
        }

        #nav li {
            margin-top: 10px;
            min-height: 60px;
            display: inline-block;
        }

        .ghtk-li {
            border-right: 1px solid black;
            width: 350px;
        }

        .shop-li {
            margin-left: 15px;
            width: 500px;
        }

        .shop-li span {
            font-size: 12px;
            color: white;
        }
    </style>
    <div class="header">
        <div id="nav">
            <ul>
                <li class="ghtk-li">
                    <div class="ghtk-box">
                        <div class="logo-box">
                            <img src="logo.png" alt="ghtk-image" class="ghtk-icon">
                            <h5 class="ghtkvn-text"><b>Giaohangtietkiem.vn</b></h5>
                            <span class="ghtk-text"><i>Mạng chuyển phát hàng nhanh nhất</i></span>
                        </div>
                    </div>
                </li>
                <li class="shop-li">
                    <div>
                        <h6>Xin chào! S23304 - 2SHOP TEST & KHÔNG LẤY &&</h6>
                        <span><u>Sửa thông tin cửa hàng</u></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="fieldset-box">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border"><span>Đơn hàng 1</span></legend>
                <div>
                    <span>Thông tin người nhận hàng</span>
                </div>
                <div class="form-box">
                    <form>
                        <div class="form-group">
                            <div class="address-box">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Địa chỉ">
                                <div id="list-address-box">
                                    <ol id="address" >
                                    </ol>
                                </div>
                            </div>

                            <div class="city-box">
                                <input type="text" class="form-control" id="inputCity" placeholder="Thành phố">
                                <div id="list-city-box">
                                    <ol id="city">
                                    </ol>
                                </div>
                            </div>

                            <div class="district-box">
                                <input type="text" class="form-control" id="inputDistrict" placeholder="(Bấm để chọn quận/huyện)">
                                <div id="list-district-box">
                                    <ol id="district">
                                    </ol>
                                </div>
                            </div>

                            <div class="wards-box">
                                <input type="text" class="form-control" id="inputWards" placeholder="(Bấm để chọn phường/xã)">
                                <div id="list-wards-box">
                                    <ol id="wards">
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
</body>
<script>
    $(document).ready(function (){
        callAddressAPi();
        callCityAPi();

        function callAddressAPi() {
            var keyword = '';
            var url     = '';
            $('#inputAddress').on('keyup',function (){
                $('.address-box').css('border', '');
                $('#address').children().remove();
                keyword = $(this).val();

                if(keyword !== '') {
                    url = `http://172.16.71.93:8080/app.aspx?action=searchaddress&keyword=${keyword}`;
                }else {
                    url = '';
                }

                $.getJSON(url, function (respond) {
                    if(respond && respond['status'] == 'ok') {
                        respond['results'].forEach(function (e){
                            $('#address').append(`<li>${e['FullName']}</li>`);
                        });
                        $('#list-address-box').show();
                        $('.address-box').css('border', '1px solid #ced4da');
                        $('.address-box').css('margin-bottom', '15px');
                    }
                });


            });

            $("#address").on('click','li',function (){
                $('#inputAddress').val($(this).text());
                $('#list-address-box').css('display', 'none');
                $('.address-box').css('border', '');
                $('#inputAddress').css('border', '1px solid #ced4da');
            });
        }

        function callCityAPi() {
            var keyword = '';
            var url     = '';
            $('#inputCity').on('keyup',function (){
                $('.city-box').css('border', '');
                $('#city').children().remove();
                keyword = $(this).val();

                if(keyword !== '') {
                    url = `http://172.16.71.93:8080/app.aspx?action=searchaddress&keyword=${keyword}`;
                }else {
                    url = '';
                }

                $.getJSON(url, function (respond) {
                    if(respond && respond['status'] == 'ok') {
                        respond['results'].forEach(function (e){
                            $('#city').append(`<li>${e['Name']}</li>`);
                        });
                        $('#list-city-box').show();
                        $('.city-box').css('border', '1px solid #ced4da');
                        $('.city-box').css('margin-bottom', '15px');
                    }
                });


            });

            $("#city").on('click','li',function (){
                $('#inputCity').val($(this).text());
                $('#list-city-box').css('display', 'none');
                $('.city-box').css('border', '');
                $('#inputCity').css('border', '1px solid #ced4da');
            });
        }
    });
</script>
</html>