
//creating of table for sign up page  by using php my admin//


CREATE TABLE `users`.`users` (`sno` INT(100) NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `pass` VARCHAR(100) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB;


// inserting values sample write on console if needed//


INSERT INTO `users` (`sno`, `username`, `email`, `date`, `pass`) VALUES ('1', 'sai', 'vamshi1070@gmail.com', current_timestamp(), 'ALLAMbellam@35');

// create a  db for admin id admin@gmail.com pass is admin//

CREATE TABLE `users`.`admin` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(100) NOT NULL , `pass` VARCHAR(100) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB;

