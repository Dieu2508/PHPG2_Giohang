<?php session_start();
	ob_start();
	/**
	 * summary
	 */
	class pro
	{
		var $IDpro;
		var $TenPro;
		var $giaAo;
		var $giaThuc;
		var $moTa;
		var $anhDemo;
		var $gioiTinh;

	    /**
	     * summary
	     */
	    public function __construct($IDpro,$TenPro,$giaAo,$giaThuc,$moTa,$anhDemo,$gioiTinh)
	    {
	       	$this->IDpro=$IDpro;
			$this->TenPro=$TenPro;
			$this->giaAo=$giaAo;
			$this->giaThuc=$giaThuc;
			$this->moTa=$moTa;
			$this->anhDemo=$anhDemo;
			$this->gioiTinh= $gioiTinh;
	    }
	    static function connect(){
			$con = new mysqli("localhost","root","","shopping");
			$con->set_charset("utf-8");
			if ($con->connect_error) {
				die("ket noi that bai".$con->connect_error);
			}
		return $con;
	    }
	    static function getListDB(){
	    	$con = pro::connect();
	    	$sql = "SELECT * FROM `pro`";
	    	$lsPro= array();
	    	$result= $con->query($sql);
	    	if ($result->num_rows >=0) {
	    		while ($row= $result->fetch_assoc()) {
	    		    $pro = new pro($row["IDSP"],$row["TenSP"],$row["GiaAo"],$row["GiaThuc"],$row["Mota"],$row["anhDemo"],$row["GioiTinh"]);
	    		    array_push($lsPro, $pro);
	    		}
	    	}
	    	$con->close();
	    	return $lsPro;
	    }
	    static function getListImgDB($mpro){
	    	$con=pro::connect();
	    	$sql= "SELECT * FROM `images` WHERE `IDSP`= $mpro LIMIT 3";
	    	$result= $con->query($sql);
	    	$listImg=array();
	    	
	    		if ($result->num_rows >=0) {
	    		while ($row= $result->fetch_assoc()) {
	    		    $pro = $row["UrlImg"];
  	    		    array_push($listImg, $pro);
	    		}
	    	}
	    	$con->close();
	    	return $listImg;
	    }
	    static function getPro($mpro){

	    	$con=pro::connect();
	    	$sql = "SELECT * FROM `pro` WHERE `IDSP` =$mpro";
	    	$result= $con->query($sql);
	    	if($result->num_rows >= 0) {
	    		$row= $result->fetch_assoc();
	    		$pro= new pro($row["IDSP"],$row["TenSP"],$row["GiaAo"],$row["GiaThuc"],$row["Mota"],$row["anhDemo"],$row["GioiTinh"]);
	    	}
	    	$con->close();
	    	return $pro;
	    }
	}
	/**
	 * summary
	 */
	class Cart
	{
		var $idCart;
		var $soLuong;

	    /**
	     * summary
	     */
	    public function __construct($idCart, $soLuong)
	    {
	      $this->idCart= $idCart;
		$this->soLuong=		 $soLuong;
	    }
	    static function addToCart($pro){
	    	$listCartNew=array();
	    	if (empty($_SESSION["gh"])) {
	    		$gh= new Cart($pro,1);
	    		array_push($listCartNew, $gh);
	    		$_SESSION["gh"]=$listCartNew;
	    	}
	    	else{
	    		$listCart = $_SESSION["gh"];
	    		$test=0;
	    		foreach ($listCart as $value) {
	    			if ($pro == $value->idCart) {
	    				$value->soLuong ++;
	    				$test=1;
	    			}
	    			array_push($listCartNew, $value);
	    		}
	    		if ($test!=1) {
	    			$gh= new Cart($pro,1);
	    			array_push($listCartNew, $gh);
	    		}
	    		$_SESSION["gh"]=$listCartNew;
	    	}
	    }
	    static function editCart($editPro,$editSL){
	    	$listCart = $_SESSION["gh"];
	    	$listCartNew=array();
	    	foreach ($listCart as $value) {
	    			if ($editPro == $value->idCart) {
	    				$value->soLuong =$editSL;
	    			}
	    			array_push($listCartNew, $value);
	    		}
	    		$_SESSION["gh"]=$listCartNew;
	    }
	}
?>