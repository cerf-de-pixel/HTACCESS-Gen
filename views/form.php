<form method="post" action="result.php">

	<!-- box_A1 -->
	<div class="box" id="box_A1">
		<img src="img/opt_sup.png" class="pictureBoxTitle">
		<h3>Configuration du fichier .htaccess</h3>
		<hr>

		<input type="checkbox" name="protect-htpasswd" id="protect-htpasswd" onchange="showProctectDiv(); showSubmitButton()" /> 
		<label for="protect-htpasswd">Protéger le répertoire avec un fichier .htpasswd</label>
		<br />
		 
		<input type="checkbox" name="redirect-URL" id="redirect-URL" onchange="showRedirectDiv(); showSubmitButton()" /> 
		<label for="redirect-URL">Ajouter des redirections de pages</label> 
		<br />

		<input type="checkbox" name="custom-error" id="custom-error"  onchange="showCustomErrorDiv(); showSubmitButton();"/> 
		<label for="custom-error">Utiliser des liens personnalisé pour les erreurs</label> 
		<br />

		<input type="checkbox" name="blockIP" id="blockIP"  onchange="showBlockIPDiv(); showSubmitButton();"/> 
		<label for="blockIP">Bloquer l'accès du site à une liste d'IPs</label> 
		<br />

		<input type="checkbox" name="redirect-www" id="redirect-www" onchange="showDomainBox(); showSubmitButton()"/> 
		<label for="redirect-www">Rediriger les liens non-WWW vers WWW</label> 
		<br />

		<input type="checkbox" name="redirect-sitemap" id="redirect-sitemap"  onchange="showSubmitButton()"/> 
		<label for="redirect-sitemap">Rediriger sitemap.xml vers /sitemapxml/</label>
		<br />

		<input type="checkbox" name="last-ie" id="last-ie"  onchange="showSubmitButton()"/> 
		<label for="last-ie">Forcer l'utilisation de la dernière version pour IE</label>
		<br />

		<input type="checkbox" name="file-compression" id="file-compression"  onchange="showSubmitButton()"/> 
		<label for="file-compression">Compresser les fichiers text, HTML, JavaScript, CSS, XML</label>
		<br />

		<input type="checkbox" name="force-download" id="force-download"  onchange="showSubmitButton()"/> 
		<label for="force-download">Forcer le téléchargement des médias</label>
		<br />

		<input type="checkbox" name="cache-files" id="cache-files"  onchange="showSubmitButton()"/> 
		<label for="cache-files">Fichiers caches d'une durée de </label>

		<select name="cache-file-time" id="cache-file-time">
			<optgroup label="Moins d'une journée">
				<option value="3600000">1 heure</option>
				<option value="10800000">3 heures</option>
				<option value="21600000">6 heures</option>
				<option value="43200000">12 heures</option>
			</optgroup>
			<optgroup label="Moins d'un mois">
				<option value="86400000">1 jour</option>
				<option value="604800000" selected="selected">7 jours</option>
				<option value="1209600000">14 jours</option>
				<option value="2592000000">30 jours</option>
			</optgroup>
			<optgroup label="Plus d'un mois">
				<option value="2629800000s">1 mois</option>
				<option value="5259600000">2 mois</option>
				<option value="7889400000">3 mois</option>
				<option value="15778800000">6 mois</option>
			</optgroup>
		</select>
		<br />

		<input type="checkbox" name="prevent-listing" id="prevent-listing"  onchange="showSubmitButton()"/> 
		<label for="prevent-listing">Interdire le listing du répertoire</label> 
		<br />

		<input type="checkbox" name="prevent-hotlink" id="prevent-hotlink" onchange="showDomainBox(); showSubmitButton();"/> 
		<label for="prevent-hotlink">Protéger les images du hotlinkings</label>
		<br />

		<div id="div_domain_name">
			<span>Nom de domaine : </span> 
			<input type="text"  id="domain_name" name="domain_name" value="votre-site.you"/>
		</div>
	</div>

	<!-- box_A2 -->
	<div class="box" id="box_A2">
		<img src="img/infos.png" class="pictureBoxTitle">
		<h3>Informations générales</h3>
		<hr>
		<br />
		<h4>HTACCESS-Gen :</h4>
		<p>Configurer vos serveurs avec ce générateur en ligne de fichiers .htaccess et .hapasswd aux nombreuse fonctionalités.</p>  
		
		<h4>Les fichiers .htaccess :</h4>
		<p>Les fichiers .htaccess sont des fichiers de configuration des serveurs HTTP Apache. Ces propriétés s'appliquent aux contenus du répertoire où il est placé. <a href="http://httpd.apache.org/docs/2.4/fr/howto/htaccess.html" target="_blank">En savoir plus.</a></p>

		<h4>Les fichiers .htpasswd :</h4>
		<p>Les fichiers .htpasswd sont générés si vous choisissez de sécuriser le répertoire. C'est lui qui contiendra les noms d'utilisateurs et les mots de passe cryptés. <a href="http://httpd.apache.org/docs/2.4/howto/auth.html" target="_blank">En savoir plus.</a></p>
	</div>

