<?php include __DIR__ . '/function/function.php';
    $usernumber = $_GET['number'];
    if($usernumber >= 8){
        $pw = randomPassword($usernumber);
        $fail = false;
    }else{
        $fail = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body class="d-flex flex-column align-items-center">
    <h1 class="text-center py-3">PHP Strong Password Generator</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="d-flex justify-content-center">
        <input class="form-control mx-2" type="number" placeholder="Enter a number" name="number">
        <button class="btn btn-primary mx-2">Send</button>
    </form>
    <p class="py-4 fs-3"><?php if($fail == false){
            for($i = 0; $i < count($pw); $i++){
                echo $pw[$i];
            }
        }else{ ?>
            <h4>Invalid number, please enter a number between 8 and 50</h4>
        <?php } ?>
    </p>
</body>
</html>