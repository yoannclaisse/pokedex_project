<!-- includes -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>
<?php
    // Get ID
    $id = $_GET['id'] ?? null;

    // url
    $urlStats = 'https://pokeapi.co/api/v2/item/'.$id.'/';

    // api call
    $resultLink= apiCall($urlStats);

    // pokemon infos 
    $name = $resultLink->name;
    $id = $resultLink->id;
    $itemImage = $resultLink->sprites->default;
    $effect = $resultLink->effect_entries[0]->effect;
    $shortEffect = $resultLink->effect_entries[0]->short_effect;
?>

<div class="containerItems">
    <div class="item">
        <h1 class="nameOfItem"> <span><?= $name ?></span></h1>
        <img src="<?= $itemImage ?>" alt="" width="4%">
        <p class="effect"> <span> Effect : </span><?= $effect ?></p>
        <p class="shortEffect"> <span> Short-effect : </span><?= $shortEffect ?></p>
    </div>
</div>
<a class="prevButton" href="./items.php?id=<?=$id - 1?>">
    <img src="./assets/images/arrow_left_w.svg" alt="">
</a>

<a class="nextButton" href="./items.php?id=<?=$id + 1?>">
    <img src="./assets/images/arrow_right_w.svg" alt="">
</a>
<!-- include footer -->
<?php include './includes/footer.php' ?>