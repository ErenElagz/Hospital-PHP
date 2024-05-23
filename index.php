<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login the Hospital</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .error {
            background: #f2dede;
            color: #a94442;
            padding: 8px;
            width: 100%;
            text-align: center;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <!--Header-->
    <header class="container-fluid bg-light  p-4 ">
        <h1 class="text-center">Hospital Managment System</h1>
    </header>

    <!--Login-->
    <form action="./login.php" method="post" class="container d-flex justify-content-center mt-5">
        <div class="w-75 bg-light rounded-4 p-4">
            <h2>Login the System</h2>
            <div class="input-group mt-4 mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Name</div>
                </div>
                <input type="text" name="name" class="form-control" /><br />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">Password</div>
                </div>
                <input type="password" name="password" class="form-control" /><br />
            </div>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            <button type="submit" class="w-100 btn btn-lg btn-success">Login</button>
        </div>
    </form>

    <!--Image-->
    <div class="container d-flex justify-content-center  fixed-bottom ">
        <img src="https://png.pngtree.com/png-clipart/20230918/ourmid/pngtree-photo-men-doctor-physician-chest-smiling-png-image_10132895.png" alt="">
    </div>
</body>

</html>