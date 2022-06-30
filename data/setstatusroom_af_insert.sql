DROP TRIGGER IF EXISTS setstatusroomdin;

DELIMITER $$

    CREATE TRIGGER setstatusroomin AFTER INSERT ON CustomerDT

	FOR EACH ROW

    BEGIN
        DECLARE  ID INT;
        DECLARE  RStatus VARCHAR(100);
        SET ID = New.Room_Number;
        SET RStatus = "UnAvailable"; 
        UPDATE RoomDT SET Room_Status = RStatus WHERE Room_Number=ID; 

    END $$

DELIMITER ;