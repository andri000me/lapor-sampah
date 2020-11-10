<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Lapor Sampah</title>

    <!-- Muat CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-style.css">
</head>

<body>
    <?php include "navbar.php" ?>

    <div class="container mt-md-5">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card">
                    <div class="card-body shadow-lg">
                        <h3 class="card-title text-center">Daftar</h3>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Re-Password</label>
                                <input type="password" class="form-control" id="password2">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Muat JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</html>