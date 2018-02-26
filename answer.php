<!doctype html>
<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['telp'])){
    header("location:kuisioner.php");
}
?>
<html lang="en">
    <head>
        <title>Hello, world!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/kuisioner.css">
        <!-- Bootstrap CSS -->
        <style>
            body{
                background-color:white;
            }
            #loader {
                position: absolute;
                left: 50%;
                top: 50%;
                z-index: 1;
                width: 150px;
                height: 150px;
                margin: -75px 0 0 -75px;
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid #3498db;
                width: 120px;
                height: 120px;
                -webkit-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
                }

                @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
                }

                @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
                }

                /* Add animation to "page content" */
                .animate-bottom {
                position: relative;
                -webkit-animation-name: animatebottom;
                -webkit-animation-duration: 1s;
                animation-name: animatebottom;
                animation-duration: 1s
                }

                @-webkit-keyframes animatebottom {
                from { bottom:-100px; opacity:0 } 
                to { bottom:0px; opacity:1 }
                }

                @keyframes animatebottom { 
                from{ bottom:-100px; opacity:0 } 
                to{ bottom:0; opacity:1 }
                }

                #myDiv {
                display: none;
                text-align: center;
                }
        </style>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body onload="myFunction()">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <div id="loader"></div>
        <section class="answer" id="answer" style="display:none">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-sm-6">
                        <h1 class="title">
                        Kami sarankan Anda<br>
                        memakai pelayanan
                        </h1>
                        <?php $user=$_SESSION['telp']; 
                            $get_user= mysqli_query($connection,"select * from kuisioner where telepon='$user'");
                            $get_data= mysqli_fetch_array($get_user);
                            $data=$get_data['answer'];
                        ?>
                        <img src="img/step-icon/<?php 
                            if($data=="1"){
                                echo "result-satu";
                            }
                            else if($data=="2"){
                                echo "result-dua";
                            }
                            else{
                                echo "result-tiga";
                            }
                        ?>.png" class="img-fluid" alt="result"><br>
                        <form action="" method="post">
                            <input type="submit" class="button-answer" name="ajukan" value="Ajukan Permintaan">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Methods</h4>
        </div>
        <div class="modal-body">
          <p>The <strong>show</strong> method shows the modal and the <strong>hide</strong> method hides the modal.</p>
        </div>
      </div>
      
    </div>
  </div>
<script>
        var myVar;
        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("answer").style.display = "block";
        } 
</script>
    </body>
</html>

<?php
if(isset($_POST['ajukan'])){

$to = "rob@rnwood.co.uk"; // this is your Email address
$from = $email; // this is the sender's Email address
$subject = "Wholesale Request Submission";
$message ='<html>
          <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8">
          </head>
          <body bgcolor="#FFFFFF" text="#000000">
            <meta charset="UTF-8">
            <table style="border-collapse:collapse;" height="100%"
              bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0"
              width="100%">
              <tbody>
                <tr>
                  <td align="center" valign="top">
                    <center style="width: 100%;">
                      <!-- Visually Hidden Preheader Text : BEGIN -->
                      <div style="display: none; font-size: 1px; line-height:
                        1px; max-height: 0px; max-width: 0px; opacity: 0;
                        overflow: hidden; mso-hide:all; font-family:
                        sans-serif;">Someone wants to do business with you.-</div>
                      <!-- Visually Hidden Preheader Text : END -->
                      <div style="max-width: 600px;">
                        <!--[if (gte mso 9)|(IE)]>
                    <table cellspacing="0" cellpadding="0" border="0" width="600" align="center">
                    <tr>
                    <td>
                    <![endif]-->
                        <!-- Email Header : BEGIN -->
                        <table style="max-width: 600px;" align="center"
                          border="0" cellpadding="0" cellspacing="0"
                          width="100%">
                          <tbody>
                            <tr>
                              <td style="padding-left: 0px; padding-top: 30px;
                                padding-bottom: 0px; padding-right: 30px;
                                text-align: center" bgcolor="#ffffff"> <img src="http://www.simetricoffee.com/img/Logo-Simetri-black.png" height="80px"alt="Simetri Coffee Roasters">
                                </td>
                            </tr>
                          </tbody>
                          </table>
                        <hr>
                          <div style="max-width:600px" align="center">
                              <p style="margin:0;font-size:30px;font-family:arial">Wholesale Contact Submission</p>
                              <hr>
                              <br>
                              <p style="margin:0;text-align:left;">Dear Mr/Mrs.'.$wsname.' from '.wscom.' .inc</p>
                              <br>
                              <p style="margin:0;text-align:left;font-size:12px">Email = <i>'.$wsemail.'</i></p>
                              <br>
                              <p style="margin:0;text-align:left;">He/She has contacted you to request a wholesale for Simetri Coffee Roaster.</p>
                          </div>
                          <hr>
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table>
        <style>
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        /* What it does: Forces Outlook.com to display emails full width. */
        .ExternalClass {
            width: 100%;
        }
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table, td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }
        /* What it does: Overrides styles added when Yahoo"s auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }
        /* What it does: Another work-around for iOS meddling in triggered links. */
        a[x-apple-data-detectors] {
            color: inherit !important;
        }
        a {
            text-decoration: none !important;
        }
        </style>
            <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700"
              rel="stylesheet" type="text/css">
            <link
              href="https://fonts.googleapis.com/css?family=Arimo:400,600,700"
              rel="stylesheet" type="text/css">
            <link
              href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
              rel="stylesheet" type="text/css">
          </body>
        </html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
    
echo "<script>alert('Permintaan Terkirim. Tunggulah tim kami akan segera menghubungi anda. Terima Kasih');
        window.location.href='index.html';</script>";
    
session_destroy();
}
?>