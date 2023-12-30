<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\EtudiantTest;
use App\Models\paiement;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $totalCourses = Course::count();
        $totalExams = Test::count();

        // Assuming Etudiant is related to User and enrolled in courses or tests
        $totalStudents = Etudiant::whereIn('id', function ($query) {
            $query->select('etudiant_id')->from('etudiant_courses')
                ->union(EtudiantTest::select('etudiant_id'));
        })->count();

        $totalUsers = User::count();
        $totalEarnings = paiement::sum('amount'); // Total earnings

        // Pending earnings are those with status_1 = 'confirmé'
        $pendingEarnings = paiement::where('status_1', 'confirmé')->sum('amount');

        // Fetch courses and tests without limiting to 6
        $courses = Course::withCount('etudiants as enrolled_students_count')->get();
        $exams = Test::withCount('etudiants as enrolled_students_count')->get();

        // Calculate earnings for each course
        foreach ($courses as $course) {
            $course->earnings = paiement::whereIn('id', function ($query) use ($course) {
                $query->select('paiement_id')
                    ->from('etudiant_courses')
                    ->where('course_id', $course->id);
            })->sum('amount');
        }

        // Calculate earnings for each exam
        foreach ($exams as $exam) {
            $exam->earnings = paiement::whereIn('id', function ($query) use ($exam) {
                $query->select('paiement_id')
                    ->from('etudiant_tests')
                    ->where('test_id', $exam->id);
            })->sum('amount');
        }

        // Sort courses and exams by earnings and limit to 6
        $courses = $courses->sortByDesc('earnings')->take(6);
        $exams = $exams->sortByDesc('earnings')->take(6);

//        dd([
//            'totalCourses' => $totalCourses,
//            'totalExams' => $totalExams,
//            'totalStudents' => $totalStudents,
//            'totalUsers' => $totalUsers,
//            'totalEarnings' => $totalEarnings,
//            'pendingEarnings' => $pendingEarnings,
//            'courses' => $courses->toArray(),
//            'exams' => $exams->toArray(),
//        ]);

        return view('admin.dashboard', compact('totalCourses', 'totalExams', 'totalStudents', 'totalUsers', 'totalEarnings', 'pendingEarnings', 'courses', 'exams'));
    }
}
