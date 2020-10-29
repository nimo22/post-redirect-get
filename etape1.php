<?php
$nom= $_COOKIE['username'];
$prenom= $_COOKIE['nomdefamille'];
$choix= $_COOKIE['choix'];
$choice=$choix;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $nomm = $_POST["food"];
  
}

//pas de verification 
//on peut verifier si l utilisateur a choisi quelque chose
if($nomm!=''){
  header('location:facture.php?repas='.$nomm);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <?php include 'traiteurPhP.php'; ?>
</head>
<body>
  <h1>bonjour <?= $nom . "   " . $prenom ;?></h1><br>
  <p>vous avez choisi le menu de :<?= $choice; ?></p><br>

  </form>
  <form method="POST"> 
    <?php if ($choice=="morning"):?>
      <table>
      <!-- eggs ,muffin,bacon-->
      <!-- can do a loop if i create a table with price-->
      <tr>
          <th>ITEM</th>
          <th>Price</th>
      </tr>
      <tr>
        <td>eggs</td>
        <td>7$</td>
      </tr>
      <tr>
        <td>muffin</td>
        <td>4$</td>
      </tr>
      <tr>
        <td>bacon</td>
        <td>6$</td>
      </tr>
      </table>
      <select id=morning name="food">
      <label  for="morning">voyez choisir votre repas </label>
       <!---a menu-->
    <?php foreach($morningMenu as $data =>$fulldata):?>
      <option   id="morning" value="<?=$fulldata;?>">
      <?=$data;?>
    </option>
      <?php endforeach;?>
    </select>
    <?php endif;?>

    <?php if ($choice=="after-noon"):?>
    <table>
      <!-- pizza ,burger,sushi-->
      <!-- can do a loop if i create a table with price-->
      <tr>
          <th>ITEM</th>
          <th>Price</th>
      </tr>
      <tr>
        <td>pizza</td>
        <td>10$</td>
      </tr>
      <tr>
        <td>burger</td>
        <td>7$</td>
      </tr>
      <tr>
        <td>sushi</td>
        <td>17$</td>
      </tr>
    </table>
    <select name="food" id="after-noon">
    <label for="after-noon">voyez choisir votre repas </label>
      <!--- a menu-->
    <?php foreach($afterNoonMenu as $data ):?> 
    <option  id="after-noon"value="<?= $data;?>">
    <?= $data; ?>
  </option>
    <?php endforeach;?>
  </select>
    <?php endif;?>
    <input type="submit" id="submit">
  </form>


</body>

</html>