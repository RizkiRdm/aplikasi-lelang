<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GoLang's</div>
    </a>

    {{-- Divider --}}

    <hr class="sidebar-divider my-0">
    {{-- isi sidebar untuk setiap user --}}
    {{ $slot }}
    {{-- end isi sidebar untuk setiap user --}}

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">
</ul>
