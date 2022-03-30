<!-- includes -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>

<?php
    // Get ID
    $id = $_GET['id'] ?? null;

    // url
    $urlStats = 'https://pokeapi.co/api/v2/ability/'.$id.'/';

    // api call
    $resultLink= apiCall($urlStats);

    // abilities infos
    $name = $resultLink->name;
    $id = $resultLink->id;
    $effect = $resultLink->effect_entries[0]->effect;
    $shortEffect = $resultLink->effect_entries[0]->short_effect;

    // condition for all descriptions to be in english 
    for($i=0; $i < sizeof($resultLink->effect_entries); $i ++)
    {
        if($resultLink->effect_entries[$i]->language->name == 'en')
        {
            $effect = $resultLink->effect_entries[$i]->effect;
        }
    }

    for($i=0; $i < sizeof($resultLink->effect_entries); $i ++)
    {
        if($resultLink->effect_entries[$i]->language->name == 'en')
        {
            $shortEffect = $resultLink->effect_entries[$i]->short_effect;
        }
    }
?>

<div class="containerAbilities">
    <div class="ability">
        <h1 class="nameOfAbility"> <span><?= $name ?></span></h1>
        <p class="effect"> <span> Effect : </span><?= $effect ?></p>
        <p class="shortEffect"> <span> Short-effect : </span><?= $shortEffect ?></p>
    </div>
</div>
<!-- previous and next button -->
<a class="prevButton" href="./abilities.php?id=<?=$id - 1?>">
    <img src="./assets/images/arrow_left_w.svg" alt="">
</a>
<a class="nextButton" href="./abilities.php?id=<?=$id + 1?>">
    <img src="./assets/images/arrow_right_w.svg" alt="">
</a>
<!-- includes footer -->
<?php include './includes/footer.php' ?>