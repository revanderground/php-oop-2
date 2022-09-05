<?php



class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $id;
    protected $discount = 0;
    protected $expirationDate;

    protected $cart= [];

    public function __construct($_name, $_surname, $_email, $_id) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->id = $_id;
    }

    public function addToCart($product) {
        $this->cart[] = $product;
    }

    public function getCart() {
        return $this->cart;
    }

    public function calculatePrice() {
        
        $TotalPrice = 0;

        foreach($this->cart as $product) {
            $TotalPrice  += $product->price;
        }
        
        $TotalPrice  -= $TotalPrice  * $this->discount / 100;
        
        return $TotalPrice;
    }


    public function makePayment() {

        try{
            if($this->expirationDate >= date('Y-m-d')) {
                throw new Exception("Dear $this->firstName $this->lastName: Your card is expired");
            } else {
                return 'Acquisto effettuato';
            }
        } catch (Exception $e){
            echo "Payment failed" . $e->getMessage();
        }
  
    }
}

?>