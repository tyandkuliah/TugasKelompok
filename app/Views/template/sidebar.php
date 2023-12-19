<?php

use Config\Security;
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('/dashboard') ?>" class="brand-link">
        <i class="fas fa-university fa-lg brand-image align-middle text-center" style="font-size: 45px;"></i>
        <span class=" brand-text font-weight-light">19.3B.12</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/user/<?= base64_encode(session('username')) ?>" class="d-block"><?= session('username') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Dashboard</li>
                <li class="nav-item user-panel">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Master</li>
                <li class="nav-item">
                    <a href="<?= base_url('mahasiswa'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Mahasiswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('matakuliah'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Matakuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item user-panel">
                    <a href="<?= base_url('nilai'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Total Nilai
                        </p>
                    </a>
                </li>
                <li class="nav-header">Utilites</li>

                <li class="nav-item">
                    <a href="<?= base_url('/login/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>