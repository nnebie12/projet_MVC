
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

    .PizzaNom {
        color: #333;
    }

    .PizzaNom, .PizzaNumero, .prix {
        margin-top: 10px;
        font-size: 18px;
        color: #666;
    }

    .PizzaNom, .PizzaNumero, .prix {
        font-size: 16px;
    }
</style>
<body>
<div class="container">
<?php
foreach ($mapizza as $row) {
?>

<div class=" box">
    <div class="sm-6">
        <img style="max-width: 100%;height: auto;" class="img" src="../Assets/Pizza/<?php $pizza = str_replace(' ','',$row['NROPIZZ'].'.jpg'); echo ($pizza); ?>" alt="photo">
    </div>
    <div class="right">
        <h2 class="PizzaNom"> <?php echo $row['DESIGNPIZZ'] ; ?></h2>
        <h2 class="PizzaNumero"> <?php echo $row['NROPIZZ'] ; ?></h2>
        <h2 class="prix"><strong><?php echo $row['TARIFPIZZ'],"0 €" ; ?></strong></h2>
    </div>
</div>
<?php
}
?>
</div>

</body>
</html>
