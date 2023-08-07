<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class sellsController extends Controller
{
    public function sells()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $a = 7;

        $style = array(
            'font' => [
                'name' => 'Times New Roman',
                'size' => 15,
                'color' => array('rgb' => 'black'),
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => [
                        'rgb' => '808080'
                    ]
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ]
        );

        $styleForTitle = array(
            'font' => [
                'name' => 'Times New Roman',
                'size' => 15,
                'color' => array('rgb' => 'black'),
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => [
                        'rgb' => '808080'
                    ]
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ]
        );


        $styleForMain = array(
            'font' => [
                'name' => 'Times New Roman',
                'size' => 17,
                'color' => array('rgb' => 'black'),
                'bold'      => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => [
                        'rgb' => '808080'
                    ]
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ]
        );
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(35);
        $sheet->getColumnDimension('D')->setWidth(35);
        $sheet->getColumnDimension('E')->setWidth(35);

        $sheet->setCellValue("B4", "№");
        $sheet->setCellValue("C4", "Имя клиента");
        $sheet->setCellValue("D4", "Сумма заказа");
        $sheet->setCellValue("E4", "Товары");
        $sheet->setCellValue("F4", "Дата заказа");

        $posts = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->join('users', 'users.id', '=', 'requests.idUser')->get();
        $sum = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->sum('price');
        $users = DB::table('requests')->join('users', 'users.id', '=', 'requests.idUser')->get('name');

        foreach ($posts as $item) {
            $sheet->setCellValue("B$a", $a - 6);
            $sheet->setCellValue("C$a", $item->name);
            $sheet->setCellValue("D$a", $sum);
            $sheet->setCellValue("E$a", $item->nameProduct);
            $sheet->setCellValue("F$a", $item->created_at);
            $a++;
        }

        $sheet->getStyle("B4:F$a")->applyFromArray($style);
        $sheet->getStyle("B4:F4")->applyFromArray($styleForMain);
        $sheet->getStyle("B2:F2")->applyFromArray($styleForTitle);

        $download_file = 'public.xlsx';

        $writer = new Xlsx($spreadsheet);
        $writer->save($download_file);

        header("Content-Type: application/octet-stream");
        header("Accept-Ranges: bytes");
        header("Content-Lenght: " . filesize($download_file));
        header("Content-Disposition: attachment; filename=".$download_file);
        readfile($download_file);
    }


}
