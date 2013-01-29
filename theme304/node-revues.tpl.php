<?php
// $Id: node-revues.tpl.php,v 1.1 2009/05/22 15:17:31 jjeff Exp $

/**
 * @file node-revues.tpl.php
 *
 * Theme implementation to display a Revues.
 *
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
$font_color;

if ($field_dispo[0]['view']=='Disponible') {
	$font_color = 'green';
} 
else{
	$font_color = 'red';
}

$date_formated = date("d/m/Y", strtotime($field_publication_date[0]['value']));
?>

 
<div class="article1">
	
	<p><img alt="Archeam" class="visu" src="/<?php print($field_image[0]['filepath']); ?>" style="float: left; height: 257px;"></br>
		<h2><?php print $title; ?></h2>
		<ul>
			<li><b><?php print t('Nombres de pages:'); ?></b>&nbsp;<?php print($field_pages_nb[0]['value']);?></li>
			<li><b><?php print t('Date de publication:'); ?></b>&nbsp;<?php print $date_formated;?></li>
			<li><b><?php print t('Prix:'); ?></b>&nbsp;<?php print($field_price[0]['value']);?>&nbsp;euros</li>
			<li>&nbsp;</li>
			<li><b><span style="color:<?php print $font_color;?>;font-size:18px"><?php print($field_dispo[0]['view']);?>&nbsp;!</span></b></li>
		</ul>
		<?php if ($field_dispo[0]['value'] == 2): ?> 
		<a href="mailto:archeam@gmail.com?subject=Commande Revues Archeam <?php print $title;?>"><img class="commander" alt="Commander" src="/sites/www.archeam.fr/themes/theme304/images/bouton-commander.png" ></a>
		<?php endif;?>
		<?php if ($field_dispo[0]['value'] == 1 && $field_file[0]['view']): ?> 
		 <a href="/<?php print($field_file[0]['view']);?>"><img class="commander" alt="Commander" src="/sites/www.archeam.fr/themes/theme304/images/bouton-telecharger.png" ></a>
		<?php endif;?>
	</p>
</div>


<div class="box">
	<div id="product-overview-tabs">
		<ul>
		<li class="selected" rel="pnl_desc">Description</li>
		</ul>
	</div>
	<div id="product-overview-content">
	
	
	
		<div>
	<h3>Sommaire</h3>
	<br>
	
	<span itemprop="description">
	    
	<span>
	<?php print $node->content['body']['#value']; ?>
	</span>
	
	
	</div>
	
	
	</div>
	<div class="boxBottom">
</div>
        </div>
        

        