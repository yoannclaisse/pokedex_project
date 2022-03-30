<!-- includes -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>
<?php
// page get
    $page = empty($_GET['page']) ? 1 : $_GET['page'];

    // prepare dynamic $url
    $limit = 50;
    $offset = ($page - 1) * $limit;

    // URL api
    $url = 'https://pokeapi.co/api/v2/item/?offset='.$offset.'&limit='.$limit;


    // api call
    $result = apiCall($url);

    // infos for 'for'
    $next = $result->next;
    $array = $result->results;
    $lenght = sizeof($array);

    // empty array
    $itemsLinks = [];

    // boucle pour recup toutes les url et les stock dans le tableau $pokemonLInk
    for($i = 0; $i < $lenght; $i++)
    {
        $itemLink = $result->results[$i]->url;
        $itemsLinks[] = $itemLink;
    }
?>
<section class="section">
    <div class="main">
            <?php foreach($itemsLinks as $key => $value)
                {
                    
                    $resultLink = apiCall($value);
                    $name = ($resultLink->name);
                    $id = $resultLink->id;
                    $noImage = './assets/images/noimage.png';
                    $itemImage = empty($resultLink->sprites->default) ? $noImage : $resultLink->sprites->default;
                    // $effect = $resultLink->effect_entries[0]->effect;
                    // $shortEffect = $resultLink->effect_entries[0]->short_effect;

            ?>
            <a class="card" href="./items.php?id=<?=$id?>">
                    <div class="items">
                        <h1><?= $name ?></h1>
                        <img class="imageSprites" src="<?=  $itemImage ?>" alt="pokemon_image" width="20%">
                    </div>
            </a>
     <?php } ?>
    </div>
    <a class="prevButton" href="./itemsList.php?page=<?=$page - 1?>">
        <img src="./assets/images/arrow_left_w.svg" alt="">
    </a>
    <a class="nextButton" href="./itemsList.php?page=<?=$page + 1?>">
        <img src="./assets/images/arrow_right_w.svg" alt="">
    </a>
</section>
<!--  includes footer -->
<?php include './includes/footer.php' ?>