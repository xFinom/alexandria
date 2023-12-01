<header class="header" data-page="product3" data-page-parent="shop">
    <div class="header_bg">
        <picture>
            <source data-srcset="{{asset('images/assets/gradients/10.webp')}}" srcset="{{asset('images/assets/gradients/10.webp')}}" type="image/webp" />
            <img class="lazy" data-src="{{asset('images/assets/gradients/10.png')}}" src="{{asset('images/assets/gradients/10.png')}}" alt="media" />
        </picture>
    </div>
    <div class="container d-flex">
        <a class="header_logo logo" href="{{route('home')}}">

            <span class="text">Alexandria</span>
        </a>
        <nav class="header_nav text--medium text--md collapse" id="headerMenu">
            <ul class="header_nav-list">
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('rentals.index')}}" data-page="about" data-single="true">
                        <span class="nav-item_text">Rent a Book</span>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('purchases.index')}}" data-page="events" data-single="true">
                        <span class="nav-item_text">Buy a Book</span>
                    </a>
                </li>
                @if(!auth()->check())
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('login')}}" data-page="events" data-single="true">
                        <span class="nav-item_text">Login</span>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('register')}}" data-page="events" data-single="true">
                        <span class="nav-item_text">Register</span>
                    </a>
                </li>
                @else
                    <li class="header_nav-list_item">
                        <a class="nav-item nav-link" href="{{route('dashboard')}}" data-page="events" data-single="true">
                            <span class="nav-item_text">Admin Panel</span>
                        </a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item nav-link" href="{{route('profile.show')}}" data-page="events" data-single="true">
                            <span class="nav-item_text">Profile</span>
                        </a>
                    </li>
                    <li class="header_nav-list_item">
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="nav-item nav-link" data-page="logout" data-single="true">
                                <span class="nav-item_text">Logout</span>
                            </button>
                        </form>
                    </li>
                @endif

            </ul>
        </nav>

        <button
            class="header_trigger"
            id="headerTrigger"
            data-bs-toggle="collapse"
            data-bs-target="#headerMenu"
            aria-controls="headerMenu"
            aria-expanded="false"
            type="button"
        ></button>
    </div>
</header>
