DELIMITER $$

CREATE PROCEDURE TestRepeatLoop()
BEGIN

    DECLARE x INT;
    DECLARE str VARCHAR(255);

    SET x = 1;
    SET str = '';

    REPEAT

        SET str = CONCAT(str,x,',');
        SET x = x + 1;

    UNTIL x > 5
    END REPEAT;

    SELECT str;

END $$

DELIMITER ;