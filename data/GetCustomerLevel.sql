DELIMITER $$

CREATE PROCEDURE GetCustomerLevel(IN p_customerNumber INT(11), OUT p_customerLevel VARCHAR(10))
BEGIN

    DECLARE creditlim DOUBLE;

    SELECT creditlimit INTO creditlim
    FROM Customers
    WHERE customerNumber = p_customerNumber;

    IF creditlim > 50000 THEN
        SET p_customerLevel = 'PLATINUM';
    ELSEIF (creditlim >= 10000 AND creditlim <= 50000) THEN
        SET p_customerLevel = 'GOLD';
    ELSE
        SET p_customerLevel = 'SILVER';
    END IF;
    
END $$

DELIMITER ;