<!-- includes -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>
<?php

// Get ID
$id = $_GET['id'] ?? null;

// url
$urlStats = 'https://pokeapi.co/api/v2/move/'.$id.'/';

// api call
$resultLink= apiCall($urlStats);

// infos moves
$name = $resultLink->name;
$id = $resultLink->id;
$effect = $resultLink->effect_entries[0]->effect;
$shortEffect = $resultLink->effect_entries[0]->short_effect;
?>

<div class="containerMoves">
    <div class="move">
        <h1 class="nameOfMove"><?= $name ?></h1>
        <p class="effect"> <span>Effect : </span> <?= $effect ?></p>
        <p class="shorEffect"><span>Short-effect : </span><?= $shortEffect ?></p>
    </div>
</div>
<a class="prevButton" href="./moves.php?id=<?=$id - 1?>">
    <img src="./assets/images/arrow_left_w.svg" alt="">
</a>
<a class="nextButton" href="./moves.php?id=<?=$id + 1?>">
    <img src="./assets/images/arrow_right_w.svg" alt="">
</a>
<!--  includes footer -->
<?php include './includes/footer.php' ?>