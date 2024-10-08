<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Teams</title>
    <link rel="stylesheet" href="style.css">
</head>





<body>

<?php
require __DIR__.'/data.php';
?>

<main>

    <?php
    foreach ($teams as $teamName => $teamData): ?>
        <article>
            <img src="<?=$teamData['logo'];?>"alt="<?=$teamName;?>">
            <h2><?=$teamName?></h2>
            <p>
                League: <?=$teamData['league'];?> <br>
                City: <?=$teamData['city']?> <br>
                Rank: <?=$teamData['uefa-coefficient-ranking']?> <br>
                Group: <?=$teamData['group']?> <br>
                <a href="<?=$teamData['url']?>">Official webpage</a>
            </p>
            
        </article>
    <?php endforeach; ?>

</main>



</body>
</html>