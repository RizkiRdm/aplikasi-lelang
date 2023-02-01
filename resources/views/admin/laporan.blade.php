{{-- main layout --}}
<x-main>
    {{-- Sidebar --}}
    <x-sidebar>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/dashboard/admin') }}">
                <span>Dashboard</span>
            </a>
        </li>

        {{-- divider --}}
        <hr class="sidebar-divider">

        {{-- header --}}
        <div class="sidebar-heading">
            Pendataan barang
        </div>

        {{-- data barang --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/admin/barang') }}">
                <span>Data Barang</span>
            </a>
        </li>

        {{-- divider --}}
        <hr class="sidebar-divider">

        {{-- Heading --}}
        <div class="sidebar-heading">
            laporan
        </div>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/admin/laporan') }}">
                <span>Laporan lelang</span>
            </a>
        </li>
        {{-- tambah petugas --}}
        <div class="sidebar-heading">
            Petugas
        </div>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/admin/petugas') }}">
                <span>Petugas</span>
            </a>
        </li>
    </x-sidebar>


    {{-- topbar --}}
    <x-pageContent>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav ms-auto mx-2">
                @auth
                    {{-- jika user sudah login --}}
                    <li class="nav-item dropdown text-dark">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- jika user belum login  --}}
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/login">Login</a>
                    </li>
                @endauth
            </ul>
        </nav>
        <x-content title='Laporan'>
            <div class="row">
                <div class="col-12 mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Generate Laporan</button>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    {{-- card component --}}
                    <x-card title="List barang yang di sedang lelang">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Tanggal</td>
                                    <td>Nama Pemenang</td>
                                    <td>Lama lelang</td>
                                    <td>Nama Barang</td>
                                    <td>harga tertinggi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                </tr>
                            </tbody>
                        </table>
                    </x-card>
                </div>
            </div>
        </x-content>
    </x-pageContent>
</x-main>
