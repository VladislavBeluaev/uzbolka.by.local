@extends('user.layouts.app_user')
@section('pageTitle', 'Футболки оптом от производителя')
@section('content')
    <section class="main_page">
        <div class="container">
            <div class="banner">
                <p><a href="{{route('user.man_t_shirts')}}"><img src="/images/start_background_banner.jpg" alt="main_background"></a></p>
		<p class="display-none" id="preload"><a href="{{route('user.man_t_shirts')}}">
                        {{--<img src="/images/preloader.gif" alt="preloader">--}}
                        <video autoplay loop muted playsinline>
                            <source src="/images/preloader.webm" type="video/webm">
                            {{--<source src="video.mp4" type="video/mp4">
                            <img src="animated.gif">--}}
                        </video>
                    </a></p>
                {{--
		<p class="display-none" id="preload"><a href="{{route('user.man_t_shirts')}}"><img src="/images/preloader.gif" alt="preloader"></a></p>                
		<p id="text_test">Футболки любой сложности</p>
                <p id="text_button">Заказать сейчас</p>--}}
            </div>
            <h2>Выбор покупателей</h2>
                <div class="cardsSlider">
                    <div class="cardsSlider__content d-flex">
                        @foreach($t_shirts as $t_shirt)
                        <div class="card w-25 d-inline-block text-center">
                            @if($t_shirt->url_prefix==='men')
                            <a href="@productLink(route('user.man_t_shirts'),$t_shirt->routeKeyName)" class="toProductCart">
                                @else
                                    <a href="@productLink(route('user.woman_t_shirts'),$t_shirt->routeKeyName)" class="toProductCart">
                                    @endif
                                <img class="card-img-top"
                                     src="{{asset($t_shirt->img_src)}}"
                                     alt="{{$t_shirt->img_alt}}">
                            </a>
                            <div class="card-body">
                                {{--<div class="customerChoice__rating d-flex align-items-center justify-content-start">
                                    <div class="rating__stars mr-2">
                                        <span class="fas fa-star fa-xs"></span>
                                        <span class="fas fa-star fa-xs"></span>
                                        <span class="fas fa-star fa-xs"></span>
                                        <span class="fas fa-star fa-xs"></span>
                                        <span class="fas fa-star fa-xs"></span>
                                    </div>
                                    <div class="reviews__count">
                                        <span>43 Отзыва</span>
                                    </div>
                                </div>--}}
                                <div class="customerChoice__productDescription mt-1 text-center">
                                    @if($t_shirt->url_prefix==='men')
                                        <a href="@productLink(route('user.man_t_shirts'),$t_shirt->routeKeyName)" class="toProductCart">
                                            @else
                                                <a href="@productLink(route('user.woman_t_shirts'),$t_shirt->routeKeyName)" class="toProductCart">
                                                    @endif
                                        <span>{{$t_shirt->name}}</span>
                                    </a>
                                </div>
                                <div class="productOfDay__currentPrice d-flex align-items-center justify-content-between">
                                    <div><span>6,50 руб.</span></div>
                                    {{--<div><span class="fas fa-cart-plus fa-lg"></span></div>--}}
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <div class="next_btn active">
                        <span class="fas fa-angle-right fa-2x "></span>
                    </div>
                    <div class="prev_btn nonActive">
                        <span class="fas fa-angle-left fa-2x"></span>
                    </div>
                </div>
        </div>
    </section>
@endsection