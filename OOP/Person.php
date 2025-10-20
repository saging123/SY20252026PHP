<?php

class Person{
    private string $firstName;
    private string $lastName;
    private string $phone;
    public int $age;

    
    
    /**
     * PHP Constructor 
     * Autoload during Class Initialization
     * @param string  $fName - Person First Name
     * @param string $lName - Person Last Name
     * If No Lname supplied it will become 'N/A'
     */
    public function __construct(string $fName = 'SS', string $lName = 'N/A'){
        $this->firstName = $fName;
        $this->lastName = $lName;

    }
    /**
     * Getter for First Name
     * @return string
     */
    public function getFirstName(): string{
        return $this->firstName;
    }
    /**
     * Setter for First Name
     * @return string
     */
    public function setFirstName(string $fname): void{
        $invalidFName =  ['faye', 'bruno', 'rollo'];
        if(!(strlen($fname) > 1)){
            throw new InvalidArgumentException('Your First Name is too short');
        }
        if(preg_match('/\d/', $fname)){
            throw new InvalidArgumentException('First Name must not contain Number');
        }
        // check if user entry exist on blacklist
        if(in_array(strtolower($fname), $invalidFName)){
            throw new InvalidArgumentException('This First Name is in our blacklist');
        }
         $this->firstName = $fname;
    }
        public function setLastName(string $lname): void{
        $invalidFName =  ['Rambo', 'Cena', 'Roberts'];
        if(!(strlen($lname) > 1)){
            throw new InvalidArgumentException('Your last Name is too short');
        }
        if(preg_match('/\d/', $lname)){
            throw new InvalidArgumentException('Last Name must not contain Number');
        }
        // check if user entry exist on blacklist
        if(in_array(strtolower($lname), $invalidFName)){
            throw new InvalidArgumentException('This last Name is in our blacklist');
        }
         $this->lastName = $lname;
    }

    public function getLastName(): string{
        return $this->lastName;
    }
    
    public function setPhone(string $phone): void{
        if(!(strlen($phone) > 5)){
            throw new InvalidArgumentException('Your Phone Number is too short');
        }
        // Error when contain letters
        if(preg_match('/[a-zA-Z]/', $phone)){
            throw new InvalidArgumentException('Phone must not contain letter');
        }
         $this->phone = $phone;
    }
    public function getPhone(): string{
        return substr_replace($this->phone, '*****', -5);
    }





    /**
     * This is a method
     * $this variable refers to itself
     * @return string Full name of a person
     */
    public function getFullName():string{
        return $this->firstName .' ' . $this->lastName;
    }
    public function printInfo() : void {
        echo  "Fullname: ". $this->firstName ." ". $this->lastName .'<br/>';
        echo "Age: ". $this->age .'<br/>';
        echo "Phone: ". $this->getPhone() .'<br/>';
        
    }


    
}