<x-masyarakat>
    {{-- Navbar --}}
    <x-masyarakat.navbar />
    {{-- End Navbar --}}

    {{-- header --}}
    <x-masyarakat.header />
    {{-- end header --}}

    {{-- section head --}}
    <x-masyarakat.contentHeader />
    {{-- End section head --}}

    {{-- Content --}}

    {{-- content lelang --}}
    <div class="row bg-light py-2">
        <div class="col-12">
            <h3 class="fw-bold text-start d-inline">Barang</h3>
            <h3 class="d-inline">Paginate</h3>
        </div>
        <div class="col-md-3 col-12 mt-4">
            <x-masyarakat.cardPages />
        </div>
    </div>
    {{-- end Content --}}

    {{-- footer --}}
    @section('footer')
        {{-- Grid container --}}
        <div class="container-fluid p-4 pb-0">
            {{-- Links --}}
            <section>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-primary fw-bold">golang<span class="text-light">'S</span></h5>

                        <p>
                            <span class="text-primary fw-bold">GOLANG<span class="text-light">'S</span></span>
                            merupakan aplikasi lelang yang dibangun untuk mempermudah masyarakat dalama mengikuti lelang
                            yang diselenggarkan oleh setiap perusahaan maupun instansi untuk menyelanggarakan lelang,
                            dengan adanya sistem ini, diharapkan masyarakat tidak perlu takut untuk mengikuti lelang.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-light fw-bold">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ url('/caraikut') }}" class="text-light text-decoration-none">Cara ikut
                                    Lelang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            {{-- Links --}}

            <hr class="mb-4" />

            {{-- CTA --}}
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Daftar secara gratis</span>
                    <a href="{{ url('/register') }}" class="btn btn-outline-primary btn-rounded">
                        Sign up!
                    </a>
                </p>
            </section>
            {{-- CTA  --}}

            <hr class="mb-4" />

            {{-- Social media --}}
            <section class="mb-4 text-center">
                {{-- Facebook --}}
                <a class="btn btn-outline-primary btn-floating m-1"
                    href="{{ url('/https://web.facebook.com/rizki.romdhoni.16906/') }}" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path
                            d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                        </path>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a class="btn btn-outline-primary btn-floating m-1"
                    href="{{ url('/https://www.instagram.com/rizkirom.dhoni/') }}" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path
                            d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z">
                        </path>
                        <circle cx="11.994" cy="11.979" r="3.003"></circle>
                    </svg>
                </a>

                {{-- github  --}}
                <a class="btn btn-outline-primary btn-floating m-1" href="{{ url('/https://github.com/RizkiRdm') }}"
                    role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                        </path>
                    </svg>
                </a>
            </section>
            {{-- Social media --}}
        </div>
        {{-- Grid container --}}

        {{-- Copyright --}}
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-white text-uppercase" href="/">golang<span>'S</span></a>
        </div>
        {{-- Copyright --}}
    @endsection
    {{-- end footer --}}
</x-masyarakat>
