/*
	Creates a view that allows access to the guardian invoices
	It then joins with the child and guardian tables to get the names of the two parties. It takes the details of the first guardian. 
*/
CREATE VIEW `12ac3d11`.`guardianinvoiceview` 
	AS 
	SELECT child.firstName, child.surname, child.roomName, guardian.firstName, guardian.surname, guardianInvoice.guardianInvoiceNumber, guardianInvoice.weeklyFee, guardianInvoice.teaCost, guardianInvoice.extraDays, guardianInvoice.dateInvoiceIssued, guardianInvoice.invoicePaid 
	FROM guardianinvoice 
	INNER JOIN child ON child.childID = guardianinvoice.childID
	INNER JOIN guardian ON guardian.guardianID = guardianinvoice.guardianID
	GROUP by guardianinvoice.guardianID
	ORDER BY dateInvoiceIssued DESC;

/*
	Selects the invoice number, weekly fee, tea cost, extra days, date invoice was issued, whether it has been paid.
*/
SELECT invoicePaid
	FROM guardianinvoiceview;
	
