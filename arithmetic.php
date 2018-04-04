<!-- 
    PHP Arithmetic Operators
    The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.
    + 	Addition 	      $x + $y 	Sum of $x and $y 	
    - 	Subtraction 	  $x - $y 	Difference of $x and $y 	
    * 	Multiplication 	$x * $y 	Product of $x and $y 	
    / 	Division 	      $x / $y 	Quotient of $x and $y 	
    % 	Modulus 	      $x % $y 	Remainder of $x divided by $y 	
    **  Exponentiation  $x **$y   Result of raising $x to the $y'th power.
 -->
 
 class Calculator {
    
    public $val1, $val2;

    public function __construct($val1, $val2){
        $this->val1 = $val1;
        $this->val2 = $val2;
    }

    public function add(){
        return $this->val1 + $this->val2;
    }

    public function subtract(){
        return $this->val1 - $this->val2;
    }

    public function multiply (){
        return $this->val1 * $this->val2;
    }

    public function divide () {
        return $this->val1 / $this->val2;
    }
    
    public function modulo () {
        return $this->val1 % $this->val2;
    }
    
    public function exponent () {
        return $this->val1 ** $this->val2;
    }
}
