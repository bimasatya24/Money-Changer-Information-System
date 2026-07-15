<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UploadExcelImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            '23.KURS VALAS SENIN, 29 Juni 20' => new KursValasImport(),
            'UPDATE WEB' => new UpdateWebImport(),
            
        ];
    }
}
