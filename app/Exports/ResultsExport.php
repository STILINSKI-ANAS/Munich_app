<?php

namespace App\Exports;

use App\Models\Result;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Result::with('convocation.registration', 'convocation.exam')->get()->map(function ($result) {
            return [
                'Nom complet' => $result->convocation->registration->first_name . ' ' . $result->convocation->registration->last_name,
                'Examen' => $result->convocation->exam->title,
                'Écrit' => $result->ecrit,
                'Note Écrit' => $result->note_ecrit,
                'Orale' => $result->orale,
                'Note Orale' => $result->note_orale,
                'Résultats' => $result->resultats,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Nom complet',
            'Examen',
            'Écrit',
            'Note Écrit',
            'Orale',
            'Note Orale',
            'Résultats',
        ];
    }
}
