<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/estilo.css" />
 <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
 <script type="text/javascript" src="js/libreria.js"></script>



<title>The ACMC</title>



<?php
	//Probando el webhook v4
// require_once  ('php/conexion.php');
// require_once  ('php/visitas.php');

//$convisitas=mysqli_query($conexion, "SELECT count(*) FROM visitas  ");
 $vervi = 2;
//
// $con1=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='like' and cancion = 'El Trabajo' ");
// $data01 = mysqli_fetch_array($con1);
//
// 	$con012=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'El Trabajo' ");
// $data012= mysqli_fetch_array($con012);
//
// $con2=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'Mal Dia' ");
// $data02 = mysqli_fetch_array($con2);
//
// 	$con022=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'Mal Dia' ");
// $data022= mysqli_fetch_array($con022);
//
// $con3=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'No hay Efectivo' ");
// $data03 = mysqli_fetch_array($con3);
//
// 	$con032=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'No hay Efectivo' ");
// $data032= mysqli_fetch_array($con032);
//
// $con4=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'Animales' ");
// $data04 = mysqli_fetch_array($con4);
//
// 	$con042=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'Animales' ");
// $data042= mysqli_fetch_array($con042);
//
// $con5=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'Ropa piquete' ");
// $data05 = mysqli_fetch_array($con5);
//
// 	$con052=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'Ropa piquete' ");
// $data052= mysqli_fetch_array($con052);
//
// $con6=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'Puedo estar sin ti' ");
// $data06 = mysqli_fetch_array($con6);
//
// 	$con062=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'Puedo estar sin ti' ");
// $data062= mysqli_fetch_array($con062);
//
// $con7=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'Juan Pablo Duarte' ");
// $data07 = mysqli_fetch_array($con7);
//
// 	$con072=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'Juan Pablo Duarte' ");
// $data072= mysqli_fetch_array($con072);
//
// $con8=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where  liked='like' and cancion = 'Que lo que tu quiere' ");
// $data08 = mysqli_fetch_array($con8);

// 	$con082=mysqli_query($conexion, "SELECT count(*) FROM likeunlike where liked='unlike' and cancion = 'Que lo que tu quiere' ");
// $data082= mysqli_fetch_array($con082);

$data01 = rand(10,100);
$data012 = rand(10,100);

$data02 = rand(10,100);
$data022 = rand(10,100);

$data03 = rand(10,100);
$data032 = rand(10,100);

$data04 = rand(10,100);
$data042 = rand(10,100);

$data05 = rand(10,100);
$data052 = rand(10,100);

$data06 = rand(10,100);
$data062 = rand(10,100);

$data07 = rand(10,100);
$data072 = rand(10,100);

$data08 = rand(10,100);
$data082 = rand(10,100);




/* INICIO DEL CONTEO PARA LAS REPRODUCCIONES*/
// $conrep1=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'El Trabajo' ");
// $rep01 = mysqli_fetch_array($conrep1);
// $conrep2=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'Mal Dia' ");
// $rep02 = mysqli_fetch_array($conrep2);
// $conrep3=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'No hay Efectivo' ");
// $rep03 = mysqli_fetch_array($conrep3);
// $conrep4=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'Animales' ");
// $rep04 = mysqli_fetch_array($conrep4);
// $conrep5=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'Ropa piquete' ");
// $rep05 = mysqli_fetch_array($conrep5);
// $conrep6=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'Puedo estar sin ti' ");
// $rep06 = mysqli_fetch_array($conrep6);
// $conrep7=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'Juan Pablo Duarte' ");
// $rep07 = mysqli_fetch_array($conrep7);
// $conrep8=mysqli_query($conexion, "SELECT count(*) FROM reproducciones where  cancion = 'Que lo que tu quiere' ");
// $rep08 = mysqli_fetch_array($conrep8);
$rep01 = rand(10,100);
$rep02 = rand(10,100);
$rep03 = rand(10,100);
$rep04 = rand(10,100);
$rep05 = rand(10,100);
$rep06 = rand(10,100);
$rep07 = rand(10,100);
$rep08 = rand(10,100);


/* INICIO DEL CONTEO PARA LAS DESCARGAS*/
// $condes1=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'El Trabajo' ");
// $des01 = mysqli_fetch_array($condes1);
// $condes2=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'Mal Dia' ");
// $des02 = mysqli_fetch_array($condes2);
// $condes3=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'No hay Efectivo' ");
// $des03 = mysqli_fetch_array($condes3);
// $condes4=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'Animales' ");
// $des04 = mysqli_fetch_array($condes4);
// $condes5=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'Ropa piquete' ");
// $des05 = mysqli_fetch_array($condes5);
// $condes6=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'Puedo estar sin ti' ");
// $des06 = mysqli_fetch_array($condes6);
// $condes7=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'Juan Pablo Duarte' ");
// $des07 = mysqli_fetch_array($condes7);
// $condes8=mysqli_query($conexion, "SELECT count(*) FROM descargas where  cancion = 'Que lo que tu quiere' ");
// $des08 = mysqli_fetch_array($condes8);

$des01= rand(10,100);
$des02= rand(10,100);
$des03= rand(10,100);
$des04= rand(10,100);
$des05= rand(10,100);
$des06= rand(10,100);
$des07= rand(10,100);
$des08= rand(10,100);

?>

</head>

<body  onload="show('uno');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')" >

<div id="cabeza" >
<h5>
Visitas total <strong> (<?php
echo $vervi[0];
?>)</strong>
</h5>
<div id="cabezacenter">
	<h2>Pagina Oficial the ACMC</h2>

    <h4>WEB Beta | Demo - Augusto Cesar Minaya Cruz</h4>
    </div>
</div>

<div id="cuerpo">

<div id="cuerpocentro">
<iframe width="420" height="315" src="https://www.youtube.com/embed/4nhDQpDezUM" frameborder="0" allowfullscreen></iframe>
<div class="izq">

<!--<iframe src="//www.youtube.com/embed/f6csUFoPGNY" frameborder="0" allowfullscreen></iframe>-->
<!--<h4>
Este es un tema que habla de las cosas que pasamos en el trabajo, los sacrificios que tenemos que hacer para poder mantenerlo y la poca valoración que luego recibimos a cambio.
</h4>-->
<!--<a href="#" title="El Trabajo">https://www.youtube.com/watch?v=f6csUFoPGNY</a>-->

 <div id='player'>
<audio controls='' id='audio' preload='auto' tabindex='0' type='audio/mpeg'>
<source src='album/El Trabajo.mp3' type='audio/mp3'/>
Hola, tu navegador no está actualizado y no puede mostrar este contenido..</audio>
</div>
<ul id='playlist'>
<li class='active'  onclick="show('uno');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')"><a href='album/El Trabajo.mp3'>1 - El Trabajo ------------------------- ACMC Volumen1 | Rep ( <?php echo $rep01;?> )</a> </li>
<li onclick="show('dos');hide('uno');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')"><a href='album/Mal Dia.mp3'>2 - Mal Dia ---------------------------- ACMC Volumen1 | Rep ( <?php echo $rep02;?> )</a></li>
<li onclick="show('tres');hide('uno');hide('dos');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')"><a href='album/No hay Efectivo.mp3'>3 - No hay Efectivo --------------- ACMC Volumen1 | Rep ( <?php echo $rep03;?> )</a></li>
<li onclick="show('cuatro');hide('uno');hide('dos');hide('tres');hide('cinco');hide('seis');hide('siete');hide('ocho')"><a href='album/Animales.mp3'>4 - Animales ------------------------- ACMC Volumen1 | Rep ( <?php echo $rep04;?> )</a></li>
<li onclick="show('cinco');hide('uno');hide('dos');hide('tres');hide('cuatro');hide('seis');hide('siete');hide('ocho')"><a href='album/Ropa piquete.mp3'>5 - Ropa piquete ------------------- ACMC Volumen1 | Rep ( <?php echo $rep05;?> )</a></li>
<li onclick="show('seis');hide('uno');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('siete');hide('ocho')"><a href='album/Puedo estar sin ti.mp3'>6 - Puedo estar sin ti ------------- ACMC Volumen1 | Rep ( <?php echo $rep06;?> )</a></li>
<li onclick="show('siete');hide('uno');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('ocho')"><a href='album/Juan Pablo Duarte.mp3'>7 - Juan Pablo Duarte ------------ ACMC Volumen1 | Rep ( <?php echo $rep07;?> )</a></li>
<li onclick="show('ocho');hide('uno');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete')"><a href='album/Que lo que tu quiere.mp3'>8 - Que lo que tu quiere -------- ACMC Volumen1 | Rep ( <?php echo $rep08;?> )</a></li>
</ul>
</div><!--TERMINA EL LADO IZQUIERDO-->


<div id="dere">



<div id="uno"><h3>El Trabajo</h3>

<ul>
<li>
<a  onclick="descargara()"  href="album/El Trabajo.mp3" download="El Trabajo ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des01;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data01;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data012;?>
</p>
<img src="imagenes/unlike.jpg" /></a>

</li>
</ul>

</div><!--Termina DIV El Trabajo-->

<div id="dos"><h3>Mal Dia</h3>
<ul>
<li>
<a onclick="descargarb()" href="album/Mal Dia.mp3" download="Mal Dia ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des02;?></strong>
</li>
<li>
<a  onclick="Clicklike()"><p>
<?php echo $data02;?>
</p><img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data022;?>
</p>
<img src="imagenes/unlike.jpg" /></a>

</li>
</ul>
</div><!--Termina DIV Mal Dia-->


<div id="tres"><h3>No hay Efectivo</h3>
<ul>
<li>
<a onclick="descargarc()" href="album/No hay Efectivo.mp3" download="No hay Efectivo ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des03;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data03;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data032;?>
</p>
<img src="imagenes/unlike.jpg" /></a>
</li>
</ul>
</div><!--Termina DIV No hay Efectivo-->


<div id="cuatro"><h3>Animales</h3>
<ul>
<li>
<a onclick="descargard()" href="album/Animales.mp3" download="Animales ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des04;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data04;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data042;?>
</p>
<img src="imagenes/unlike.jpg" /></a>
</li>
</ul>
</div><!--Termina DIV Animales-->


<div id="cinco"><h3>Ropa piquete</h3>
<ul>
<li>
<a onclick="descargare()" href="album/Ropa piquete.mp3" download="Ropa piquete ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des05;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data05;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data052;?>
</p>
<img src="imagenes/unlike.jpg" /></a>
</li>
</ul>
</div><!--Termina DIV Ropa piquete-->


<div id="seis"><h3>Puedo estar sin ti</h3>
<ul>
<li>
<a onclick="descargarf()" href="album/Puedo estar sin ti.mp3" download="Puedo estar sin ti ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des06;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data06;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data062;?>
</p>
<img src="imagenes/unlike.jpg" /></a>
</li>
</ul>
</div><!--Termina DIV Puedo estar sin ti-->


<div id="siete"><h3>Juan Pablo Duarte</h3>
<ul>
<li>
<a onclick="descargarg()" href="album/Juan Pablo Duarte.mp3" download="Juan Pablo Duarte ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a> <strong> Descargas: <?php echo $des07;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data07;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data072;?>
</p>
<img src="imagenes/unlike.jpg" /></a>
</li>
</ul>
</div><!--Termina DIV Juan Pablo Duarte-->


