<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'home';
    $action = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<?php echo "controller = ".$controller.",action = ".$action; ?>
<br><a href="?controller=home&action=home" class="btn btn-primary">Home</a>
<a href="?controller=detaildb&action=index" class="btn btn-primary">Detaildatabase</a>
<a href="?controller=priceproduct&action=index" class="btn btn-primary">Priceproduct</a>
   new priceProduct <a href=?controller=priceProduct&action=newpriceProduct>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="priceproduct"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>
<?php require_once("routes.php"); ?>


</body>
</html>