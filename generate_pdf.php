<?php
require 'vendor/autoload.php'; // Include Composer autoloader

use Spipu\Html2Pdf\Html2Pdf;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data here
    
    // For demonstration purposes, let's assume the form data is processed and stored in $formData array

    $name = $_POST['name'];
    $class = $_POST['class'];
    $examNumber = $_POST['examNumber'];

    // ... Process other form data ...

    // Generate PDF
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML('<h1>Lembar Jawaban</h1>');
    $html2pdf->writeHTML("<p>Nama: $name</p>");
    $html2pdf->writeHTML("<p>Kelas: $class</p>");
    $html2pdf->writeHTML("<p>Nomer Ujian: $examNumber</p>");

    // ... Generate PDF content ...

    $html2pdf->output('answer_sheet.pdf');
    exit;
}
?>
