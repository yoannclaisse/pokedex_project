<!-- includes -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>
<?php
    // get page 
    $page = empty($_GET['page']) ? 1 : $_GET['page'];

    // prepare dynamic url
    $limit = 50;
    $offset = ($page - 1) * $limit;

    // URL api
    $url = 'https://pokeapi.co/api/v2/ability/?offset='.$offset.'&limit='.$limit;

    // api call
    $result = apiCall($url);

    // elements for 'for'
    $next = $result->next;
    $array = $result->results;
    $lenght = sizeof($array);

    // empty array
    $abilitiesLinks = [];

    // boucle pour recup toutes les url et les stock dans le tableau $pokemonLInk
    for($i = 0; $i < $lenght; $i++)
    {
        $itemLink = $result->results[$i]->url;
        $abilitiesLinks[] = $itemLink;
    }
?>

<section class="section">
    <div class="main">
        <!-- items infos -->
        <?php foreach($abilitiesLinks as $key => $value)
            {
                $resultLink = apiCall($value);
                $name = $resultLink->name;
                $id = $resultLink->id;
                $effect = empty($resultLink->effect_entries[0]->effect) ? 'non-infos' : $resultLink->effect_entries[0]->effect;
                $shortEffect = empty($resultLink->effect_entries[0]->short_effect) ? 'non-infos' : $resultLink->effect_entries[0]->short_effect;
        ?>
            <a class="card" href="./abilities.php?id=<?=$id?>">
                <div class="abilities">
                    <h1 class="abilityName"><?= $name ?></h1>
                </div>
            </a>
        <?php } ?>
    </div>
    <!-- prevu=ious and next button -->
    <a class="prevButton" href="./abilitiesList.php?page=<?=$page - 1?>">
        <img src="./assets/images/arrow_left_w.svg" alt="">
    </a>
    <a class="nextButton" href="./abilitiesList.php?page=<?=$page + 1?>">
        <img src="./assets/images/arrow_right_w.svg" alt="">
    </a>
</section>
<!-- includes footer -->
<?php include './includes/footer.php' ?>