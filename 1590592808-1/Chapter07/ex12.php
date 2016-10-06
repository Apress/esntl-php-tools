// A hypothetical function that returns a string of CSV data
$sales_data = generate_csv_sales_data();
$attachment = new SOAP_Attachment('salesdata','text/csv',NULL,$sales_data);
