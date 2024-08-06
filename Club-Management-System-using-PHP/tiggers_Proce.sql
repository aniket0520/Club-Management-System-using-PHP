-- Existing code...

-- Trigger to update dateTime column in studentinfo table
DELIMITER //
CREATE TRIGGER before_insert_studentinfo
BEFORE INSERT ON studentinfo
FOR EACH ROW
SET NEW.dateTime = IFNULL(NEW.dateTime, NOW());
//
DELIMITER ;

-- Stored Procedure to get information about a specific club
DELIMITER //
CREATE PROCEDURE GetClubInfo(IN club_ID_param VARCHAR(20))
BEGIN
    SELECT * FROM clubinfo WHERE club_ID = club_ID_param;
END;
//
DELIMITER ;

-- Existing code...
