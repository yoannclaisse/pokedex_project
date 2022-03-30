<!-- includes -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>

<?php
    // page get
    $page = empty($_GET['page']) ? 1 : $_GET['page'];

    // prepar for dynamic $url
    $limit = 33;
    $offset = ($page - 1) * $limit;

    // URL api
    $url = 'https://pokeapi.co/api/v2/pokemon/?offset='.$offset.'&limit='.$limit;


    // api call
    $result = apiCall($url);

    // info for "for"
    $next = $result->next;
    $array = $result->results;
    $lenght = sizeof($array);

    // empty array
    $pokemonsLinks = [];

    // boucle pour recup toutes les url et les stock dans le tableau $pokemonLInk
    for($i = 0; $i < $lenght; $i++)
    {
        $pokemonLink = $result->results[$i]->url;
        $pokemonsLinks[] = $pokemonLink;
    }
?>

<section class="section">
    <div class="main">
        <!-- infos -->
        <?php foreach($pokemonsLinks as $key => $value)
            {
                $resultLink = apiCall($value);
                $name = $resultLink->name;
                $id = $resultLink->id;
                $type = $resultLink->types;

                $artwork = 'official-artwork';
                $noImage = './assets/images/noimage.png';
                $frontImage = 'front_default';
                $imageArtwork = $resultLink->sprites->other->{'official-artwork'}->$frontImage;
                $image = empty($imageArtwork) ? $noImage : $imageArtwork;
                $typeOne = $resultLink->types[0]->type->name;
                $typeTwo = array_key_exists("1",$type) ? $resultLink->types[1]->type->name : "-";
        ?>
            <a class="card" href="./pokemon.php?id=<?=$id?>">

                <div class="pokemonInfos">
                    <h1><?= $name ?></h1>
                    <div class="types">
                        <h2 class="typeOne"><?= $typeOne ?></h2>
                        <h2 class="typeTwo"><?= $typeTwo ?></h2>
                    </div>
                </div>

                    <!-- objectfit cover image -->
                <div class="imagePokemon">
                    <img class="imagePokemonSprites" src="<?= $image ?>" alt="pokemon_image" width="100%" height="100%">
                </div>
            </a>
        <?php } ?>
    </div>
    <!-- previous and next button -->
    <a class="prevButton" href="./pokemonList.php?page=<?=$page - 1?>">
        <img src="./assets/images/arrow_left_w.svg" alt="">
    </a>
    <a class="nextButton" href="./pokemonList.php?page=<?=$page + 1?>">
        <img src="./assets/images/arrow_right_w.svg" alt="">
    </a>
</section>
<!--  includes footer -->
<?php include './includes/footer.php' ?>