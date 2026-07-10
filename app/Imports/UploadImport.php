<?php

namespace App\Imports;

use App\Models\Upload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UploadImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Upload([
            'mata_uang' => $row[0],
            'pecahan'   => $row[1],
            'beli'      => $row[2],
            'jual'      => $row[3],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
