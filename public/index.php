<!-- collego il file al config -->
<?php require_once('../resources/config.php');?>

<!-- collego ogni singola parte del mio html che troviamo nella cartella resource->front per poterle lavorare separatamente -->
<?php include(FRONT_END.DS.'header.php');?>
<br>
<br>
<br>
<br>
<?php include(FRONT_END.DS.'category.php');?>
<?php include(FRONT_END.DS.'main.php');?>
<?php include(FRONT_END.DS.'carousel.php');?>
<?php include(FRONT_END.DS.'footer.php');?>


    