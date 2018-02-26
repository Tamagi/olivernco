<?php

if(isset($_POST['from'], $_POST['to']))
{
  $connection = mysqli_connect("localhost","root","","oliver");
  $result='';
  $from=$_POST['from'];
  $to=$_POST['to'];
  $query = "select * from kuisioner where date between '$from' and '$to'";
  $sql = mysqli_query($connection, $query);
  $result .='
  <table border="1">
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Telepon</th>
      <th>Kategori</th>
      <th>Jenis Usaha</th>
      <th>Jumlah Omzet</th>
      <th>Jumlah Karyawan</th>
      <th>Tanggal</th>
    </tr>';
    if(mysqli_num_rows($sql)>0)
    {
      while($shop_baris = mysqli_fetch_array($sql))
      {
        $result .="
        <tr>
          <td>
            ".$shop_baris['nama']."
          </td>
          <td>
            ".$shop_baris['email']."
          </td>
          <td>
            ".$shop_baris['telepon']."
          </td>
          <td>
          ";
            if($shop_baris['step1']==1){
                $result .="Badan Usaha";
              } 
              else{
                $result .="Perorangan";
              }
          $result .="</td>
          <td>"; 
              if($shop_baris['step1']==1){
                //$result .="Badan Usaha";
                if($shop_baris['step2']==1){
                  $result .="Pertanian";
                }
                else if($shop_baris['step2']==2){
                  $result .="Peternakan";
                } 
                else if($shop_baris['step2']==3){
                  $result .="Toko Online";
                }
                else if($shop_baris['step2']==4){
                  $result .="Fesyen";
                }
                else if($shop_baris['step2']==5){
                  $result .="Teknologi";
                }
                else if($shop_baris['step2']==6){
                  $result .="Jasa";
                }
                else if($shop_baris['step2']==7){
                  $result .="Kecantikan";
                }
                else if($shop_baris['step2']==8){
                  $result .="Kesehatan";
                }
                else if($shop_baris['step2']==9){
                  $result .="Logistik";
                }
                else if($shop_baris['step2']==10){
                  $result .="Transportasi";
                }
                else if($shop_baris['step2']==11){
                  $result .="Makanan";
                }
                else if($shop_baris['step2']==12){
                  $result .="Hiburan";
                }
                else if($shop_baris['step2']==13){
                  $result .="Properti";
                }
                else if($shop_baris['step2']==14){
                  $result .="Perdagangan";
                }
                else if($shop_baris['step2']==15){
                  $result .="Lainnya";
                }
              } 
              else{
                //$result .="Perorangan";
                if($shop_baris['step2']==1){
                  $result .="Karyawan";
                }
                else if($shop_baris['step2']==2){
                  $result .="Musisi";
                } 
                else if($shop_baris['step2']==3){
                  $result .="Youtuber";
                }
                else if($shop_baris['step2']==4){
                  $result .="Agen Asuransi";
                }
                else if($shop_baris['step2']==5){
                  $result .="Selebgram";
                }
                else if($shop_baris['step2']==6){
                  $result .="Penulis";
                }
                else if($shop_baris['step2']==7){
                  $result .="Wirausaha";
                }
                else if($shop_baris['step2']==8){
                  $result .="Pengacara";
                }
                else if($shop_baris['step2']==9){
                  $result .="Konsultan";
                }
                else if($shop_baris['step2']==10){
                  $result .="Selebriti";
                }
                else if($shop_baris['step2']==11){
                  $result .="Broker";
                }
                else if($shop_baris['step2']==12){
                  $result .="Atlet";
                }
                else if($shop_baris['step2']==13){
                  $result .="Dokter";
                }
                else if($shop_baris['step2']==14){
                  $result .="Arsitek";
                }
                else if($shop_baris['step2']==15){
                  $result .="Lainnya";
                }
              }
          $result .="</td>
          <td>";
              if($shop_baris['step1']==1){
                //$result .="Badan Usaha";
                if($shop_baris['step3']==1){
                  $result .=" <20 Juta";
                }
                else if($shop_baris['step3']==2){
                  $result .="20 Juta - 100 Juta";
                }
                else if($shop_baris['step3']==3){
                  $result .=" >100 Juta";
                }
              } 
              else{
                //$result .="Perorangan";
                if($shop_baris['step3']==1){
                  $result .=" <20 Juta";
                }
                else if($shop_baris['step3']==2){
                  $result .="20 Juta - 100 Juta";
                }
                else if($shop_baris['step3']==3){
                  $result .=" >100 Juta";
                }
              }
          $result .="</td>
          <td>";
              if($shop_baris['step1']==1){
                //$result .="Badan Usaha";
                if($shop_baris['step4']==1){
                  $result .=" <10 Orang";
                }
                else if($shop_baris['step4']==2){
                  $result .="10 Orang - 40 Orang";
                }
                else if($shop_baris['step4']==3){
                  $result .=" >40 Orang";
                }
              } 
              else{
                $result .="Null";
              }
          $result .="</td>
          <td>
            ".$shop_baris['date']."
          </td>
        </tr>
        ";
      }
    }
    else{
      $result .='
      <tr>
      <td colspan="8">
      No Data Found
      </td>
      </tr>
      ';
    }
    $result.='</table>';
    echo $result;
}

?>