SELECT nom , prenom , date(date_naissance) AS 'date de naissance' from db_lbaudran.fiche_personne WHERE year(date_naissance) = 1989 ORDER BY nom;
