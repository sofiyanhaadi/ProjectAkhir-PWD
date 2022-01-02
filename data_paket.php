<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('dbconnect.php');
    ?>
    <div class="topbar transition">
                <div class="bars">
                    <button type="button" class="btn transition" id="sidebar-toggle">
                        <i class="las la-bars"></i>
                    </button>
                </div>
                <!-- Navbar -->
                <div class="menu">
                    <ul>
                        <li>
                            <a href="notifications.html" class="transition">
                                <i class="las la-bell"></i>
                                <span class="badge badge-danger notif">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="settings.html" class="transition">
                                <i class="las la-sliders-h"></i>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, Admin
                                </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="profile.html">My Profile</a>
                                        <a class="dropdown-item" href="change-password.html">Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="signout.html">Sign Out</a>
                                    </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="sidebar transition">
                <div class="logo">
                    <a href="#">
                        <p style="font-size: 24px; font-weight: bold; margin-bottom: 0;">SPEEDNet</p>
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <div class="sidebar-items">
                    <ul>
                        <p class="menu">Navigation</p>
                        <li>
                            <a href="index.php" class="transition">
                                <i class="las la-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <p class="menu">Olah Data</p>
                        <li>
                            <a href="data_paket.php" class="transition active">
                                <i class="las la-archive"></i>
                                <span>Data Paket</span>
                            </a>
                        </li>
                        <li>
                            <a href="data_pelanggan.php" class="transition">
                                <i class="las la-archive"></i>
                                <span>Data Pelanggan</span>
                            </a>
                        </li>
                        <p class="menu">Tagihan dan Pembayaran</p>
                        <li>
                            <a href="page-layout.html" class="transition">
                                <i class="las la-money-bill"></i>
                                <span>Buat Tagihan</span>
                            </a>
                        </li>
                        <li>
                            <a href="page-layout.html" class="transition">
                                <i class="las la-money-bill"></i>
                                <span>Data Tagihan</span>
                            </a>
                        </li>
                        <li>
                            <a href="page-layout.html" class="transition">
                                <i class="las la-money-bill"></i>
                                <span>Pembayaran Lunas</span>
                            </a>
                        </li>
                        <p class="menu">Admin</p>
                        <li>
                            <a href="page-layout.html" class="transition">
                                <i class="las la-money-bill"></i>
                                <span>Pengguna Sistem</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class="transition">
                                <i class="las la-money-bill"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                        
                    </ul>
                </div>
            </div>

            <div class="sidebar-overlay"></div>

            <!-- Content -->

            <div class="content transition">
                <div class="container-fluid dashboard">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h2>Daftar Paket</h2>
						<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Data Paket
                        </button>
                        <?php include("data_paket/create.php") ?>
                    </div>
                    
                    <!-- Konten Tabel -->
                    <table id="tabel-paket" class="table table-dark table-striped table-bordered table-hover" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID Paket</th>
                                <th>Paket</th>
                                <th>Tarif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                            include("data_paket/read.php");
                            include("data_paket/update.php");
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            


            <div class="footer transition">
                <p>&copy; 2021 All Right Reserved by <a href="#">SPEEDNet</a></p>
            </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="DataTables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="DataTables/DataTables-1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="DataTables/Buttons-2.1.1/js/dataTables.buttons.min.js"></script>
    <script src="DataTables/Buttons-2.1.1/js/buttons.bootstrap4.min.js"></script>
    <script src="DataTables/Buttons-2.1.1/js/buttons.bootstrap4.min.js"></script>
    <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>  
    <script src="DataTables/Buttons-2.1.1/js/buttons.html5.min.js"></script>                             
    <script src="DataTables/Buttons-2.1.1/js/buttons.print.min.js"></script>
    <script src="DataTables/Buttons-2.1.1/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel-paket').DataTable();
        } );
    </script>

    <script>
        $(document).ready(function () {
	        $("#sidebar-toggle, .sidebar-overlay").click(function() {
		        $(".sidebar").toggleClass("sidebar-show");
		        $(".sidebar-overlay").toggleClass("d-block");
	        });
        });
    </script>

    <script>
    $(document).ready(function () {
        //ajax edit data
        $(".edit").off("click").on("click",function() {              
           var id_data = $(this).attr("data-id");
           $.ajax({                        
                url : "data_paket/aksi_edit.php?id="+id_data,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {                                    
                    $("#id_paket").val(data.id_paket);                     
                    $("#paket").val(data.paket);                     
                    $("#tarif").val(data.tarif);                                         
                    $(".modal-update").modal('show');                             
                }
            });    
        });
        
        //ajax hapus data pegawai
        $(".hapus").off("click").on("click",function(){
            var id_data = $(this).attr("data-id");
            $.ajax({
                url : "data_paket/aksi_hapus.php?id="+id_data,
                type : "GET",
                success : function(data){
                    window.location = "data_paket.php";
                }
            });
        });
        
    });
    </script>

</body>
</html>