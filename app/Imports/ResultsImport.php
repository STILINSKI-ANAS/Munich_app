<?php

namespace App\Imports;

use App\Models\Convocation;
use App\Models\Result;
use App\Models\Registration;
use App\Models\Exam;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class ResultsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $registration = Registration::where('cin', $row['cin'])->first();
//        dd($registration);
        if ($registration) {
            try {
                // Convert Excel serial date to proper date
                $examDate = Carbon::createFromFormat('Y-m-d', gmdate('Y-m-d', ($row['exam_date'] - 25569) * 86400));
            } catch (\Exception $e) {
                return null; // or handle the error as appropriate
            }

            $exam = Exam::where('title', $row['title'])
                ->where('level', $row['level'])
                ->whereDate('exam_date', $examDate)
                ->first();
//            dd($exam);
            if ($exam) {
                $convocation = Convocation::where('registration_id', $registration->id)
                    ->where('exam_id', $exam->id)
                    ->first();

                if ($convocation) {
                    return new Result([
                        'convocation_id' => $convocation->id,
                        'ecrit' => $row['ecrit'] ?? 'echoue',
                        'note_ecrit' => $row['note_ecrit'] ?? 0,
                        'orale' => $row['orale'] ?? 'echoue',
                        'note_orale' => $row['note_orale'] ?? 0,
                        'resultats' => $row['resultats'] ?? 'F',
                    ]);
                }
            }
        }

        return null;
    }
}
