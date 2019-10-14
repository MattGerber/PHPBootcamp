SELECT * FROM `distrib` 
WHERE (id_distrib = 42 OR 
       (id_distrib > 61 AND id_distrib < 70) OR
       (id_distrib = 71) OR
       (id_distrib > 87 AND id_distrib < 91))
  		AND (LOWER(`name`) LIKE '%y%y%')
LIMIT 2,5;