SELECT id, email, senha FROM cadastro_usuarios.usuario;
SELECT email, senha FROM cadastro_usuarios.usuario;
SELECT email FROM cadastro_usuarios.usuario;
SELECT *FROM cadastro_usuarios.usuario;

INSERT INTO cadastro_usuarios.usuario (email, senha) VALUES ("php@php.com.br", "123456");

UPDATE cadastro_usuarios.usuario SET senha = "abc" WHERE id=1;

DELETE FROM cadastro_usuarios.usuario WHERE id = 3;