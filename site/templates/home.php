<?php include('./_head.php'); // include header markup ?>
<?php // output an "Edit" link if this page happens to be editable by the current user
		if($page->editable()) {
			echo "<p class='edit'><a href='$page->editUrl'>Edit</a></p>";
		}?>

<div id='content'>
<div class="language-holder">
  <?php
	foreach($languages as $language) {
	  $selected = '';
	
	  // if this page isn't viewable (active) for the language, skip it
	  if(!$page->viewable($language)) continue;
	
	  // if language is current user's language, make it selected
	  if($user->language->id == $language->id) $selected = "selected";
	
	  // determine the "local" URL for this language
	  $url = $page->localUrl($language);
	
	  // output the option tag
	  echo "<a class='$selected langlink' href='$url'>$language->title</a>";
	}
?>
</div>
  <div id="logo">
    <h1><img src="<?php echo $config->urls->templates;?>img/fontyslogoPurple.png" id="logo-img"/><?php echo $page->get('headline|title'); ?></h1>
  </div>
  <?php
	
		// output 'headline' if available, otherwise 'title'
		//echo "<h1>" . $page->get('headline|title') . "</h1>";
	
		// output bodycopy
		echo $page->body;
	
	?>
</div>
<!-- end content -->

<div class="column" id="leftcolumn">
  <h2><?php echo __('Trainingen en workshops'); ?></h2>
  <?php 
			
				foreach($page->left_tile as $tile){		
						echo "<div class='tile'>";
						echo "<div class='title-tile'><h3>" . $tile->tile_title . "</h3><span class='fa fa-chevron-right'></span></div>"; 
						echo "<div class='body-tile'>" . $tile->tile_body . "</div>";
						echo "</div>";				
				}
            ?>
</div>
<div class="column" id="middlecolumn">
  <h2><?php echo __('Coaching individueel'); ?></h2>
  <?php 
                foreach($page->middle_tile as $tile){
                    echo "<div class='tile'>";
                    echo "<div class='title-tile'><h3>" . $tile->tile_title . " </h3><span class='fa fa-chevron-right'></span></div>"; 
                    echo "<div class='body-tile'>" . $tile->tile_body . "</div>";
                    echo "</div>";
                }
                ?>
</div>
<div class="column" id="rightcolumn">
  <h2><?php echo __('Groepscoaching'); ?></h2>
  <?php 
                foreach($page->right_tile as $tile){
                    echo "<div class='tile'>";
                    echo "<div class='title-tile'><h3>" . $tile->tile_title . " </h3><span class='fa fa-chevron-right'></span></div>"; 
                    echo "<div class='body-tile'>" . $tile->tile_body . "</div>";
                    echo "</div>";
                }
                ?>
</div>
<?php include('./_foot.php'); // include footer markup ?>
