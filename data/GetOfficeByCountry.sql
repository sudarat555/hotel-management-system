DELIMITER $$

CREATE PROCEDURE GetOfficeByCountry(IN countryName VARCHAR(255))
BEGIN

    SELECT * FROM Offices WHERE country = countryName;

END $$

DELIMITER ;