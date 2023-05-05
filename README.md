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
![Texto alternativo de la imagen](pokemon/imatges/pokemon1.jpg)<br>

Relació M a N: Pokemon amb Entrenador, molts pokemons poden tenir entrenadors i molts entrenadors poden tenir molts pokemons.<br>
Relació 1 a N: Regió amb Entrenador, en una regió pertanyen molts entrenadors i molts entrenadors pertanyen a una regió.<br>

### 3-Model Relacional<br>

Pokemon (id_pokemon, nom, tipus).
Entrenador (id_entrenador, nom, nº medalles, id_regió).
Regió (id_regió, nom, clima).
Té (id_entrenador, id_pokemon)
	On id_entrenador és clau forana de Entrenador.
	On id_pokemon és clau forana de Pokemon.
Usuari (id_usuari, nom, cognoms, email, username, password)

