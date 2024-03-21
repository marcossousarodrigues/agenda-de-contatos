
--- tabela contatos

CREATE TABLE tb_contact(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    surname VARCHAR(255),
    tel VARCHAR(20),
    email VARCHAR(255),
    createdAt date DEFAULT CURRENT_TIMESTAMP,
    updatedAt date DEFAULT CURRENT_TIMESTAMP
);


--- tabela usuários