DROP TRIGGER IF EXISTS delroomdt;

DELIMITER $$

    CREATE TRIGGER delroomdt AFTER DELETE ON RoomDT

	FOR EACH ROW

    BEGIN

        INSERT INTO delete_RoomDT (Room_Number,Room_Floor,Rtype_No,Room_Size,Room_Cost,Room_Description,Room_Status) 
        VALUE (old.Room_Number,old.Room_Floor,old.Rtype_No,old.Room_Size,old.Room_Cost,old.Room_Description,old.Room_Status);

    END $$

DELIMITER ;