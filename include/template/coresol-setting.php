<div class="wrap coresol-settings-network-admin">

	<h2 class="coresol-settings-heading"> <span><?php echo $backend_populate['title']; ?></span>	</h2>
	
	
	<div class="coresol-settings-nav">
		<ul>
			<?php 
				if(!empty($backend_populate['nav'])){
					foreach($backend_populate['nav'] as $key => $nav){
						$active = (($key == 0) ? 'active' : '');
					?>
						<li class="<?php echo $active; ?>"><a href="#<?php echo $nav['key']; ?>" class=""><?php echo $nav['text']; ?></a></li>
					<?php
					}
				}
			?>
		</ul>
	</div>

	<div class="coresol-settings-content">
		<form id="templates-form" action="" method="post">
		<?php 
			if(!empty($backend_populate['nav'])){
				foreach($backend_populate['nav'] as $keys => $nav){
					$display = (($keys === 0) ? 'display: block;' : 'display: none;');
				?>
					<div id="coresol-<?php echo $nav['key']; ?>-form" class="coresol-settings-form" style="<?php echo $display; ?>">
						<h3 class="coresol-settings-form-header"><?php echo $nav['title']; ?></h3>
						<p><?php echo $nav['description']; ?></p>
							<div class="coresol-settings-form-content">
								<?php $this->coresol_generate_fields( $nav['fields'] ); ?>
							</div>
							
						
					</div>
				<?php
				}
			}
		?>
		<p class="submit"><input type="submit" name="update" class="button-primary" value="Save Settings"></p>
		</form>
	</div>

</div>