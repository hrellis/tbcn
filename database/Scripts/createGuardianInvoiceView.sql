CREATE VIEW `12ac3d11`.`guardianinvoiceviews` 
	AS 
	SELECT guardianInvoiceNumber, weeklyFee, teaCost, extraDays, dateInvoiceIssued, childID, guardianID, invoicePaid
	FROM guardianinvoice 
	GROUP by guardianID
	ORDER BY dateInvoiceIssued DESC;

SELECT invoicePaid
	FROM guardianinvoiceviews;