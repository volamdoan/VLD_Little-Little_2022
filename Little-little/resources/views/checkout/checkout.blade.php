<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/paymentSlyte.css">
</head>

<body>
    <div class="body-bg">
        <div class="bg">
            <div class="header-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg text-white">
                        <a class="navbar-brand" href="http://127.0.0.1:8000/home" style="padding-top: 0 !important;"><img src="/img/logo.svg" style="width: 60%;" alt=""></a>
                        <div style="width: 10rem;"></div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto text-capitalize">
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/home">trang chủ<span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/events">sự kiện</a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/contact">liên hệ</a>
                                </li>
                        </div>
                        <div class="header-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <a class="text-white" href="">0123456789</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="pb-5">
                <div class="article-top">
                    <div class="container">
                        <div class="row">
                            <div class="article-top-left  d-flex justify-content-center align-item-center">
                                <img class="article-left-1" src="/img/Thanh toán.svg" alt="" style="width: 430px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-main mt-5">
                    <div class="container">
                        <form class="row" method="post" action="{{ route('payment')}}" style="padding-right: 0;" >
                            @csrf
                            <div class="col-sm-8">
                                <div class="article-middle-bg-1 px-3 py-2">
                                
                                    <div class="article-middle-dashed-1 px-4 py-3" style="padding-bottom: 113px !important;">
                                        <img class="article-middle-2" src="/img/thongtingiadinh.svg" alt="">
                                        <img class="article-middle-5" src="/img/Trini_Arnold_Votay1 2.svg" alt="">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="text-dark pb-2" name="option" for="exampleFormControlSelect1">Số tiền thanh toán</label>
                                                <input type="text" value="{{$total}}" name="totalPrice" class="form-control" id="inputEmail4"  >
                                        
                                            </div>
                                            <input type="hidden" value="{{$event_id}}" name="event_id">
                                            <div class="col-md-1"></div>
                                            <div class="form-group  col-md-2">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Số lượng vé</label>
                                                <div class="">
                                                    <input type="number" value="{{$qty}}" name="totalQty"  class="form-control" id="inputDate" placeholder="">
                                                </div>
                                        
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group col-md-4">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Ngày sử dụng</label>
                                                <input type="date" value="{{$hsd}}" name="date" class="form-control"  format="DD/MM/YYYY">
                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-7">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Thông Tin Liên Hệ</label>
                                                <input type="text" value="{{$name}}" name="customer_name" class="form-control" id="inputAddress2" >
                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-4">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Điện Thoại</label>
                                                <input type="text" value="{{$phone}}" name="customer_phone" class="form-control" id="inputAddress2" >
                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group  col-md-7">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Email</label>
                                                <input type="text" value="{{$email}}" name="customer_email" class="form-control" id="inputAddress2" >
                                            
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-sm-4">
                                <img class="article-middle-4" src="/img/Vector-cycle.svg" alt="">
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2">
                                        <img class="article-middle-3" src="/img/thongtinthanhtoan.svg" alt="">
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Số thẻ</label>
                                            <input type="text" class="form-control" name="number" id="inputAddress" placeholder="123 456 789">
                                            @error('number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Họ tên chủ thẻ</label>
                                            <input type="text" class="form-control" id="inputAddress" name="ten" placeholder="NGUYEN VAN A">
                                            @error('ten')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-9 my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Ngày hết hạn</label>
                                            <div class="date-wrap">
                                                <input type="date" class="form-control form-hihi " name="ngay" id="inputDate" placeholder="Ngày sử dụng" format="DD/MM/YYYY">
                                            </div>
                                            @error('ngay')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3 my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">CVV/CVC</label>
                                            <input type="text" min="1" class="form-control" name="CVV" id="inputAddress2" placeholder="...">
                                            @error('CVV')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group d-flex justify-content-center align-item-center">
                                        <button type="submit" class="btn">
                                            <img src="/img/thanhtoan.svg" style="width: 80%;" alt="">
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("#formPayment").addEventListener("submit", function(e) {
        
            e.preventDefault();
            window.location.replace('payment-success.html');
        });
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.js"></script>
</body>

</html>