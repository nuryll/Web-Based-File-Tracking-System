
<?php






if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from liste where id = '".$_GET['id']."'");
                 
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

	<div class="modulee">
		<div class="container">
			<div class="row">
			
			<div class="span9">
					<div class="content">

	<div class="modulee">
						
							<div class="module-body table">
	

							
							<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="130%">
									<thead>
										<tr>
											<th>Taslak No</th>
											<th>Değişim Adı</th>
										
											<th>Kayıt Tarihi</th>
											<th>Tamamlandı</th>
											<th>Onaya Gönder</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select* from degisim ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['degisim']);?></td>
										
											<td> <?php echo htmlentities($row['creationDate']);?></td>
											<td>
											
											<center> <a href="" onClick="return confirm('Değişiklikler tamamlandı. Onaya gönderebilirsiniz.')"><i class="fas fa-check-circle" style="color: green;"></i></a></center>
											</td>
											<td>
							<a href="Taslak.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Onaya gönderildi.')">Onaya Gönder<i class="fas fa-file-import"></i></a></td>
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



</body>
