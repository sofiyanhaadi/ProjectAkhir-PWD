<?php
        include("dbconnect.php");
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pengguna = $_POST['pengguna'];
        $password = md5($_POST['password']);

        $buat = mysqli_query($conn,"select * from tb_pelanggan where email='$email'");
        $cek = mysqli_num_rows($buat);
        $data = mysqli_fetch_assoc($buat);
        $data_level = $data['level'];

        if($cek == 1){
            $querytambah =  mysqli_query($conn, "INSERT INTO tb_pengguna VALUES(NULL,'$pengguna','$username','$password','client')");
            $queryupdate = mysqli_query($conn, "UPDATE tb_pelanggan SET password='$password', level='$client' WHERE email='$email'");
            if ($querytambah && $queryupdate) {
                # code redicet setelah insert ke index
                echo "
            <script>
                alert('Buat akun berhasil. Silahkan login untuk melanjutkan');
                document.location.href = 'create_account.php';
            </script>
        ";
            }
            else{
                echo "ERROR, tidak berhasil". mysqli_error($conn);
            }
        }elseif($cek == 2){
            echo "
            <script>
                alert('Email Dobel');
                document.location.href = 'create_account.php';
            </script>
        ";
        }
        elseif($data_level == 'client'){
            echo "
            <script>
                alert('Akun anda sudah terdaftar. Silahkan Login');
                document.location.href = 'create_account.php';
            </script>
        ";
        }else{
            echo "
            <script>
                alert('Anda belum terdaftar sebagai Pelanggan kami. Silahkan daftar terlebih dahulu');
                document.location.href = 'create_account.php';
            </script>
        ";
        }
    ?>