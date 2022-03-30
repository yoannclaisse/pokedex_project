<!-- INCLUDES -->
<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/apiCall.php' ?>

<!-- PHP CODE -->
<?php
    // PAGE GET
    $page = empty($_GET['page']) ? 1 : $_GET['page'];
?>

<div class="sectionHome">

    <div class="containerHome">
        <!-- Pokemon link -->
        <a class="linkHome linkHome1" target="_blank" href="./pokemonList.php?page=1">
            Pokémons
            <div class="imageHomeDiv">
                <img class="pokeball" src="./assets/images/pokeball.png" alt="">
            </div>
        </a>
        <!-- Move Link -->
        <a class="linkHome linkHome2" href="./movesList.php?page=1">
            Moves
            <div class="imageHomeDiv">
                <img class="pokeball" src="./assets/images/pokeball.png" alt="">
            </div>
        </a>
        <!-- Abilities link -->
        <a class="linkHome linkHome3" href="./abilitiesList.php?page=1">
            Abilities
            <div class="imageHomeDiv">
                <img class="pokeball" src="./assets/images/pokeball.png" alt="">
            </div>
        </a>
        <!-- Items link -->
        <a class="linkHome linkHome4" href="./itemsList.php?page=1">
            Items
            <div class="imageHomeDiv">
                <img class="pokeball" src="./assets/images/pokeball.png" alt="">
            </div>
        </a>
        <!-- Location link -->
        <a class="linkHome linkHome5" href="./location.php">
            Locations
            <div class="imageHomeDiv">
                <img class="pokeball" src="./assets/images/pokeball.png" alt="">
            </div>
        </a>
        <!-- Typechart link-->
        <a class="linkHome linkHome6" href="./typechart.php">
            Type Chart
            <div class="imageHomeDiv">
                <img class="pokeball" src="./assets/images/pokeball.png" alt="">
            </div>
        </a>
        <!-- Style div -->
        <div class="behind">
            <div class="behindHome behind1"></div>
            <div class="behindHome behind2"></div>
            <div class="behindHome behind3"></div>
            <div class="behindHome behind4"></div>
            <div class="behindHome behind5"></div>
            <div class="behindHome behind6"></div>
        </div>
    </div>
</div>

<?php include './includes/footer.php' ?>