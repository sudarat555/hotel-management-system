DROP TRIGGER IF EXISTS setstatusroomdel;

DELIMITER $$

    CREATE TRIGGER setstatusroomdel AFTER DELETE ON CustomerDT

	FOR EACH ROW

    BEGIN
        DECLARE  ID INT;
        DECLARE  RStatus VARCHAR(100);
        SET ID = old.Room_Number;
        SET RStatus = "Available"; 
        UPDATE RoomDT SET Room_Status = RStatus WHERE Room_Number=ID; 

    END $$

DELIMITER ;