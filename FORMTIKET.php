<?php
  function hasil(){
    $namcus = $_POST['namcus'];
    $noId = $_POST['noId'];
    $noHP = $_POST['noHP'];
    $tipe = $_POST['tipe'];
    $jpumum = $_POST['jpumum'];
    $jplansia = $_POST['jplansia'];
    $tanggal= $_POST['tanggal'];
    $ekonomi = 200000;
    $eksekutif = 200000;
    $diskon;
    $total;
    error_reporting(0);

        //Output program dan Pemanggilan Array
        foreach($namcus as $key => $val){
        ?>
          <table border="0" width="500" cellpadding="1" cellspacing="1" >

            <tr>
              <td><?php echo '&nbsp Jadwal Keberangkatan';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tanggal;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Nama Pemesan';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$namcus[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Nomor Identitas';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$noId[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp No. HP';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$noHP[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Kelas Penumpang';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tipe;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Jumlah Penumpang';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jpumum.' orang';?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Jumlah Penumpang Lansia';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jplansia.' orang';?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Harga Tiket';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$ekonomi;?></td>
            </tr>
                //Menentukan Diskon

            <tr>
              <td><?php echo '&nbsp Total Bayar';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$hasil;?></td>
              <td>
                <?php
                //Menentukan Total Biaya
                if($tipe){
                  if($jpumum == ""){
                      echo "Jumlah Penumpang belum diisi";
                  }elseif($tipe == "1"){
                    $hasil = $ekonomi * $jpumum * $jplansia;
                    $hasil;
                  }elseif($tipe == "2"){
                    $hasil = $eksekutif * $jpumum * $jplansia;
                    $hasil;
                  }

                /*  if($hasil > 2000000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }else{
                    echo "&nbsp".$hasil;
                  }*/
                }?>
              </td>
            </tr>
          </table>
            <?php
          }
        }?>

<!-- Tampilan Awal Form Pemesanan -->
 <html>

 <style>
  body{
    background-image: url("img/imgbus.jpg");
    background-size: cover;
  }

 </style>

 <body>
 <form method="POST" name="frmpost" action="">
 <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th><h1> Form Pemesanan Tiket BUS AKAP</h1></th>
  </tr>
  <tr>
    <td>
      <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

        <tr height="30">
          <td width="200" valign="center">Nama Lengkap</td>
          <td width="10" valign="center"> : </td>
          <td><input name="namcus[]" type="text" size="40" /></td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">Nomor Identitas</td>
          <td width="10" valign="center"> : </td>
          <td><input name="noId[]" type="text" size="40" placeholder="16 digit angka" /></td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">No. HP</td>
          <td width="10" valign="center"> : </td>
          <td><input name="noHP[]" type="number" placeholder="0851xxxxxxxx" /></td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">Kelas Penumpang</td>
          <td width="10" valign="center"> : </td>
          <td>
            <select name="tipe">
              <option name="-" value="-" hidden>-</option>
              <option name="ekonomi" value="Ekonomi">Ekonomi</option>
              <option name="eksekutif" value="Eksekutif">Eksekutif</option>
            </select>
          </td>
        </tr>

        <tr height="40">
            <td width="200" valign="center">Jadwal Keberangkatan</td>
            <td width="10" valign="center"> : </td>
            <td><input type="date" name="tanggal"></td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">Jumlah Penumpang<br>(< 60 Tahun)</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="jpumum" type="text" size="10"  /> Orang</td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">Jumlah Penumpang Lansia<br>(> 60 Tahun)</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="jplansia" type="text" size="10"  /> Orang</td>
        </tr>

        <tr>
          <td align="right" colspan="2"><input type="submit" name="btnOk" value="Pesan Tiket" /></td>
          <td><input type="reset" name="btnCancel" value="Cancel" /></td>
        </tr>

      </table>
      </table>
      <br>
      <br>

 <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td>
            <?php
            //Pemanggilan Function
              hasil();
            ?>
          </td>
        </tr>
 </table>

</form>
</center>
</body>
</html>
