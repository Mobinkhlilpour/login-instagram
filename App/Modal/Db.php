<?php 



class Db{
    protected $pdo;
    protected $database = 'head';
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password ='1364676656'; 
    public $fetchsinin;

    public function __construct()
    {
        $this -> pdo = new PDO("mysql:host={$this -> host};dbname={$this-> database}" , $this ->username , $this -> password);
        $this -> pdo ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); //اگر ارور وجود داشت یک ارور اکسپشن برمیگرداند
    }
    public function creat(array $data)
    {
        
        $fields = join("," , array_keys($data));
        $params = join("," , array_map(fn($item) => ":$item" , array_keys($data)));
        $statm = $this->pdo->prepare("insert into login ({$fields}) values ({$params})");
        return $statm->execute($data);
    }
    public function sigin_chec($email ){
        $emai = join("," , array_map(fn ($n) => ":$n" , array_keys($email)));
        $resaly = $this -> pdo ->prepare("select * from login where email = {$emai} ");
        $resaly -> execute($email );
        $this -> fetchsinin = $resaly -> fetch(PDO::FETCH_OBJ) ;
    }
}



?>