<!-- box_B1 -->
	<div class="box" id="box_B1">
		<img src="img/htaccess.png" class="pictureBoxTitle">
		<h3>Configurer l'accés sécurisé au site</h3>
		<hr>
		<p>
			<h4>AuthName :</h4>
			<span>Message d'invitation à la saisie de l'identifiant et du mot de passe.</span>
			<br />
			<textarea name="AuthName" id="AuthName">Cette page est protégée. Veuillez renseigner votre identifiant et votre mot de passe.</textarea>
		</p>
		<p>
				<h4>AuthPath :</h4>
				<span>Chemin absolu vers le fichier à protéger.</span>
				<br />
				<input type="text" name="AuthPath" id="AuthPath" value="/home/site/www/DOSSIER-PROTEGER/"/>
		</p>
	</div>

	<!-- box_B2 -->
	<div class="box" id="box_B2">
		<img src="img/htpasswd.png" class="pictureBoxTitle">
		<h3>Gérer les utilisateurs autorisés</h3>
		<hr>
		<center>
			<fieldset>
				<legend>Ajouter un utilisateur</legend>

				<p>
					<span>Nom d'utilisateur :</span>
					<br />
					<input type="text"  id="user_name"/>
				</p>

				<p>
					<span>Mot de passe :</span>
					<br />
					<input type="text" id="user_pass"/>
				</p>
				<INPUT TYPE="button" VALUE="Ajouter l'utilisateur" onClick="add_user()">
			</fieldset> 

			<fieldset>
				<legend>Liste d'identifiants </legend>
				<textarea  id="user_pswd_list" name="user_pswd_list" ></textarea>
			</fieldset>
		</center>
	</div>
	<br />

	<!-- box_C1 -->
	<div class="box" id="box_C1"> 
		<img src="img/redirect.png" class="pictureBoxTitle">
		<h3>Configurer les redirections</h3>
		<hr>
		<center>
			<fieldset>
				<legend>Ajouter une redirection</legend>
					<table>
						<tr>
							<td><span>Page à rediriger :</span></td>
							<td><input type="text"  id="redirect_old_link"/></td>
						</tr>
						<tr>
							<td><span>Adresse de redirection :</span></td>
							<td><input type="text"  id="redirect_new_link"/></td>
						</tr>
						<tr>
							<td>
								<center>
									<br />
									<input type="radio" name="redirectionType" value="redirectionTemporaire" id="redirectionTemporaire" checked /> 
						      <label for="redirectionTemporaire">Temporaire</label>
						    </center>
							</td>
							<td>
								<center>
									<br />
									<input type="radio" name="redirectionType" value="redirectionPermanente" id="redirectionPermanente" /> 
						      <label for="redirectionPermanente">Permanente</label>
					      </center>
							</td>
						</tr>
					</table>
					<br />
					<INPUT TYPE="button" VALUE="Ajouter la redirection" onClick="add_Redirect()">
			</fieldset>
			<br />
			<fieldset>
				<legend>Liste des redirections</legend>
				<textarea  id="redirect_list" name="redirect_list" ></textarea>
			</fieldset>
		</center>
	</div>

	<!-- box_C2 -->
	<div class="box" id="box_C2">
		<img src="img/erreur.png" class="pictureBoxTitle">
		<h3>Configurer les redirections d'erreurs</h3>
		<hr>
		<p>Les 10 erreurs les plus fréquentes sont présentes ci-dessous. Cochez celles que vous souhaitez gérer.</p>
		<table>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur400" id="checkErreur400" /> 
					<label for="checkErreur400">400 - Bad Request : </label>
				</td>
				<td> <input type="text" value="errors/error400.php" id="pageErreur400"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur401" id="checkErreur401" checked/> 
					<label for="checkErreur401">401 - Unauthorized : </label>
				</td>
				<td> <input type="text" value="errors/error401.php" id="checkErreur401"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur403" id="checkErreur403" checked/> 
					<label for="checkErreur403">403 - Forbidden : </label>
				</td>
				<td> <input type="text" value="errors/error403.php" id="checkErreur403"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur404" id="checkErreur404" checked/> 
					<label for="checkErreur404">404 - Not Found : </label>
				</td>
				<td> <input type="text" value="errors/error404.php" id="checkErreur404"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur500" id="checkErreur500" checked/> 
					<label for="checkErreur500">500 - Internal Server Error : </label>
				</td>
				<td> <input type="text" value="errors/error500.php" id="checkErreur500"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur501" id="checkErreur501"/> 
					<label for="checkErreur501">501 - Not Implemented : </label>
				</td>
				<td> <input type="text" value="errors/error501.php" id="checkErreur501"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur502" id="checkErreur502"/> 
					<label for="checkErreur502">502 - Bad Gateway ou Proxy Error : </label>
				</td>
				<td> <input type="text" value="errors/error502.php" id="checkErreur502"> </td>
			</tr>	
			<tr>
				<td>
					<input type="checkbox" name="checkErreur503" id="checkErreur503"/ checked> 
					<label for="checkErreur503">503 - Service Unavailable : </label>
				</td>
				<td> <input type="text" value="errors/error503.php" id="checkErreur503"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur504" id="checkErreur504"/> 
					<label for="checkErreur504">504 - Gateway Time-out : </label>
				</td>
				<td> <input type="text" value="errors/error504.php" id="checkErreur504"> </td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="checkErreur505" id="checkErreur505"/> 
					<label for="checkErreur505">505 - HTTP Version not supported : </label>
				</td>
				<td> <input type="text" value="errors/error505.php
				" id="checkErreur505"> </td>
			</tr>
		</table>
	</div>

	<!-- box_D1 -->
	<div class="box" id="box_D1">
		<img src="img/blockIP.png" class="pictureBoxTitle">
		<h3>Configurer les IPs bloquées</h3>
		<hr>
		<center>
			<fieldset>
				<legend>Bloquer une IP</legend>
				<input type="text" id="IPbloque">
				<INPUT TYPE="button" VALUE="Bloquer cette IP" onClick="add_blockIP()">
			</fieldset>
			<fieldset>
				<legend>Liste des IPs bloquées</legend>
				<textarea id="listeIPbloquees" name="listeIPbloquees"></textarea>
			</fieldset>
		</center>
	</div>

	<br />
	<input type="submit" id="SubmitButton" value="Générer les fichiers .htaccess et .htpasswd" />
	
</form>

<script type="text/javascript">
	showProctectDiv();
	showRedirectDiv();
	showCustomErrorDiv();
	showDomainBox();
	showBlockIPDiv();
	showSubmitButton();
</script>