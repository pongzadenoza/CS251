<?php

class Product
{
		
	private $Subtotal;

    private $pId, $pName, $pPrice, $pInfo, $pCategory, $pAge;

    public function __construct($pId, $pName, $pPrice, $pInfo, $pCategory, $pAge)
    {
        $this->pId = $pId;
        $this->pName = $pName;
        $this->pPrice = $pPrice;
        $this->pInfo = $pInfo;
        $this->pCategory = $pCategory;
        $this->pAge = $pAge;		
  }public function getSubtotal()
    {
        return $this->Subtotal;
    }
	public function getPAge()
    {
        return $this->pAge;
    }
    public function getPId()
    {
        return $this->pId;
    }
    public function getPName()
    {
        return $this->pName;
    }
    public function getPPrice()
    {
        return $this->pPrice;
    }
    public function getPInfo()
    {
        return $this->pInfo;
    }
   public function getPCategory()
    {
        return $this->pCategory;
    }	
	 public function setPId($pId)
    {
        $this->pId = $pId;
    }
    public function setPName($pName)
    {
        $this->pName = $pName;
    }
	 public function setPPrice($pPrice)
    {
        $this->pPrice = $pPrice;
    }
   
	
	 public function setPCategory($pCategory)
    {
        $this->pCategory = $pCategory;
    }
    public function setPInfo($pInfo)
    {
        $this->pInfo = $pInfo;
    }
 public function setSubtotal($Subtotal)
    {
        $this->Subtotal = $Subtotal;
    }

	public function additem($conn)
    { $sql = "INSERT INTO Shopping Cart
              (p_id,p_price,SubTotal )
              VALUES
              ('".$this->pId."','".$this->pPrice."','".$this->Subtotal."')";
    $conn->query($sql) ;
  
    }

	public function removeitem($conn)
    {
        $sql = "INSERT INTO Shopping Cart
              (p_id,p_price,SubTotal )
              VALUES
              ('".$this->pId."','".$this->pPrice."','".$this->Subtotal."')";
    $conn->query($sql) ;
    }

	

	public function getOrder($conn) {

      $sql = "SELECT * FROM Shopping Cart ";
      $rs = $conn->query($sql) ;

      $temp = array();

      while ($data = $rs->fetch_array()) {

          $productQ = new Product($data['p_id'],$data['p_price'],$data['p_SubTotal']);
          array_push($temp,$productQ);
      }

      return $temp;
  }
















}

?>
