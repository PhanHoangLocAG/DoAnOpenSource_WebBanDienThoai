<?php
namespace App;

class Cart {
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;


    function __construct($cart){
        //var_dump($cart);
        //dd($cart->products);
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function getProduc(){
        return $this->products;
    }

    public function AddCart($product , $id){
        //dd($id);
        $newProduct = ['quantity'=>0 , 'price'=>$product->giaban , 'productInfo' => $product];

        if($this->products){
            //dd("ok1");
            if(array_key_exists($id, $this->products)){
                //dd("ok2");
                $newProduct=$this->products[$id];
            }
        }
        //dd("ok");
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->giaban ;
        $this->products[$id] = $newProduct ;
        $this->totalPrice += $product->giaban ;
        $this->totalQuantity++ ;
       // dd($this->products);
    }

    public function DeleteCart($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function UpdateCart($id, $quanty){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantity'] = $quanty;
        $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->giaban;

        
        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];


    }
}