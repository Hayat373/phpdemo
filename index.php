<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <?php 
     $books = [
        [
            'name' => 'do haus ci d',
            'url' => 'http://rtwhgsdbskjds'
        ],
        [
            'name' => 'do haus ghji d',
            'url' => 'http://rtwhgsdbskjds'
        ],
    ];

    function filter() {
        return 'hello';
    }
   ?>
  
   <ul>
    <?php foreach($books as $book): ?>
        <?php if ($book['name']==='do haus ci d'):?>

        <li>
            <?=$book['name']; ?> 
            <?=$book['url']; ?> 
        </li>
        <?php endif; ?>

        <?php endforeach; ?>
   </ul>
        
   <p>
    <?= filter(); ?>
   </p>
    </h1>
    
</body>
</html>