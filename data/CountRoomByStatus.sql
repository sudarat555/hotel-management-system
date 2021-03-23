DELIMITER  $$

CREATE PROCEDURE CountRoomByStatus(IN roomStatus VARCHAR(25), OUT total INT)
BEGIN
    SELECT count(Room_Number)
    INTO total
    FROM RoomDT
    WHERE Room_Status=roomStatus;


END  $$

DELIMITER  ;