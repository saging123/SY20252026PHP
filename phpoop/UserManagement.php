<?php


class UserManagement{
    private string $fname;
    public string $lname;
    private int $age;

    // this will be loaded every class
    // initialization using new Keyword

   // Only one constructor in a class -- no overloading
public function __construct(string $pfname, string $plname, int $page){
    $this->fname = $pfname;
    $this->lname = $plname;
    $this->age  = $page;
}
//  cannot declare method twice
// public function __construct(int $a){
// }
public function buildFullName():string{
    return $this->fname . " " . $this->lname;
}
public function nonDataTypeMethod($param1, $param2){
    return $param1 +  $param2;
}
public function dataTypeMethod(int $param1, int $param2):int{
    return $param1 +  $param2;
}
private function privateDataTypeMethod(int $param1, int $param2):int{
    return $param1 +  $param2;
}


}