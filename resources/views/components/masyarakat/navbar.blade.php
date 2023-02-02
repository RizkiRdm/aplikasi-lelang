<nav class="navbar navbar-expand-lg bg-body-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="text-primary fw-bold">GOLANG<span class="text-dark">'S</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- end search bar --}}

            <ul class="navbar-nav d-flex justify-content-center ms-auto">
                {{-- end menu cart --}}
                @auth
                    {{-- jika user sudah login --}}
                    <li class="nav-item dropdown text-dark">
                        <a class="nav-link dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span>

                            </span>
                            <span>
                                {{ auth()->user()->name }}
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-item">
                                <form action="{{ url('/logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30rem" viewBox="0 0 100 100"
                                                style="fill: rgba(63, 167, 214, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z">
                                                </path>
                                                <path d="m11 16 5-4-5-4v3.001H3v2h8z"></path>
                                            </svg>
                                        </span>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"
                                            style="fill: rgba(63, 167, 214, 1);transform: ;msFilter:;">
                                            <path
                                                d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z">
                                            </path>
                                            <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                            <circle cx="17.5" cy="19.5" r="1.5"></circle>
                                        </svg>
                                    </span>
                                    <span class="fw-bold">List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- jika user belum login  --}}
                    <li class="nav-item dropdown">
                        <a class="rounded-pill nav-link bg-gradient-warning text-dark px-1 w-100" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>
                                <img src="{{ asset('icons/user-circle-solid-240.png') }}" alt="profile"
                                    style="object-fit: cover;" class="rounded-circle" width="30px">
                            </span>
                            <span class="fw-bold me-1" style="font-size: 16px">user</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ url('/login') }}">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" style="fill: rgba(63, 167, 214, 1);transform: ;msFilter:;">
                                            <path
                                                d="M10.385 21.788a.997.997 0 0 0 .857.182l8-2A.999.999 0 0 0 20 19V5a1 1 0 0 0-.758-.97l-8-2A1.003 1.003 0 0 0 10 3v1H6a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h4v1c0 .308.142.599.385.788zM12 4.281l6 1.5v12.438l-6 1.5V4.281zM7 18V6h3v12H7z">
                                            </path>
                                            <path
                                                d="M14.242 13.159c.446-.112.758-.512.758-.971v-.377a1 1 0 1 0-2 .001v.377a1 1 0 0 0 1.242.97z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="fw-bold">Masuk</span>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" style="fill: rgba(63, 167, 214, 1);transform: ;msFilter:;">
                                            <path
                                                d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="fw-bold">Daftar</span>
                                </a>
                            </li>
                            {{-- divider --}}
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            {{-- end divider --}}
                            <li>
                                <a class="dropdown-item" href="#">
                                    {{-- logo --}}
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" style="fill: rgba(63, 167, 214, 1);transform: ;msFilter:;">
                                            <path
                                                d="M12 4C9.243 4 7 6.243 7 9h2c0-1.654 1.346-3 3-3s3 1.346 3 3c0 1.069-.454 1.465-1.481 2.255-.382.294-.813.626-1.226 1.038C10.981 13.604 10.995 14.897 11 15v2h2v-2.009c0-.024.023-.601.707-1.284.32-.32.682-.598 1.031-.867C15.798 12.024 17 11.1 17 9c0-2.757-2.243-5-5-5zm-1 14h2v2h-2z">
                                            </path>
                                        </svg>
                                    </span>
                                    {{-- text --}}
                                    <span class="fw-bold">
                                        Cara ikut
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
