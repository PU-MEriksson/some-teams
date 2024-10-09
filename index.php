<?php
require __DIR__.'/data.php';
require __DIR__.'/header.php';
?>

<header>
    <h1>Some Teams</h1>
    <a href="about.php">About</a>
</header>

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

<?php require __DIR__.'/footer.php';