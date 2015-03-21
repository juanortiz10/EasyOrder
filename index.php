<?php

require_once("../Easy/vistas/header.php");
?>
		<div class="main-content">
        <div class="tab-content">
            <div class="tab-pane active" id="hamburguesas"><?php get_food(1); ?></div>
            <div class="tab-pane" id="refrescos"><?php get_food(2); ?></div>
            <div class="tab-pane" id="papas"><?php get_food(3); ?></div>
            <div class="tab-pane" id="postres"><?php get_food(4); ?></div>
            <div class="tab-pane" id="combos"><?php get_food(5); ?></div>
        </div>
    </div>
	
<?php
require_once("../Easy/modules/modal.php");
require_once("../Easy/vistas/footer.php");
require_once("../Easy/vistas/page.php");
?>

