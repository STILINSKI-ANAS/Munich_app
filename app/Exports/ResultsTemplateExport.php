<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultsTemplateExport implements FromArray, WithHeadings
{
    public function array(): array
    {
        return [
            // Sample data for template
            ['CIN12345', 'Exam Title', 'Level', '2024-05-10', 'echoue', '0', 'passe', '10', '1'],
            ['CIN67890', 'Another Exam', 'Level 2', '2024-06-15', 'passe', '15', 'echoue', '5', 'F'],
        ];
    }

    public function headings(): array
    {
        return [
            'cin',
            'title',
            'level',
            'exam_date',
            'ecrit',
            'note_ecrit',
            'orale',
            'note_orale',
            'resultats',
        ];
    }
}
