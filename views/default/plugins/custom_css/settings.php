<?php ?>
<div>
	<?php 
		echo elgg_view("input/plaintext", array("name" => "params[custom_css]", "value" => $vars["entity"]->custom_css));
	?>
	<br />
	CAUTION: BAD CSS COULD BREAK YOUR SITE
</div>