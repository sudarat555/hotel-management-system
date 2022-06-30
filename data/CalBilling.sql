DELIMITER  $$

DROP PROCEDURE IF EXISTS CallBilling $$

CREATE PROCEDURE CallBilling(IN ID INT)
BEGIN

    DECLARE  Ctype INT;
    DECLARE  RoomCost INT;
    DECLARE  RoomNumber INT;
    DECLARE  Bill INT;
    DECLARE  oldBill INT;
    DECLARE  CusDis INT;

    SELECT Ctype_No,Room_Number,Customer_Bill INTO Ctype , RoomNumber , oldBill
    FROM CustomerDT WHERE Customer_No=ID;

    SELECT Ctype_Discount INTO CusDis
    FROM CustomerTYPE
    WHERE Ctype_No=Ctype;

    SELECT Room_Cost INTO RoomCost
    FROM RoomDT
    WHERE Room_Number=RoomNumber;

    SET Bill = RoomCost-((RoomCost*CusDis)/100);

    IF Bill != oldBill THEN
        UPDATE CustomerDT SET Customer_Bill = Bill WHERE Customer_No=ID;
    END IF;

END   $$

DELIMITER  ;