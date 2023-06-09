{{-- @dd($title) --}}

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <img src="https://www.webtangerang.com/wp-content/uploads/2019/08/website-logo-png.png" class="rounded-3"
                alt="Logoes template" style="height:50px; width:50px">

        </a>


        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link {{ $title === 'home' ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item"><a href="/blog" class="nav-link {{ $title === 'blog' ? 'active' : '' }} ">Blog</a>
            </li>
            <li class="nav-item"><a href="/author"
                    class="nav-link {{ $title === 'author' ? 'active' : '' }} ">Kreator</a>
            </li>
            {{-- <li class="nav-item"><a href="/profile" class="nav-link {{($title === "profile") ? "active" : ""}} ">Profile</a></li> --}}
        </ul>

        @auth
            <ul class="nav nav-pillps">
                <li class="nav-item"><a href="/akun" class="nav-link {{ $title === 'login' ? 'active' : '' }} "> <i
                            class="bi bi-person"></i> Akun saya</a>
                </li>
                <form action="/logout" method="POST">
                    @csrf

                    <li class="nav-item">
                        <button type="submit">Logout <i class="bi bi-box-arrow-right"></i></button>

                    </li>

                </form>
            </ul>
        @endauth

        @guest
            <ul class="nav nav-pillps">

                <li class="nav-item"><a href="/login" class="nav-link {{ $title === 'login' ? 'active' : '' }} "> <i
                            class="bi bi-arrow-right-square-fill" style="width:40px; height:40px"></i> Login</a>
                </li>
            </ul>

        @endguest
    </header>
</div>
