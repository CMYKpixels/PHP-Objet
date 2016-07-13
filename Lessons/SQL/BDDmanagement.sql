# //Créer une table
CREATE TABLE scratch.test(
  a INT,
  b TEXT,
  c TEXT
);

# //Vider une table
# DROP TABLE scratch.test;

# //Insérer des données
INSERT INTO scratch.test VALUES (1, 'Ceci', 'je suis là!');
SELECT * FROM scratch.test;
INSERT INTO scratch.test (a, b, c) SELECT id, name, description FROM scratch.item;

CREATE TABLE scratch.datetest(
  date DATETIME,
  stamp TIMESTAMP
);
# //NOW() est une fonction SQL
INSERT INTO scratch.datetest (date, stamp) VAlUES ('2015-05-04 15:33:33', NOW());
# //DATEDIFF nous donne la différence en jours
SELECT date, stamp, DATEDIFF(date, stamp) FROM scratch.datetest;

# //Calcul
CREATE TABLE scratch.bittest (
  b1 BIT(8),
  b2 BIT(10)
);
INSERT INTO scratch.bittest (b1,b2) VALUEs (b'11110000',b'01001');
SELECT * FROM scratch.bittest;

# //Update Infos
SELECT *
FROM scratch.test;
UPDATE scratch.test SET c = 'Super fun' WHERE a = 2;


UPDATE scratch.test SET c = 'Encore plus fun' WHERE a = 2;
UPDATE scratch.test SET c = NULL WHERE a = 2;

SELECT * FROM scratch.test;
DELETE FROM scratch.test WHERE a=2;

# //Efface le contenu de la table
DELETE FROM scratch.test;
# //Effacer la table
DROP TABLE scratch.test;

CREATE TABLE test(
  stamp TIMESTAMP,
  note VARCHAR(255)
) ENGINE=INNODB,CHARACTER SET=UTF8;
# //Permet de bloquer la ligne écrite (plus safe)
# //UTF8 pour eviter les problèmes de caractères

# //Not NULL Signifie que la valeur
# //ne peut pas être nulle
# //AUTO_INCREMENT définit une valeur initiale qui s'incrémentera
CREATE TABLE customers(
  id INTEGER NOT NULL AUTO_INCREMENT  PRIMARY KEY,
  name VARCHAR(255),
  address VARCHAR(255),
  city VARCHAR(255)
);

CREATE TABLE sales(
  id INTEGER NOT NULL AUTO_INCREMENT  PRIMARY KEY,
  item_id INT,
  customer_id INT,
  date DATE,
  quantity INT,
  price DECIMAL
);

USE sales;
DROP TABLE IF EXISTS test;

CREATE TABLE test (
  id SERIAL,
  a  VARCHAR(255),
  b  VARCHAR(255),
  INDEX (a, b)
);



