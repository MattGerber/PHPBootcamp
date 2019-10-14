SELECT `last_name`,`first_name`,DATE(`birthdate`) AS `birthdate`
FROM `user_card` 
WHERE 
(`birthdate` >= '1976-01-01') AND (`birthdate` <= '1976-12-31')
ORDER BY last_name ASC;