<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alexandria - Rent a Book</title>
    <link rel="stylesheet preload" as="style" href="{{asset('css/preload.min.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/icomoon.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/libs.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/shop-list.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<x-main-header></x-main-header>

<header class="page" style="background-image: url('{{asset('images/header.jpg')}}');">
    <div class="container">
        <div class="page_title">
            <div class="page_title-icon rotate shape">
                <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M42.993 69L34.5 51.2698L26.007 69L16.1104 64.9008L22.6419 46.3582L4.09932 52.8899L0 42.993L17.7302 34.5L0 26.007L4.09932 16.1103L22.6419 22.6418L16.1104 4.09921L26.007 0L34.5 17.7302L42.993 0L52.8899 4.09921L46.3582 22.6418L64.9008 16.1103L69 26.007L51.2698 34.5L69 42.993L64.9008 52.8899L46.3582 46.3582L52.8899 64.9008L42.993 69Z"
                        fill="currentColor"
                    />
                </svg>
            </div>
            <h1 class="page_title-title outlined outlined--white" data-aos="fade-left">Rent a Book</h1>
            <h2 class="page_title-subtitle" data-aos="fade-left" data-aos-delay="50">
                Find your next chapter
            </h2>
        </div>
    </div>
</header>

<main class="shop">
    <!--  shop main content start  -->
    <div class="container">
        <div class="shop_panel">
        </div>
        <div class="container_wrapper container_wrapper--list">
            <div class="block">
                @foreach($rentals as $rental)
                    <ul class="shop_list observingArea">
                        <li class="shop_list-item">
                            <div class="media">
                                <div class="media_slider media_slider--single media_slider--single--1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            @php
                                                $path = $rental->book->image ? 'storage/' . $rental->book->image : 'images/nocover.jpg';
                                            @endphp
                                            <picture>
                                                <source
                                                    data-srcset="{{ $path }}"
                                                    srcset="{{ $path }}"
                                                    type="image/webp"
                                                />
                                                <img
                                                    class="lazy"
                                                    data-src="{{ $path }}"
                                                    src="{{ $path }}"
                                                    alt="Book"
                                                />
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main">
                                <div class="main_header">
                                    <span class="label">{{$rental->book->author}}</span>
                                    <a class="title h4">{{$rental->book->title}}</a>
                                </div>
                                <div class="main_footer">
                                    <div class="main_footer-id"><span class="title">Descripción:</span></div>
                                    <pre class="main_footer-paragraph"></pre>
                                    <ul class="main_footer-list">
                                        <li class="main_footer-list_item">
                                            <i class="icon">- ISBN:</i> {{$rental->book->ISBN}}
                                        </li>
                                        <li class="main_footer-list_item">
                                            <i class="icon">- Edition:</i> {{$rental->book->edition}}
                                        </li>
                                        <li class="main_footer-list_item">
                                            <i class="icon">- Publisher:</i> {{$rental->book->publisher}}
                                        </li>
                                        <li class="main_footer-list_item">
                                            <i class="icon">- Pages:</i> {{$rental->book->pages}}
                                        </li>
                                    </ul>
                                    @if(auth()->check())
                                    <div class="wrapper d-flex">
                                        <form action="{{ route('rentals.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="rental_copy_id" id="rental_copy_id" value="{{$rental->id}}">
                                            <button type="submit" class="btn btn--black btn--shop addToCart" href="{{ route('rentals.store') }}">
                                            <span class="text">Rent for 15 days</span>
                                            <i class="icon icon-bag"></i>
                                        </button>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>

        </div>
        <div class="shop_panel">
        </div>
    </div>

    <x-main-footer></x-main-footer>
</main>
<button class="scrollTrigger" id="scrollTrigger"><i class="icon-to-top"></i></button>
<script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
<script src="https://www.youtube.com/player_api"></script>

<script src="{{asset('js/common.min.js')}}"></script>
<script src="{{asset('js/lottie.min.js')}}"></script>

<script src="{{asset('js/shop_list.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successMessage = @json(session('success'));

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: successMessage,
            });
        }
    });
</script>
</body>
</html>
