<?php
trait Special_thinking{

    public function Thinka()
    {
        echo "\nI thinka dinka: ";

    }
}
interface Puser{
    public function Thinking();
}
abstract class GeneralObject {
    public string $name;
    public bool $alive;

    public function __construct(string $name, bool $alive){
        $this->name = $name;
        $this->alive = $alive;
    }

    public function getName(): string {
        return $this->name;
    }
    public static $Universe = "Earth";
    public static function staticMethod() {
        echo "Universe: " . self::$Universe . "\n";
    }

    public function getLife(): string {
        return $this->alive;
    }
}
class Bus extends GeneralObject
{

    protected string $special_number;

    public function __construct(string $name, bool $alive, int $special_number)
    {
        parent::__construct($name, $alive);
        echo "\nI love Undertale. ".$name;
    }

    final public function getName(): string
    {
        return $this->name;
    }
    public function getSpecial(): int
    {
        return $this->special_number;
    }

}
final class Passenger extends GeneralObject implements Puser
{
    use Special_thinking;

    private string $passport_number;
    protected string $profession;

    public function __construct(string $name, bool $alive, $passport_number, $profession)
    {
        parent::__construct($name, $alive);
        echo "\nI`ma new passenger, UIIIIIIIIIII!uiiiiii aaa ".$name;

    }
    public function Thinking(): void
    {
        echo '\nIma loser, Ima cooler, aAAAAA';
    }


}
final class Busstop extends Bus
{

    protected string $special_number;

    public function __construct(string $name, bool $alive, int $special_number,
    string $place)
    {
        parent::__construct($name, $alive,$special_number);
        echo "\nI`ma new busstop, UIIIIIIIIIII!uiiiiii aaa ". $name;

    }

    final public function getSpecial(): int
    {
        return $this->special_number;
    }
    public function getPlace(): string
    {
        return $this->place;
    }

    public function __call($name, $arguments) {
        if ($name === 'overloadedMethod') {
            echo "\nGoodie";
        }
    }
}
$Bigbus = new Bus("Bigbus", False,345);
$Marshrutka = new Bus("Marshrutka", False,123);
$Tralik = new Bus("Tralik", False,678);
$Student = new Passenger("Nolyk", True, 123456, "");
$Babushka = new Passenger("Buka", True, 654321,"");
$Programist = new Passenger("Duryk", True, 678901, "Programist");
$Konechka = new Busstop("Konechka", False,567,"pochitas");
$SimpleStop = new Busstop("SimpleStop", False,7,"freetas");
$Programist->Thinka();
$Babushka->Thinking();
$Konechka->overloadedMethod('argument1');
