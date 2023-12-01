<footer class="footer">
    <div class="container">
        <div class="footer_about">
            <div class="footer_about-slogan">
                <div class="footer_about-slogan_icon rotate shape">
                    <svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M44.993 71L36.5 53.2698L28.007 71L18.1104 66.9008L24.6419 48.3582L6.09932 54.8899L2 44.993L19.7302 36.5L2 28.007L6.09932 18.1103L24.6419 24.6418L18.1104 6.09921L28.007 2L36.5 19.7302L44.993 2L54.8899 6.09921L48.3582 24.6418L66.9008 18.1103L71 28.007L53.2698 36.5L71 44.993L66.9008 54.8899L48.3582 48.3582L54.8899 66.9008L44.993 71Z"
                            fill="transparent"
                            stroke="currentColor"
                            stroke-width="2"
                        />
                    </svg>
                </div>
                <h2 class="footer_about-slogan_title">
                    About
                    <span class="h1 linebreak outlined outlined--white">Alexandria</span>
                </h2>
                <p class="footer_about-slogan_text">
                    Unlock Your Next Chapter: Rent or Buy, Your Story Awaits!
                </p>
            </div>
        </div>
        <div class="footer_main d-flex">
            <div class="footer_main-block">
                <h4 class="footer_main-block_title">Follow us!</h4>
                <ul class="footer_main-block_socials socials">
                    <li>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer">
                            <i class="icon-tiktok"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer">
                            <i class="icon-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_main-block">
                <h4 class="footer_main-block_title">Contact</h4>
                <div class="footer_main-block_content d-flex flex-column">
                    <a class="link link--underline" href="tel:33 1439 7435">+33 1439 7435</a>
                    <a class="link link--underline" href="mailto:contact@alexandria.com">contact@alexandria.com</a>
                </div>
            </div>

            <div class="footer_main-block">
                <h4 class="footer_main-block_title">Navigation</h4>
                <ul class="footer_main-block_nav d-flex">
                    <li>
                        <a class="nav-link" href="{{route('home')}}" data-page="home" data-page-parent="home">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('rentals.index')}}" data-page="about">Rent a Book</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('purchases.index')}}" data-page="cases" data-page-parent="cases">Buy a Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p class="footer_copy">Copyright@ <span id="currentYear"></span> UpCreators by Merkulove</p>
</footer>
