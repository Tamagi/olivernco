<?php 
session_start();
include("connect.php");
date_default_timezone_set("Asia/Bangkok");
            $nama=$_POST['nama'];
            $email=$_POST['email'];
            $telp=$_REQUEST['telp'];
            $step1=$_POST['step1'];
            $step2=$_POST['step2'];
            $step3=$_POST['step3'];
            $get_user= mysqli_query($connection,"select * from kuisioner where telepon='$telp'");
            $get_data= mysqli_fetch_array($get_user);
            $count=mysqli_num_rows($get_user);
            $data=$get_data['telepon'];
            if($count==1){
                $_SESSION['telp']=$data;
                echo "<script>alert('Anda sudah pernah melakukan kuisioner! Silahkan lihat hasil anda.');
                window.location.href='answer.php';
                </script>";
            }
            elseif (!isset($_POST['step4'])){
                if($step3=='1'){
                    $insert_data = "insert into kuisioner values('','$nama','$email','$telp','$step1','$step2','$step3','0',NOW(),'1')";
                    $query = mysqli_query($connection,$insert_data);
                    $_SESSION['telp']=$telp;
                    header("Location:answer.php");
                }
                else if($step3=='2'){
                    $insert_data = "insert into kuisioner values('','$nama','$email','$telp','$step1','$step2','$step3','0''NOW(),'2')";
                    $query = mysqli_query($connection,$insert_data);
                    $_SESSION['telp']=$telp;
                    header("Location:answer.php");
                }
                else if($step3=='3'){
                    $insert_data = "insert into kuisioner values('','$nama','$email','$telp','$step1','$step2','$step3','0',NOW(),'3')";
                    $query = mysqli_query($connection,$insert_data);
                    $_SESSION['telp']=$telp;
                    header("Location:answer.php");
                }
                else{
                }
            } 
           else{  
               $step4=$_POST['step4'];
               $insert_data = "insert into kuisioner values('','$nama','$email','$telp','$step1','$step2','$step3','$step4','','')";
               $query = mysqli_query($connection,$insert_data);
           }
?>