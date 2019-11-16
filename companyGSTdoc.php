<?php
require_once'common.php';
$name=strtoupper($_POST['name']);
$date=$_POST['date'];
$director=strtoupper($_POST['director']);
$din=strtoupper($_POST['din']);
require_once 'vendor/autoload.php';
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$text="CERTIFIED TRUE COPY OF THE RESOLUTION PASSED AT THE MEETING OF THE BOARD OF DIRECTORS OF THE COMPANY ".$name." HELD ON ".$date." AT 11:00AM AT THE REGISTERED OFFICE OF THE COMPANY.";
$section->addText($text,array('name' => 'Times New Roman', 'size' => 12));
$text="RESOLVED THAT the Board of Directors do hereby appoint ".$director." Director of the Company as Authorised Signatory for registration of the Company on the Goods and Service Tax (GST) System Portal and to sign and submit various document electronically and/or physically and to make applications, communications, representations, modifications or alterations on behalf of the Company before the Central GST and/or the concerned State GST authorities as and when required.";
$section->addText($text,array('name' => 'Times New Roman', 'size' => 12));
$text="FURTHER RESOLVED THAT ".$director.", Director of the Company be and is hereby authorized to represent the Company and to take necessary actions on all goods and service tax related issues including but not limited to presenting documents/records etc., on behalf of the Company liaising/representing for registration of the Company under GST and also to make any alterations, additions, corrections, to the documents, papers, forms, etc., filed with other Government authorities as and when required.";
$section->addText($text,array('name' => 'Times New Roman', 'size' => 12));
$text="FURTHER RESOLVED THAT ".$director.", Director of the Company be and is hereby authorized on behalf of the company to sign the returns, documents, letters, correspondences etc. and to represent on behalf of the Company, for assessments, appeals or otherwise before the goods and service tax authorities as and when required.";
$section->addText($text,array('name' => 'Times New Roman', 'size' => 12));
$text="For".$name;
$section->addText($text,array('name' => 'Times New Roman', 'size' => 12));
$text="Director\nMr.".$director."(DIN:".$din.")";
$section->addText($text,array('name' => 'Times New Roman', 'size' => 12));

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('helloWorld.docx');
$objWriter->save('BoardResolution.docx');

$temp_file_uri = tempnam('', 'xyz');
$objWriter->save($temp_file_uri);
//download code
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=BoardResolution.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Content-Length: ' . filesize($temp_file_uri));
readfile($temp_file_uri);
unlink($temp_file_uri); // deletes the temporary file
exit;
?>