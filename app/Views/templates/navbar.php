<!--Inicio Navbar-->
<nav class="navbar navbar-dark navbar-expand-lg bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="<?= base_url(); ?>assets/images/logo-nossa-loja-branco.svg" alt="NossaLoja.com" width="300" height="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light fs-4" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-4">Promoções</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-4" href="<?= base_url('pesquisa'); ?>">Pesquisar</a>
                </li>

            </ul>
            <?= form_open("produto/pesquisarProduto") ?>
            <div class="d-flex" role="search">
                <input name="pesquisa" class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </div>
            <?= form_close() ?>
            <a href="<?= base_url('login'); ?>" class="btn btn-primary mx-3 mb-3">Entrar</a>
        </div>
    </div>
</nav>

<div class="container">
    <!--Fim Navbar-->