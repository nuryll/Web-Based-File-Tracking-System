<?php
$sayfa = "Yeni4";
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/form.php');




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
      <link href="css/stil.css" rel="stylesheet">
    <script src="js/renk.min.js"></script>
</head>


<body >

  
<div class="cerceve">
<h3>Yeni Değişim Talebi </h3>
<br>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 <form action="" method="get"  enctype="multipart/form-data">
             

              <table border="1">
      <tr>
         <td colspan="3"><div align="center">DEĞİŞİM KATEGORİSİ</td>
      </tr>
      <tr>
         <td ><div align="center">1. Tesislerdeki Değişimler</td>
         <td><div align="center">3. Proses Değişimleri</td>
          <td><div align="center">4. Tehlikeli Madde Depolama <br> Kapasitesinde ve Yöntemlerinde <br>Yapılacak Değişimler </td>
      </tr>
      
      <tr>
         <td>
         1.1 Sahaya ulaşım ve güvenlik<input type ="checkbox" name="güvenlik" id="güvenlik"  value="güvenlik"><br>
         1.2 Yangın çıkışları, yangınla mücadele ve<br> acil durum ekipmanları,acil durum butonlarındaki değişimler<input type ="checkbox" name="drm" id="drm"  value="drm"><br>
         1.3 Bina ve bina servislerinin yerlerindeki,<br> niteliklerindeki veya insanların çalışırken<br> tehlikeli tesislere olan uzaklığındaki veya yerleşim planında değişiklikler<input type ="checkbox" name="plan" id="plan"  value="plan">
         </td>
         <td rowspan="3"> 
         3.1 Drain hatları, vanaları ve tehlike vanaları, acil durum tahliye sistemleri, emniyet vanaları<input type ="checkbox" name="vana" id="vana"  value="vana"><br>
         3.2 Elektriksel güvenlik ve süreklilik sistemleri<input type ="checkbox" name="sis" id="sis"  value="sis"><br>
         3.3 Trip, interlock, alarmlar ve ihbar sistemleri ve seviyeleri<input type ="checkbox" name="sev" id="sev"  value="sev"><br>
         3.4 Proses Kontrol Sistemi, Güvenlik Enstrübanlı Sistem(SIS)<input type ="checkbox" name="sıs" id="sıs"  value="sıs"><br>
         3.5 Acil Durum Kapatma Sistemi kontrol döngülerindeki değişimler ve çalışma mantığındaki değişiklikler<input type ="checkbox" name="deg" id="deg"  value="deg"><br>
         3.6 Algılama ekipmanları (ölçer,sensör vb.)<input type ="checkbox" name="vb" id="vb"  value="vb"><br>
         3.7 Sıcaklık, basınç, kompozisyon değişimi, Parlama noktasının üzerine çıkılmasını gerektiren değişiklikler<input type ="checkbox" name="degk" id="degk"  value="degk"><br>
         3.8 tüm yardımcı kaynaklar ve sistemler<input type ="checkbox" name="sist" id="sist"  value="sist"><br>
         3.9 Tesise Yeni Ürün/Kimyasal Depolama Talebi ve Gelişi<input type ="checkbox" name="gel" id="gel"  value="gel"><br>
         3.10 Mevcut Ürünlerin Tank Değiştirmeleri<input type ="checkbox" name="degis" id="degis"  value="degis"><br>
         3.11 İşletme süreçlerindeki değişiklikler<input type ="checkbox" name="deg" id="deg"  value="deg"><br>
         3.12 Tipik tasarım değişiklikleri (temel ve yapısal değişiklikler)<input type ="checkbox" name="dgs" id="dgs"  value="dgs">
         </td>
         <td rowspan="3"> 
         4.1 Tehlikeli Madde kapasite artışları(Tasarlanan kapasitenin üzerinde)<input type ="checkbox" name="üz" id="üz"  value="üz"><br>
         4.2 Tank/reaktör iç veya dış ekipmanlarında değişiklikler<input type ="checkbox" name="de" id="de"  value="de"><br> 
         4.3 Kimyasal elleçme yönteminde değişiklik<input type ="checkbox" name="dek" id="dek"  value="dek"><br>
         4.4 Kimyasal depolama ambalajında değişiklik<input type ="checkbox" name="amb" id="amb"  value="amb"><br>
         4.5 Ürünlerin/hammaddelerin paketleme ve depolama faaliyetlerindeki değişiklikler<input type ="checkbox" name="depo" id="depo"  value="depo"><br>
         4.6 Kapalı ambarlarda yapılacak değişiklikler<input type ="checkbox" name="ambar" id="ambar"  value="ambar">
         </td>
      </tr>
       <tr>
         <td><div align="center">2. Tesisin Süreli veya Süresiz Kapatılması</td>
      </tr>
       <tr>
         <td>
         2.1 normalde serviste olan hattın devreden çıkarılması<input type ="checkbox" name="cık" id="cık"  value="cık"><br>
         2.2 Normalde serviste olan tankın/ekipmanın devreden çıkarılması<input type ="checkbox" name="tnk" id="tnk"  value="tnk"><br>
       </td>

      </tr>
       <tr>
         <td ><div align="center">5. Ekipman Değişimleri</td>
         <td><div align="center">6. Güvenlik ile İlgili Belgelerdeki Değişimler</td>
          <td><div align="center">8. Listede Bulunmayan Değişimler</td>
      </tr>
      <tr>
         <td rowspan="3">
         5.1 Ekipman değişimleri<input type ="checkbox" name="ekip" id="ekip"  value="ekip"><br>
         5.2 Mantıksal çözümleyici değişimleri<input type ="checkbox" name="czm" id="czm"  value="czm"><br>
         5.3 Yazılım değişilikleri veya yeni bir yazılıma geçiş<input type ="checkbox" name="yzlm" id="yzlm"  value="yzlm"><br>
         5.4 Vana değişiklikleri<input type ="checkbox" name="vana" id="vana"  value="vana"><br>
         5.5 Borulama ve Flanşlardaki değişiklikler<input type ="checkbox" name="boru" id="boru"  value="boru"><br>
         5.6 Kaynak ve birleşim noktaları,conta tipleri ve özelliklerindeki değişiklikler<input type ="checkbox" name="kanak" id="kaynak"  value="kaynak"><br>
         5.7 Pompalardaki değişiklikler<input type ="checkbox" name="pmp" id="pmp"  value="pmp"><br>
         5.8 Sürücülerdeki değişiklikler<input type ="checkbox" name="src" id="src"  value="src"><br>
         5.9 Yapıların destekleri vb. üzerinde yapılan değişiklikler<input type ="checkbox" name="yp" id="yp"  value="yp"><br>
         5.10 Motorlar, şalt tesisleri, devreler<input type ="checkbox" name="slt" id="slt"  value="slt"><br>
         5.11 Kozosyonda korunma sistemleri<input type ="checkbox" name="kzs" id="kzs"  value="kzs"><br>
         5.12 Bir ekipmanın yeraltına alınması<input type ="checkbox" name="yer" id="yer"  value="yer"><br>
       </td>

         <td>
         6.1 Sınıflandırılmış(ATEX) patlayıcı ortamlar ve patlayıcı ortam sınıflandırılması sonuçları<input type ="checkbox" name="yük" id="yük"  value="yük"><br>
         6.2 Ulusal ve uluslar arası mevzuat gereği bilfirim yapılması gereken değişiklikler<input type ="checkbox" name="ulusal" id="ulusal"  value="ulusal"><br>
         6.3 Yasal periyodik kontrollerle ilgili konular<input type ="checkbox" name="yasal" id="yasal"  value="yasal"><br>
       </td>
         
         <td rowspan="3">
        Diğer<input type ="checkbox" name="li" id="li"  value="li"><br><textarea name="liste" cols="40" id="liste" placeholder="Listede Bulunmayan Değişimleri Belirtiniz"required></textarea>
       </td>
        
          
     

      </tr>

      <tr>
         <td><div align="center">7. Çevresel Koşullara Bağlı Değişimler
        
      </tr>
        <tr>
         <td>7.1 Tesis çevresinde gerçekleşen değişimler<input type ="checkbox" name="çevre" id="çevre"  value="çevre"></td>
        
      </tr>


           <tr>
            <td colspan="4">
           <p align="right"> <input type="submit" name="kaydet" id="kaydet" value="KAYDET" onclick="bas();">
            <button onclick="window.location.href = 'Yeni3.php';"><i class="fas fa-chevron-circle-left"></i>ÖNCEKİ </button>
            <button onclick="window.location.href = 'Yeni5.php';">SONRAKİ<i class="fas fa-chevron-circle-right"></i></button>
 
            </td>
            </tr>

   </table>

        </form></div>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 




