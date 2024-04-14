<html>
<head>
    <!-- <link rel="stylesheet" href="css/css.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>

</style>
<body>
<?php
foreach ($monlivreur as $row) {
?>

<div class="row box">
    <div class="col-md-6 col-sm-6">
        <img style="max-width: 100%;height: auto;" class="img" src="../Assets/Livreurs/<?php $livreur = str_replace(' ','',$row['NROLIVR'].'.jpg'); echo ($livreur); ?>" alt="photo">
    </div>
    <div class="col-md-6 col-sm-6 box-right">
        <h1 class="livreur-info"> <?php echo $row['NOMLIVR'] . ' ' . $row['PRENOMLIVR'] ;?></h1>;
        <h2 class="Numéro du Livreur"> <?php echo $row['NROLIVR'] ; ?></h2>
        <h2 class="Date d\'embauche"> <?php echo $row['DATEEMBAUCHELIVR'] ; ?></h2>
    </div>
</div>


</body>
</html>
<?php
}
?>
