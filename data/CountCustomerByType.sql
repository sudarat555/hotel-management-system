DELIMITER  $$

CREATE PROCEDURE CountCustomerByType(IN Ctype INT, OUT total INT)
BEGIN
    SELECT count(Customer_No)
    INTO total
    FROM CustomerDT
    WHERE Ctype_No=Ctype;


END  $$

DELIMITER  ;