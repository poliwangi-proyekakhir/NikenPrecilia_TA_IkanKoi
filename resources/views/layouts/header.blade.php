<div class="container">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 text-center">
                <a class="blog-header-logo text-dark text-decoration-none" href="#">KOI BLOG</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="mx-3" role="img" viewBox="0 0 24 24">
                        <title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5" />
                        <path d="M21 21l-5.2-5.2" />
                    </svg>

                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/dashboard"><i
                                                class="bi bi-layout-text-sidebar-reverse"></i>
                                            Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i>
                                                Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"><i
                                        class="bi bi-box-arrow-in-right"></i> Login</a>
                            </li>
                        @endauth
                    </ul>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">Pakan</a>
            <a class="p-2 link-secondary" href="#">Jenis Koi</a>
            <a class="p-2 link-secondary" href="#">Kolam dan Filter</a>
            <a class="p-2 link-secondary" href="#">Pengelolaan Air</a>
            <a class="p-2 link-secondary" href="#">Nutrisi</a>
            <a class="p-2 link-secondary" href="#">Pemeliharaan</a>
            <a class="p-2 link-secondary" href="#">Obat</a>
            <a class="p-2 link-secondary" href="#">Budidaya</a>
            <a class="p-2 link-secondary" href="#">Artikel Lain</a>
        </nav>
    </div>
</div>
