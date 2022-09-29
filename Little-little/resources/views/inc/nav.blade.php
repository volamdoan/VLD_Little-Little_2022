<nav class="navbar navbar-expand-lg text-white">
    <a class="navbar-brand" href="http://127.0.0.1:8000/home" style="padding-top: 0 !important;"><img src="{{ asset('img/logo.svg') }}" style="width: 195px;
        margin-top: -5px;" alt=""></a>
    <div style="width: 10rem;"></div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav header-nav mr-auto text-capitalize">
            <li class="nav-item active mx-4">
                <a class="nav-link px-3 py-1 text-white" href="{{ route('home')}}">trang chủ<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link px-3 py-1 text-white" href="{{ route('event')}}">sự kiện</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link px-3 py-1 text-white" href="{{route('contact')}}">liên hệ</a>
            </li>
        </ul>    
    </div>
    <div class="header-phone">
        <svg style="border: 1px solid white;
        border-radius: 21px;
        padding: 7px;
        width: 30px;
        height: 30px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-telephone-outbound" viewBox="0 0 16 16">
            <path
                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
        </svg> <a class="text-white" href="">0909xxxxx</a>
    </div>
</nav>