CREATE VIEW `12ac3d11`.`guardianInvoiceView` 
	AS 
	SELECT guardianInvoiceNumber, weeklyFee, teaCost, extraDays, dateInvoiceIssued, childID, guardianID
	FROM guardianinvoice 
	GROUP by guardianID
	ORDER BY dateInvoiceIssued DESC
