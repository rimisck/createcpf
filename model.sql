CREATE TABLE 'cpf.users'(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    address  varchar(255),
    complement  varchar(255),
    born  varchar(255),
    identity  varchar(255),
    id_exped  varchar(255),
    org_exped  varchar(255),
    region  INT(11),
    cpf INT(11)
);