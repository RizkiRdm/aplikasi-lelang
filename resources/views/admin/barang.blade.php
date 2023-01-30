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
    </x-sidebar>


    {{-- topbar --}}
    <x-pageContent>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            {{-- Searching --}}
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            Cari
                        </button>
                    </div>
                </div>
            </form>
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
        <x-content title='Barang'>
            {{-- Table barang --}}
            <form action="" method="post" class="d-flex justify-content-start my-2">
                {{-- Add data --}}
                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    {{-- card component --}}
                    <x-card title="List barang yang di sedang lelang">
                        <h2>pagination</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nama Barang</td>
                                    <td>harga tertinggi</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Data barang --}}
                                <tr>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                    <td>Sample</td>
                                    <td class="text-center">
                                        <a href="" class="btn badge text-bg-warning">Edit</a>
                                        <a href="" class="btn badge text-bg-danger">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </x-card>
                </div>
            </div>
        </x-content>
    </x-pageContent>
</x-main>
