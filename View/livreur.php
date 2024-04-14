<html>
<head>
    <!-- <link rel="stylesheet" href="css/css.css"/> -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #333333;
        padding: 0;
        color: #fff;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-gap: 20px;

    }

    .box {
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 10px;
        width: 250px;
        background-color: #fff;
    }

    .img {
        max-width: 100%;
        height: auto;
        border-radius: 4px;
        margin-top: 10px;
    }

    .right {
        padding: 20px;
    }

    .livreur-info {
        color: #333;
    }

    .livreur-info, .client-info h2 {
        margin-top: 10px;
        font-size: 18px;
        color: #666;
    }

    .livreur-info h1.client-title {
        font-size: 16px;
    }

    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }
</style>
<body>
<?php
foreach ($tablolivreur as $row) {
?>

<div class=" box">
    <div class="sm-6">
        <img style="max-width: 100%;height: auto;" class="img" src="./Assets/Livreurs/<?php $livreur = str_replace(' ','',$row['NROLIVR'].'.jpg'); echo ($livreur); ?>" alt="photo">
    </div>
    <div class="right">
        <h1 class="livreur-info"> <?php echo $row['NOMLIVR'] . ' ' . $row['PRENOMLIVR'] ;?></h1>;
        <h2 class="numéro-ivreur"> <?php echo $row['NROLIVR'] ; ?></h2>
        <h2 class="date-embauche"> <?php echo $row['DATEEMBAUCHELIVR'] ; ?></h2>
    </div>
</div>
<?php
}
?>
<div class="clearfix"></div>

</body>
</html>
