<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class KursValasImport implements ToCollection
{
    /**
     * @param Collection $collection
     */

    public static array $kurs = [];

    public function collection(Collection $rows)
    {
        foreach ($rows->slice(5) as $row) {

            if (empty($row[1])) {
                continue;
            }

            self::$kurs[] = [
                'mata_uang' => $row[0],
                'pecahan'   => $row[1],
            ];
        }
    }
}
