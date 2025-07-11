<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <?php 
    $books= [
       [
        'name' => 'do haus ci d',
        'url'=>'htttps/rtwhgsdbskjds'
       ],
        [
        'name' => 'do haus ghji d',
        'url'=>'htttps/rtwhgsdbskjds'
       ]
    ]
    ?>
    <h1>
  
   <ul>
    <?php foreach($books as $book): ?>

        <li>
            <?=$book['name']; ?> 
            <?=$book['url']; ?> 
        </li>

        <?php endforeach; ?>
   </ul>
        
    </h1>
    
</body>
</html>