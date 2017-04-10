SELECT COUNT(*) AS 'films' FROM historique_membre
WHERE (DATE(date) <= 2007-07-27 AND DATE(date) >= 2006-10-30)
OR
(MONTH(date) = 12 AND DAY(date) = 24);

