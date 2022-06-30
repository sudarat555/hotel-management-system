TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER histroomdt AFTER UPDATE ON RoomDT\n\n	FOR EACH ROW\n\n    BEGIN\n\n        INSERT INTO history_RoomDT (Room_Number,Room_Floor,Rtype_No,Room_Size,Room_Cost,Room_Description,Room_Status) \n        VALUE (old.Room_Number,old.Room_Floor,old.Rtype_No,old.Room_Size,old.Room_Cost,old.Room_Description,old.Room_Status);\n\n    END' 'CREATE DEFINER=`root`@`localhost` TRIGGER delroomdt AFTER DELETE ON RoomDT\n\n	FOR EACH ROW\n\n    BEGIN\n\n        INSERT INTO delete_RoomDT (Room_Number,Room_Floor,Rtype_No,Room_Size,Room_Cost,Room_Description,Room_Status) \n        VALUE (old.Room_Number,old.Room_Floor,old.Rtype_No,old.Room_Size,old.Room_Cost,old.Room_Description,old.Room_Status);\n\n    END'
sql_modes=1436549152 1436549152
definers='root@localhost' 'root@localhost'
client_cs_names='latin1' 'latin1'
connection_cl_names='latin1_swedish_ci' 'latin1_swedish_ci'
db_cl_names='utf8_general_ci' 'utf8_general_ci'
created=161660577371 161660574027
