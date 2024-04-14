<html>
<head>
    <!-- <link rel="stylesheet" href="css/css.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #333333;
        padding: 0;
        color: #fff;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .box {
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        width: calc(50% - 20px);
        max-width: 400px;
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

    .livreur-info, .numéro-livreur, .date-embauche {
        margin-top: 10px;
        font-size: 18px;
        color: #666;
    }

    .livreur-info, .numéro-livreur, .date-embauche {
        font-size: 16px;
    }
</style>
<body>
<div class="container">
    <?php
    foreach ($tablolivreur as $row) {
        ?>

        <div class="box">
            <div class="sm-6">
                <img class="img" src="./Assets/Livreurs/<?php $livreur = str_replace(' ','',$row['NROLIVR'].'.jpg'); echo ($livreur); ?>" alt="photo">
            </div>
            <div class="right">
                <h2 class="livreur-info"> <?php echo $row['NOMLIVR'] . ' ' . $row['PRENOMLIVR'] ;?></h2>
                <h2 class="numéro-livreur"> <?php echo $row['NROLIVR'] ; ?></h2>
                <h2 class="date-embauche"> <?php echo $row['DATEEMBAUCHELIVR'] ; ?></h2>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>

