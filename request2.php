<?php
class Package{
    private $textVal;
    private $bgColorValue;
    private $priceValue;
    private $paymentType;

    public function __construct($val1, $bg, $price, $type){
        $this->textValues = $val1; //["Pick One Service","Get It All", "Creative BFF", "The Full Dingus"];
        $this->bgColorValues= $bg;//["#545454","#e66d3d", "#3f2944", "#684168"];
        $this->priceValues = $price; //["1,999", "3,999", "4,999", "7,999"];
        $this->paymentType= $type; //"Monthly";
    }

    public function getTextValues(){
        return $this->textValues;
    }
    public function getBgColorValues(){
        return $this->bgColorValues;
    }

    public function getPriceValues(){
        return $this->priceValues;
    }

    public function getPaymentType(){
        return $this->paymentType;
    }
}   

?>