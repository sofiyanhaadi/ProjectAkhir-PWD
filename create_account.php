<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun | SPEEDNet</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">SPEEDNET Access</h2>
            <div class="text-center mb-5 text-dark">Buat akun</div>
            <div class="card my-5">

              <form class="card-body cardbody-color p-lg-5" action="aksi_insert.php" method="post">

                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp"
                    placeholder="Email" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="pengguna" id="Nama_pengguna" aria-describedby="emailHelp"
                    placeholder="Nama pengguna" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="username" id="Username" aria-describedby="emailHelp"
                    placeholder="Username" required>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Buat</button></div>
                <div id="emailHelp" class="form-text text-center mb-5 text-dark">Sudah punya
                  Akun? <a href="index.php" class="text-dark fw-bold"> Sign In</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>