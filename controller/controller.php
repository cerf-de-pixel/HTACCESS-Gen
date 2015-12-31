<?php
	/*****************************************
	 **   - Coder par cerf-de-pixel.fr -   **
	 *****************************************
	 **     contact@cerf-de-pixel.fr   **
	 *****************************************/
	function get_htaccess() {
		$htaccess = "";
		if (isset($_POST['AuthName']) || isset($_POST['AuthPath'])) {
			if (isset($_POST['protect-htpasswd'])) {	
				$AuthName = htmlspecialchars((string) $_POST['AuthName']);
				$AuthPath = htmlspecialchars((string) $_POST['AuthPath']);
				
				$htaccess = $htaccess . "\n# PROTECT DIRECTORY BY PASSWORD \n";
				$htaccess = $htaccess . "AuthName " . $AuthName . "\n" . "AuthType Basic \n";
				$htaccess = $htaccess . "AuthUserFile " . $AuthPath . ".htpasswd \n Require valid-user \n"; 
			}
		}

		if (isset($_POST['redirect-sitemap'])) {
			$htaccess = $htaccess . "\n# REDIRECT SITEMAP.XML TO /SITEMAPXML/ \n";
			$htaccess = $htaccess . "RewriteCond $1 ^sitemap.xml \n";
			$htaccess = $htaccess . "RewriteRule ^(.*)$ /sitemapxml/ [L] \n";
		}

		if (isset($_POST['last-ie'])) {
			$htaccess = $htaccess . "\n# FORCE INTERNET EXPLORER TO THE LATEST RENDER ENGINE \n ";
			$htaccess = $htaccess . "<IfModule mod_headers.c> \n ";
			$htaccess = $htaccess . "    Header set X-UA-Compatible \"IE=Edge,chrome=1\" \n ";
			$htaccess = $htaccess . "    <FilesMatch \"\.(js|css|gif|png|jpe?g|pdf|xml|oga|ogg|m4a|ogv|mp4|m4v|webm|svg|svgz|eot|ttf|otf|woff|ico|webp|appcache|manifest|htc|crx|xpi|safariextz|vcf)$\"> \n ";
			$htaccess = $htaccess . "        Header unset X-UA-Compatible \n ";
			$htaccess = $htaccess . "    </FilesMatch> \n ";
			$htaccess = $htaccess . "</IfModule> \n ";
		}

		if (isset($_POST['file-compression'])) {
			$htaccess = $htaccess . "\n# COMPRESS TEXT, HTML, JAVASCRIPT, CSS, XML \n";
			$htaccess = $htaccess . "<IfModule mod_deflate.c> \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE text/plain \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE text/html \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE text/xml \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE text/css \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE text/x-component \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE application/xml \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE application/xhtml+xml \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE application/rss+xml \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE application/javascript \n";
			$htaccess = $htaccess . "    AddOutputFilterByType DEFLATE application/x-javascript \n";
			$htaccess = $htaccess . "</IfModule> \n";
		}

		if (isset($_POST['force-download'])) {
			$htaccess = $htaccess . "\n# FORCE MEDIA DOWNLOADS \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .pdf \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .doc \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .docx \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .avi \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .mpg \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .mpeg \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .wmv \n ";
			$htaccess = $htaccess . "AddType application/octet-stream .mp3 \n ";
		}

		if (isset($_POST['cache-files'])) {
			$max_age = $_POST["cache-file-time"];

			$htaccess = $htaccess . "\n# CACHE FILES  \n";
			$htaccess = $htaccess . "<filesMatch \"\.(ico|pdf|flv|jpg|jpeg|png|gif|js|css|swf)$\"> \n";
			$htaccess = $htaccess . "    Header set Cache-Control \"max-age=" . $max_age . ", public\" \n";
			$htaccess = $htaccess . "</filesMatch> \n";
		}

		if (isset($_POST['prevent-listing'])) {
			$htaccess = $htaccess . "\n# PREVENT DIRECTORY LISTINGS \n";
			$htaccess = $htaccess . "Options All -Indexes \n";
		}

		if (isset($_POST['redirect-www'])) {

			$domain_name = "votre-site.you";
			if (isset($_POST['domain_name'])) { $domain_name = htmlspecialchars((string) $_POST['domain_name']); }
			
			$htaccess = $htaccess . "\n# REDIRECT NON-WWW TO WWW \n";
			$htaccess = $htaccess . "RewriteCond %{HTTP_HOST} ^" . str_replace('.', '\.', $domain_name) . " \n";
			$htaccess = $htaccess . "RewriteRule (.*) http://www." . $domain_name . "/$1 [R=301,L] \n";
		}

		if (isset($_POST['prevent-hotlink'])) {
			$domain_name = "votre-site.you";
			if (isset($_POST['domain_name'])) { $domain_name = htmlspecialchars((string) $_POST['domain_name']); }

			$htaccess = $htaccess . "\n# PREVENT HOTLINKING \n ";
			$htaccess = $htaccess . "RewriteCond %{HTTP_REFERER} !^ \n ";
			$htaccess = $htaccess . "RewriteCond %{HTTP_REFERER} !^http://(www\.)?" . str_replace('.', '\.', $domain_name) . "/ [nc] \n ";
			$htaccess = $htaccess . "RewriteRule .*\.(gif|jpg|png)$ http://www." . $domain_name . "/img/hotlink_f_o.png [nc] \n ";
		}
		
		if (isset($_POST['redirect-URL']) && isset($_POST['redirect_list'])) {
			$redirect_list ="";
			$redirect_list = htmlspecialchars((string) $_POST['redirect_list']);
			$htaccess = $htaccess . "\n# REDIRECT URL, PAGES AND FOLDERS \n" . $redirect_list;
		}

		if (isset($_POST['custom-error'])) {

			$numError = array("400", "401", "403", "404", "500", "501", "502", "503", "504", "505" );
			$htaccess = $htaccess . "\n# CUSTOM ERROR PAGES \n";
			foreach ($numError as $key) {
				if (isset($_POST['checkErreur'.$key])) {
					$htaccess = $htaccess . "ErrorDocument ". $key ." /error/errors". $key .".html \n";
				}
			}
		}

		if (isset($_POST['blockIP'])) {
			$ipBlock_list ="";
			$ipBlock_list = htmlspecialchars((string) $_POST['listeIPbloquees']);
			$htaccess = $htaccess . "\n# BLOCKING USERS BY IP \n";
			$htaccess = $htaccess . "Order Allow,Deny \n";
			$htaccess = $htaccess . "Allow from all \n" . $ipBlock_list;
		}
		return $htaccess;
	}

function get_htpasswd() {
	$htpasswd = "";
	if (isset($_POST['user_pswd_list'])) {
		$user_pswd_list = htmlspecialchars((string) $_POST['user_pswd_list']);
		$users_pswds = explode("\n", $user_pswd_list);

		foreach ($users_pswds as $user_pswd) {
			$tab = explode(":", $user_pswd);
			if (isset($tab[0]) and isset($tab[1])) {
				$htpasswd = $htpasswd . $tab[0] . ':' . crypt($tab[1]) . "\n";
			}
		}
	}
	return $htpasswd;
}
