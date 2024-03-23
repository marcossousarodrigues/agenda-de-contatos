

--- tabela usuários

CREATE TABLE tb_user(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    createdAt date DEFAULT CURRENT_TIMESTAMP,
    updatedAt date DEFAULT CURRENT_TIMESTAMP
);


--- tabela contatos

CREATE TABLE tb_contact(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255),
    tel VARCHAR(20),
    email VARCHAR(255),
    UserId INT,
   	FOREIGN KEY (UserId) REFERENCES tb_user(id),
    createdAt date DEFAULT CURRENT_TIMESTAMP,
    updatedAt date DEFAULT CURRENT_TIMESTAMP
);

