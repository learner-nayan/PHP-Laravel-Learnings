<?php
class Calculations{
    public $a;
    public $b;
    public $result;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

//        try {
//            $this->result = $this->a / $this->b;
//        }catch (Exception $e){
//            echo "Exception is: " . $e;
//        }

        if($this->b === 0){
            throw Exception("Not divisible by 0");
        }

        $this->result = $this->a / $this->b;
    }
    public function getResult(){
        return $this->result;
    }

}

$calcObj = new Calculations(15,5);
echo $calcObj->getResult();

try {
    $calcObj2 = new Calculations(15,0);
    echo $calcObj2->getResult();
}catch (Exception $e){
    echo "Exception is: " . $e;
}
