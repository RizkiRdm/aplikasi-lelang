<x-masyarakat>
    {{-- navbar --}}
    <x-masyarakat.navbar />

    {{-- header --}}
    <x-masyarakat.header />

    {{-- Content page --}}
    <div class="mt-2 text-center fw-bold ">
        <x-card title="Detail Produk">
            <div class="row d-flex justify-content-center">
                <div
                    class="col-md-6 d-flex justify-content-md-start align-items-md-start justify-content-center align-items-center my-2">
                    <img src="{{ asset('img/produk.jpg') }}" alt="Produk"
                        style="background-size:cover; width:100%; height:100%; border-radius:20px;">
                </div>
                {{-- judul, harga produk, dan nama user yang akan menang --}}
                <div class="col-md-6 ps-5 text-start">
                    <h1 class="fw-bold text-uppercase d-block ">Hallo</h1>
                    <p class="fw-bold fs-3 text-uppercase">rp.xxx.xxx,xx</p>
                    <p class="fw-bold text-uppercase" style="font-size: 0.8rem">
                        User<span class="text-success"> Akan Menang</span>
                    </p>
                    <hr class="sidebar-divider d-none d-md-block">
                    {{-- Input jumlah penawaran --}}
                    <form action="">
                        <div class="input-group my-3">
                            <input type="text" class="form-control" placeholder="Masukan Jumlah Penawaran"
                                aria-label="Masukan Jumlah Penawaran" aria-describedby="button">
                            <button class="btn btn-outline-primary" type="submit" id="button">Tawar</button>
                        </div>
                    </form>
                    <hr class="sidebar-divider d-none d-md-block">
                    {{-- detail terkait produk yang dilelang --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-3">Detail Produk</span>
                        <span><a href="/" class="btn btn-outline-success">Kembali</a></span>
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima dolor nobis deserunt
                        voluptates
                        impedit alias repudiandae labore molestias porro, consequatur veniam veritatis. Voluptas,
                        mollitia magni?
                    </div>
                </div>
            </div>

        </x-card>
    </div>
</x-masyarakat>
