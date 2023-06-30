CREATE TABLE usuarios(
    id BIGINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    correo VARCHAR(255) NOT NULL,
    palabra_secreta VARCHAR(255) NOT NULL
);

CREATE TABLE intentos_usuarios(
    id_usuario BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO usuarios(correo, palabra_secreta) VALUES("parzibyte@gmail.com", "123");