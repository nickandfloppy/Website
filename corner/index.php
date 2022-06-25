<html>
<head>
	<?php require('../head.php'); ?>
	<title>nick and floppy's website</title>
	<style>
	.dnd {
		border: 5px #f04747 solid;
	}
	.online {
		border: 5px #43b581 solid;
	}
	.idle {
		border: 5px #faa61a solid;
	}
	</style>
</head>

<body>
	<center><table border="1" bgcolor="3c3c84" width="800px"><tr><td>
		<?php
		require('../pageheader.html');
		require('func.php');
		echo '<hr><iframe src="./discord.php" width="100%" height="480px">';
		?>
		<hr>
		<center><address>&copy; 2022 <a href="http://nickandfloppy.com/">nick and floppy</a></address></center>
	</td></tr></table></center>
</body>
</html>
