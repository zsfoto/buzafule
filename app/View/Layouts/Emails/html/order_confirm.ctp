<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title><?php echo $title_for_layout; ?></title>
	<style>
		h1{
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 8px;
		}
		p{
			font-size: 14px;
			margin: 0px;
			margin-bottom: 3px;
			/* line-height: 10px; */
		}
	</style>
	
</head>
<body>
	<?php /* <h1><?php echo $megszolitas; ?>!</h1> */ ?>
	<?php echo $this->fetch('content'); ?><br />
	
	<b><?php echo( ereg_replace("\n", "<br />", $about['About']['companydetails'] )); ?></b>
</body>
</html>