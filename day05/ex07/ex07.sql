SELECT `title`,`summary`
FROM`film`
WHERE
	(summary  LIKE '%42%') ||
    (title LIKE '%42%')
ORDER BY 
	duration ASC;