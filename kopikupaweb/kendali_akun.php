<?php 
session_start();
require "../kopikupaweb/koneksi.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    
    if($password !== $cpassword){
        $errors['password'] = "Konfirmasi password tidak sama!";
    }
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email yang anda masukkan sudah ada!";
    }

    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $status = "user";
        $insert_data = "INSERT INTO user (name, email, password, status)
                        values('$name', '$email', '$encpass', '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        echo "<script>
			    alert('Anda Berhasil Registrasi !');
			    document.location='../kopikupaweb/index.php';
		        </script>";
    } else {
        echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='../kopikupaweb/daftar_akun.php';
		  </script>";
    }
}

//if user click login button

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $check_email = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if(password_verify($password, $fetch_pass)){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['login_user'] = $email;
            $status = $fetch['status'];
            if ($status == 'admin') {
                header('location: admin.php');
              }elseif ($status == 'user') {
                header('location: user.php'); 
              }
        }else{
            $errors['email'] = "Email atau sandi salah!";
        }
    
    } else {
        $errors['email'] = "Sepertinya Anda belum punya akun! Klik tautan bawah untuk mendaftar.";
    }
}

 //if login now button click
 if(isset($_POST['login-now'])){
    header('Location: index.php');
}

//if user click continue button in forgot password form
if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cek_email = "SELECT * FROM user WHERE email='$email'";
    $cek_sql = mysqli_query($conn, $cek_email);
    if(mysqli_num_rows($cek_sql) > 0){
        $info = "Silakan buat kata sandi baru.";
        $_SESSION['info'] = $info;
        $_SESSION['email'] = $email;
        header('location:../kopikupaweb/sandi_baru.php');
    }else{
        $errors['email'] = "Alamat email ini tidak ada!";
    }
}



 //if user click change password button
 if(isset($_POST['change-password'])){
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Konfirmasi kata sandi tidak cocok!";
    }else{
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_password = "UPDATE user SET password = '$encpass' WHERE email = '$email'";
        $jalan_query = mysqli_query($conn, $update_password);
        if($jalan_query){
            echo "<script>
				alert('Kata sandi Anda telah diubah !');
				document.location='index.php';
		  </script>";
        }else{
            echo "<script>
				alert('Kata sandi gagal diubah !');
				document.location='index.php';
		  </script>";
            // $errors['db-error'] = "Gagal mengubah kata sandi Anda!";
        }
    }
}
