<a href="{{ url('/detail') }}" class="text-decoration-none">
    <div class="card">
        <div class="card-title">
            {{-- gambar produk --}}
            <div class="card-body d-flex justify-content-center align-items-center w-100">
                <img src="{{ asset('img/contoh.jpg') }}" alt="Contoh" width="75%">
            </div>
            {{-- batas waktu --}}
            <div class="d-flex justify-content-start rounded-end-circle bg-primary w-50">
                <p class="text-light my-auto ps-2" style="font-size: 0.9rem">
                    7 <span class="fw-bold">Hari Tersisa</span>
                </p>
            </div>
            {{-- deskripsi barang --}}
            <div class="lh-1 pt-2 text-dark">
                <p class="px-1">Hp Samsung S22 Ultra</p>
                <div class="lh-1">
                    <p class="fw-bold px-1">932</p>
                </div>
                <div class="lh-1 px-1">
                    <span>
                        <img src="{{ asset('icons/user-circle-solid-240.png') }}" alt="user" width="25px">
                        <span>
                            user akan menang
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</a>
