SELECT titre, resum, duree_min
	FROM film
	WHERE 
	resum LIKE '%42%'
	OR
	titre LIKE '%42%'
	ORDER BY duree_min;
