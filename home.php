<?php include_once("model/data.php");
include_once("header.php");
include_once("top-bar.php");
?>

<!--banner-->
<div class="banner">
<div class="container">
<section class="rw-wrapper">
				<h1 class="rw-sentence">
					<span>Fashion &amp; Beauty</span>
					<div class="rw-words rw-words-1">
						<span>Beautiful Designs</span>
						<span>Sed ut perspiciatis</span>
						<span> Totam rem aperiam</span>
						<span>Nemo enim ipsam</span>
						<span>Temporibus autem</span>
						<span>intelligent systems</span>
					</div>
					<div class="rw-words rw-words-2">
						<span>Cùng G-Dragon tạo nên phong cách </span>
						<span>Street Style</span>
						<span></span>
						<span>There are many variation</span>
						<span>The generated Lorem Ipsum</span>
						<span>Excepteur sint occaecat</span>
					</div>
				</h1>
			</section>
			</div>
</div>
	<!--content-->
		<div class="content">
			<div class="container">
				
				<!--products-->
			<div class="content-mid">
				<h3>Trending Items</h3>
				<label class="line"></label>
				<div class="mid-popular">
					<?php $listpro= pro::getListDB();
						foreach ($listpro as $value) {
					 ?>
					<div class="col-md-3 item-grid simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="img/<?php echo $value->anhDemo; ?>" class="img-responsive" alt="<?php echo $value->TenPro; ?>">
						<div class="zoom-icon ">
						<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="detail.php?pro=<?php echo $value->IDpro; ?>"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span><?php echo $value->gioiTinh; ?></span>
							<h6><a href="detail.php?pro=<?php echo $value->IDpro; ?>"><?php echo $value->TenPro; ?></a></h6>
							</div>
							<div class="img item_add">
								<a href="checkout.php?pro=<?php echo $value->IDpro; ?>"><img src="images/ca.png" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><label><?php echo $value->giaAo; ?></label><em class="item_price"><?php echo $value->giaThuc; ?></em></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>
					<?php } ?>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<!--//products-->
			<!--brand-->
			<?php  include_once("brand.php");?>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<!--//footer-->
	<?php 
	include_once ("footer.php");
	?>
		<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>


</body>
</html>