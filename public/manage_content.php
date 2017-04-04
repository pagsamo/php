<?php require_once("../includes/functions.php") ?>
<?php require_once("../includes/db_connection.php") ?>
<?php include('../includes/layouts/header.php');	?>
<div id="main">
	<div id="navigation">
	<ul class="subjects">
			<?php 
			$subject_set = find_all_subjects();
			while($subject = mysqli_fetch_assoc($subject_set)){
				echo "<li>{$subject['menu_name']}" ?>
				<ul>
				<?php
					$page_set = find_pages_for_subject($subject['id']);
					while($page = mysqli_fetch_assoc($page_set))
					{
						echo "<li>{$page['menu_name']}</li>";
					}
					mysqli_free_result($subject_set);
				 ?>
				</ul>
				</li>
	<?php	}
	mysqli_free_result($subject_set);
	?>
	</ul>
	</div>
	<div id="page">
		<h2>Manage Content</h2>
		
	</div>
</div>
<?php include('../includes/layouts/footer.php');	?>