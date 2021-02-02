DELIMITER $$

CREATE PROCEDURE set_counter(INOUT count INT(4),IN inc INT(4))
BEGIN

    SET count = count + inc;

END $$

DELIMITER ;