# My project's README

## DATABASE

### Crear database:

Des de windows anar al xampp i editar el fitxer php.ini

Descomentar la seguent linia: extension=php_sqlite3.dll

Llavors des del shell del xampp podem crear una nova base de dades

    sqlite3 newBD.db

Es pot transofrmar la BD en sql amb la seguent instruccio

    sqlite3 newBD.db .dump newBD.sqlite3

També es pot fer el proces invers per restaurar la BD:

    sqlite newBD.db < newBD.sqlite


### Instruccions:

Es poden inserir directament les linies al shell dins de sqlite (cada instruccio acabada en ;)
o be es pot llegir les intruccions des d'un fitxer:

    .read fitxer.sql


Podem veura la instruccio create de una taula amb .schema

    .schema nomTaula

### Url's de contingut

- http://ageofempires.wikia.com/wiki/Age_of_Empires_II:_The_Age_of_Kings
- https://es.wikipedia.org/wiki/Age_of_Empires_II:_The_Age_of_Kings
- https://www.ageofempires.com/games/aoeii/

### Banner slider

- https://www.jqueryscript.net/slider/Minimal-Banner-Slider-Plugin-With-jQuery-Banner-js.html
