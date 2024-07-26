<?php

namespace App\Imports;


use App\Models\Patient;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PatientImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        Log::info($row);
        return new Patient([
            'patient_id' => $row['patient_id'] ?? null,
        ]);
    }
}
