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
             
<h4><div align="center" style="color:black;  background-color: #CFCFCF;">Değişimin Tehlike Potansiyelinin Belirlenmesi</h4>
<br>
<br>


      
          <div align="center" id="p11"> <b>SORU 1:</b> Talep edilen değişimin bulunduğu proses tehlikeli kimyasal (alevlenir, oksitleyici, toksit, deniz/dere/toprak alıcı <br> ortamlarına ulaşabilecek çevre için tehlikeli <500 m yanıcı toz) içeriyor mu?</div>

            <div align="center" id="p22" style="display: none;"> <b>SORU 2:</b> Talep edilen değişimin bulunduğu proses tehlikeli kimyasal (atmosfer üstü basınç, vakum, 50°C üzerinde sıcaklık, 0°C'nin altında ) içeriyor mu?</div>

             <div align="center" id="p33" style="display: none;"> <b>SORU 3:</b> Talep edilen değişimin bulunduğu proses bir başka proseste tehlike yaratabilir mi? (Örneğin; reaktör soğutma suyu, yangın söndürme sistemi, vb.)</div>
<br><br><br>
                <div align="center" id="kdys" style="display: none;" style=""> <b align="center" style="background-color: red" >Kırmızı DYS</b> <input type ="checkbox" name="drm" id="drm"  value="drm"><br></div>
                
                 <div align="center" id="ydys" style="display: none;" style=""> <b align="center" style="background-color: green" >Yeşil DYS</b> <input type ="checkbox" name="drm" id="drm"  value="drm"><br></div>
<br>
<br><br>


      
   

         

  

        </form></div>
  <!-------------------------------------------------- /FORM--------------------------------------------------------------------- -->
 


</body>



<script>
function bas(){
    window.alert("Bilgileriniz başarıyla kaydedildi.");
}

</script>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>
$(document).ready(function(){
$("#btnnnk").click(function(){
$("#p11").fadeOut(3000);
$("#p22").fadeOut(3000);
$("#p33").fadeOut(3000);
$("#bk").fadeOut(-50);
$("#by").fadeOut(-50);
$("#kdys").fadeIn(3500);
$("#by3").fadeOut(-50);
$("#by2").fadeOut(-50);
});
});
</script>



<script>
$(document).ready(function(){
$("#btnnny").click(function(){
$("#p11").fadeOut(3000);
$("#btnnny2").fadeIn(-50);
$("#by").fadeOut(-50);
$("#p22").fadeIn(3000);
});
});
</script>

<script>
$(document).ready(function(){
$("#btnnny2").click(function(){
$("#p22").fadeOut(3000);
$("#btnnny3").fadeIn(-50);
$("#by2").fadeOut(-50);
$("#p33").fadeIn(3000);
});
});
</script>

<script>
$(document).ready(function(){
$("#btnnny3").click(function(){
$("#p33").fadeOut(3000);
$("#by3").fadeOut(-50);
$("#bk").fadeOut(-50);
$("#ydys").fadeIn(3500);
});
});
</script>

</head>
<body>
 

 <div class="ykb">
<div  id="by" >
<button id="btnnny" class="fadey" >HAYIR</button>
</div>

<div  id="by2" >
<button id="btnnny2" class="fadey" style="display: none;">HAYIR</button>
</div>

<div  id="by3" >
<button id="btnnny3" class="fadey" style="display: none;">HAYIR</button>
</div>

<div  id="bk" >
<button id="btnnnk" class="fadee" >EVET</button>
</div>
</div>


 
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

  <div class="module5">
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
  

   <div class="hiza">
          
          <p align="right">  <input type="submit" name="kaydet" id="kaydet" value="KAYDET" onclick="bas();">
            <button onclick="window.location.href = 'Yeni4.php';"><i class="fas fa-chevron-circle-left"></i>ÖNCEKİ</button>
            <button onclick="window.location.href = 'Taslak.php';">SONRAKİ<i class="fas fa-chevron-circle-right"></i></button>
 
          </p>
        </div>

