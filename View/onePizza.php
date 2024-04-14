
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

    .PizzaNom h1, .PizzaNumero h1, .prix {
        font-size: 16px;
        margin-top: 10px;
        color: #666;
    }

    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

</style>
<body>
<?php
foreach ($mapizza as $row) {
?>

<div class=" box">
    <div class="sm-6">
        <img style="max-width: 100%;height: auto;" class="img" src="../Assets/Pizza/<?php $pizza = str_replace(' ','',$row['NROPIZZ'].'.jpg'); echo ($pizza); ?>" alt="photo">
    </div>
    <div class="right">
        <h1 class="PizzaNom"> <?php echo $row['DESIGNPIZZ'] ; ?></h1>
        <p class="prix"><strong><?php echo $row['TARIFPIZZ'],"0 €" ; ?></strong></p>
    </div>
</div>
<?php
}
?>
<div class="clearfix"></div>

</body>
</html>
