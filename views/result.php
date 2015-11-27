<?php include("controller/controller.php"); ?>

<div id="div_htaccess" class="box">
	<img src="img/htaccess.png" class="pictureBoxTitle">
	<h3>Fichier .htaccess</h3>
	<hr>
	<center>
		<div id="div_result_htaccess"> 
			<textarea  id="result_htaccess"><?php echo get_htaccess(); ?></textarea>
		</div>
	</center>
</div>

<?php
	if (isset($_POST['protect-htpasswd']))
		{
			?>
				<div id="div_htpasswd" class="box">
					<img src="img/htpasswd.png" class="pictureBoxTitle">
					<h3>Fichier .htpasswd</h3>
					<hr>
					<center>
						<div id="div_result_htpasswd"> <textarea  id="result_htpasswd">
							<?php echo get_htpasswd(); ?></textarea>
						</div>
					</center>
				</div>
			<?php
		}
?>

<form method="get" action="index.php">
    <input type="submit" value="Retour à l'accueil" />
</form>

