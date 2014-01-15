<?php
/*======================================
This function takes the parameters passed to it, searches the
Portfolio Content XML file for data matching those parameters,
And serves that formatted data to the page
======================================= */

/* Putting this here because it may be needed for future enhancements */
require_once "portfolioCategories.php";

/* Prepare the XML file for work */
$portfolioXML = simplexml_load_file("../xml/portfolio-content.xml");

/* Get URL Parameters */
$urlXmlTag =  ( isset($_GET["cat"]) ? $_GET["cat"] : "That's" );
$urlBoxTitle = ( isset($_GET["title"]) ? $_GET["title"] : "Not" );
$urlFilename = ( isset($_GET["item"]) ? $_GET["item"] : "Good!" );

/* Search the XML for the content corresponding to the URL parameters */
foreach($portfolioXML->$urlXmlTag as $portfolioItem) {
	if ($portfolioItem->boxTitle == $urlBoxTitle && $portfolioItem->filename == $urlFilename) {
		$dataFilename = $portfolioItem->filename;
		$dataBoxTitle = $portfolioItem->boxTitle;
		$dataBoxDescription = $portfolioItem->boxDescription;
		break;
	} else {
		$dataBoxTitle =  "Content could not be found";
	}
}

/* Set filename Type so I know how to display the content */
$filenameType = ( $urlXmlTag == "music" ? "video" : "image" );

$fullImagePath = "../img/portfolio/full/" . $urlXmlTag . "/" . $dataFilename . ".jpg"
?>
<html class="pf">
	<head>
			<title><?php echo $dataBoxTitle; ?></title>
			<meta name="viewport" content="width=device-width">
			<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body class="pf">
			<div class="pf-wrap">
				<div class="pf-title">
					<h1><?php echo $dataBoxTitle; ?></h1>
				</div>
				<div class="pf-content">
					<?php 
					
					switch ($filenameType) {
					
						case "video": ?>
							<iframe width="560" height="315" src="<?php echo $dataFilename; ?>" frameborder="0" allowfullscreen></iframe>
						<?php
							break;
						case "image":
						default: ?>
							<img src="<?php echo $fullImagePath; ?>"
							alt="<?php echo $dataBoxTitle; ?>"
							title="<?php echo $dataBoxTitle; ?>" />
						<?php
							break;
							
					}
					?>
				</div>
				<div class="pf-desc">
					<?php echo $dataBoxDescription; ?>
				</div>
				<div class="apf-mobileButtons">
				</div>
			</div>
	</body>
</html>