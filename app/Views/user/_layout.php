<?php
$session = \Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | <?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="64px" height="64px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 9144 9144" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                        <defs>
                            <style type="text/css">
                                .fil2 {
                                    fill: #0B4269
                                }

                                .fil4 {
                                    fill: #4F4039
                                }

                                .fil3 {
                                    fill: #5795A0
                                }

                                .fil5 {
                                    fill: #BF9D6F
                                }

                                .fil0 {
                                    fill: #D24635
                                }

                                .fil6 {
                                    fill: #E4E5C6
                                }

                                .fil1 {
                                    fill: #E6664D
                                }
                            </style>
                        </defs>
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer" />
                            <polygon class="fil0" points="1913.66,3106.41 1913.66,6096.2 4575.22,7632.85 4575.22,4576.38 " />
                            <polygon class="fil1" points="2083.28,3394.88 2083.28,6003.59 4405.6,7344.38 4405.6,4677.49 " />
                            <polygon class="fil2" points="7230.53,3106.41 7230.53,6096.2 4568.97,7632.85 4568.97,4576.38 " />
                            <polygon class="fil3" points="7071.06,3377.62 7071.06,6009.13 4728.44,7361.64 4728.44,4671.44 " />
                            <polygon class="fil4" points="4570.18,1511.16 1913.66,3106.41 4575.22,4576.38 7230.53,3106.41 " />
                            <polygon class="fil5" points="4570.46,1737.2 2305.74,3097.17 4574.76,4350.34 6838.45,3097.17 " />
                            <path class="fil6" d="M5957.62 4913.42c-9.46,17.25 -202.05,122.94 -234.75,142.01 -81.58,47.59 -158.61,93.31 -240.64,141.39 -98.57,57.77 -145.34,76.99 -202.6,174.27 -54.03,91.78 -46.53,217.81 -45.48,338.48 1.11,128.74 -18.94,661.07 13.08,736.97 44.44,105.32 191.36,0.57 253.04,-37.43 224.16,-138.11 491.76,-281.81 721.93,-419.24 96.92,-57.87 417.85,-232.47 468.6,-290.16 65.95,-74.98 83.54,-161.75 85.46,-292.68l3.54 -759.14c-0.72,-228.14 -184.41,-95.84 -206.43,-88.38 -6.82,-103.43 26.35,-268.2 -111.76,-241.17 -73.07,14.31 -179.98,91.33 -239.31,127.1 -92.6,55.84 -148.42,75.06 -204.56,161.93 -65.8,101.82 -59.82,166.49 -60.12,306.05z" />
                            <path class="fil0" d="M6429.69 4412.87c-43.41,15.97 -221.74,125.1 -274.93,156.13 -129.68,75.67 -123.62,124.96 -124.23,307.47 -0.3,89.45 -16.31,96.48 -79.32,131.36 -99.55,55.1 -471.59,268.88 -545.86,319.29 -45.49,30.88 -79.07,57.54 -94.36,123.14 -20.92,89.71 -5.67,317.82 -5.41,423.86 0.36,143.34 -0.91,286.7 -0.66,430.02 0.15,87.4 22.14,115.73 101.93,75.47 49.94,-25.19 88.23,-51.74 137.21,-80.43 61.48,-36.02 1037.67,-596.49 1089.98,-635.29 87.12,-64.61 72.1,-224.13 71.94,-357.7 -0.18,-141.38 9.6,-520.23 0.24,-642.42 -7.27,-94.85 -85.94,-43.53 -130.43,-18.63 -99.28,55.53 -79.14,6.41 -76.44,-92.65 1.68,-61.63 13.39,-170.16 -69.66,-139.62z" />
                            <path class="fil6" d="M6149.92 4986.09c-315.6,49.98 -601.03,528.21 -545.58,843.53 65.49,372.45 543.15,204.4 739.63,-253.84 44.78,-104.45 87.64,-256.65 64.16,-390.67 -21.89,-124.91 -107.9,-222.82 -258.21,-199.02z" />
                            <path class="fil0" d="M6136.78 5074.94c-187.47,26.81 -337.02,217.17 -403.49,367.78 -39.12,88.63 -76.76,200.87 -58.97,317.24 52.28,341.91 460.39,157.03 604.01,-186.09 38.03,-90.86 76.33,-200.05 59.2,-318.68 -14.74,-102.12 -83.01,-197.08 -200.75,-180.25z" />
                            <path class="fil6" d="M6100.17 5176.17c-147.13,24.9 -249.7,165.96 -306.15,284.85 -78.16,164.64 -65.53,411.87 124.16,378.65 192.84,-33.77 375.7,-334.04 341.57,-532.83 -13.42,-78.21 -66.25,-146.46 -159.58,-130.67z" />
                            <path class="fil0" d="M6053.45 5288.7c-232.3,62.4 -308.94,504.58 -89.03,438.05 82.98,-25.12 157.97,-121.28 189.86,-202.7 49.69,-126.88 25.11,-269.17 -100.83,-235.35z" />
                            <path class="fil6" d="M3819.95 5047.99c56.62,6.64 126.63,88.24 128.78,158.6 2.89,94.54 -61.46,126.21 -128.06,157.35 -118.69,55.49 -263.59,152 -214.63,336.96 41.04,155.04 220.08,314.54 302.93,202.27 46.81,-63.43 15.36,-170.21 -16.72,-229.32 -59.43,-109.49 -98.91,-110.68 -131.16,-153.39 72.54,-68.43 235.62,-67.91 259.9,-230.68 20.26,-135.84 -85.99,-279.88 -167.37,-313.13 7.75,-71.49 190.88,-471.05 -191.09,-446.65 -254.74,16.27 -830.42,301.24 -942.45,560.92 -37.79,87.62 -96.13,149.47 -143.96,232.04 -164.88,284.72 -87.9,369.6 -139,421.29 -129.24,130.74 -31.23,353.63 131.86,282.43 83.5,-36.44 14.66,-45.9 131.81,-31.77 205.11,24.75 394.86,-143.29 549.06,-196.9 45.03,-15.66 92.41,-46.91 118.47,-72.9 31.16,-31.08 61.09,-58.23 90.15,-94.39 119.99,-149.28 206.23,-282.21 299.3,-452.6 23.39,-42.84 39.84,-89.85 62.18,-130.13z" />
                            <path class="fil4" d="M3677.9 4630.06c-282.38,45.65 -730.94,275.21 -862.66,487.62 -38.61,62.26 -57.6,130.52 -39.44,216.73 23.47,111.47 136.67,277.05 211.33,334.91 237.42,184.01 464.84,-182.69 591.02,-376.86 93.09,-143.27 221.18,-385.62 248.91,-565.42 14.35,-93.06 -15.46,-118.6 -149.16,-96.98z" />
                            <path class="fil4" d="M3024.21 5787c-12.11,-17.56 -156.56,-96.58 -267.7,-324.46 -25.55,-52.38 -39.07,-122.26 -57.98,-142.49 -57.98,57.83 -217.09,363.38 -152.12,496.01 95.1,194.15 461.39,-7.22 477.8,-29.06z" />
                            <path class="fil4" d="M3718.7 5607.5c-113.18,25.34 -4.31,247.71 93.44,233.99 107.66,-15.11 -3.53,-254.12 -93.44,-233.99z" />
                            <g id="_2409917947504">
                                <path class="fil6" d="M4083.7 3534.63c-24.96,40.29 -47.78,58.7 -25.46,128 21.02,65.28 149.21,279.76 184.39,334.97 51.78,81.27 80.22,134.71 199.63,148.57 185.63,21.54 337.88,-101.1 498.85,-192.38 435.07,-246.68 888.7,-525.94 1323.24,-768.78 66.5,-37.15 172.37,-88.01 195.38,-153.24 40.86,-115.82 -97.58,-139.55 -181.25,-159.41 -162.8,-38.65 -585.07,-126.67 -745.06,-125.84 -77.61,0.4 -88.18,16.67 -149.54,30.72 5.24,-130.21 -30.29,-177.58 -103.89,-233.27 -60.34,-45.65 -143.28,-84.57 -215.41,-126.45 -119.45,-69.37 -299.62,-191.68 -446.06,-230.11 -369.12,-96.85 -790.54,106.48 -1051.51,249.48 -147.44,80.79 -296.06,180.28 -399.02,277.79 -112.42,106.49 -236.99,297.49 -58.2,433.33 60.3,45.82 139.49,87.92 207.56,127.4 108.64,62.99 335.72,201.69 448.88,234.59 130.6,37.98 191.62,12.5 317.47,24.63z" />
                                <path class="fil2" d="M4338.5 2226.87c-353.4,36.34 -893.71,313.26 -1136.38,576.56 -69.78,75.71 -124.05,195.85 -31.2,290.21 43.68,44.39 458.53,279.24 540.51,320.97 116.89,59.52 210.11,73.16 358.79,57.25 164.19,-17.59 197.61,-36.51 314.36,-108.46l539.52 -315.11c88.27,-51.54 181.76,-109.26 272.72,-157.91 33.84,-18.09 33.53,-17.26 51.08,-51.45 48.52,-94.5 61.07,-148.71 -15.45,-227 -50.13,-51.28 -449.2,-275.9 -538.14,-323.42 -107.63,-57.51 -215.55,-76.06 -355.81,-61.64z" />
                                <path class="fil6" d="M4287.66 2327.71c-337.94,36.02 -795.43,298.6 -936.67,480.98 -164.82,212.82 53.38,295.96 202.67,380.82 167.22,95.07 278.14,191.28 530.3,168.08 262.68,-24.16 543.75,-173.03 747.95,-312.58 64.25,-43.9 150.69,-109.54 191.14,-164.27 163.23,-220.92 -47.79,-293.46 -202.32,-383.62 -159.64,-93.14 -291.14,-195.21 -533.07,-169.41z" />
                                <path class="fil2" d="M5508.9 2809.35c-76.63,15.07 -218.72,111.21 -289.28,151.62l-968.22 563.2c-134.79,77.91 -123.19,79.02 -23.74,262.88 40.51,74.89 113.12,209.89 168.61,268.85 104.29,110.8 357.61,-79.18 456.64,-135.54 186.85,-106.33 367.29,-215.53 553.39,-321.68 274.52,-156.59 562.17,-333.3 831.22,-481.48 43.48,-23.95 105.93,-58.21 122.62,-96.51 27.6,-63.33 -57.8,-78.81 -111.4,-91.49 -127.35,-30.15 -629.62,-141.52 -739.84,-119.85z" />
                                <path class="fil2" d="M4323.82 2383.58c-359.56,38.57 -1042.98,420.96 -911.59,619.11 36.86,55.59 122.91,91.51 186.13,128.57 165.59,97.11 264.76,183.12 457.89,167.94 232.68,-18.28 699.15,-242.37 840.68,-407.86 172.75,-201.99 53.36,-235.67 -125.45,-338.06 -120.03,-68.73 -268.94,-188.88 -447.66,-169.7z" />
                                <path class="fil6" d="M5545.56 3271.59c-135.19,37.15 -30.33,139.71 86.1,108.28 121.59,-32.83 39.48,-142.8 -86.1,-108.28z" />
                                <path class="fil6" d="M4635.11 3345.55c-147.67,22.17 -83.94,129.65 35.21,117.71 145.37,-14.58 89.74,-136.47 -35.21,-117.71z" />
                                <path class="fil6" d="M4504.16 3885.11c-145.05,20.6 -86.59,131.55 35.61,118.69 140.49,-14.77 88.88,-136.36 -35.61,-118.69z" />
                                <path class="fil6" d="M4684.03 3543.07c-40.21,11.34 -99.81,35.87 -51.7,85.56 26.79,27.68 84.31,35.35 130.41,23.64 124.02,-31.51 38.8,-142.35 -78.71,-109.2z" />
                                <path class="fil6" d="M5155.01 3038.36c-141.18,33.98 -54.41,133.97 63.17,112.9 132.87,-23.81 61.72,-142.95 -63.17,-112.9z" />
                                <path class="fil6" d="M5742.32 2926.99c-29.11,10.39 -95.41,35.9 -40.47,83.79 30.74,26.79 87.34,33.03 134.85,19.83 116.35,-32.32 28.44,-147.48 -94.38,-103.62z" />
                                <path class="fil6" d="M4904.55 3190.1c-148.93,24.55 -89.03,130.83 33.07,117.99 145.27,-15.28 82.53,-137.05 -33.07,-117.99z" />
                                <path class="fil6" d="M4424.52 3695.18c-137.56,27.65 -65.29,133.9 58,114.42 130.82,-20.66 71.37,-140.43 -58,-114.42z" />
                                <path class="fil6" d="M6097.69 2959.25c-151.23,25.71 -73.41,134.21 48.75,114.77 130.14,-20.7 77.5,-136.24 -48.75,-114.77z" />
                                <path class="fil6" d="M5424.02 2882.65c-143.17,31.75 -57.95,133.97 58.93,114.16 134.59,-22.8 62.28,-141.05 -58.93,-114.16z" />
                                <path class="fil6" d="M5476.86 3080.24c-137.03,39.14 -23.51,138.68 85.29,107.23 122.31,-35.35 38.29,-142.52 -85.29,-107.23z" />
                                <path class="fil6" d="M4884.27 3422.66c-9.59,112.11 187.23,89.84 202.89,33.81 15.74,-56.31 -100.27,-118.32 -202.89,-33.81z" />
                                <path class="fil6" d="M4349 3503.91c-132.07,33.36 -41.26,134.6 75.58,110.81 127.73,-26.01 52.02,-143.03 -75.58,-110.81z" />
                                <path class="fil6" d="M5020.8 3579.89c-144.5,40.33 -41.71,135.12 73.34,110.06 127.33,-27.72 43.23,-142.6 -73.34,-110.06z" />
                                <path class="fil6" d="M5289.92 3424.62c-141.04,31.26 -55.84,135.8 68.53,111.31 120.69,-23.78 58.31,-139.42 -68.53,-111.31z" />
                                <path class="fil6" d="M5816.26 3117.17c-143.29,37.66 -32.42,139.66 84.05,107.24 114.01,-31.73 37.11,-139.07 -84.05,-107.24z" />
                                <path class="fil6" d="M4746.09 3736.58c-134.46,40.35 -20.54,137.62 85.58,107.03 125.28,-36.11 34.32,-143.01 -85.58,-107.03z" />
                                <path class="fil6" d="M5220.93 3232.88c-147.91,36.42 -43.93,135.09 68.16,111.18 130.32,-27.81 47.77,-139.72 -68.16,-111.18z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="sidebar-brand-text mx-3">LILIEFORS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item<?= $active == "Pengumuman" ? ' active' : "" ?>">
                <a class="nav-link" href="/user/pengumuman">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pengumuman</span></a>
            </li>

            <?php if(true == false) {?>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item<?= $active == "Linimasa" ? ' active' : "" ?>">
                <a class="nav-link" href="/user/linimasa">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Linimasa</span></a>
            </li>
            <?php }?>

            <?php if ((true == false) && $session->get('penulisan') == 1) { ?>
                <li class="nav-item<?= $active == 'penulisan' ? ' active' : ''; ?>">
                    <a class="nav-link" href="/user/unggah-penulisan">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Unggah Karya Penulisan</span></a>
                </li>
            <?php } ?>

            <?php if ((true == false) && $session->get('fotografi') == 1) { ?>
                <li class="nav-item<?= $active == 'fotografi' ? ' active' : ''; ?>">
                    <a class="nav-link" href="/user/unggah-fotografi">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Unggah Karya Fotografi</span></a>
                </li>
            <?php } ?>

            <?php if ((true == false) && $session->get('desain') == 1) { ?>
                <li class="nav-item<?= $active == 'desain' ? ' active' : ''; ?>">
                    <a class="nav-link" href="/user/unggah-desain">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Unggah Karya Desain</span></a>
                </li>
            <?php } ?>

            <?php if ((true == false) && $session->get('videografi') == 1) { ?>
                <li class="nav-item<?= $active == 'videografi' ? ' active' : ''; ?>">
                    <a class="nav-link" href="/user/unggah-videografi">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Unggah Karya Videografi</span></a>
                </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link" href="/#kompetisi">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Liliecomp</span></a>
            </li>

            <?php if ((true == false) && $session->get('liliefors') == 0) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/#klinik">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Daftar Liliefors</span></a>
                </li>
            <?php } ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $session->get('nama'); ?></span>
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/masuk/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
                    </div>

                    <?= $this->renderSection('content'); ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Liliefors 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="/masuk/logout">Yakin</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="/assets/js/admin-dashboard.js"></script>

    <script>
        function makeid(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() *
                    charactersLength));
            }
            return result;
        }

        $('#modal-button').on('click', function() {
            $('#kode').val(makeid(5));
        });
    </script>
</body>

</html>