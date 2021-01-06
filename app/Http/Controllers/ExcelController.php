<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#EXPORTACION EXCEL
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelController extends Controller
{
    public function exportar(){
        $data = array();
        for ($i=0; $i < 5; $i++) { 
           $obj = new \stdClass();
           $obj->nombre = 'usuario '.$i;
           $obj->telefono = $i.'-000889900';
           $obj->email = 'vicea'.$i.'@aeurus.cl';
           $data[] = $obj;
           unset($obj);
        }

        //PHP SPREADSHEET
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                'rotation' => 90,
                'startColor' => [
                    'argb' => 'FFA0A0A0',
                ],
                'endColor' => [
                    'argb' => 'FFFFFFFF',
                ],
            ],
        ];
        

        $sheet->getStyle('A1:C1')->applyFromArray($styleArray);

        $sheet->setCellValue('A1', 'Usuario');
        $sheet->setCellValue('B1', 'Teléfono');
        $sheet->setCellValue('C1', 'Email'); #cabecera

        $i = 2;
        foreach($data as $dat){
            $sheet->setCellValue('A'.$i, $dat->nombre);
            $sheet->setCellValue('B'.$i, $dat->telefono);
            $sheet->setCellValue('C'.$i, $dat->email); #cabecera
            $i++;
        }


        $fileName = 'data.xlsx';
        #guardar excel en el servidor
        // $writer = new Xlsx($spreadsheet);
        // $writer->save('hello world.xlsx');#ruta destino excel

        #Exportar excel
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
    }
}
