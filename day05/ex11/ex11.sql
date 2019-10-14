SELECT UPPER(`user_card`.`last_name`) AS 'NAME',`first_name`, subscription.price  
FROM `user_card`, subscription 
WHERE subscription.price > 42
ORDER BY last_name ASC, first_name ASC ;