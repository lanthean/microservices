<?php
###
# @Author   http://martinbortel.cz
# @Contact  me@martinbortel.cz
# @Created	01/03/2018
# @Updated	
#
# @Package  @docker/microservices
# @TODO
###
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Shop</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Welcome to my shop</h1>
    <ul>
        <?php 
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
        ?>
    </ul>    
</body>
</html>

<?php
# EOF
###
?>
