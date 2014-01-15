<?php 
/* ==============================
This function reads through the data in portfolio-content.xml 
and creates the image carousels on the page
================================ */

	require_once "inc/portfolioCategories.php";
	
	// This is the starting index of Portfolio Categories
	// For Naming the csel divs
	$portfolioCategoryIndex = 1;
	
	$portfolioXML=simplexml_load_file("xml/portfolio-content.xml");
	
	// Iterate through each Portfolio Category
	foreach($portfolioCategories as $xmlTag => $sectionHeader) {
		$cselID = "csel" . $portfolioCategoryIndex; ?>
		<h2><?php echo $sectionHeader; ?></h2>
		<div class="image_carousel">
			<div id="<?php echo $cselID; ?>">
			
			<?php 
			$portfolioContent = $portfolioXML->$xmlTag;
			
			// Iterate through each item in the category
			foreach ($portfolioContent as $portfolioItem) {
				$filename = $portfolioItem->filename;
				$boxTitle = $portfolioItem->boxTitle;
				$boxDescription = $portfolioItem->boxDescription; 
				
				$fullSizeURL = "inc/portfolioContent.php?cat=" . $xmlTag . "&amp;title=" . urlencode($boxTitle) . "&amp;item=" . $filename;
				$thumbnailURL = "img/portfolio/thumbs/" . $xmlTag . "/" . $filename . "-thumb.jpg";
				?>
				
				<a href="<?php echo $fullSizeURL; ?>" title="<?php echo $boxTitle; ?>">
					<img src="<?php echo $thumbnailURL; ?>" alt="<?php echo $boxTitle; ?>" width="140" height="140" />
				</a><?php
				
			} /* End portfolioContent loop */ ?>
			
			</div>
			<div class="clearfix"></div>
			<a class="prev" id="<?php echo $cselID; ?>_prev" href="#"><span>prev</span></a>
			<a class="next" id="<?php echo $cselID; ?>_next" href="#"><span>next</span></a>
		</div>
		<?php
			/*echo $filename . $boxTitle . $boxDescription . "<br />";*/
	$portfolioCategoryIndex++;
	} /* End portfolioCategory Loop */
?>