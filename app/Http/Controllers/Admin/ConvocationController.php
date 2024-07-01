<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Convocation;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class ConvocationController extends Controller
{
    public function index()
    {
        $convocations = Convocation::with('registration', 'exam')->paginate(10);
        return view('admin.convocations.index', compact('convocations'));
    }

    public function download($id)
    {
        $convocation = Convocation::with('registration', 'exam')->findOrFail($id);
        return $this->generateConvocationPDF($convocation);
    }

    public function generateConvocationPDF(Convocation $convocation)
    {
        $pdf = new Fpdi();

        // Set the source file
        $pdf->setSourceFile(storage_path('app/public/BADDI.pdf'));

        // Import the first page of the PDF
        $templateId = $pdf->importPage(1);

        // Add a page
        $pdf->AddPage();

        // Use the imported page as the template
        $pdf->useTemplate($templateId);

        // Set font with UTF-8 encoding
        $pdf->SetFont('Helvetica', '', 12);
        $pdf->AddFont('Helvetica', '', 'helvetica.php', true);

        // Define the text and coordinates
        $first_name = $convocation->registration->first_name;
        $last_name = $convocation->registration->last_name;
        $cin = $convocation->registration->cin;
        $birthDate = $convocation->registration->birth_date;
        $birthPlace = $convocation->registration->birth_place;
        $motherTongue = $convocation->registration->mother_tongue; // Assuming you have this field in the registration model
        $birthCountry = $convocation->registration->birth_country;
        $residenceCity = $convocation->registration->residence_city; // Assuming you have this field in the registration model
        $residenceCountry = $convocation->registration->residence_country; // Assuming you have this field in the registration model
        $examTitle = $convocation->exam->title . ' ' . $convocation->exam->level;
        $examSession = $convocation->exam->exam_session;
        $examDate = $convocation->exam->exam_date;
        $examTime = '8h30mn'; // As per the provided PDF content
        $examCenter = $convocation->exam->exam_center;
        $paymentRef = $convocation->payment->payment_reference;

        // Add the text to the PDF
        $pdf->SetFont('Helvetica', 'B', 12); // Set font to bold
        $pdf->SetXY(67, 28);
        $pdf->Write(1, utf8_decode('Convocation à l\'Examen ' . $examTitle));

        $pdf->SetXY(87, 35);
        $pdf->Write(1, utf8_decode('Session 05/2024 ' . $examSession));

        // Switch back to regular font
        $pdf->SetFont('Helvetica', '', 12);

        $pdf->SetXY(35, 75);
        $pdf->Write(0, utf8_decode('- Date de l\'Examen: ' . $examDate));

        $pdf->SetXY(35, 80);
        $pdf->Write(0, utf8_decode('- Heure de l\'Examen: ' . $examTime));

        $pdf->SetXY(35, 85);
        $pdf->Write(0, utf8_decode('- Centre de l\'Examen: ' . $examCenter));

        $pdf->SetXY(35, 105);
        $pdf->Write(0, utf8_decode('- Nom: ' . $last_name));

        $pdf->SetXY(35, 110);
        $pdf->Write(0, utf8_decode('- Prenom: ' . $first_name));

        $pdf->SetXY(35, 115);
        $pdf->Write(0, utf8_decode('- CIN: ' . $cin));

        $pdf->SetXY(35, 120);
        $pdf->Write(0, utf8_decode('- Date de naissance: ' . $birthDate));

        $pdf->SetXY(35, 125);
        $pdf->Write(0, utf8_decode('- Lieu de naissance: ' . $birthPlace));

        $pdf->SetXY(35, 130);
        $pdf->Write(0, utf8_decode('- Langue maternelle: ' . $motherTongue));

        $pdf->SetXY(35, 135);
        $pdf->Write(0, utf8_decode('- Pays de naissance: ' . $birthCountry));

        $pdf->SetXY(35, 140);
        $pdf->Write(0, utf8_decode('- Lieu de résidence Ville: ' . $residenceCity));

        $pdf->SetXY(35, 145);
        $pdf->Write(0, utf8_decode('- Lieu de résidence Pays: ' . $residenceCountry));

        $pdf->SetXY(35, 150);
        $pdf->Write(0, utf8_decode('- Référence de paiement: ' . $paymentRef));

        // Output the PDF
        return response($pdf->Output('S'), 200)
            ->header('Content-Type', 'application/pdf');
    }
}

