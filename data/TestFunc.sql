DELIMITER $$

CREATE PROCEDURE TestFunc(IN in_status CHAR(1))
BEGIN

    DECLARE long_status VARCHAR(20);

    SET long_status = CustStatus('O');

    SELECT long_status;

END $$ 

DELIMITER ;