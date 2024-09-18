<?php include '../config/config.php'; ?>
<!doctype html>
<html>
<head>
  <?php include 'meta.php';?>
  <title><?php echo $website_name;?> Admininstrative Login</title>
</head>
<body>
  <main>
  <?php include 'alert.php';?>
  	<div class="overlay-div"></div>
	<?php include 'header.php';?>

    <div class="absolute w-[80%] top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 max-w-[1200px] flex gap-1 h-custom-screen-ml:w-[100%] h-custom-screen-ml:h-[100%]">
		<div class="w-[60%] min-h-[530px] bg-white bg-opacity-80 rounded-l-[5px] h-custom-screen-ml:hidden fadeInLeft animated">
			<div class="flex items-center justify-center mt-[130px] gap-[5px]">
				<a class="flex items-center gap-1 text-[#F00] hover:text-[#FF8A33]" href="" title=""><i class="bi-house-door-fill"></i> HOME PAGE</a> &nbsp;| &nbsp;
				<a class="flex items-center gap-1 text-[#F00] hover:text-[#FF8A33]" href="" onClick="window.location.reload();" title="Adminstrative Login"><i class="bi-lock"></i> LOG-IN</a>
			</div>

			<h1 class="text-center text-5xl mt-[25px] font-bold">Welcome To Get Hostel Administrative Login Portal</h1><hr class="w-[50%] mx-[auto] mt-[20px] border border-[#FF8A33]"/><br/>

			<div class="w-[180px] p-[20px] bg-white mx-[auto] rounded-[50px]">
				<img src="./all-images/image-pix/logo.png" alt="<?php echo $website_name;?> Logo" title="<?php echo $website_name;?> Logo"/>
          	</div>
		</div>

		<div class="w-[40%] min-h-[530px] bg-black bg-opacity-80 rounded-r-[5px] h-custom-screen-ml:w-[100%] fadeInLeft animated">
			<div class="w-[80%] m-auto mt-[25px] h-custom-screen-ml:pt-[65px]">
				<div class="w-[100px]"><img src="./all-images/image-pix/logo.png" alt="<?php echo $website_name;?> Logo" title="<?php echo $website_name;?> Logo" /></div>
				<div class="info" id="more-info">
					<?php $page='log-in';?>
					<?php include 'config/content-page.php';?> 
				</div>
			</div>

			<footer class="fixed bottom-[0%] w-[100%] h-[70px] bg-[#303134] text-center pt-[10px] text-white text-[14px] round">
				&copy; Copy Right Reserved 2021 - 2024<br/> <span class="text-[#DCB2B5]">Developed By: FortuneTech Global (09056251889)</span>
			</footer>
		</div>
	</div>
  </main>

  <script>
		superplaceholder({
			el: login_email,
				sentences: [ 'Enter Email Address', 'e.g gethostel@gmail.com', 'info@gethostel.com', 'king123@hotmail.com', 'gethostel@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
	</script>

<script>
		superplaceholder({
			el: pass_email,
				sentences: [ 'Enter Email Address', 'e.g gethostel@gmail.com', 'info@gethostel.com', 'king123@hotmail.com', 'gethostel@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
	</script>

</body>
</html>