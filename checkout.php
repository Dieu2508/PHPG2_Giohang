<?php  include_once("model/data.php");
include_once("header.php");
include_once("top-bar.php");
?>
<?php if (isset($_REQUEST["pro"])) {
	$mpro=$_REQUEST["pro"];
	Cart::addToCart($mpro); 
	header("location: checkout.php");
} 
if (isset($_REQUEST["editPro"])) {
	$editPro=$_REQUEST["editPro"];
	$editSL=$_REQUEST["editSL"];
	Cart::editCart($editPro,$editSL);
	header("location: checkout.php");
}
?>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Checkout</h2>
	</div>
</div>
<!--login-->
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
<div class="check-out">
<div class="container">
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
		  <?php 
		  $listCart= $_SESSION["gh"];
		  //var_dump($listCart);
		  $tongbill=0;
		  foreach ($listCart as $value) {
		  	$detailItem=pro::getPro($value->idCart);
		  	$tong= $value->soLuong * $detailItem->giaThuc;
		  	$tongbill= $tongbill+$tong;
		  ?>
		  <tr class="cart-header2">
		  <td class="ring-in"><a href="detail.php?pro=<?php echo $detailItem->idCart; ?>" class="at-in"><img src="img/<?php echo $detailItem->anhDemo; ?>" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><a href="detail.php?pro=<?php echo $detailItem->idCart; ?>"><?php echo $detailItem->TenPro; ?></a></h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
			</div>
			<div class="clearfix"> </div>
			<div class="close3"> </div></td>
			<td>$<?php echo $detailItem->giaThuc ?></td>
			<td><form action="" method="post">
				<input type="hidden" name="editPro" value="<?php echo $value->idCart; ?>">
				<input type="number" name="editSL" value="<?php echo $value->soLuong ?>">
			</form></td>
			<td class="item_price"><?php echo $tong; ?></td>
			<td class="add-check"><a class="item_add hvr-skew-backward" href="#">Thanh toán $<?php echo $tong; ?></a></td>
		  </tr>
		  <?php } ?>
	</table>
	</div>
	</div>
	<div class="produced">
	<a href="single.html" class="hvr-skew-backward">Produced To Buy $<?php echo $tongbill; ?></a>
	 </div>
</div>
</div>

<!--//login-->
	<!--brand-->
		<?php  include_once("brand.php");?>
	<!--//brand-->
	<!--//content-->
	<!--//footer-->
	<?php  include_once("footer.php");?>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>