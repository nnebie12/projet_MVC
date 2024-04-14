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
        width: 250px;
        height: auto;
        border-radius: 4px;
    }

    .right {
        padding: 20px;
    }

    .client-info {
        color: #333;
    }

    .client-info h1, .client-info h2 {
        margin-top: 10px;
        font-size: 18px;
        color: #666;
    }

    .client-info h2.client-title h2 {
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
foreach ($tabloclient as $row) {
?>

<div class="box">
    <div class="sm-6">
        <img style="max-width: 100%;height: auto;" class="img" src="./Assets/Clients/<?php $client = str_replace(' ','',$row['NROCLIE'].'.jpg'); echo ($client); ?>" alt="photo">
    </div>
    <div class="right">
        <h1 class="client-info"> <?php echo $row['NOMCLIE'] . ' ' . $row['PRENOMCLIE'] ;?></h1>;
        <h2 class="numéro-lient"> <?php echo $row['NROCLIE'] ; ?></h2>
        <h2 class="adresse-client"> <?php echo $row['ADRESSECLIE'] ; ?></h2>
        <h2 class="ville-client"> <?php echo $row['VILLECLIE'] ; ?></h2>
        <h2 class="code-client"> <?php echo $row['CODEPOSTALECLIE'] ; ?></h2>
        <h2 class="client-title"> <?php echo $row['TITRCLIE'] ; ?></h2>
    </div>
</div>
<?php
}
?>
<div class="clearfix"></div>
</body>
</html>


