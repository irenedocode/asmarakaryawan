<?php

$koneksi = mysqli_connect("localhost","root","","login");

//login

if(isset($_POST['login'])) {
    $username = $_POST['uname'];//"reza"
    $password = $_POST['psw'];//3210

    $cekuser = mysqli_query($koneksi,"select role from user where username= '$username' and password='$password'");
    //role ==> pelanggan <> nullv

    $role = mysqli_fetch_assoc($cekuser)["role" ];

    $hitung = mysqli_num_rows($cekuser);//max 1 min 0
    if($hitung == 0){
        echo "login gagal";
        header('location:login');
    }else{
        if($role == 'cs'){
            header('location:cs');
        }elseif($role =='kasir'){
            header('location:kasir');
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