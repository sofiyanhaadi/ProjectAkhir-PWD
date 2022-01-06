<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SPEEDNet</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include('../dbconnect.php');
        session_start();
         
	    if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");}

        $pass = $_SESSION['password'];
        $query = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE password='$pass'");
        $data = mysqli_fetch_assoc($query);
        $id_pelanggan = $data['id_pelanggan'];
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
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, <?php echo $_SESSION['username'] ?> 
                                </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                                        <li><a class="dropdown-item" href="change-password.html">Change Password</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                                    </ul>
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
                            <a href="index.php" class="transition active">
                                <i class="las la-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="tagihan/tagihan_client.php" class="transition">
                                <i class="las la-tachometer-alt"></i>
                                <span>Data Tagihan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="sidebar-overlay"></div>

            <!-- Content -->
            <div class="content transition">
                <div class="container-fluid dashboard">
                    <h3>Dashboard</h3>
                    <div class="row mt-4 mb-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h3>Selamat Datang, <?php echo $data['nama'] ?></h3>
                                        <h3 id="timestamp"></h3>
                                    </div>
                                    <div class="market-status-table mt-4">
                                    <div class="row d-flex justify-content-evenly">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-4 d-flex align-items-center">
                                                            <i class="las la-chart-bar bg-success text-light"></i>
                                                        </div>
                                                        <div class="col-8">
                                                            <p>Belum Bayar</p>
                                                            <h5>
                                                            <?php
                                                                $sql = "SELECT COUNT(id_tagihan) FROM tb_tagihan WHERE status='BL' and id_pelanggan=$id_pelanggan";
                                                                $query = mysqli_query($conn, $sql);
                                                                $data = mysqli_fetch_assoc($query);
                                                                echo $data['COUNT(id_tagihan)'];
                                                            ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-4 d-flex align-items-center">
                                                            <i class="las la-id-card bg-info text-light"></i>
                                                        </div>
                                                        <div class="col-8">
                                                            <p>Lunas</p>
                                                            <h5>
                                                            <?php
                                                                $sql = "SELECT COUNT(id_tagihan) FROM tb_tagihan WHERE status='LS' and id_pelanggan=$id_pelanggan";
                                                                $query = mysqli_query($conn, $sql);
                                                                $data = mysqli_fetch_assoc($query);
                                                                echo $data['COUNT(id_tagihan)'];
                                                            ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    

                </div>
            </div>

            <div class="footer transition">
                <p>&copy; 2021 All Right Reserved by <a href="#">SPEEDNet</a></p>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
        <script>
        $(document).ready(function() {
	        $("#sidebar-toggle, .sidebar-overlay").click(function() {
		        $(".sidebar").toggleClass("sidebar-show");
		        $(".sidebar-overlay").toggleClass("d-block");
	        });
        });
    </script>

    <script>
    // Function ini dijalankan ketika Halaman ini dibuka pada browser
    $(function(){
    setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
    });
    
    //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
    function timestamp() {
    $.ajax({
    url: 'jam.php',
    success: function(data) {
    $('#timestamp').html(data+" WIB");
    },
    });
    }
    </script>
</body>
</html>