<?php
session_start();

if (isset($_SESSION['worker'])) {
    $worker = $_SESSION['worker'];
    
} else {
    $worker = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Supermarket managment</h1>
    <form action="" method="post">
    Worker name: <input type="text" name="worker" >

    <h2>Choose product:</h2>
    <br>
    <select id="product">
        <option value="milk">Milk</option>
        <option value="soft_drink">Soft Drink</option>
    </select>

    <h2>Product quantity:</h2>
    <input type="number" id="quantity">

    <div>
        <input type="submit" name="send" value="add" id="add"></input>
        <input type="submit" name="send" value="remove" id="remove"></input>
        <input type="submit" name="send" value="reset" id="reset"></input>
    </div>

    <div class="inventory">
        <h2>Inventary: </h2>
        <br>
    <?php   
if (isset($_POST["send"])){
    if ($_POST["send"] == "add"){
       if (isset($_POST["worker"])) {
           if ($_POST["worker"] != "") {
                $worker = $_POST["worker"];
                $_SESSION['worker'] = $worker;
            }
        }

        if (isset($_POST[''])){

        }
    }   
}
        echo "worker: $worker";
       
        if (isset($_SESSION["send"])) {
            if ($_POST["send"] == "remove") {

            }
        }

    ?>
    </div>
    </form>
    
</body>
</html>