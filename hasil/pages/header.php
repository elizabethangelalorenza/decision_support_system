<?php
    include("../pages/koneksi.php");
    session_start();
    if(!isset($_SESSION['user']))
    {
        echo "<script>window.location='login.php';</script>";
    }
?>
<!-- ================================================== -->
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yasmiba">
    <meta name="author" content="Yasmiba">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SPK Miftahussalam Banyumas</title>
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../assets/dist/css/style.min.css" rel="stylesheet">
</head>
<!-- ================================================== -->
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <div class="navbar-brand">
                        <a href="../index.php">
                            <b class="logo-icon">
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            </b>
                            <b class="logo-text">
                                <img src="../assets/images/yasmiba.png" alt="homepage" class="dark-logo" />
                            </b>
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1"></ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/admin.png" alt="user" class="rounded-circle" width="50">
                                    <span class="text-dark ml-2 d-none d-lg-inline-block"><span>Admin</span>
                                <i data-feather="chevron-down" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a href="../user/profil.php" class="dropdown-item">
                                    <i data-feather="user" class="svg-icon mr-2 ml-1"></i>Profil</a>
                                <a href="../user/data.php" class="dropdown-item">
                                    <i data-feather="user" class="svg-icon mr-2 ml-1"></i>Data Admin</a>
                                <div class="dropdown-divider"></div>
                                <a href="../logout.php" class="dropdown-item" onclick="return confirm ('Apakah anda yakin ingin keluar?')">
                                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i>Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a href="../index.php" class="sidebar-link sidebar-link" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Beranda</span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item">
                            <a href="../kriteria/data.php" class="sidebar-link sidebar-link" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Data Kriteria</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../santri/data.php" class="sidebar-link sidebar-link" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Data Santri</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../penilaian/data.php" class="sidebar-link sidebar-link" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Data Penilaian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="data.php" class="sidebar-link sidebar-link" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Hasil Perhitungan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ================================================== -->
