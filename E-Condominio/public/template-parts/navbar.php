    <!--NavBar -->
    <section>
        <nav class="navbar navbar-expand-md navbar-dark bg-success p-2 text-white fixed-top">
            <div class="container">
                <a href="<?= ROOT_URL; ?>public?page=homepage" class="navbar-brand">
                    <img src="#" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">NEW CONDO</span>
                </a>

                <!-- Left navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= ROOT_URL; ?>public?page=homepage" class="nav-link">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ROOT_URL; ?>public?page=servizi" class="nav-link">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ROOT_URL; ?>public?page=prodotti" class="nav-link">Prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ROOT_URL; ?>public?page=contatti" class="nav-link">Contatti</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="<?= ROOT_URL; ?>tabelle/?page=dashboard" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            Tabelle
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= ROOT_URL; ?>tabelle/?page=dashboard">Tutte</a>
                            <a class="dropdown-item" href="">Condominii</a>
                            <a class="dropdown-item" href="#">Rubrica</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav mr-auto me-5">
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ruolo :</span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../login/register">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Utenti
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>