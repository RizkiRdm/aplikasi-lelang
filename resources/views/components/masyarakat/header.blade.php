    {{-- header --}}
    <div class="row">
        <div class="col-12 d-flex align-items-center bg-primary py-2">
            {{-- dropdown --}}
            <div class="dropdown-center">
                <button class="btn opacity-0.5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: white ;transform: ;msFilter:;">
                            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                        </svg>
                    </span>
                    <span class="text-light">All Category</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Hp</a></li>
                    <li><a class="dropdown-item" href="#">laptop</a></li>
                    <li><a class="dropdown-item" href="#">Pc</a></li>
                </ul>
            </div>
            {{-- search bar --}}
            <ul class="navbar-nav d-flex justify-content-center mx-auto w-50">
                <li class="nav-item">
                    <form class="d-flex" role="search" action="" method="post">
                        <input type="text" class="form-control border-primary rounded-pill" placeholder="Cari Barang"
                            aria-label="Cari Barang" aria-describedby="cari" name="cari">
                        <button class="opacity-0" type="submit" id="cari"></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    {{-- end header --}}
