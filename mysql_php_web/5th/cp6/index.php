<?php
/**
 * Created by PhpStorm.
 * Script Name: index.php
 * Create: 2019/7/22 13:45
 * Description:
 * Author: Doogie<fdj@kuryun.cn>
 */

$people_c = new People();
$jane = new Jane();
echo 'The name of this girl is '.$jane->doOption2(). '<br>';

$mike = new Mike();
echo 'The name of this girl is '.$mike->doOption2(). '<br>';


class People
{
    public $hands = 2;
    protected $foots = 2;
    private $head = 1;
    protected $name = '';

    public function __construct()
    {

    }

    public function __destruct()
    {

    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        if($name == 'hands' && $value > 1){
            $this->$name = $value;
        }
    }

    public function getName(){
        return $this->name;
    }

    private function option1(){

    }

    protected function option2(){
        echo "operation2 called";
    }

    function option3(){

    }
}

class Jane extends People
{
    protected $name = 'Jane';

    public function doOption2(){
        $this->option2();
    }
}

class Mike extends Jane
{
    protected $name = 'Mike';

    public function doOption2(){
        $this->option2();
    }
}