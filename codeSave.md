  
## a mettre dans la home pour recup les image art-work
<!-- <img
    <?php
        $urlStats = 'https://pokeapi.co/api/v2/pokemon/'.($key+1).'/';
        $result= apiCall($urlStats);
        $artWork = 'official-artwork';
        $imageLink = 'front_default';
    ?>
    src="<?= $result->sprites->other->$artWork->$imageLink ?>" 
    alt=""
> -->



## FAIRE LE FORMUMLAIRE
réussir à faire une search bar pour que quand on click ça ammène directement sur le pokémon demandé.




([^\/]+$) =recup id des moves


\/([^\/]+)\/?$ = GOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOD



$resultJsonPokemonSpecies->flavor_text_entries[0]->flavor_text

str_pad($resultJsonPokemon->id,  4, "#00", STR_PAD_LEFT) ?>




 global $results;
    createInfoUrl($pokemonName, $index);
    set_error_handler('error2');


    if($pokemonDescription = $results[$index]->flavor_text_entries[1]->language->name === 'en'){
        $pokemonDescription = $results[$index]->flavor_text_entries[1]->flavor_text;
        return $pokemonDescription;

    } // si la description est en japonais 
    else{
        $pokemonDescription = $results[$index]->flavor_text_entries[2]->flavor_text;
        return $pokemonDescription;
    } 
}











