
show databases;

use sql42;

show tables;

select * from film;
select nom,nom from film;

describe film;

select id_film, titre from film

les 10 premiers
select id_film, titre from film limit 10

trie =

select id_film, titre from film ORDER BY titre limit 10
select id_film, titre from film ORDER BY titre DESC limit 10 = invers

condition anne non nul
SELECT id_film, titre, annee_prod FROM film WHERE annee_prod != 0 ORDER BY titre DESC limit 10 = invers

Pour renvoyer le nombre de resultat =
SELECT count(id_film) FROM film WHERE annee_prod != 0 ORDER BY titre DESC limit 10 = invers

avoir le max de
SELECT max(annee_prod) FROM film WHERE annee_prod != 0 ORDER BY titre DESC limit 10 = invers

chercher comment formater le retour

LES JOINTURES = regrouper les donnes entre deux tables

SELECT title FROM film INNER JOIN genre ON film.id_genre = genre.id_genre WHERE id_genre = 25;

les groupe = pour avoir par ex le nombre de film par categorie
SELECT count(*), id_genre FROM film GROUP BY id_genre;


pour suprimer 
DELETE FROM genre WHERE id_genre = 29;

pour inserer
INSERT INTO genre (id_genre, "nom") VALUES (29, "Test");

Pour updates
UPDATE genre SET nom = "test" WHERE id = 29;

comment creer une table
CREATE TABLE Test (nom VARCHAR(255), id INT PRIMARY KEY AUTO_INCREMENTED

SECURITE ET INTEGRATION

ATTENTION au quote !
fonction mysql_real_escape_string(\$argv

$res = mysql_query("SELECT 1 FROM User WHERE nom = '" . mysql_real_escape_string($argv[1]) . "' AND pass = '" . /mysql_real_escape_string($argv[2]) . "';");
$res = mysql_fetch_array($res);

Regarder les autres facon de proteger !
INT par ex

