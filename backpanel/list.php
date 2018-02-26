<!doctype html>
<?php
include("connect.php");
session_start();
?>
<html lang="en">

<head>
  <title>Oliver & Co Questioner Table List</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" content="Creatheavity - A creative industries that makes greatnest">
  <meta property="og:description" content="Offering a great problem solving skill for you and your business whereever you are.">
  <meta property="og:image" content="https://creatheavity.com/img/creatheavity.png">
  <meta property="og:url" content="https://creatheavity.com/">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
  <!-- Bootstrap CSS -->
  <style>
  .btn{
    cursor: pointer;
  }
  table{
    margin: auto;
    margin-top: 40px;
  }
    th{
      padding: 5px 10px 5px 10px;
    }
    td{
      padding: 5px 10px 5px 10px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <!-- Optional JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script type="text/javascript">
      function printcontent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
      }
    </script>
</head>
<body>
  <section>
    <div class="container">
      <div class="row justify-content-center no-gutters pt-5">
        <div class="col-sm-2">
          <input type="text" name="from" id="from" class="form-control" placeholder="From Date">
        </div>
        <div class="col-sm-2 offset-1">
          <input type="text" name="to" id="to" class="form-control" placeholder="To Date">
        </div>
        <div class="col-sm-2 ml-3">
          <input type="button" name="range" id="range" class="btn btn-success" value="Search">
        </div>
        <div class="col-sm-12 text-center" id="list">
          <table class="table table-responsive">
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Kategori</th>
              <th>Jenis Usaha</th>
              <th>Jumlah Omzet</th>
              <th>Jumlah Karyawan</th>
              <th>Tanggal</th>
            </tr>
            <?php
            $query="select * from kuisioner order by id desc";
            $sql=mysqli_query($connection,$query) or die(mysql_error());
              while($shop_baris=mysqli_fetch_array($sql)){
            ?>
            <tr>
              <td>
                <?php echo $shop_baris['nama']; ?>
              </td>
              <td>
                <?php echo $shop_baris['email']; ?>
              </td>
              <td>
                <?php echo $shop_baris['telepon']; ?>
              </td>
              <td>
                <?php 
                  if($shop_baris['step1']==1){
                    echo "Badan Usaha";
                  } 
                  else{
                    echo "Perorangan";
                  }
                ?>
              </td>
              <td>
                <?php 
                  if($shop_baris['step1']==1){
                    //echo "Badan Usaha";
                    if($shop_baris['step2']==1){
                      echo "Pertanian";
                    }
                    else if($shop_baris['step2']==2){
                      echo "Peternakan";
                    } 
                    else if($shop_baris['step2']==3){
                      echo "Toko Online";
                    }
                    else if($shop_baris['step2']==4){
                      echo "Fesyen";
                    }
                    else if($shop_baris['step2']==5){
                      echo "Teknologi";
                    }
                    else if($shop_baris['step2']==6){
                      echo "Jasa";
                    }
                    else if($shop_baris['step2']==7){
                      echo "Kecantikan";
                    }
                    else if($shop_baris['step2']==8){
                      echo "Kesehatan";
                    }
                    else if($shop_baris['step2']==9){
                      echo "Logistik";
                    }
                    else if($shop_baris['step2']==10){
                      echo "Transportasi";
                    }
                    else if($shop_baris['step2']==11){
                      echo "Makanan";
                    }
                    else if($shop_baris['step2']==12){
                      echo "Hiburan";
                    }
                    else if($shop_baris['step2']==13){
                      echo "Properti";
                    }
                    else if($shop_baris['step2']==14){
                      echo "Perdagangan";
                    }
                    else if($shop_baris['step2']==15){
                      echo "Lainnya";
                    }
                  } 
                  else{
                    //echo "Perorangan";
                    if($shop_baris['step2']==1){
                      echo "Karyawan";
                    }
                    else if($shop_baris['step2']==2){
                      echo "Musisi";
                    } 
                    else if($shop_baris['step2']==3){
                      echo "Youtuber";
                    }
                    else if($shop_baris['step2']==4){
                      echo "Agen Asuransi";
                    }
                    else if($shop_baris['step2']==5){
                      echo "Selebgram";
                    }
                    else if($shop_baris['step2']==6){
                      echo "Penulis";
                    }
                    else if($shop_baris['step2']==7){
                      echo "Wirausaha";
                    }
                    else if($shop_baris['step2']==8){
                      echo "Pengacara";
                    }
                    else if($shop_baris['step2']==9){
                      echo "Konsultan";
                    }
                    else if($shop_baris['step2']==10){
                      echo "Selebriti";
                    }
                    else if($shop_baris['step2']==11){
                      echo "Broker";
                    }
                    else if($shop_baris['step2']==12){
                      echo "Atlet";
                    }
                    else if($shop_baris['step2']==13){
                      echo "Dokter";
                    }
                    else if($shop_baris['step2']==14){
                      echo "Arsitek";
                    }
                    else if($shop_baris['step2']==15){
                      echo "Lainnya";
                    }
                  }
                 ?>
              </td>
              <td>
                <?php 
                  if($shop_baris['step1']==1){
                    //echo "Badan Usaha";
                    if($shop_baris['step3']==1){
                      echo " <20 Juta";
                    }
                    else if($shop_baris['step3']==2){
                      echo "20 Juta - 100 Juta";
                    }
                    else if($shop_baris['step3']==3){
                      echo " >100 Juta";
                    }
                  } 
                  else{
                    //echo "Perorangan";
                    if($shop_baris['step3']==1){
                      echo " <20 Juta";
                    }
                    else if($shop_baris['step3']==2){
                      echo "20 Juta - 100 Juta";
                    }
                    else if($shop_baris['step3']==3){
                      echo " >100 Juta";
                    }
                  }
                ?>
              </td>
              <td>
                <?php 
                  if($shop_baris['step1']==1){
                    //echo "Badan Usaha";
                    if($shop_baris['step4']==1){
                      echo " <10 Orang";
                    }
                    else if($shop_baris['step4']==2){
                      echo "10 Orang - 40 Orang";
                    }
                    else if($shop_baris['step4']==3){
                      echo " >40 Orang";
                    }
                  } 
                  else{
                    echo "Null";
                  }
                ?>
              </td>
              <td>
                <?php echo $shop_baris['date']; ?>
              </td>
            </tr>
            <?php 
              }
            ?>
          </table>
        </div>
        <div class="col-sm-12 text-center">
          <button class="btn btn-info btn-print" onclick="printcontent('list')" >Print</button>
        </div>
      </div>      
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $.datepicker.setDefaults({
      dateFormat: 'yy-mm-dd'
    });
    $(function(){
      $("#from").datepicker();
      $("#to").datepicker();
    });
    $('#range').click(function(){
      var from = $('#from').val();
      var to = $('#to').val();
      if(from != '' && to != '')
      {
        $.ajax({
          url:"range.php",
          method:"POST",
          data:{from:from, to:to},
          success:function(data)
          {
            $('#list').html(data);
          }
        });
      }
      else
      {
        alert("Please Select the Date");
      }
    });
  });
  </script>
</body>
</html>