CREATE TABLE ft_table (id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, login VARCHAR(11) DEFAULT 'toto' NOT NULL, groupe ENUM('staff', 'student', 'other')  NOT NULL, date_de_creation DATE NOT NULL);
