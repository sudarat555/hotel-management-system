DELIMITER $$

CREATE PROCEDURE CountOrderByStatus(IN orderStatus VARCHAR(25) , OUT total INT)
BEGIN
    SELECT count(orderNumber)
    INTO total
    FROM Orders
    WHERE status=orderStatus;

END $$

DELIMITER ;