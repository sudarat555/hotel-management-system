DELIMITER $$

CREATE PROCEDURE TestWhileLoop()
BEGIN

    DECLARE x INT;
    DECLARE str VARCHAR(255);

    SET x = 1;
    SET str = '';

    WHILE x <= 5 DO
        SET str=CONCAT(str,x,',');
        SET x = x + 1;

    END WHILE;

    SELECT str;

END $$

DELIMITER ;