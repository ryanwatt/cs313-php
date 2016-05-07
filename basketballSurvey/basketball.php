<?php
session_start();
if(isset($_SESSION["basketballSesh"])){
  header('Location: resultsLink.php');
exit();
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="basketballSurvey/basketballResults.php" method="post">

  <h3>MVP: </h3>
  <input type="radio" name="mvp" value="StephenCurry">Stephen Curry<br/>
  <input type="radio" name="mvp" value="RussellWestbrook">Russell Westbrook<br/>
  <input type="radio" name="mvp" value="LebronJames">Lebron James<br/>
  <input type="radio" name="mvp" value="DamianLillard">DamianLillard<br/>

  <h3>Defensive Player of the Year: </h3>
  <input type="radio" name="defense" value="KawhiLeonard">Kawhi Leonard<br/>
  <input type="radio" name="defense" value="DraymondGreen">Draymond Green<br/>
  <input type="radio" name="defense" value="HassanWhiteside">Hassan Whiteside<br/>
  <input type="radio" name="defense" value="DeandreJordan">Deandre Jordan<br/>

  <h3>Sixth Man of the Year: </h3>
  <input type="radio" name="sixth" value="JamalCrawford">Jamal Crawford<br/>
  <input type="radio" name="sixth" value="AndreIguodala">Andre Iguodala<br/>
  <input type="radio" name="sixth" value="JeremyLin">Jeremy Lin<br/>
  <input type="radio" name="sixth" value="DennisSchroder">Dennis Schroder<br/>

  <h3>Coach of the Year: </h3>
  <input type="radio" name="coach" value="SteveKerr">Steve Kerr<br/>
  <input type="radio" name="coach" value="GreggPopovich">Gregg Popovich<br/>
  <input type="radio" name="coach" value="TerryStotts">Terry Stotts<br/>
  <input type="radio" name="coach" value="TyronLue">Tyron Lue<br/>

  <br/>
  <input type="submit" value="submit">
  <br/>
  <a href="basketballSurvey/resultsLink.php">View Results</a>

</form>
</body>
</html>
