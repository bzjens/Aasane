<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<TITLE>Takk!</TITLE>
<!--link href="aas.css" rel="stylesheet" type="text/css" /-->
<BODY>
<?php 
	include 'topmenu.php';
	$regatta = $_GET['regatta'];
?> 

<CENTER>
  <p class="nmainheader">Kvittering - &Aring;sane Seilforening </p>
</CENTER>
<hr />
<br />

<?php
   echo "<span class=\"nheader\">P&aring;melding til Neglespretten</span>";
   echo "<BR><BR>";
   echo "Du er n&aring; p&aring;meldt <STRONG>$regatta</STRONG>! <p>";
   echo "Dersom du har lagt igjen e-post adresse, vil vi pr&oslash;ve &aring;";
   echo " holde deg oppdatert via denne om deltakere, resultater og";
   echo " annen informasjon.";
     echo "<br><br><br>";
     echo "PS! Listen over p&aring;meldte b&aring;ter vil ikke bli oppdatert ";
     echo "med din p&aring;melding automatisk - Sjekk innom senere.";
   echo "<BR><br><br><br>";
?>
<a href="http://aasane.no">&Aring;sane Seilforening - hovedside</a>
</body>
</html>