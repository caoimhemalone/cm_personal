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
		case "/blog/why-i-could-never-leave-apple.php":
			$CURRENT_PAGE = "Apple"; 
			$PAGE_TITLE = "Why I could never leave the apple Ecosystem | key-vah.com | Caoimhe Malone";
			break;
		case "/blog/why-ill-still-cycle-now-that-i-have-my-drivers-licence.php":
			$CURRENT_PAGE = "Cycle"; 
			$PAGE_TITLE = "Why I'll still cycle even though I can drive' | key-vah.com | Caoimhe Malone";
			break;
		case "/blog/airpods-covers-review.php":
			$CURRENT_PAGE = "Amazon"; 
			$PAGE_TITLE = "The best cheap accessory for Apple AirPods' | key-vah.com | Caoimhe Malone";
			break;
		case "/blog/the-5am-club.php":
			$CURRENT_PAGE = "5am"; 
			$PAGE_TITLE = "Getting up at sunrise doesn't mean you're productive' | key-vah.com | Caoimhe Malone";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "key-vah.com | Caoimhe Malone";
	}
?>