# Projecte Pokemon Aplicació Web Entorn Servidor
M3:UF6 - Introducció a lapersistència en BD<br>
M7:UF1 - Generació dinàmica depàgines web<br>

Professor: Ramon Cervera<br>
Alumne: Victor Porras Carrasco<br>
Curs: DAW1A<br>

## Índex

### 1-Descripció del projecte<br>
### 2-Diagrama E-R<br>
### 3-Model Relacional<br>
### 4-Seeders SQL per fer les proves<br>
### 5-CRUD online de totes les taules<br>
### 6-Aplicació navegable a través de menú<br>
### 7-CSS Bootstrap<br>
### 8-Validació de les dades <br>
### 9-Validació d’usuaris<br>
### 10-Repoblament de formularis<br><br>

### 1-Descripció del projecte<br>

He dut a terme la creació d’una aplicació, per gestionar informació referent als registres dels pokemon amb el gestor de base dades "MySQL" phpMyAdmin. Per mitjà del framework Laravel en llegnuatge PHP.<br>

El projecte té com a objectiu crear l'aplicació "Pokemon". Per mitjà d'aquesta es gestionarà la funcionalitat web.<br>

Aquesta permet l'accès a la base de dades i està relacionada amb les diferents relacions. M a N, 1 a N.<br>

Es pot gestionar la informacio de les diferents entitats, realitzant el CRUD en cadasacuna.<br>

Es poden crear, actualitzar i eliminar registres en la base de dades de "Pokemon".<br>

### 2-Diagrama E-R<br>
![Diagrama Entitat Relació](pokemon/imatges/pokemon1.jpg)<br>

Relació M a N: Pokemon amb Entrenador, molts pokemons poden tenir entrenadors i molts entrenadors poden tenir molts pokemons.<br>
Relació 1 a N: Regió amb Entrenador, en una regió pertanyen molts entrenadors i molts entrenadors pertanyen a una regió.<br>

### 3-Model Relacional<br>

- Pokemon (id_pokemon, nom, tipus).<br>
- Entrenador (id_entrenador, nom, nº medalles, id_regió).<br>
- Regió (id_regió, nom, clima).<br>
- Té (id_entrenador, id_pokemon)<br>
&nbsp;&nbsp;&nbsp;&nbsp;On id_entrenador és clau forana de Entrenador.<br>
&nbsp;&nbsp;&nbsp;&nbsp;On id_pokemon és clau forana de Pokemon.<br>
- Usuari (id_usuari, nom, cognoms, email, username, password)<br>

### 5-CRUD online de totes les taules<br>
A continuació foto de les taules, vista desde phpMyAdmin:<br>
![a](pokemon/imatges/phpmy.png)<br>
Vista del CRUD de la taula Pokemons:<br>
![b](pokemon/imatges/pokemonTaula.png)<br>
Vista del CRUD de la taula Usuaris:<br>
![c](pokemon/imatges/usuari.png)<br>
Vista del CRUD de la taula Regions:<br>
![d](pokemon/imatges/regio.png)<br>
Vista del CRUD de la taula Entrenadors:<br>
![e](pokemon/imatges/1AN.png)<br>
En aquesta vista tenim la unio del 1 a N el id_regio foreign key passa a la taula Entrenadors, per tant hi ha per establir la relacio Entrenador amb la columna nom (atribut) de la regio.
Vista del CRUD de la taula M a N:<br>
![e](pokemon/imatges/MaN.png)<br>

### 6-Aplicació navegable a través de menú<br>

