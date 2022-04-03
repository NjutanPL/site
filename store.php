<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0aebde7c02.js" crossorigin="anonymous"></script>
</head>
<body>  

    <?php require_once ("nav.php"); ?>
    <?php require_once ("connect.php"); ?>
    <?php require_once ("storefunc.php"); ?>
    <?php
    // create instance of Createdb class
$database = new CreateDb("nts","produkty","users");

if (isset($_POST['add'])){
    /// print_r($_POST['id_produktu']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "id_produktu");

        if(in_array($_POST['id_produktu'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'id_produktu' => $_POST['id_produktu']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'id_produktu' => $_POST['id_produktu']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>
<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['nazwa_produktu'], $row['cena_produktu'], $row['zdjecie_produktu'],$row['shortdesc'], $row['longdesc'], $row['id']);
                }
            ?>
        </div>
</div>
    







    <?php require_once ("footer.php"); ?>
</body>
</html>