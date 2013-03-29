CREATE VIEW `12ac3d11`.`guardianView` 
	AS 
	SELECT firstName, surname
	FROM guardian 
	GROUP by surname
	ORDER BY surname DESC
