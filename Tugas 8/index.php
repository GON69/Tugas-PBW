
<?php
class Buku
{
    private $code_book;
    private $qty;
    private $name;

    function __construct($qty, $code_book){

        $this->seQtyCode($qty, $code_book);
        if($qty<0){
            echo "error qty harus lebih dari 0 ";
        }
        $regex = '/[A-Z]{2}\d{2}/';
        $match = preg_match($regex,$code_book);
        if(!$match){
            echo "format tidak sesuai ";
        }

    
        
    }
   
    private function seQtyCode($qty, $code_book)
    {
        $this->code_book = $code_book;
        $this->qty = $qty;

    }
    public function getQtyCode()
    {
        
        return $this->qty .  $this->code_book;
    }
   

}


$bk = new Buku(5, "BB00");


$bk->getQtyCode();


echo $bk->getQtyCode();    

?>