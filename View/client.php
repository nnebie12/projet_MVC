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

    .client-info {
        color: #333;
    }

    .client-info, .numéro-client, .adresse-client, .ville-client, .code-client, .client-title {
        margin-top: 10px;
        font-size: 18px;
        color: #666;
    }

    .client-info, .numéro-client, .adresse-client, .ville-client, .code-client, .client-title {
        font-size: 16px;
    }
</style>
<body>
<div class="container">
<?php
foreach ($tabloclient as $row) {
?>

<div class="box">
    <div class="sm-6">
        <img style="max-width: 100%;height: auto;" class="img" src="./Assets/Clients/<?php $client = str_replace(' ','',$row['NROCLIE'].'.jpg'); echo ($client); ?>" alt="photo">
    </div>
    <div class="right">
        <h2 class="client-info"> <?php echo $row['NOMCLIE'] . ' ' . $row['PRENOMCLIE'] ;?></h2>;
        <h2 class="numéro-client"> <?php echo $row['NROCLIE'] ; ?></h2>
        <h2 class="adresse-client"> <?php echo $row['ADRESSECLIE'] ; ?></h2>
        <h2 class="ville-client"> <?php echo $row['VILLECLIE'] ; ?></h2>
        <h2 class="code-client"> <?php echo $row['CODEPOSTALECLIE'] ; ?></h2>
        <h2 class="client-title"> <?php echo $row['TITRCLIE'] ; ?></h2>
    </div>
</div>
<?php
}
?>
</div>
</body>
</html>


