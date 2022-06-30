DROP TRIGGER IF EXISTS histcustdt;

DELIMITER $$

    CREATE TRIGGER histcustdt AFTER UPDATE ON CustomerDT

	FOR EACH ROW

    BEGIN

        INSERT INTO history_customerDT (Customer_Name,Customer_Address,Customer_Phone,Customer_Email,Ctype_No,Room_Number,Customer_Bill) VALUE (old.Customer_Name,old.Customer_Address,old.Customer_Phone,old.Customer_Email,old.Ctype_No,old.Room_Number,old.Customer_Bill);

    END $$

DELIMITER ;