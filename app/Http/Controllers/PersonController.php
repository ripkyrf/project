<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Ripky Rizkia";
    private $code = "200914012";
    private $task;
    private $quiz;
    private $mid_ter;
    private $final;


    public function sendData(){
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code','name'));
    }
    public function myCourse($course, $task, $quiz, $mid_ter, $final){
        $code = $this->code;
        $name = $this->name;
        $this->course   = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_ter = $mid_ter;
        $this->final = $final;
        $grade = $this->calculateGrade();

        return view("person.myCourse", compact('code','name', 'course', 'task', 'quiz', 'mid_ter', 'final', 'grade'));
    }

    private function calculateGrade(){
        $grade = (($this->task * 0.1) + ($this->quiz * 0.1) + ($this->mid_ter * 0.3) +($this->final * 0.5));
        return $grade;
    }
    // public function index(){
    //     return $this->name;
    // }
    public function index(){
        return view("person.index");
    }
    public function data(){
        $names = ["Ripky", "Fahry", "Dindin", "Alex". "Feri", "Moses"];

        return view("person.data", ['names' => $names]);
    }

    public function show($param){
        $this->name = $param;
        return $this->name;
    }
}
