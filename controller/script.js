/*****************************************
 **   - Coder par twiy-logic.fr -   **
 *****************************************
 **     contact@twiy-logic.fr   **
 *****************************************/

  function add_user() {
    var user_name = document.getElementById("user_name").value;
    var user_pass = document.getElementById("user_pass").value;
    document.getElementById("user_pswd_list").value += user_name + ":" + user_pass + "\n";
    document.getElementById("user_name").value = "";
    document.getElementById("user_pass").value = "";
  }

  function add_Redirect() {
    var old_link = document.getElementById("redirect_old_link").value;
    var new_link = document.getElementById("redirect_new_link").value;
    var typeRedirection = "permanent";
    if (document.getElementById("redirectionPermanente").checked) {
      typeRedirection = "permanent";
    } else if (document.getElementById("redirectionTemporaire").checked) {
      typeRedirection = "temp";
    } else {
      alert("ERREUR : Valeur du radion bouton invalide.");
    }
    document.getElementById("redirect_list").value += "Redirect "+ typeRedirection +" " + old_link + " " + new_link + "\n";
    document.getElementById("redirect_old_link").value = "";
    document.getElementById("redirect_new_link").value = "";
  }

  function add_blockIP() {
    var ip = document.getElementById("IPbloque").value;
    document.getElementById("listeIPbloquees").value += "Deny from " + ip + "\n"; 
    document.getElementById("IPbloque").value = "";
  }

  function showProctectDiv() {
    if (document.getElementById("protect-htpasswd").checked) {
      document.getElementById("box_B2").style.display = "inline-block";
      document.getElementById("box_B1").style.display = "inline-block";
    } else {
      document.getElementById("box_B2").style.display = "none";
      document.getElementById("box_B1").style.display = "none";
    }
  }

  function showRedirectDiv() {
    if (document.getElementById("redirect-URL").checked) {
      document.getElementById("box_C1").style.display = "inline-block";
    } else {
      document.getElementById("box_C1").style.display = "none";
    }
  }

  function showCustomErrorDiv() {
    if (document.getElementById("custom-error").checked) {
      document.getElementById("box_C2").style.display = "inline-block";
    } else {
      document.getElementById("box_C2").style.display = "none";
    }
  }

  function showBlockIPDiv() {
    if (document.getElementById("blockIP").checked) {
      document.getElementById("box_D1").style.display = "inline-block";
    } else {
      document.getElementById("box_D1").style.display = "none";
    }
  }

  function showDomainBox()
  {
  	var redirectbool = document.getElementById("redirect-www").checked;
  	var hotlinkingbool = document.getElementById("prevent-hotlink").checked;

    if (redirectbool || hotlinkingbool) {
      document.getElementById("div_domain_name").style.display = "block";
    } else {
      document.getElementById("div_domain_name").style.display = "none";
    }
  }

  function showSubmitButton() {
    if (
        document.getElementById("protect-htpasswd").checked ||
        document.getElementById("redirect-URL").checked     ||
        document.getElementById("redirect-www").checked     ||
        document.getElementById("redirect-sitemap").checked ||
        document.getElementById("last-ie").checked          ||
        document.getElementById("file-compression").checked ||
        document.getElementById("force-download").checked   ||
        document.getElementById("cache-files").checked      ||
        document.getElementById("prevent-listing").checked  ||
        document.getElementById("prevent-hotlink").checked  ||
        document.getElementById("blockIP").checked          ||
        document.getElementById("custom-error").checked
      ) {
        document.getElementById("SubmitButton").style.display = "inline-block";
    } else {
        document.getElementById("SubmitButton").style.display = "none";
    }
  }