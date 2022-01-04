<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tagihan | SPEEDNet</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('../../dbconnect.php');
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
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, Admin
                                </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                                        <li><a class="dropdown-item" href="change-password.html">Change Password</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a class="dropdown-item" href="../logout.php">Sign Out</a></li>
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
                            <a href="../index.php" class="transition">
                                <i class="las la-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <p class="menu">Olah Data</p>
                        <li>
                            <a href="../data_paket/data_paket.php" class="transition">
                                <i class="las la-archive"></i>
                                <span>Data Paket</span>
                            </a>
                        </li>
                        <li>
                            <a href="../data_pelanggan/data_pelanggan.php" class="transition">
                                <i class="las la-user"></i>
                                <span>Data Pelanggan</span>
                            </a>
                        </li>
                        <p class="menu">Tagihan dan Pembayaran</p>
                        <li>
                            <a href="buat_tagihan.php" class="transition active">
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
                    <div class="container bg-light">
                        <div class="row">
                            <h2>Buat Tagihan</h2>
                        </div>
                        <!-- FORM -->
                        <form method="post" action="create.php?act=tambahtagihan" novalidate>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label for="bulan" class="col-sm-1 col-form-label">Bulan</label>
                                    <div class="col-auto">
                                        <select name="bulan" id="bulan" class="form-select" aria-label="Default select example" required>
                                            <option disabled selected>--Pilih Bulan--</option>
                                            <option value="januari">Januari</option>
                                            <option value="februari">Februari</option>
                                            <option value="maret">Maret</option>
                                            <option value="april">April</option>
                                            <option value="mei">Mei</option>
                                            <option value="juni">Juni</option>
                                            <option value="juli">Juli</option>
                                            <option value="agustus">Agustus</option>
                                            <option value="september">September</option>
                                            <option value="oktober">Oktober</option>
                                            <option value="november">November</option>
                                            <option value="desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tahun" class="col-sm-1 col-form-label">Tahun</label>
                                    <div class="col-auto">
                                        <select name="tahun" id="tahun" class="form-select" aria-label="Default select example" required>
                                            <option disabled selected>--Pilih Tahun--</option>
                                            <!-- PILIHAN TAHUN -->
                                            <?php
                                                $tahun_skrg = date('Y');
                                                echo "<option value='$tahun_skrg'>$tahun_skrg</option>";
                                                $thn_lalu = [];
                                                for ($i = 1; $i < 10; $i++){
                                                    $thn = date('Y', strtotime("-$i year", strtotime($tahun_skrg)));
                                                    array_push($thn_lalu, $thn);
                                                }
                                                foreach ($thn_lalu as $val):
                                                    echo "<option value='$val'>$val</option>";
                                                endforeach
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabel -->
                            <div class="row px-3">
                                <table id="tabel-tagihan" class="table table-dark table-striped table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Paket</th>
                                            <th>Tagihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   
                                        include("read.php");
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn ms-4 mb-3 mt-5 btn-primary btn-sm">Buat Tagihan</button>
                        </form>
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
            $('#tabel-tagihan').DataTable();
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


</body>
</html>