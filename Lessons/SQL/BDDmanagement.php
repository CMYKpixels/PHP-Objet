<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 04/07/2016
     * Time: 10:09
     */
//Créer une table
    CREATE TABLE scratch.test(
    a INT,
    b TEXT,
    c TEXT
);
//Vider une table
    DROP TABLE scratch.test;
//Insérer des données
    INSERT INTO scratch.test VALUES (1, `Ceci`, `je suis là!`);
    SELECT * FROM scratch.test;
    INSERT INTO scratch.test (a, b, c) SELECT id, name, description FROM scratch.item;

//NOW() est une fonction SQL
    INSERT INTO scratch.datetest (date, stamp) VAlUES ('2015-05-04 15:33:33', NOW());
//DTEDIFF nous donne la différence en jours
    SELECT date, stamp, DATEDIFF(date, stamp) FROM test.datest;

//Calcul
    CREATE TABLE scratch.bittest (
    b1 BIT(8),
    b2 BIT(10)
);
    INSERT INTO scratch.bittest (b1,b2) VALUEs (b'11110000',b'01001');
    SELECT * FROM scratch.bittest;


    ?>