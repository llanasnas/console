<?php
/**
 * Created by PhpStorm.
 * User: Alumne
 * Date: 19/02/2018
 * Time: 18:08
 */




?>
<html>

<head>
    <title>Console Aplication</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid col-md-4 col-md-offset-4" style="margin-top:5%">

<form method="post" action="executa.php" class="form-group">

    <h2 class="text-center">Introdueix la acció a executar: </h2>
    <br>

    <div class="pagination-centered">
        <textarea class="form-control" name="command" placeholder="root@gerard-PC~#" id="exampleFormControlTextarea1" rows="7" style=" background-color: black; color: chartreuse"></textarea>
    </div>
    <br>

    <div><input class="btn btn-primary center center-block"  type="submit" name="submit" value="submit"></div>
</form>
</div>
</body>
</html>
