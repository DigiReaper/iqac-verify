<?php

namespace App\Imports;

use App\Models\Certificate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CertificateImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Certificate([
            'certificate_number' => $row['certificate_id'],
            'participant_name' => $row['participant_name'],
            'passport_nid' => "NA",
            'driving_license' => "NA",
            'company' => $row['institution'],
            'training_name' => $row['programme_name'],
            'location' => "NA",
            'trainer' => "NA",
            'training_date' => "NA",
            'issue_date' => $row['issue_date'],
            'expiry_date' => "NA",
            'created_by' => $row['created_by'],
        ]);
    }
}
