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
### 4-CRUD online de totes les taules<br>
### 5-Aplicació navegable a través de menú<br>
### 6-CSS Bootstrap<br>
### 7-Validació de les dades <br>
### 8-Validació d’usuaris<br>
### 9-Repoblament de formularis<br><br>

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

### 4-CRUD online de totes les taules<br>
A continuació foto de les taules, vista desde phpMyAdmin:<br>
![a](pokemon/imatges/phpmy.png)<br>
Vista del CRUD de la taula Pokemons:<br>
![b](pokemon/imatges/pokemonTaula.png)<br>
Vista del CRUD de la taula Usuaris:<br>
![c](pokemon/imatges/usuari.png)<br>
Vista del CRUD de la taula Regions:<br>
![d](pokemon/imatges/regio.png)<br>
Vista del CRUD de la taula Entrenadors:<br>
En aquesta vista tenim la unio del 1 a N el id_regio foreign key passa a la taula Entrenadors, per tant hi ha per establir la relacio Entrenador amb la columna nom (atribut) de la regio.
![e](pokemon/imatges/1AN.png)<br>
Vista del CRUD de la taula "te" M a N:<br>
En aquesta vista tenim la unió de la relació M a N Pokemons amb entrenadors, les dos foreing keys id_entrenador i id_pokemon.
![e](pokemon/imatges/MaN.png)<br>

### 5-Aplicació navegable a través de menú<br>
S'ha implementat un menú navegable desde totes les pàgines amb l'opció també de retornar a la pàgina anterior a la vista.<br>
[Menu](https://github.com/VictorPorrasWork/Victor_M7_pokemon/blob/main/pokemon/menu.php)
<br>
### 6-CSS Bootstrap<br>
He aplicat estils amb CSS als titols, taula, p, links i botons.<br>
[CSS-Estils](https://github.com/VictorPorrasWork/Victor_M7_pokemon/blob/main/pokemon/menu.php)
<br>
### 7-Validació de les dades <br>
Totes les taules contenten regles de validacions per a la cumplementació dels forumlaris.<br>
En aquest cas introduïm a la taula pokemons un pokemon amb el nom d'un tipus que està mal escrit/no existeix.<br>
Llavors en surt el warming de validació que el tipus no es vàlid. <br>
Les regles de validacions s'han implementat per mitjà de try catch.<br>
![e](pokemon/imatges/error1.png)<br>
![e](pokemon/imatges/error2.png)<br>
Ara hem possat l'exemple en el que l'usuari omplena el formulari pero no ha possat bé el format del mail "x@xcom".<br>
![e](pokemon/imatges/error3.png)<br>

### 8-Validació d’usuaris<br>
Si no s'està validat com a usuari no hi ha accès a cap de les opcions de la navegacio del menú.<br>
![e](pokemon/imatges/login.png)<br>

### 9-Repoblament de formularis<br>
S'ha implementat repoblament d'usuaris per mitja de la funció isset(), per saber també si una variable està definida i no es NULL.<br>
Aquí un exemple per introduïr l'alta d'un pokemon amb la funció isset en tots els seus atributs.
[pokemon-repoblament](https://github.com/VictorPorrasWork/Victor_M7_pokemon/blob/main/pokemon/pokemons/altaPokemon.php)<br>


