<x-masyarakat>
    {{-- navbar --}}
    <x-masyarakat.navbar />

    {{-- header --}}
    <x-masyarakat.header />

    {{-- Content page --}}
    <div class="mt-2 text-center fw-bold">
        <x-card title="Detail Produk">
            <div class="row">
                <div
                    class="col-md-6 d-flex justify-content-md-start align-items-md-start justify-content-center align-items-center">
                    <img src="{{ asset('img/contoh.jpg') }}" alt="Produk" style="background-size:cover; width:45%">
                </div>
                <div class="col-md-6 ps-5 text-start">
                    <h1 class="fw-bold text-uppercase d-block ">Hallo</h1>
                    <p class="fw-bold fs-3 text-uppercase">rp.xxx.xxx,xx</p>
                    <p class="fw-bold text-uppercase" style="font-size: 0.8rem">
                        User<span class="text-success"> Akan Menang</span>
                    </p>
                    <hr class="sidebar-divider d-none d-md-block">

                    <form action="">
                        <button></button>
                    </form>
                </div>
            </div>

        </x-card>
    </div>
</x-masyarakat>
