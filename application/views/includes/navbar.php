<!--Barra de navegación donde veremos el menú de Noticias , Usuarios y Logout para cerrar sesión. -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('dashboard') ?>">Christian Galeano Peñas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">Noticias</a>
                </li>
                <?php if($this->session->role === 'admin'): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('dashboard/users') ?>">Usuarios</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
