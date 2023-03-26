<?php
include "logindata.php";
session_start();
!OturumAcikmi() ? header("Location: login.php") : "";
?>
<html lang="tr-TR">
<head>
    <meta charset="utf-8" lang="tr-TR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index">
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
                        <h6 class="collapse-header">Kayıt Ekleme</h6>  
                        <a class="collapse-item" href="register">Kayıt Ekleme</a>
                        <a class="collapse-item" href="members">Üyeler</a>
                        <a class="collapse-item" href="membersreq">Üye İstekleri</a>
                        <a class="collapse-item" href="memberspun">Üye Ceza</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

           
            <li class="nav-item">
                <a class="nav-link" href="charts">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kitap Ekleme</span></a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="charts2">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Bağış Ekleme</span></a>
            </li>
               <li class="nav-item">
                <a class="nav-link" href="bookcontrol">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kitap Takibi</span></a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="tables">
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
                                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" name="logout"></i>
                                    Çıkış Yap
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">

                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Yönetim Paneli</h1>
                       
                    </div>
                  
                    <div class="row">
                  
                        <div class="col-xl-3 col-md-6 mb-4"></div>
                 </div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sistemdeki Kitaplar</h6>
                                    <div class="dropdown no-arrow">
                                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kitap İd</th>
                                            <th>Kitap Adı</th>
                                            <th>Yazarı</th>
                                            <th>Durum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                <?php
                include "../searchsql";
                if ($sorgusistemsql) {
                    while ($sistemsorgu = $sorgusistemsql->fetch_assoc()) {
                        echo  
                        "<tr>".
                        "<td>".$sistemsorgu["kitap_id"]."</td>".   
                        "<td>".$sistemsorgu["kitap_adi"]."</td>".
                        "<td>".$sistemsorgu["kitap_yazari"]."</td>"
                        ."<td>".$sistemsorgu["kitap_durumu"]."</td>"
                        ."</tr>";
                        
                    }
                }
                ?>
                                    </tbody>
                                </table>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Kitap Güncelleme</h6>
                                    <div class="dropdown no-arrow">
                                  
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                  <form action="../insertsql" method="post">
                                           <input type="text" name="kitapid" placeholder="Kitap İd"><br><br> 
                                           <input type="text" name="guncelletext" placeholder="Kitap Durumu"><br><br>
                                           <input type="submit" name="guncelle_buton" value="Güncelle" class="btn btn-primary btn-user btn-block">
                                       </form>
                                       <form action="../deletesql.php" method="post">
                                        <input type="text" name="silinecekveri" placeholder="Silinecek Kitap İD"><br><br>
                                        <input type="submit" name="sil" value="Sil" class="btn btn-primary btn-user btn-block">
                                       </form>
                                       </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4"></div>
                    </div>

                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kütüphane Otomasyonu</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
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
                    <a class="btn btn-primary" href="logout">Çıkış Yap</a>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
