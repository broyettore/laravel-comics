<header>
    <div class="header-top">
        <div class="container d-flex justify-content-end align-items-center py-1">
            <div>
                <span>
                    DC POWER 
                </span>
                <span>
                    VISA
                    <i class="fa-regular fa-registered"></i>
                </span>
            </div>
            <div>
                <span>
                    ADDITIONAL DC SITES
                </span>
                <span>
                    <i class="fa-solid fa-caret-down"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container d-flex align-items-center justify-content-between py-4">
            <div class="logo">
                <img src="{{ Vite::asset("resources/img/dc-logo.png") }}" alt="dc-logo">
            </div>
            <nav>
                <ul class="d-flex">
                    @foreach ($navList as $navItem)
                    <li class="m-2 p-2">
                        <a href="{{ route("home") }}">
                            {{ $navItem }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
            <div class="search-bar">
                <label for="search"></label>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="search" id="search" placeholder="Search" class="text-end">
            </div>
        </div>
    </div>
</header>