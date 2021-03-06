<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/"><?= $appName; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($request->uri->getSegment(1) == null) ? 'active' : ''; ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($request->uri->getSegment(1) == 'category') ? 'active' : ''; ?>" href="/category/">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($request->uri->getSegment(1) == 'product') ? 'active' : ''; ?>" href="/product/">Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>