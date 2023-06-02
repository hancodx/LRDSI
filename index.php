<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Posts:</h1>
    <br>
    <?php 
    $posts=[
        [
            "title"=>"hello wqqqqq",
            "body"=>"long long text here",
        ],
        [
            "title"=>"another post",
            "body"=>"other long long text here",
        ],
    ];
    ?>

    <?php  foreach ($posts as $value) {  ?>
    <div>  

        <h2><?php   echo $value['title'];?></h2>
        <p><?php echo $value['body']; ?></p>
        <hr>
        
    </div>
    <?php } ?>

</body>
</html>