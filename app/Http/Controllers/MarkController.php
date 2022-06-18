<?php

namespace App\Http\Controllers;

use App\Models\One;
use App\Models\Three;
use App\Models\Two;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function score(Request $request)
    {

        //requested school details
        $newschool = new One();
        $newschool->school_name = $request->school_name;
        $newschool->save();

        //requested student details
        $newstudent = new Two();
        $newstudent->school_id = $newschool->id;
        $newstudent->students = $request->students;
        $newstudent->save();

        //requested marks details
        $marks = $request->marks;
        foreach ($marks as $mark) {
            $newmark = new Three();
            $newmark->school_id = $newschool->id;
            $newmark->student_id = $newstudent->id;
            $newmark->telugu = $mark['telugu'];
            $newmark->hindi = $mark['hindi'];
            $newmark->english = $mark['english'];
            $newmark->save();
        }
        
    }
}
