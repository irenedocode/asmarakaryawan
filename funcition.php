<?php


$koneksi = mysqli_connect("localhost","root","","dataasmara");



if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi, "select role from user where username = '$username' and password ='$password'");
    

    $role = mysqli_fetch_assoc($cekuser)["role"]; 
    
    $hitung = mysqli_num_rows($cekuser);
    if($hitung == 0){
        echo '<script language="javascript">';
        echo 'alert("Maaf, anda tidak berhak masuk");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    }else{
        if($role == 'admin'){
            header('location:admin');
        }elseif($role =='resepsionis'){
            header('location:resepsionis');
        }elseif($role =='direktur'){
            header('location:direktur');
        }elseif($role =='akuntan'){
            header('location:akuntan');
        }else{
            echo "role tidak ditemukan";
        }
    }
    
}




?>