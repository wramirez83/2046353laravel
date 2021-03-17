<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function saveProgram(){
        $program = new Program();
        $program->code = 3;
        $program->version = "120";
        $program->name = "Sistemas";
        $program->save();
    }
    public function getProgram(){
        $programs = Program::all();
        foreach($programs as $program){
            echo $program->name . '<br>';
        }
    }
}
