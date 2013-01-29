<?php
// $Id: node-news.tpl.php,v 1.1 2009/05/22 15:17:31 jjeff Exp $

/**
 * @file node-news.tpl.php
 *
 * Theme implementation to display a News.
 *
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>

<h1><?php print t('Actualités');?></h1>
<?php print '<h2>'. $title .'</h2>';?>
<div class="meta-info">
	<b><?php print $field_date_debut[0]['view']; ?><?php if ($field_date_fin[0]['value']): ?><?php print ' - '.$field_date_fin[0]['view']; ?><?php endif;?></b>
	<?php print $links; ?>
	<?php if ($field_url_source[0]['value']): ?>       
		 <a href="<?php print $field_url_source[0]['value']; ?>" class="news-source-wrapper" target="_blank">
            <span class="text-title"> - <?php print $field_source[0]['value']; ?></span></a>  
	<?php endif;?>
</div>
 
<div class="article1">
	<?php print $node->content['body']['#value']; ?>
	<?php if ($field_url_source[0]['value']): ?> 
		<a href="<?php print $field_url_source[0]['value']; ?>" class="readmore" target="_blank" ><?php print t('Read More'); ?> &raquo;</a>
	<?php endif;?>
	
    <?php if ($field_file[0]['view']): ?> 
		<a href="/<?php print $field_file[0]['view']; ?>" class="download" target="_blank" ><span class="news-type press-releases">Download PDF</span><?php print t('Download PDF'); ?></a>
	<?php endif;?>
    
	
</div>