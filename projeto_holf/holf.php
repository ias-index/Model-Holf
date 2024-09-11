 <?php 

include('conexao-holf.php');
if(!isset($_SESSION))
    session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: holf-login.php");
    die();
}

$id = $_SESSION['usuario'];

$sql_clientes = "SELECT * FROM clientes WHERE id != '$id'";
$query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error);
$num_clientes = $query_clientes->num_rows;

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOWF</title>
    <link rel="stylesheet" href="holf.css">
</head>

<body style="background-image: url(fundo.black.baw.jpg);">
   
   <div class="rodape">

 <div class="logo">
    <h1>𝑯Θ𝑳𝑭</h1>
 </div>



 <nav class="navbar">
   <div class="menu-toggle" id="menu-toggle">
       <span class="bar"></span>
       <span class="bar"></span>
       <span class="bar"></span>
       <span class="bar"></span>
   </div>
   
   </div>

   <div class="nav-list" id="nav-list">
       <li><a href="holf-2.html">Calçados</a></li>
       <li><a href="">Moletons</a></li>
       <li><a href="">Calças</a></li>
       <li><a href="">Camisetas</a></li>
   </div>
   


<section id="Calçados">
</section>

<section id="Moletons">
</section>

<section id="Calças">
</section>

<section id="Camisetas">
</section>

</nav>





   <div class="img1">
<h1 class="h1">T-SHIRT</h1>
  
    <img class="imagen1" src="class1.webp" style="display: none;">
    <img class="imagen1" src="class3.webp" style="display: none;">
    <img class="imagen1" src="class4.png" style="display: none;"> 
    <img class="imagen1" src="qc4.webp" style="display: none;"> 
    <img class="imagen1" src="" style="display: none;"> 

  </div>

  <div class="img2">
<h1 class="h2">PANTS</h1>

   <img class="imagen2" src="class1.webp" style="display: none;">
   <img class="imagen2" src="class3.webp" style="display: none;">
   <img class="imagen2" src="class4.png" style="display: none;"> 
   <img class="imagen2" src="qc4.webp" style="display: none;"> 
   <img class="imagen2" src="" style="display: none;"> 

 </div>


  <div class="text">
   <h2>NOSSA HISTÓRIA</h2>
   <P >Fundada em 2024 por Isaac e Gustavo, a HOLF nasceu com o propósito de unir moda, conforto e sustentabilidade. A marca se destaca pelo uso de materiais orgânicos e reciclados e por suas práticas de produção éticas. Inspiradas pela rica cultura brasileira, suas coleções mesclam tradição e estilo. Em pouco tempo, a HOLF se consolidou como uma referência em moda sustentável, com um compromisso sólido com a responsabilidade ambiental e social.

   </P>
  </div>

 

<!--imagen1-->

<script>
   var myIndex = 0
   carrosel1();
   function carrosel1(){
  var i = 0;
  var x = document.
  getElementsByClassName("imagen1");
  for (var i = 0; i <x.length; i++){
   x[i].style.display = "none"; 
    
}
myIndex++
if (myIndex > x.length) {
   myIndex = 1;

}
x[ myIndex - 1].style.display = "block";
setTimeout(carrosel1,1800)
}
</script>


<!--imagen2-->
<script>
   var myIndex = 0
   carrosel2();
   function carrosel2(){
  var i = 0;
  var x = document.
  getElementsByClassName("imagen2");
  for (var i = 0; i <x.length; i++){
   x[i].style.display = "none"; 
    
}
myIndex++
if (myIndex > x.length) {
   myIndex = 1;

}
x[ myIndex - 1].style.display = "block";
setTimeout(carrosel2,1800)
}
 </script>
 
 <script src="holf.script.js"></script>
 






</body>
</html>