</body>

<?php

include('inc/config.php');



if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from liste where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
      }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


  <!-- Customizable CSS -->
     
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <!-- Demo Purpose Only. Should be removed in production : END -->

    
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>
<body>
  <header class="header-style-1">

</header>

  <div class="module4">
    <div class="container">
      <div class="row">
      
      <div class="span9">
          <div class="content">

  <div class="module">
              <div class="module-head">
                <h3></h3>
              </div>
              <div class="module-body table">
  <?php if(isset($_GET['del']))
{?>
                  <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                  </div>
<?php } ?>

                  <br />

              
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <thead>
                    <tr >
                      <th >Değişim<br> No</th>
                      <th width="20" >Değişim <br>Adı</th>
                      <th>Talep Tarihi</th>
                      <th>Koordinatör</th>
                      <th>Aşama</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select liste.*,degisim.degisim,koordinator.koordinator from liste join degisim on degisim.id=liste.degisim join koordinator on koordinator.id=liste.koordinator ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                  
                    <tr >
                      <td>2020-PP-<?php echo htmlentities($cnt);?></td>
                      <td width="20" ><?php echo htmlentities($row['degisim']);?></td>
                      <td><?php echo htmlentities($row['postingDate']);?></td>
                      <td> <?php echo htmlentities($row['koordinator']);?></td>
                      <td><?php echo htmlentities($row['step']);?>  <a href="detaylar.php" ><i class="fas fa-info-circle" style="color: red;"></i></a></center></td>
                      
                      
                    </tr>
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>
              </div>
            </div>            

            
            
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->


  
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="scripts/datatables/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $('.datatable-1').dataTable();
      $('.dataTables_paginate').addClass("btn-group datatable-pagination");
      $('.dataTables_paginate > a').wrapInner('<span />');
      $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
      $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    } );
  </script>
</body>

<script>
function bas(){
    window.alert("Bilgileriniz başarıyla kaydedildi.");
}

</script>
 

