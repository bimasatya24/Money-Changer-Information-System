<?php

namespace App\Imports;

use App\Models\Upload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class UploadImport implements ToModel, WithStartRow, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Upload([
        'MATA_UANG' => $row[11],
        'PECAHAN'   => $row[10],
        'BELI'      => $row[12],
        'JUAL'      => $row[13],
        ]);
    }

    public function startRow(): int
    {
        return 6;
    }
}
