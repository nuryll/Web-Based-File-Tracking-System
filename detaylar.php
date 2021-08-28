<?php
$sayfa = "Detaylar";
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/form.php');

include('inc/config.php');


?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detaylar</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-adminn.css" rel="stylesheet">
      <link href="css/stil.css" rel="stylesheet">
    <script src="js/renk.min.js"></script>
</head>

<body >

 
<div class="cerceve">
<h3>Detaylar </h3>
<br>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 <form action="" method="get"  enctype="multipart/form-data">
                <table border="2">
            <tr>
                <td><label for="ad">Değişim Başlığı</label></td>
                <td colspan="2"><input type="text" name="baslık" id="baslık" value="Pompa" required>&nbsp;&nbsp;&nbsp;&nbsp;
         
                Değişim Numarası<input type="text" name="degisim" id="degisim" value="2020-PP-1" required></td>
            </tr>
              <tr>
                <td><label for="ad"><br><br>Değişimi Talep Eden <br> Kişi Bilgileri<br><br></label></td>
                
                <td>Talep Eden&nbsp;&nbsp;<input type="text" name="talep" id="talep" value="A. Yolcubal" required >
                <br>
                Görevi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="görev" id="görev" value="Koordinatör" required>
                <br>
                Talep Tarihi&nbsp;<input type="text" name="cdate" id="cdate" value="2020-08-03 09:07:50 "></td>
               
            </tr>

              <tr>
                <td><label for="ad"><br><br>Değişim Talep Formunu <br> Dolduran Kişi Bilgileri<br><br></label></td>
                
                <td>Formu Dolduran<input type="text" name="dolduran" id="dolduran" value="S. Kır"required >
                <br>
                Görevi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="görevv" id="görevv" value="Koordinatör" required>
                <br>
                Talep Tarihi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="2020-06-23 20:36:55 "></td>
               
            </tr>
            
            
        
            
           
            
            <tr>
                <td>Değişimin Gerçekleşeceği <br>Tesis/Ünite/Operasyon Alanı</td>

                <td>Poliport Sıvı Yük<input type ="checkbox" name="dil" id="dil" checked value="yük">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Polisan Kansaı-Solvent Bazlı<input type ="checkbox" name="dil5" id="dil5"  value="bazlı">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                  Yardımcı Tesisler-Kazan Dairesi<input type ="checkbox" name="dil9" id="dil9" checked value="daire"><br> 

                    Poliport Antrepo<input type="checkbox" name="dil1" id="dil1" value="antrepo">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Polisan Kansaı-Alkid<input type ="checkbox" name="dil6" id="dil6"  value="alkid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                  Yardımcı Tesisler-Kompresör Dairesi<input type ="checkbox" name="dil10" id="dil10" checked value="dairee">  <br>  

                    Poliport Liman<input type="checkbox" name="dil2" id="dil2" value="liman"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Polisan Kansaı-Hammadde Depo<input type ="checkbox" name="dil7" id="dil7"  value="depo">&nbsp;&nbsp;&nbsp;
                  Yardımcı Tesisler-Su Üretim/Arıtma<input type ="checkbox" name="dil11" id="dil11"  value="arıtma"><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                   Polisan Kansaı-Gebkim<input type ="checkbox" name="dil8" id="dil8"  value="gebkim">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                   Yardımcı Tesisler-Jeneratör Hizm.<input type ="checkbox" name="dil12" id="dil12"  value="hizm"><br> 

                    Polisan Kimya<input type="checkbox" name="dil3" id="dil3" checked value="kimya"> <br>       
                    Yangın Sistemleri<input type="checkbox" name="dil4" id="dil4" value="sistem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           

Diğer<input type="checkbox" name="dill" id="dill" value="diger">&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="3" cols="50" name="padd" id="padd" placeholder="Diğer"></textarea>
                           </td>

                
               
            </tr>
            
                   
       
        </table>
        </form></div>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 




</body>

 <?php
include('inc/liste.php');

?>
 
<script>
function bas(){
    window.alert("Bilgileriniz başarıyla kaydedildi.");
}

</script>
