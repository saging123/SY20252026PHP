<?php


class Student{
    private string $id;
    private string $course;
    private int $year;
    private string $section;
    public function __construct(
        string $id,
        string $course,
        int $year,
        string $section
        ){
            $this->id = $id;
            $this->course = $course;
            $this->year = $year;
            $this->section = $section;

    }

    public function printInfo():void{
        echo "ID Number: ". $this->id.PHP_EOL;
        echo "Course: " . $this->course.PHP_EOL;
        echo "Year: " .$this->year.PHP_EOL;
        echo "Section: " . $this->section.PHP_EOL;
    }

    // setter
    public function setID(string $id){
        // validation
        // contains dash ,  xx-xxxx-xxx 
        $this->id = $id;
    }

    public function getID():string{
        // perform transformation
        // remove or convert to something before output
        return str_replace('-', '', $this->id);
    }


}