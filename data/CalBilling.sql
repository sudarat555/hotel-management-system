DELIMITER  $$

DROP PROCEDURE IF EXISTS CallBilling $$

CREATE PROCEDURE CallBilling(IN ID INT)
BEGIN

    DECLARE  Ctype INT;
    DECLARE  RoomCost INT;
    DECLARE  RoomNumber INT;
    DECLARE  Bill INT;
    DECLARE  CusDis INT;

    SELECT Ctype_No,Room_Number INTO Ctype , RoomNumber
    FROM CustomerDT WHERE Customer_No=ID;

    SELECT Ctype_Discount INTO CusDis
    FROM CustomerTYPE
    WHERE Ctype_No=Ctype;

    SELECT Room_Cost INTO RoomCost
    FROM RoomDT
    WHERE Room_Number=RoomNumber;

    SET Bill = RoomCost-((RoomCost*CusDis)/100);
    UPDATE CustomerDT SET Customer_Bill = Bill WHERE Customer_No=ID;


END   $$

DELIMITER  ;