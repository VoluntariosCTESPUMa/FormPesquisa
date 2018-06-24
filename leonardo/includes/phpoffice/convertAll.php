<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

    function convert(){
        $path=realpath(__DIR__ . '/../../aloj.xlsx');
        $path2=realpath(__DIR__ . '/../../hotel.xlsx');
            if(!(file_exists ($path)))
            return "FILENOTFOUND1";
            if(!(file_exists ($path2)))
            return "FILENOTFOUND2";
        else{   
        require 'vendor/autoload.php';
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($path);
    $spreadsheet2 = \PhpOffice\PhpSpreadsheet\IOFactory::load($path2);
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
    $writer2 = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet2);
    $writer->setUseBOM(true);
    $writer2->setUseBOM(true);
    $writer->save('./../../../mysql/data/aloj.csv');
    $writer2->save('./../../../mysql/data/hotel.csv');
    return "DONE";
    } 
}
?>