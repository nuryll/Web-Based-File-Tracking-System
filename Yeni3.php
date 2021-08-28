<?php
$sayfa = "Yeni3";
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
         <td rowspan="3">Talep Edilen <br>Değişimin Türü&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

         <td rowspan="3">&nbsp;&nbsp;KALICI<input type ="checkbox" name="kalıcı" id="kalıcı" value="kalıcı">&nbsp;&nbsp;</td>
         <td rowspan="2"><div align="center">GEÇİCİ <input type ="checkbox" name="gecici" id="gecici" value="gecici">&nbsp;&nbsp;
         </td>

         <td ><div align="center">ACİL<input type ="checkbox" name="acil" id="acil" value="acil">&nbsp;&nbsp;</td>
            <tr>
         <td>Acil Onay Yetkilisi<input type="text" name="onay" id="onay" ></td>

      </tr>
     <tr>
       <td> Geçici Değişim Süresi<input type="text" name="süre" id="süre"required >&nbsp;&nbsp;
         </td>

 <td>Onay Tarihi&nbsp;<input type="date"></td>
</tr>

      </tr>
    

    
       


   </table>
<br>
<table border="1">
      <tr>
         <td >Değişim Hakkında<br> Bilgilendirilmesi Gereken <br>Departman/Bölüm/Seksiyon</td>

          <td >
            Poliport Sıvı Yük<input type ="checkbox" name="yük" id="yük"  value="yük"><br>
            Poliport Antrepo<input type="checkbox" name="ant" id="ant" value="ant"><br>
            Poliport Liman<input type="checkbox" name="liman" id="liman" value="liman"><br>
            Polisan Kimya<input type="checkbox" name="kimya" id="kimya" value="kimya">
          </td>

           <td >
            Polisan Kansaı Boya<input type ="checkbox" name="boya" id="boya"  value="boya"><br>
            Bakım Onarım ve Yardımcı İşletmeler<input type ="checkbox" name="işlet" id="işlet"  value="işlet"><br>
            idari İşler<input type ="checkbox" name="iş" id="iş"  value="iş"><br>
            Yönetim Sistemleri ve Sürdürülebilirlik<input type ="checkbox" name="sürdür" id="sürdür"  value="sürdür">
           </td>

            <td >
            Sağlık Emniyet Çevre<input type ="checkbox" name="çevre" id="çevre"  value="çevre"><br>
            Proje ve Yatırımlar<input type ="checkbox" name="yatırım" id="yatırım"  value="yatırım"><br>
            İnsan Kaynakları<input type ="checkbox" name="kaynak" id="kaynak"  value="kaynak"><br>
            Diğer(Müteahhit,tedarikçi vb.)<input type ="checkbox" name="dg" id="dg"  value="dg"><br>
          </td>
      </tr>

      <tr>
         <td rowspan="3">Değişimin Etkilediği <br>Tesis/Ünite/Operasyon <br>Alanı</td>

         <td>
         Poliport Sıvı Yük<input type ="checkbox" name="yük" id="yük"  value="yük"><br>
         Poliport Antrepo<input type ="checkbox" name="antr" id="antr"  value="antr"><br>
         Poliport Liman<input type ="checkbox" name="liman" id="liman"  value="liman"><br>
       </td>
         
         <td rowspan="2">
         Polisan Kansaı-Solvent Bazlı<input type ="checkbox" name="dil5" id="dil5"  value="bazlı"><br>
         Polisan Kansaı-Alkid<input type ="checkbox" name="dil6" id="dil6"  value="alkid"><br>
         Polisan Kansaı-Hammadde Depo<input type ="checkbox" name="dil7" id="dil7"  value="depo"><br>
         Polisan Kansaı-Gebkim<input type ="checkbox" name="dil8" id="dil8"  value="gebkim">
       </td>
        
          
          <td rowspan="2">
          Yardımcı Tesisler-Kazan Dairesi<input type ="checkbox" name="dil9" id="dil9"  value="daire"><br>
          Yardımcı Tesisler-Kompresör Dairesi<input type ="checkbox" name="dil10" id="dil10"  value="dairee">  <br>
          Yardımcı Tesisler-Su/Üretim/Arıtma<input type ="checkbox" name="su" id="su"  value="su">  <br>
          Yardımcı Tesisler-Jeneratör Hizm.<input type ="checkbox" name="dil12" id="dil12"  value="hizm"> 
        </td>
        
      </tr>
      <tr>
         <td>Polisan Kimya<input type ="checkbox" name="kimya" id="kimya"  value="kimya"></td>
        
      </tr>
        <tr>
         <td>Yangın Sistemleri<input type ="checkbox" name="sis" id="sis"  value="sis"></td>
          <td>Rohm & Haas<input type ="checkbox" name="has" id="has"  value="has"></td>
           <td>Diğer<input type="checkbox" name="dill" id="dill" value="diger">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="diger" id="diger" placeholder="Diğer"></textarea></td>
      </tr>





             <tr>
            <td colspan="4">
           <p align="right"> <input type="submit" name="kaydet" id="kaydet" value="KAYDET" onclick="bas();">
            <button onclick="window.location.href = 'Yeni2.php';"><i class="fas fa-chevron-circle-left"></i>ÖNCEKİ </button>
            <button onclick="window.location.href = 'Yeni4.php';">SONRAKİ<i class="fas fa-chevron-circle-right"></i></button>
 
            </td>
            </tr>
   </table>



        </form></div>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 



</body>

<br><br><br><br>
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

  <div class="module">
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

