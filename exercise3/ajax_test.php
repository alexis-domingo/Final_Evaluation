<?php


$errors = array();

if(!empty($_POST)) {

    //*Basic Validations

    if(empty($_POST['brand'])) {
        $errors[] = 'Brand is mandatory';
    }
    if(empty($_POST['model'])) {
        $errors[] = 'Model is mandatory';
    }
    if(empty($_POST['color'])) {
        $errors[] = 'Color is mandatory';
    }
    if(empty($_POST['year'])) {
        $errors[] = 'Year is mandatory';
    }
    if(count($errors) > 0) {
        echo implode('<br>', $errors);
        } else {
            $pdo = new PDO('mysql:host=localhost;dbname=exo1_userslist', 'root', '');
    };

    $query = 'INSERT INTO cars(brand, model, color, year)VALUES(?,?,?,?)';
    $insert = $pdo->prepare($query);

    $insert->bindValue(1, $_POST['brand']);
    $insert->bindValue(2, $_POST['model']);
    $insert->bindValue(3, $_POST['color']);
    $insert->bindValue(4, $_POST['year']);

    if($insert->execute()) {
        echo 'Car succesfully added !';

    }else{
        echo 'Error inserting into the DataBase';
    }
}

?>