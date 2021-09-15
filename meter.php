<?php
    $randnum = rand(10, 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sus-O Meter</title>
</head>
<body>
    <div class="container">
        <img src="./assets/logo.png" alt="image-not-found" srcset="" class="logo">
        <div class="container-bar">
            <div class="progress-bar progress-bar-animated" role="progressbar" style="width: <?php echo $randnum ?>%;" aria-valuenow="<?php echo $randnum ?>" aria-valuemin="10" aria-valuemax="100"><?php echo $randnum ?>%</div>
        </div>
    </div>
</body>
</html>
<style>
    @font-face {
        font-family: LEMONMILK;
        font-weight: bold;
        src: url("assets/LEMONMILK-Bold.otf") format("opentype");
    }

    .container-bar {
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #ffa1ca;
        width: 900px;
        border-radius: 25px;
        padding-right: 5px;
        padding-left: 5px;
        box-shadow: 1px 1px 10px rgb(75, 75, 75);
        margin: auto;
    }
    .progress-bar {
        font-family: LEMONMILK;
        letter-spacing: 1px;
        box-shadow: 1px 1px 10px rgb(75, 75, 75);
        margin-top: 10px;
        background-color: #ff98c4;
        color: #464646;
        border-radius: 25px;
        font-weight: 900;
        font-size: 20px;
        margin: auto;
    }
    .logo {
        display: block;
        margin: auto;
    }
    .container {
        display: block;
        margin-top: 150px;
    }
    body {
        background-color: #F26CA7;
    }

</style>
