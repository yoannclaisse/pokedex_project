<!-- include -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/nav.php' ?>
<?php include './includes/apiCall.php' ?>

<?php
    // Get ID
    $id = $_GET['id'] ?? null;
    if($id == 899)
    {
        $id = 10001;
    }
    elseif ($id == 10000)
    {
        $id = 898;
    }

    // url
    $urlStats = 'https://pokeapi.co/api/v2/pokemon/'.$id.'/';
    $urlSpecies = 'https://pokeapi.co/api/v2/pokemon-species/'.$id.'/';

    // api call
    $resultStats= apiCall($urlStats);
    $resultSpecies= apiCall($urlSpecies);


    // pokemon's infos
    $pokemonName = $resultStats->name;
    $artWork = 'official-artwork';
    $imageLink = 'front_default';
    $noImage = './assets/images/noimage.png';
    $pokemonImage = empty($resultStats->sprites->other->home->$imageLink) ? $noImage : $resultStats->sprites->other->home->$imageLink;
    $image = empty($imageArtwork) ? $noImage : $imageArtwork;

    
    $type = $resultStats->types;
    $typeOne = $resultStats->types[0]->type->name;
    $height = $resultStats->height / 10;
    $weight = $resultStats->weight / 10;
    $description = $resultSpecies->flavor_text_entries[0]->flavor_text;
    $description = str_replace('', ' ', $description);
    $description = str_replace('POKéMON', 'pokémon', $description);
    $description = str_replace('.”', '”.', $description);
    $pokemonId = str_pad($resultSpecies->id,  4, "00", STR_PAD_LEFT);

    // condition for all descriptions to be in english 
    for($i=0; $i < sizeof($resultSpecies->flavor_text_entries); $i ++)
    {
        if($resultSpecies->flavor_text_entries[$i]->language->name == 'en')
        {
            $description = $resultSpecies->flavor_text_entries[$i]->flavor_text;
        }
    }

    // ternary 'if' for type
    $typeTwo = array_key_exists("1",$type) ? $resultStats->types[1]->type->name : "-";
    $statTitle = 'Stats';
    $statContent = $resultStats->stats;
    $moveTitle = 'Moves';
    $moveContent = $resultStats->moves;

?>
<!-- wrapper -->
<div class="wrapperPokemon">
    
    <!-- left div -->
    <div class="divLeft">

        <!-- left content -->
        <div class="leftContent">
            <div class="pokemonName">
                <h1><?= $pokemonName .' #'. $pokemonId?></h1>
            </div>
            <div class="pokemonImage">
                <img src="<?=$pokemonImage?>" alt="pokemon_image">
            </div>
            <div class="pokeInfos">
                <p class="typeOne"> <span> Type-one : </span> <span class="typeBg"><?= $typeOne ?></span></p>
                <p class="typeTwo"> <span>Type-two : </span><?= $typeTwo ?></p>
                <p class="description"><span>Informations : </span> <br> <?= $description ?></p>
                <p class="weight"> <span>Weight : </span> <?= $weight ?> Kilograms</p>
                <p class="height"><span>Height : </span> <?= $height ?> Meters</p>
            </div>
        </div>
    </div>

    <!-- right div -->
    <div class="divRight">

        <!-- right content -->
        <div class="rightContent">
            <div class="nameStat">
                <a class="prevButtonStat" href="./pokemonList.php?page=<?=$page - 1?>">
                    <img src="./assets/images/arrow_left_w.svg" alt="">
                </a>
                <h1 class="pokemonTitleStat">Stats</h1>
                <a class="nextButtonStat" href="./pokemonList.php?page=<?=$page + 1?>">
                    <img src="./assets/images/arrow_right_w.svg" alt="">
                </a>
            </div>


            <!-- stats infos -->
            <div class="contentStat">

                <!-- foreach for creat all infos for each pokemon -->
                <?php foreach($statContent as $key => $value)
                {
                    $statName = $value->stat->name;
                    $statValue = $value->base_stat;
                ?>
                <h3> <span class="statName"><?= $statName ?></span> : <span class="statValue"> <?= $statValue ?> </span></h3>
                <?php } ?>
            </div>

            <!-- foreach for creat all infos for each pokemon -->
            <div class="contentMove">
                <?php foreach($moveContent as $key =>$value)
                    {
                        $moveName = $value->move->name;
                        $learnedAt = $value->version_group_details[0]->level_learned_at;
                        $howTo = $value->version_group_details[0]->move_learn_method->name;
                        $moveUrl = $value->move->url;
                        // regex to find all number at the end of the link
                        $regexResult = preg_match('%\/([^\/]+)\/?$%', $moveUrl, $matches);
                ?>
                    <h3> <a href="./moves.php?id=<?=$matches[1]?>"> <span class="moveName"> <?=$moveName ?> </span></a> <?=' at level: '. $learnedAt .' with '. $howTo .' method'?></h3>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- button previous and next -->
    
    <a class="nextButton" href="./pokemon.php?id=<?=$id + 1?>">
        <img src="./assets/images/arrow_right_w.svg" alt="">
    </a>
    <a class="prevButton" href="./pokemon.php?id=<?=$id - 1?>">
        <img src="./assets/images/arrow_left_w.svg" alt="">
    </a>
</div>

<!--  includes footer -->
<?php include './includes/footer.php' ?>