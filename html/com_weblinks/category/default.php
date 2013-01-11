<?php
defined('_JEXEC') or die;
?>
<div class="row-fluid">
	<div class="span3">
		<h3><?php echo $this->escape($this->category->title); ?></h3>
		<?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_weblinks.category'); ?>
	</div>
	<div class="span9">
		<div class="row-fluid">
			<ul class="thumbnails">
				<?php 
					foreach ($this->items as $i => $item) :
					$images = json_decode($item->images); 
				?>
				<li class="span4 <?php if(($i-1)%3 == 2):?>firstinrow<?php endif;?>">
					<a class="thumbnail" href="<?php echo($item->link);?>">
						<img src="<?php echo htmlspecialchars($images->image_first); ?>" alt="<?php echo htmlspecialchars($images->image_first_alt); ?>"/>
						<div class="caption">
							<h5><?php echo $this->escape($item->title); ?></h5>
							<?php echo $item->description; ?>
						</div>
					</a>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>