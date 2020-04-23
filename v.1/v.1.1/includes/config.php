<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/blog.php":
			$CURRENT_PAGE = "Blog"; 
			$PAGE_TITLE = "Blog | key-vah.com | Caoimhe Malone";
			break;
		case "/resume.php":
			$CURRENT_PAGE = "Resume"; 
			$PAGE_TITLE = "Resume | key-vah.com | Caoimhe Malone";
            break;
        case "/contact.php":
            $CURRENT_PAGE = "Contact"; 
            $PAGE_TITLE = "Contact Me | key-vah.com | Caoimhe Malone";
            break;
        case "/my-portfolio.php":
            $CURRENT_PAGE = "Portfolio"; 
            $PAGE_TITLE = "My Portfolio | key-vah.com | Caoimhe Malone";
            break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "key-vah.com | Caoimhe Malone";
	}
?>