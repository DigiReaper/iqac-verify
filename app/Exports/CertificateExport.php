<?php

namespace App\Exports;

use App\Models\Certificate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CertificateExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Certificate::all();
    }
    public function headings(): array
    {
        return [
            'S.No',
            'Certificate ID',
            'Participant Name',
            'NA',
            'NA',
            'Institution',
            'Programme Name',
            'NA',
            'NA',
            'NA',
            'Issue Date',
            'NA',
            'Created by',
            'Updated by',
            'Deleted by',
            'Created at',
            'Updated at',
            'Deleted at',
        ];
    }
}