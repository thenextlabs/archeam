<?php
// $Id: block.tpl.php,v 1.2 2007/08/07 08:39:36 Leo Exp $
?>
<div class="<?php print "block block-$block->module" ?>" id="<?php print "block-$block->module-$block->delta"; ?>">
    <div class="block-top">
        <div class="title">
            <h2><?php print $block->subject ?></h2>
        </div>
        <div class="content"><?php print $block->content ?></div>
     </div>
</div>