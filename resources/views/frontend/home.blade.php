@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <section>
        <div class="section--default">
            <div class="c-carousel carousel--home" data-interval = "5000">
                    <div class="c-carousel-item active">
                        <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="">
                    </div>
                    <div class="c-carousel-item">
                        <img src="{{ asset('frontend/images/banner2.jpg') }}" alt="">
                    </div>
                    <div class="c-carousel-item">
                        <img src="{{ asset('frontend/images/banner3.jpg') }}" alt="">
                    </div>
                <div class="c-carousel-indicators">
                    <ul>
                        <li class="c-carousel-indicator-li active"></li>
                        <li class="c-carousel-indicator-li"></li>
                        <li class="c-carousel-indicator-li"></li>
                    </ul>
                </div> 
            </div>
        </div>
    </section>
    <section>
        @foreach($categories as $category)
        @if(!empty($category->products))
        <div class="container section--default mt-5">
            <div class="mt-5">
                <p class="home-product__name">{{ $category->name }}</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
                <p class="text-center">{{ $category->description }}</p>
            </div>
            <div class="row">
                @foreach($category->products->take(8) as $product)
                    <div class="col-md-4 col-sm-6 mt-4">
                        <div class="home--product">
                            <a  href="{{ route('product', ['slug' => $product->slug]) }}">
                                <div class="home--product__img">
                                    <img src="{{ asset($product->thumbnail) }}" alt="Img" class="img-responsive" />
                                </div>
                            </a>
                            <div class="home--product__text">
                                <div class="home--product__title">
                                    <span><a class="home--product__name" href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->name }}</a></span>
                                </div>
                                <div class="home--product__description">
                                    <p class="home--product__location"><strong>V??? tr??:</strong> {{ $product->location }}</p>
                                    <p><strong>T???ng di???n t??ch:</strong> {{ $product->total_area }}</p>
                                    <p class="home--product__type"><strong>Lo???i h??nh: </strong> {{ $product->type }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-3">
                <div class="home--product__view">
                    <a href="{{ route('category', ['slug' => $category->slug]) }}" class="font-weight-bold color--link text-uppercase">
                        Xem t???t c???
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-forward-fill" viewBox="-1 -2 16 16">
                            <path d="M9.77 12.11l4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
                        </svg>
                    </a>   
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </section>
    <section class="mt-30 home--about bg section-bg fill bg-fill bg-loaded">
        <div class="container">
            <div class="mt-5">
                <p class="home--about__title">V??? ch??ng t??i</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
                <p class="text-center">C??NG TY C??? PH???N D???CH V??? V?? ?????U T?? B???T ?????NG S???N</p>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Ch??? t??m</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>Kh??ch h??ng c???a 
                                    <strong>B???t ?????ng S???n "....."</strong>&nbsp;
                                    lu??n ???????c th??nh vi??n c???a c??ng ty ph???c v??? b???ng c??i&nbsp;
                                    <strong>T??M</strong>. Lu??n th???ng th???n, ch??n th??nh ????? ??em ?????n nh???ng gi?? tr??? t???t nh???t cho Kh??ch h??ng c???a m??nh.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Ch??? t??nh</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>L???y ch??? 
                                    <strong>T??N</strong> 
                                    l??m ?????u, giao d???ch c??ng<strong> B???t ?????ng s???n ".....". </strong>
                                    Kh??ch h??ng ???????c ?????m b???o c??c v???n ?????: ch???t l?????ng, gi?? c???, th??? t???c h??? tr??? tr?????c v?? sau qu?? tr??nh giao d???ch c??ng kh??ch h??ng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Ch??? t??i</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>Nh???ng con ng?????i t???i 
                                    <strong>B???t ?????ng s???n "....."</strong>&nbsp;
                                    ?????u l?? nh???ng nh??n <strong>T??I</strong>
                                    , c?? ??am m??, nhi???t huy???t, ki???n th???c ????? tr??? th??nh nh???ng chuy??n vi??n m??i gi???i chuy??n nghi???p h??ng ?????u Vi???t Nam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Ch??? t???m</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>M???c ????ch cu???i c??ng c???a
                                    <strong> B???t ?????ng s???n "....."</strong>&nbsp;
                                    l?? kh???ng ?????nh gi?? tr??? v?????t tr???i c???a b???n th??n, c???a t???p th??? sao cho x???ng&nbsp;
                                    <strong>T???M</strong>&nbsp;l?? ????n v??? ph??n ph???i b???t ?????ng s???n h??ng ?????u Vi???t Nam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-30 home--active bg section-bg fill bg-fill bg-loaded">
        <div class="container">
            <div class="home--active__content mt-5">
                <p class="home--active__title">L??nh v???c ho???t ?????ng</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/titlesc.png') }}" class="d-block" alt="...">
                </p>
                <p class="text-center text-uppercase">L??NH V???C HO???T ?????NG CHUY??N NGHI???P QUA NHI???U N??M HO???T ?????NG</p>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="3 -7 9 30">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">M??I GI???I B???T ?????NG S???N</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                D???ch v??? m??i gi???i v?? t?? v???n b???t ?????ng s???n c???a ch??ng t??i lu??n th???u hi???u nhu c???u, l???a ch???n c???a kh??ch h??ng c?? n??ng l???c ph?? h???p nh???t v???i m???i lo???i ?????t b???t ?????ng s???n.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-check" viewBox="3 -7 9 30">
                                <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">QU???N L?? B???T ?????NG S???N</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Ch??ng t??i c?? ?????i ng?? chuy??n vi??n t?? v???n t???n t??m, gi??u kinh nghi???m s??? gi??p qu?? kh??ch qu???n l?? v?? giao d???ch b???t ?????ng s???n ph?? h???p v???i m???i nhu c???u c???a kh??ch h??ng
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid" viewBox="3 -7 9 30">
                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">CHO THU?? C??N H???</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                V???i m???t quy tr??nh t?? v???n chuy??n nghi???p, ch??ng t??i s??? gi??p kh??ch h??ng cho thu?? v?? thu?? ???????c b???t ????ng s???n ????p ???ng nhu c???u nh?? ??? c???a kh??ch h??ng nhanh nh???t
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-credit-card-2-front" viewBox="3 -7 9 30">
                                <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                                <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">QU???NG C??O B???T ?????NG S???N</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Ch??ng t??i ???? cho ra ?????i h??? th???ng c???ng th??ng tin b???t ?????ng s???n m???t c??ch chuy??n nghi???p v???i ??u ti??n h??ng ?????u l?? qu???ng b?? c??c s???n ph???m b???t ?????ng s???n.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="3 -7 9 30">
                                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">TH??? T???C PH??P L?? NH?? ?????T</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Chuy??n t?? v???n mi???n ph?? v??? nh?? ?????t, nh?? ???, gi???y ph??p, x??y d???ng, ho??n c??ng, tranh ch???p, l??? ph?? tr?????c b??? nh?? ??? ?????t, ????p ???ng m???i quy m?? b???t ?????ng s???n.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-arrow-up" viewBox="3 -7 9 30">
                                <path fill-rule="evenodd" d="M8 11a.5.5 0 0 0 .5-.5V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 .5.5z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">CH??? ?????U T??</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                C??ng Ty C??? Ph???n Vi???t Nh??n B???c Ninh. B???t ?????ng s???n. Mang s??? m???nh v?? tr???ng tr??ch ph??t tri???n B???c Ninh, ch??ng t??i ???????c th??nh l???p v???i nhi???m v??? k???t n???i th??ng tin, ???
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-30 home--event bg section-bg fill bg-fill bg-loaded">
        <div class="container">
            <div class="home--event__content mt-5">
                <p class="home--event__title">TIN T???C V?? S??? KI???N</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
            </div>
           
            <div class="row">
                <div class="col-md-6 col-sm-6 mb-5">
                    <div class="">
                        <div class="row">
                            @foreach($news->take(1) as $items)
                            <div class="">
                                <div class="">
                                    <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                        <img class="home--img-event img-responsive" src="{{ asset($items->thumbnail) }}" class="d-block" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                    <h5 class="home--news__title">
                                        {{ $items->title }} 
                                    </h5>
                                </a>
                                <a class="home--news_content" href="{{ route('news', ['slug' => $items->slug]) }}">
                                    <p class="home--news__text">
                                        {{ $items->short_description }} 
                                    </p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    @foreach($news->take(3) as $index => $items)
                        @if($index > 0)
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <a href="{{ route('news', ['slug' => $items->slug]) }}">        
                                        <img width="750" height="210" class="img-event-right" src="{{ asset($items->thumbnail) }}" class="d-block" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                        <h5 class="home--news__title">
                                            {{ $items->title }}
                                        </h5>
                                    </a>
                                    <a class="home--news_content" href="{{ route('news', ['slug' => $items->slug]) }}">
                                        <p class="home--news__text">
                                            {{ $items->short_description }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container">
            <div class="mt-5" style="color: #FFFFFF">
                <p class="text-center font-weight-bold text-uppercase" style="font-size: 25px; color: #f48120">C??C ?????I T??C NG??N H??NG H??? TR??? VAY</p>
                <p>
                    <img class="img-about" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/vietin-bank.png') }}" class="d-block" alt="...">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/vietcom-bank.png') }}" class="d-block" alt="...">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/public-bank.png') }}" class="d-block" alt="...">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/tp-bank.jpg') }}" class="d-block" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection