<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de:</p>
<p>Ubicación: <strong><?php print($datos['properties']['place']);?></strong></p>
<p>Magnitud: <strong><?php print($datos['properties']['mag']);?></strong></p>

<?php if($datos['properties']['mag'] <= 4 ){?>
<div class="alert alert-danger"><p>Mantenga la Calma.</p></div>
<?php };?>

<?php if($datos['properties']['mag'] >= 6 ){?>
<div class="alert alert-danger"><p>Al término del sismo, acérquese a las zonas de seguridad.</p></div>
<?php };?>


<pre><?php print_r($datos)?></pre>


<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
