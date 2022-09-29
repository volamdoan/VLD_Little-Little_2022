<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <div class="body-bg">
        <div class="bg">
            <div class="header-top">
                <div class="container">
                  @include('inc.nav')
                </div>
            </div>
            <div class="pb-5">
                <div class="article-top">
                    <div class="container">
                        <div class="row">
                            <div class="article-top-left col-sm-3">
                                <img class="article-left-1" src="/img/ĐẦM SEN.svg" alt="">
                                <img class="article-left-2 pt-2" src="/img/logo-ds.svg" alt="">
                                <img class="article-left-3 pt-1" src="/img/PARK.svg" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img class="article-top-4" src="/img/18451 [Converted]-06 1.svg" alt="">
                            </div>
                            <div class="col-sm-5">
                                <img class="article-top-6" src="/img/render fix hair 1.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7" style="z-index: 100;">
                                <div class="article-middle-bg-1 px-3 py-2">
                                    <div class="article-middle-dashed-1 px-4 py-3">
                                        <img class="article-middle-5" src="/img/Lisa_Arnold_Lay_Do_F2 3.svg" alt="">
                                        <div class="article-middle-p text-dark">
                                            <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.</p>
                                        </div>
                                        <div class="article-middle-list py-3">
                                            <div class="article-middle-list-item pb-1">
                                                <img src="/img/star.png" alt="">
                                                <a class="text-dark text-lorem" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            </div>
                                            <div class="article-middle-list-item pb-1">
                                                <img src="/img/star.png" alt="">
                                                <a class="text-dark text-lorem" href="" style="font-weight:bold;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            </div>
                                            <div class="article-middle-list-item pb-1">
                                                <img src="/img/star.png" alt="">
                                                <a class="text-dark text-lorem" href="" style="font-weight:bold;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class="article-top-7" src="/img/18451 [Converted]-04 1.svg" alt="">
                            <div class="col-sm-5"style="padding-right: 0 !important;">
                                <!-- <img class="article-middle-4" src="/img/Vector-cycle.svg" alt=""> -->
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2">
                                        <img class="article-middle-3" src="/img/ticket.svg" alt="">
                                        <div style="height:20px"></div>
                                        <form action="{{ route('checkout') }}" method="post" style="position:relative ;" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="form-group col-md-11 my-2 mx-3">
                                                <select class="form-select" name="event_id" aria-label="Default select example">
                                                    @foreach ($event as $item)
                                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                                    @endforeach
                                                        
                                                </select>
                                                    <div class="text-danger"></div>
                                            </div>
                                            <div class="form-row d-flex my-2 mx-3">
                                                <div class="form-group col-md-6">
                                                <input type="number" value="" name="quanti" class="form-control" id="inputEmail4" placeholder="Số lượng">
                                                <div class="text-danger">
                                                </div>
                                                </div>
                                                <div class="form-group mx-4 col-md-6">
                                                    <div class="date-wrap">
                                                        <input name="hsd" class="form-control" type="date">
                                                            <div class="text-danger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group my-2 mx-3">
                                                <input type="text" class="form-control" value="" name="name" id="inputAddress" placeholder="Họ tên">
                                                    <div class="text-danger"></div>
                                            </div>
                                            <div class="form-group my-2 mx-3">
                                                <input type="text" class="form-control" value="" name="phone" id="inputAddress2" placeholder="Số điện thoại">
                                                    <div class="text-danger"></div>
                                            </div>
                                            <div class="form-group my-2 mx-3">
                                                <input type="email" value="" class="form-control"  name="email" id="inputAddress2" placeholder="Địa chỉ Email">
                                                    <div class="text-danger"></div>
                                            </div>
                                            <button type="submit" class="btn">  
                                                <img src="/img/dat-ve.png" style="       width: 302px;
                                                position: absolute;
                                                bottom: -46px;
                                                left: 100px;" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <img class="article-top-8" src="/img/18451 [Converted]-03 1.svg" alt="">
                                <img class="article-top-9" src="/img/18451 [Converted]-05 1.svg" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/swiper.js') }}" defer></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
</html>