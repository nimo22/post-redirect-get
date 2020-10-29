<?php
$prix="";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <?php include 'traiteurPhP.php'; ?>
    </head>
    <body><?php foreach($facture as $name => $price){
    if($_GET['repas']==$name){
        $prix=$price;
    }

}
$prixfinal=$prix*0.1*0.5+$prix;
?>
        <h1>facture</h1>
        <div style="float: right;margin:0px 1px 0px 0px;width:30px height=30px">
        <pre>
                 facture

        <?=$_GET['repas']?>:                   <?=$prix?>


        TVQ:                    10%

        TPS:                    5%

        TOTAL:                  <?=$prixfinal?>

        </pre>
        </div>
        <div>
        <p>vous avez commander:<?=$_GET['repas']?></p>
    </div>
    
 
    
    <div>
        <p>votre tottal est :<?=$prix?></p>
    
    </div>
    </body>
</html>