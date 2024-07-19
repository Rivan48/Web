<?php require_once "../kopikupaweb/kendali_akun.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KopiKupa.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../kopikupaweb/form.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="daftar_akun.php" method="POST" autocomplete="">
                    <h2 class="text-center">Daftar</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group ">
                        <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group ">
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" type="password" name="password" placeholder="Sandi" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="password" name="cpassword" placeholder="Konfirmasi" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Sudah punya akun? <a href="../kopikupaweb/index.php">Login disini</a></div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>
