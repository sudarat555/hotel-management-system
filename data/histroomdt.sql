DROP TRIGGER IF EXISTS histroomdt;

DELIMITER $$

    CREATE TRIGGER histroomdt AFTER UPDATE ON RoomDT

	FOR EACH ROW

    BEGIN

        INSERT INTO history_RoomDT (Room_Number,Room_Floor,Rtype_No,Room_Size,Room_Cost,Room_Description,Room_Status) 
        VALUE (old.Room_Number,old.Room_Floor,old.Rtype_No,old.Room_Size,old.Room_Cost,old.Room_Description,old.Room_Status);

    END $$

DELIMITER ;