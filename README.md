# Pokedex_project

The goal of this exercise it was to collect pokemon datas from pokéApi. This project was developed by Yoann Claisse, ESIN student in Paris.

## Problems with Api or not but solved
There is a problems with pokeApi from the datas, they wasn't classified all time with the same meanning. For example some pokemon are their descriptions at index[0] in english and other not I fixed all of this small irregularity. I deleted all a specifics characters in pokemon description 


## Features
There is many features, you can click left or right to see more pokemon, all the list (pokemon, items, abilities, moves) are clickable and then you are acces to a specific description. 
In pokemon "focus" you can swip betwen stats and move inside the page. All of the pokemon moves are clickable (I use regex to take all the number between the last / / in url and then it's became possible to have acces to each move available) if you click in moves you go directly to the moves "focus".

You have to open the project with the command :

php -S localhost:1234

otherwise some features will not work.

