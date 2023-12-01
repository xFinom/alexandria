<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Alexandria</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet preload" as="style" href="{{asset('css/preload.min.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/icomoon.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/libs.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
</head>

<body>

<x-main-header></x-main-header>

<main>
    <!--  features 1 section start  -->
    <section class="features features--1 section">
        <div class="container">
            <div class="features_media d-flex">
                <div class="features_media-item stories" data-aos="zoom-in" data-aos-duration="600">
                    <picture>
                        <source data-srcset="{{asset('images/undraw_reading_time_re_phf7.svg')}}" type="image/webp" />
                        <img class="lazy" data-src="{{asset('images/undraw_book_reading_re_fu2c.svg')}}" src="{{asset('images/undraw_book_reading_re_fu2c.svg')}}" alt="media" />
                    </picture>
                </div>
            </div>
            <div class="features_main">
                <div class="features_main-icon rotate shape">
                    <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42.993 69L34.5 51.2698L26.007 69L16.1104 64.9008L22.6419 46.3582L4.09932 52.8899L0 42.993L17.7302 34.5L0 26.007L4.09932 16.1103L22.6419 22.6418L16.1104 4.09921L26.007 0L34.5 17.7302L42.993 0L52.8899 4.09921L46.3582 22.6418L64.9008 16.1103L69 26.007L51.2698 34.5L69 42.993L64.9008 52.8899L46.3582 46.3582L52.8899 64.9008L42.993 69Z"
                            fill="currentColor"
                        />
                    </svg>
                </div>
                <h2 class="features_main-title h1 outlined outlined--black" data-aos="fade-left">Alexandria</h2>
                <h2 class="features_main-subtitle" data-aos="fade-left" data-aos-delay="50">Find Your Next Chapter</h2>
                <p class="features_main-text text--md" data-aos="fade-left" data-aos-delay="100">
                    Rent or Buy, Your Story Awaits!
                </p>
            </div>
        </div>
    </section>
    <!--  features 1 section end  -->
</main>

<x-main-footer></x-main-footer>

<script src="https://www.youtube.com/player_api"></script>
<script src="{{asset('js/common.min.js')}}"></script>
<script src="{{asset('js/lottie.min.js')}}"></script>

<script src="{{asset('js/index.min.js')}}"></script>
<script src="{{asset('js/ticker.js')}}"></script>
</body>

</html>
