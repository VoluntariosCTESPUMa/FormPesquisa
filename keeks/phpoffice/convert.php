<?php
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;


    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('aloc.xlsx');

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
    $writer->setUseBOM(true);
    $writer->save("Convertido.csv");

?>