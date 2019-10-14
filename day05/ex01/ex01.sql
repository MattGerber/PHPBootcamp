CREATE TABLE  ft_table (
    `id` INT NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(8) NOT NULL,
    `group` ENUM('staff','student','other'),
    `creation_date` DATE NOT NULL,
    PRIMARY KEY (`id`)
);