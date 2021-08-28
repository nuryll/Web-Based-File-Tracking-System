<?php
$sayfa = "Yeni";
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');

include('inc/form.php');


include("inc/config.php"); //veri tabanına bağlandık 




//eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "1234") {
    header("location:index.php");
}

if(isset($_POST['submit']))
{
  $degisim=$_POST['degisim'];

    $id=mysqli_query($con," UPDATE liste SET Fiyat = (SELECT Fiyat FROM degisim WHERE liste.degisim = degisim.degisim) ");
  


 
$sql=mysqli_query($con,"insert into degisim(degisim)  values('$degisim')");
$sql=mysqli_query($con,"insert into liste(degisim) values('$id')");


}



if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Category deleted !!";
      }


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
 <form action="Yeni.php" method="post"  enctype="multipart/form-data">
                <table border="2">
            <tr>
              
                <td><label for="ad">Değişim Başlığı</label></td>
                <td colspan="2"><input type="text" name="degisim"  required>&nbsp;&nbsp;&nbsp;&nbsp;
         
                Değişim Numarası:<a style="background: #A9A9A9">2020-PP-<?php $cnt=9; echo htmlentities($cnt);?></td>
            </tr>
              <tr>
                <td><label for="ad"><br><br>Değişimi Talep Eden <br> Kişi Bilgileri<br><br></label></td>
                



                <td>
<div class="control-group">
<label class="control-label" for="basicinput">Talep Eden</label>

<select name="koordinator" class="span8 tip" required>
<option value="">Seçiniz</option> 
<?php $query=mysqli_query($con,"select * from koordinator ");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['koordinator'];?></option>
<?php } ?>
</select>
</div>

                  
                <br>
                Görevi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="görev" id="görev" required>
                <br>
                Talep Tarihi&nbsp;<input type="date" name="cdate" id="cdate"></td>
               
            </tr>

              <tr>
                <td><label for="ad"><br><br>Değişim Talep Formunu <br> Dolduran Kişi Bilgileri<br><br></label></td>
                
                <td>Formu Dolduran<input type="text" name="dolduran" id="dolduran" required >
                <br>
                Görevi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="görevv" id="görevv" required>
                <br>
                Talep Tarihi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date"></td>
               
            </tr>
            
            
        
            
           
            
            <tr>
                <td>Değişimin Gerçekleşeceği <br>Tesis/Ünite/Operasyon Alanı</td>

                <td>Poliport Sıvı Yük<input type ="checkbox" name="dil" id="dil"  value="yük">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Polisan Kansaı-Solvent Bazlı<input type ="checkbox" name="dil5" id="dil5"  value="bazlı">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                  Yardımcı Tesisler-Kazan Dairesi<input type ="checkbox" name="dil9" id="dil9"  value="daire"><br> 

                    Poliport Antrepo<input type="checkbox" name="dil1" id="dil1" value="antrepo">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Polisan Kansaı-Alkid<input type ="checkbox" name="dil6" id="dil6"  value="alkid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                  Yardımcı Tesisler-Kompresör Dairesi<input type ="checkbox" name="dil10" id="dil10"  value="dairee">  <br>  

                    Poliport Liman<input type="checkbox" name="dil2" id="dil2" value="liman"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Polisan Kansaı-Hammadde Depo<input type ="checkbox" name="dil7" id="dil7"  value="depo">&nbsp;&nbsp;&nbsp;
                  Yardımcı Tesisler-Su Üretim/Arıtma<input type ="checkbox" name="dil11" id="dil11"  value="arıtma"><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                   Polisan Kansaı-Gebkim<input type ="checkbox" name="dil8" id="dil8"  value="gebkim">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                   Yardımcı Tesisler-Jeneratör Hizm.<input type ="checkbox" name="dil12" id="dil12"  value="hizm"><br> 

                    Polisan Kimya<input type="checkbox" name="dil3" id="dil3" value="kimya"> <br>       
                    Yangın Sistemleri<input type="checkbox" name="dil4" id="dil4" value="sistem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           

Diğer<input type="checkbox" name="dill" id="dill" value="diger">&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="3" cols="50" name="aciklama" id="padd" placeholder="Diğer"></textarea>
                           </td>

                
               
            </tr>
            
                        <tr>
            <td colspan="2">
          <p align="right">  <input type="submit" name="submit" id="kaydet" value="KAYDET" >
      
            <button onclick="window.location.href = 'index.php';"><i class="fas fa-chevron-circle-left"></i>ÖNCEKİ</button>
            <button onclick="window.location.href = 'Yeni2.php';">SONRAKİ<i class="fas fa-chevron-circle-right"></i></button>
 
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

