<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>

	</style>
</head>

<body>
	<div id="container">
		<?php
            if(!filter_var($_GET['count'], FILTER_VALIDATE_INT) === false){
                $count = intval($_GET['count']);
            } else {
                echo ("Parameter is not valid");
                die();
            }

            $count = intval($_GET['count'])

			for ($i = 0; $i < $_GET['count']; $i++) {
		?>
			<div>
				<div class="heading">
					<span>заголовок</span>
				</div>
				<div class="content">
					qwerty <?= $i ?>
				</div>
			</div>
		<?php
			}
		?>
	</div>
</body>

</html>