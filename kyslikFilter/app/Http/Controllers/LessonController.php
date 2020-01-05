<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\LessonFilters;


class LessonController extends Controller
{
    public function index(LessonFilters $filters) 
    {
        // $lessons = Lesson::filter($filters)->get();
        // return view('lessons.index',['lessons'=>$lessons]);

        return Lesson::filter($filters)->get();
    }
}
