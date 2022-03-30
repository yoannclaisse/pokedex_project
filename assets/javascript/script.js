const firstType = document.querySelector('.typeOne')
const cards = [...document.querySelectorAll('.card')]
const nav = document.querySelector('.nav')
const imageDiv = [...document.querySelectorAll('.imageDiv')]
const pokeball = document.querySelector('.pokeball')
const linkHome = [...document.querySelectorAll('.linkHome')]
const prevButton = document.querySelector('.prevButton')
const nextButton = document.querySelector('.nextButton')
const imageSprites = document.querySelector('.imageSprites')
const divLeft = document.querySelector('.divLeft')
const typeBg = document.querySelector('.typeBg')



const urlPagePokemonListOne = 'http://localhost:1234/pokemonList.php?page=1'
const urlPagePokemonListLast = 'http://localhost:1234/pokemonList.php?page=35'

const urlPagePokemonOne = 'http://localhost:1234/pokemon.php?id=1'
const urlPagePokemonLast = 'http://localhost:1234/pokemonList.php?page=35'

const urlPageMovesListOne = 'http://localhost:1234/movesList.php?page=1'
const urlPageMovesListLast = 'http://localhost:1234/movesList.php?page=16'

const urlPageAbilitiesListOne = 'http://localhost:1234/abilitiesList.php?page=1'
const urlPageAbilitiesListLast = 'http://localhost:1234/abilitiesList.php?page=7'

const urlPageItemsListOne = 'http://localhost:1234/itemsList.php?page=1'
const urlPageItemsListLast = 'http://localhost:1234/itemsList.php?page=33'

if(window.location.href == urlPagePokemonListOne)
{
    prevButton.style.display ='none'
}

else if (window.location.href == urlPagePokemonListLast)
{
    nextButton.style.display ='none'
}

if(window.location.href == urlPageMovesListOne)
{
    prevButton.style.display ='none'
}

else if (window.location.href == urlPageMovesListLast)
{
    nextButton.style.display ='none'
}

if(window.location.href == urlPageAbilitiesListOne)
{
    prevButton.style.display ='none'
}

else if (window.location.href == urlPageAbilitiesListLast)
{
    nextButton.style.display ='none'
}

if(window.location.href == urlPageItemsListOne)
{
    prevButton.style.display ='none'
}

else if (window.location.href == urlPageItemsListLast)
{
    nextButton.style.display ='none'
}

const normal = '#C6C6A7'
const fire = '#F5AC78'
const water = '#9DB7F5'
const electric = '#FAE078'
const grass = '#A7DB8D'
const ice = '#BCE6E6'
const fighting = '#D67873'
const poison = '#C183C1'
const ground = '#EBD69D'
const flying = '#C6B7F5'
const psychic = '#FA92B2'
const bug = '#C6D16E'
const rock = '#	D1C17D'
const ghost = '#A292BC'
const dragon = '#A27DFA'
const dark = '#A29288'
const steel = '#D1D1E0'
const fairy = '#F4BDC9'

cards.forEach($value => {
    let getType = $value.childNodes[1].childNodes[3].querySelector('.typeOne').childNodes[0].textContent
    switch(getType)
    {
        case'fire':
        $value.style.background = fire
        break;

        case'grass':
        $value.style.background = grass
        break;

        case'normal':
        $value.style.background = normal
        break;

        case'water':
        $value.style.background = water
        break;

        case'electric':
        $value.style.background = electric
        break;

        case'ice':
        $value.style.background = ice
        break;

        case'fighting':
        $value.style.background = fighting
        break;

        case'poison':
        $value.style.background = poison
        break;

        case'ground':
        $value.style.background = ground
        break;

        case'flying':
        $value.style.background = flying
        break;

        case'psychic':
        $value.style.background = psychic
        break;

        case'bug':
        $value.style.background = bug
        break;

        case'rock':
        $value.style.background = rock
        break;

        case'ghost':
        $value.style.background = ghost
        break;

        case'dragon':
        $value.style.background = dragon
        break;

        case'dark':
        $value.style.background = dark
        break;

        case'steel':
        $value.style.background = steel
        break;

        case'fairy':
        $value.style.background = fairy
        break;
    }
});

switch(typeBg.textContent)
    {
        case'fire':
        divLeft.style.background = fire
        break;

        case'grass':
        divLeft.style.background = grass
        break;

        case'normal':
        divLeft.style.background = normal
        break;

        case'water':
        divLeft.style.background = water
        break;

        case'electric':
        divLeft.style.background = electric
        break;

        case'ice':
        divLeft.style.background = ice
        break;

        case'fighting':
        divLeft.style.background = fighting
        break;

        case'poison':
        divLeft.style.background = poison
        break;

        case'ground':
        divLeft.style.background = ground
        break;

        case'flying':
        divLeft.style.background = flying
        break;

        case'psychic':
        divLeft.style.background = psychic
        break;

        case'bug':
        divLeft.style.background = bug
        break;

        case'rock':
        divLeft.style.background = rock
        break;

        case'ghost':
        divLeft.style.background = ghost
        break;

        case'dragon':
        divLeft.style.background = dragon
        break;

        case'dark':
        divLeft.style.background = dark
        break;

        case'steel':
        divLeft.style.background = steel
        break;

        case'fairy':
        divLeft.style.background = fairy
        break;
    }

const pokemonTitleStat = document.querySelector('.pokemonTitleStat')
const contentStat = document.querySelector('.contentStat')
const contentMove = document.querySelector('.contentMove')
const nextButtonStat = document.querySelector('.nextButtonStat')
const prevButtonStat = document.querySelector('.prevButtonStat')

nextButtonStat.addEventListener('click', () => {
    contentStat.style.display = 'none'
    contentMove.style.display = 'block'
    pokemonTitleStat.textContent = 'Moves'
})

prevButtonStat.addEventListener('click', () => {
    contentStat.style.display = 'flex'
    contentMove.style.display = 'none'
    pokemonTitleStat.textContent = 'Stats'
})








