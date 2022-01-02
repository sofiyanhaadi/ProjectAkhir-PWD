<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <?php
        session_start();
        if(isset($_COOKIE['login'])){
            if ($_COOKIE['login'] == 'true'){
                $_SESSION['login'] = true;
            }
        }

        if(isset($_SESSION['login'])){
            header("Location:index.php");
            exit;
        }

        require 'function.php';

        if (isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username = '$username'");

            if (mysqli_num_rows($result) === 1){

                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){

                    $_SESSION['login'] = true;

                    if(isset($_POST['remember'])){
                        setcookie('login', 'true', time()+60);
                    }

                    header(("Location:index.php"));
                    exit;
                }
            }

            $error = true;
        }
    ?>
</head>
<body>
<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
                <div class="form-group">
                  <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src=”js/bootstrap.bundle.min.js”></script>
    <script type=”js/bootstrap.min.js”> </script>
    <script type=”js/style.js”> </script>
</body>
</html>