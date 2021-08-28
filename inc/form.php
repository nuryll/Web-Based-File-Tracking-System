<?php
$sayfa = "form";




?>





    <link href="css/sb-adminn.css" rel="stylesheet">
   



<body >

<div class="butonlar">
<a href="Yeni.php"  >
<input type="image" value="submit" src="img/1.png" width="150px" class="btn1"  >
<div class="yazı">Yeni Değişim Talebi</div>
</a>

<a href="Taslak.php"  >
<input type="image" value="submit" src="img/2.png" width="150px" class="btn2" >
<div class="yazı2">Taslak Değişim Taleplerim</div>
</a>

<a href="Bekleyen.php" >
<input type="image" value="submit" src="img/3.png" width="150px" class="btn3" >
<div class="yazı3">Bekleyen Görevlerim</div>
</a>

</div>


 <div class="resimm">
<img  id="p1"  src="img/Picture1.png" width="300px" height="270">
<img  id="p2" style="display: none;" src="img/Picture2.png" width="300px" height="270">
<img  id="p3" style="display: none;" src="img/Picture3.png" width="300px" height="270">

</div> 

 <div class="resimm2">
<img  id="p4"  src="img/Picture4.png" width="380px" height="220">
<img  id="p5" style="display: none;" src="img/Picture5.png" width="380px" height="220">
<img  id="p6" style="display: none;" src="img/Picture6.png" width="380px" height="220">

</div> 

 <div class="resimm3">
<img  id="p7"  src="img/Picture7.png" width="180px" height="180">
<img  id="p8" style="display: none;" src="img/Picture8.png" width="180px" height="180">
<img  id="p9" style="display: none;" src="img/Picture9.png" width="180px" height="180">

</div> 


 <div class="btn-group" id="my_styles">


<div class="button1 ">
  <a  id="btn1" >DAHİL OLDUKLARIM</a> 
   </div>

   <div class="button1">
  <a  id="btn2">2020</a> 
   </div>

   <div class="button1">
  <a  id="btn3">TÜM VERİ</a> 
   </div>



 &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;
<div class="button2 ">
  <a  id="btn4">DAHİL OLDUKLARIM</a> 
   </div>

   <div class="button2 ">
  <a  id="btn5">2020</a> 
   </div>

   <div class="button2 ">
  <a  id="btn6">TÜM VERİ</a> 
   </div>

 &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;

<div class="button3">
  <a  id="btn7">DAHİL OLDUKLARIM</a> 
   </div>

   <div class="button3">
  <a  id="btn8">2020</a> 
   </div>

   <div class="button3">
  <a  id="btn9">TÜM VERİ</a> 
   </div>

</div>  
    <!-- /.çizgiler -->     
<div class="vr"></div>
<div id=colorstrip>   </div>


</body>

 
    <?php
    include('inc/footer.php');
    ?>




  <script> $("#btn1").click(function(){$("#p1").fadeIn(-50); $("#p2").fadeOut(-50); $("#p3").fadeOut(-50);}); </script>
  <script> $("#btn2").click(function(){$("#p2").fadeIn(-50); $("#p1").fadeOut(-50); $("#p3").fadeOut(-50);}); </script>
  <script> $("#btn3").click(function(){$("#p3").fadeIn(-50); $("#p1").fadeOut(-50); $("#p2").fadeOut(-50);}); </script>

    <script> $("#btn4").click(function(){$("#p4").fadeIn(-50); $("#p5").fadeOut(-50); $("#p6").fadeOut(-50);}); </script>
  <script> $("#btn5").click(function(){$("#p5").fadeIn(-50); $("#p4").fadeOut(-50); $("#p6").fadeOut(-50);}); </script>
  <script> $("#btn6").click(function(){$("#p6").fadeIn(-50); $("#p4").fadeOut(-50); $("#p5").fadeOut(-50);}); </script>

    <script> $("#btn7").click(function(){$("#p7").fadeIn(-50); $("#p8").fadeOut(-50); $("#p9").fadeOut(-50);}); </script>
  <script> $("#btn8").click(function(){$("#p8").fadeIn(-50); $("#p7").fadeOut(-50); $("#p9").fadeOut(-50);}); </script>
  <script> $("#btn9").click(function(){$("#p9").fadeIn(-50); $("#p7").fadeOut(-50); $("#p8").fadeOut(-50);}); </script>


  
 <script>
 jQuery("#my_styles .button1").click(function(){
        jQuery("#my_styles .button1").removeClass('activee');
        jQuery(this).toggleClass('activee'); 
}); </script>

 <script>
 jQuery("#my_styles .button2").click(function(){
        jQuery("#my_styles .button2").removeClass('activee');
        jQuery(this).toggleClass('activee'); 
}); </script>


 <script>
 jQuery("#my_styles .button3").click(function(){
        jQuery("#my_styles .button3").removeClass('activee');
        jQuery(this).toggleClass('activee'); 
}); </script>