<div id="ocho"><h3>Que lo que tu quiere</h3>
<ul>
<li>
<a onclick="descargarh()"  href="album/Que lo que tu quiere.mp3" download="Que lo que tu quiere ACMC Volumen1"><img src="imagenes/iconomusica.png" />
Descargar Cancion
</a><strong> Descargas: <?php echo $des08;?></strong>
</li>
<li>
<a  onclick="Clicklike()">
<p>
<?php echo $data08;?>
</p>
<img src="imagenes/like.jpg" /></a>
<a  onclick="Clickunlike()">
<p>
<?php echo $data082;?>
</p>
<img src="imagenes/unlike.jpg" /></a>
</li>
</ul>
</div><!--Termina DIV Que lo que tu quiere-->



</div><!--TERMINA LADO DERECHO-->
</div><!--TERMINA CUERPO CENTRO-->
</div>
<!--TERMINA CUERPO-->


<script>
//<![CDATA[
var audio;var playlist;var tracks;var current;initaudio();
function initaudio(){current=0;
audio=$('audio');
playlist=$('#playlist');
tracks=playlist.find('li a');
len=tracks.length-1;
audio[0].volume=1;
playlist.find('a').click


(function(e){e.preventDefault();
link=$(this);
current=link.parent().index();
runaudio(link,audio[0])});
audio[0].addEventListener('ended',



function(e){current++;

if(current>len){current=0;link=playlist.find('a')[0]

}

else{link=playlist.find('a')[current]}runaudio($(link),audio[0])})}

function runaudio(link,player)

{player.src=link.attr('href');
player.srcok=link.attr('href');

if(player.srcok=='album/El Trabajo.mp3'){
show('uno');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')
  var can = 'El Trabajo';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/Mal Dia.mp3'){
show('dos');hide('uno');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')
var can = 'Mal Dia';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/No hay Efectivo.mp3'){
show('tres');hide('dos');hide('uno');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('ocho')
var can = 'No hay Efectivo';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/Animales.mp3'){
show('cuatro');hide('dos');hide('tres');hide('uno');hide('cinco');hide('seis');hide('siete');hide('ocho')
var can = 'Animales';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/Ropa piquete.mp3'){
show('cinco');hide('dos');hide('tres');hide('cuatro');hide('uno');hide('seis');hide('siete');hide('ocho')
var can = 'Ropa piquete';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/Puedo estar sin ti.mp3'){
show('seis');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('uno');hide('siete');hide('ocho')
var can = 'Puedo estar sin ti';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/Juan Pablo Duarte.mp3'){
show('siete');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('uno');hide('ocho')
var can = 'Juan Pablo Duarte';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}else if(player.srcok=='album/Que lo que tu quiere.mp3'){
show('ocho');hide('dos');hide('tres');hide('cuatro');hide('cinco');hide('seis');hide('siete');hide('uno')
var can = 'Que lo que tu quiere';  $.post('php/crearsession.php',{nombrese:can},function(data1) {   });
}




par=link.parent();par.addClass('active').siblings().removeClass('active');audio[0].load();audio[0].play()

}


//]]>

//  function Clicklike() {
//   var valor = 'like';
//  $.post('php/likeunlike.php',{mensaje:valor},function(data) {
// 			});
//        }
//
// function Clickunlike() {    var valor = 'unlike';
//  $.post('php/likeunlike.php',{mensaje:valor},function(data) {
//
// 			});
//        }

// function descargara() {  var valordes = 'El Trabajo';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargarb() {  var valordes = 'Mal Dia';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargarc() {  var valordes = 'No hay Efectivo';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargard() {  var valordes = 'Animales';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargare() {  var valordes = 'Ropa piquete';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargarf() {  var valordes = 'Puedo estar sin ti';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargarg() {  var valordes = 'Juan Pablo Duarte';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}
// function descargarh() {  var valordes = 'Que lo que tu quiere';  $.post('php/descargar.php',{descargar:valordes},function(data) {		});}

</script>
<?php
include ('footer.php');
?>


</body>
</html>
