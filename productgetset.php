<?php

class Product
{

    private $pId, $pName, $pPrice, $pInfo, $pCategory, $pAge;

    public function __construct($pId, $pName, $pPrice, $pInfo, $pCategory, $pAge)
    {
        $this->pId = $pId;
        $this->pName = $pName;
        
        $this->pPrice = $pPrice;
        $this->pInfo = $pInfo;
        $this->pCategory = $pCategory;
        $this->pAge = $pAge;
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
    public function setPName($pName)
    {
        $this->pName = $pName;
    }
	
	 public function setPCategory($pCategory)
    {
        $this->pCategory = $pCategory;
    }
    public function setPInfo($pInfo)
    {
        $this->pInfo = $pInfo;
    }

}

?>
