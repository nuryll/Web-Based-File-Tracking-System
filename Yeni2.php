<?php
$sayfa = "Yeni2";
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/form.php');



include("inc/config.php"); //veri tabanına bağlandık 


?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yeni Değişim Talebi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-adminn.css" rel="stylesheet">
    
    <script src="js/renk.min.js"></script>
</head>

<body >

 
<div class="cerceve">
<h3>Yeni Değişim Talebi </h3>
<br>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 <form action="" method="get"  enctype="multipart/form-data">
                <table border="2">
            <tr>
                <td><label for="ad">Değişimin Tetikleyicisi</label></td>

                <td colspan="2">Olay Araştırma<input type ="checkbox" name="tetik" id="tetik" value="tetik">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Risk Değerlendirme ve Denetim<input type ="checkbox" name="risk" id="risk" value="risk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 Bakım Onarım Tespiti<input type ="checkbox" name="bakım" id="bakım" value="bakım">
                                <br><input type="text" name="tetik" id="tetik" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="risk" id="risk" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="bakım" id="bakım" >&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                                Proje<input type ="checkbox" name="proje" id="proje" value="proje">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Diğer(verimlilik,kalite,iyileştirme vb.)<input type ="checkbox" name="verim" id="verim" value="verim">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <br><input type="text" name="proje" id="proje" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="verim" id="verim" >
                </td>
                
            </tr>
              <tr>
                <td><label for="ad"><br><br>Değişimin Gerekçesi <br><br></label></td>
                
                <td><textarea name="gerekce" cols="50" id="gerekce" placeholder="Gerekçeleri Belirtiniz"required></textarea></td>
               
            </tr>

              <tr>
                <td><label for="ad"><br><br>Değişimin Detaylı Açıklaması <br><br></label></td>
                
                <td><textarea name="acıklama" cols="50" id="acıklama" placeholder="Detaylı Açıklama Belirtiniz"required></textarea></td>
               
            </tr>
            <tr>
                <td><label for="ad"><br><br>Değişimin Sağlayacağı <br>Düşünülen Faydalar <br><br></label></td>
                
                <td><textarea name="fayda" cols="50" id="fayda" placeholder="Düşünülen Faydaları Belirtiniz"required></textarea></td>
               
            </tr>
            
            
        
            
           
            
            
            
                        <tr>
            <td colspan="2">
          <p align="right">  <input type="submit" name="kaydet" id="kaydet" value="KAYDET" onclick="bas();">
            <button onclick="window.location.href = 'Yeni.php';"><i class="fas fa-chevron-circle-left"></i>ÖNCEKİ</button>
            <button onclick="window.location.href = 'Yeni3.php';">SONRAKİ<i class="fas fa-chevron-circle-right"></i></button>
 
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

