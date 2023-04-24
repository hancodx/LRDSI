<?php
include_once "DBconn.php";
if ($_POST['submit']) {
    # code...
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage </title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    
    <div class="container">
        <a href="" class="add_btn"> Ajouter <img src="/photo/plus.png" alt=""></a>
           


        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <tr id="items">
                <td>hind</td>
                <td>sameut</td>
                <td>19ans</td>
                <td><a href=""><img src="/photo/pen.png" ></a></td>
                <td><a href=""><img src="/photo/trash.png"></a></td>
            </tr>

            <tr id="items">
                <td>bahidja</td>
                <td>izem</td>
                <td>20ans</td>
                <td><a href=""><img src="/photo/pen.png" ></a></td>
                <td><a href=""><img src="/photo/trash.png"></a></td>
            </tr>

            <tr id="items">
                <td>hadjer</td>
                <td>benmeddah</td>
                <td>20 ans </td>
                <td><a href=""><img src="/photo/pen.png" ></a></td>
                <td><a href=""><img src="/photo/trash.png"></a></td>
            </tr>

        </table>

    </div>

</body>
</html>