<?php
$sayfa = "Bekleyen";
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

    <title>Bekleyen Görevlerim</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-adminn.css" rel="stylesheet">
      <link href="css/stil.css" rel="stylesheet">
    <script src="js/renk.min.js"></script>
</head>


<body >

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

    <div class="modulet">
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

<?php

include('inc/görev.php');



?>