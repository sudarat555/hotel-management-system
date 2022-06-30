DROP TRIGGER IF EXISTS setstatusroomup;

DELIMITER $$

    CREATE TRIGGER setstatusroomup AFTER UPDATE ON CustomerDT

	FOR EACH ROW

    BEGIN
        DECLARE  ID INT;
        DECLARE  RStatus VARCHAR(100);
        SET ID = old.Room_Number;
        SET RStatus = "Available"; 
        UPDATE RoomDT SET Room_Status = RStatus WHERE Room_Number=ID; 
        SET ID = New.Room_Number;
        SET RStatus = "UnAvailable"; 
        UPDATE RoomDT SET Room_Status = RStatus WHERE Room_Number=ID;

    END $$

DELIMITER ;