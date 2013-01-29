<?php
// $Id: node.tpl.php,v 1.4 2007/08/07 08:39:36 Leo Exp $
?>
<div class="border-left">
	<div class="border-right">
    	<div class="border-top">
            <div class="border-bot">
                <div class="corner-top-left">
                    <div class="corner-top-right">
                        <div class="corner-bot-left">
                            <div class="corner-bot-right">
                                <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
                                    <?php if ($page == 0): ?>
                                    	<div class="border-top2">
                                            <div class="corner-top-left2">
                                                <div class="corner-top-right2">
                                                    <?php print $picture ?>
                                                    <h1 class="title"><a href="<?php print $node_url ?>"><?php print $title ?></a></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit"><span class="submitted"><?php print $submitted ?></span></div>
                                        <div class="taxonomy"><?php print $terms ?></div>
                                    <?php endif; ?>
                                    
                                  	<div class="inner">
                                    	<div class="content">
											<?php print $content ?>
                                        </div>
                                    
                                        <?php if ($links): ?>
                                            <div class="links-indent">
                                                <div class="links"><?php print $links ?></div>
                                            </div>
                                            <div class="clear"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>