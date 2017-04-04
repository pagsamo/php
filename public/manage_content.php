<?php require_once("../includes/functions.php") ?>
<?php require_once("../includes/db_connection.php") ?>
<?php include('../includes/layouts/header.php');	?>
<div id="main">
	<div id="navigation">
	<ul class="subjects">
			<?php 
			$query = 'SELECT * FROM subjects';
			$result = mysqli_query($connection, $query); 

			while($subject = mysqli_fetch_assoc($result)){
				echo "<li>{$subject['menu_name']}</li>";
			}
			?>
	</ul>
	</div>
	<div id="page">
		<h2>Manage Content</h2>
		
	</div>
</div>
<?php include('../includes/layouts/footer.php');	?>