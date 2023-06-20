<?php
include "logindata.php";
session_start();
!OturumAcikmi() ? header("Location: login.php") : "";
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8" lang="tr-TR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kitap Ekleme</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Yönetim Paneli</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Admin Giriş Ayarları</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Üye Paneli</h6>  
                        <a class="collapse-item" href="register.php">Kayıt Ekleme</a>
                        <a class="collapse-item" href="members.php">Üyeler</a>
                        <a class="collapse-item" href="membersreq.php">Üye İstekleri</a>
                        <a class="collapse-item" href="memberspun.php">Üye Ceza</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kitap Ekleme</span></a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="charts2.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Bağış Ekleme</span></a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="bookcontrol.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kitap Takibi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>İstek Öneri Alanı</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">     
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Çıkış Yap
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kitap Ekleme</h1>
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kitap Bilgileri</h6>
                                </div>
                                <div class="card-body">
                    <form method="post" action="../insertsql.php" enctype="multipart/form-data">
                    <input type="text" name="kitabinadi" placeholder="Kitap Adı"><br><br>
                    <input type="text" name="yazarinadi" placeholder="Yazar Adı"><br><br>
                    <input type="text" name="kitapdurumu" placeholder="Kitap Durumu"><br><br>
                    <textarea name="aciklamaalani" placeholder="Kitap Açıklaması" style="width:300px;
                    height: 200px;"></textarea><br><br>
                                    <hr>
                                </div>
                            </div>
                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                         <input type="submit" name="ekle" value="Ekle" class="btn btn-primary btn-user btn-block">
                                </div> 
                            </div>
                        </div>
                        <script type="text/javascript">
                            function PreviewImage() {
                            var oFReader = new FileReader();
                            oFReader.readAsDataURL(document.getElementById("resim").files[0]);
                            oFReader.onload = function (oFREvent) {
                            document.getElementById("resimonizle").src = oFREvent.target.result;
                            };       
                        }
                        </script>
                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kitap Resmi</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <img id="resimonizle" style="max-width: 100%;height: auto" />
                                  <hr>
                                    <input type="file" name="resim" onchange="PreviewImage();" id="resim" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
</form>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kütüphane Otomasyonu</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Çıkış Yapmak İstediğinize Emin misiniz?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
                    <a class="btn btn-primary" href="logout.php">Çıkış Yap</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>