<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <?php 
    $name="Dark Matter";
    $read=true;

    if($read){
        $message= "you have read  $name";
    }
    ?>
    <h1>
  
     <?= $message ?>
        
    </h1>
    
</body>
</html>