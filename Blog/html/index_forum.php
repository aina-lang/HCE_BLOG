<?php 
    require "../action/logOutAction.php";
    if (isset($message)) {
        echo $message;
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style/bootstrap.min.css">
        <title>Forum</title>
    </head>
    <body>
        <div class="row "></div>
            <form  method="post" class="col-md-2">
                <div class="d-grid gap-2">
                    <button type="submit" name="logout"  class="btn btn-primary ">Logout</button>
                </div>
            </form>
    </body>
</html>