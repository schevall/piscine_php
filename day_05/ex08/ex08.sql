SELECT nom, prenom, LEFT(date_naissance, 4) as 'date de naissance'
	FROM fiche_personne
	WHERE YEAR(date_naissance) = 1989
	ORDER BY nom;
