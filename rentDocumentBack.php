<?php
require("common.php");
require_once 'bootstrap.php';
session_start();
$person=$_SESSION["idCustomer"];
if(!isset($person)){
header("location:customerLogin.php");}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$name=strtoupper(test_input($_POST['name']));
$address=strtoupper(test_input($_POST['address']));
$company=strtoupper(test_input($_POST['company']));
$city=strtoupper(test_input($_POST['city']));
$date = $_POST['date'];

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$section->addText('NO OBJECTION CERTIFICATE', array('name' => 'Times New Roman', 'size' => 12,'bold'=>true),array('align'=>'center'));
$section->addText('TO WHOMSOEVER IT MAY CONCERN', array('name' => 'Times New Roman', 'size' => 12,'bold'=>true),array('align'=>'center'));
$sentence='I,'.$name.',owner of the premises situated at'.$address.' . . I agree to give the said premises to the name of '.$company.' and have no objection in using the premises as Principal place of business for the purpose of GST Registration and operations.';
$section->addText($sentence,array('name'=>'Times New Roman','size'=>12));
$test='Date:'.$date;
$section->addText($test,array('name'=>'Times New Roman','size'=>12));
$sentence='Name: '.$name;
$section->addText($sentence,array('name'=>'Times New Roman','size'=>12));
$sentence="Place:".$city;
$section->addText($sentence,array('name'=>'Times New Roman','size'=>12));
$sentence="Signature:";
$section->addText($sentence,array('name'=>'Times New Roman','size'=>12));

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('helloWorld.docx');
$objWriter->save('NOC.docx');

$temp_file_uri = tempnam('', 'xyz');
$objWriter->save($temp_file_uri);
//download code
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=NOC.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Content-Length: ' . filesize($temp_file_uri));
readfile($temp_file_uri);
unlink($temp_file_uri); // deletes the temporary file
exit;
header("Location:GSTForm.php");
?>