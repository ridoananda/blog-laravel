<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Rido's Blog</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item{{ request()->is('/') ? ' active': '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item{{ request()->is('artikel') ? ' active': '' }}">
                    <a class="nav-link" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item{{ request()->is('kategori') ? ' active': '' }}">
                    <a class="nav-link" href="/kategori">Kategori</a>
                </li>
                <li class="nav-item{{ request()->is('tags') ? ' active': '' }}">
                    <a class="nav-link" href="/tags">Tags</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://ridoananda.my.id">Tentang</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 rounded-pill" type="text" placeholder="Cari artikel ...">
                <button class="btn btn-outline-secondary my-2 my-sm-0 rounded-circle" type="submit">
                    <span class="iconify" data-icon="bi:search"></span>
                </button>
            </form>
        </div>
    </div>
</nav>