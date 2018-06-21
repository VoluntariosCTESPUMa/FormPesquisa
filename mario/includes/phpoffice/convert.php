<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

    function convert($name){
        $path=realpath(__DIR__ . '/../../'.$name.'.xlsx');
            if(!(file_exists ($path))){
            return "FILENOTFOUND";
        }
        else{   
        require 'vendor/autoload.php';
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($path);

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
    $writer->setUseBOM(true);
    $writer->save('./../../../mysql/data/'.$name.'.csv');
    return "DONE";
    } 
}
?>