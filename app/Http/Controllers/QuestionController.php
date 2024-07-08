<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all(); // Mengambil semua data pertanyaan
        return view('deteksi', ['questions' => $questions, 'title' => 'Deteksi Dini']);
    }
}
