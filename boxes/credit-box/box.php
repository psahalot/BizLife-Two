<?php
/*
Name: Credit Links Box
Author: Puneet Sahalot 
Author URI: http://icustomizethesis.com
Description: This box adds a credit link to BizLife Skin
Version: 1.0
Class: bizlife_credit_box
*/

class bizlife_credit_box extends thesis_box {

protected function translate() {
$this->title = __('Credit', 'bizlife');
}


public function html() { ?>
&copy; Copyright <?php echo date('Y'); ?> | <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> | <a href="http://icustomizethesis.com">Thesis 2.0 Skin</a> by <a href="http://icustomizethesis.com">Puneet Sahalot</a>.
   <?  }
}