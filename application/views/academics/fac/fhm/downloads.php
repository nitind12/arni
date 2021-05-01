<h3>Downloads</h3>
<div <?php echo $class_;?>>
    <h5>Journals, Newsletters &amp; Magazines</h5>
    <?php foreach ($publications_ as $item) { ?>
        <?php 
            foreach($item as $subitem){
                if($subitem['path_'] != ''){
        			$path__ = $subitem['path_'];
        		} else {
        			$path__ = '';
        		}
		?>
		<?php $file__ = explode('.', $path__); ?>
		<div class="specific_downloads_">
			<table class="table">
				<tr>
					<th colspan="2"><?php echo $file__[0];?></th>
				</tr>
				<tr>
					<td>
						<img src="<?php echo base_url('assets/img/pdf.png'); ?>?version=1.0" style="width: 15px">
					</td>
					<td>
				<a href="<?php echo base_url('assets/publications/'.$college.'/'.$path__);?>" target="_blank" style="color: #000000;">
				<?php echo $path__; ?>
				</a>
					</td>
				</tr>
			</table>	
		</div>
		    <?php } ?>
		    <div style="clear: both; padding: 10px 0px"></div>
    <?php } ?>
	<h5>Syllabus</h5>
	<?php foreach ($crs['fhm_courses'] as $item) { 
			if($item['path_'] != ''){
				$path__ = $item['path_'];
			} else {
				$path__ = '';
			} 

			if($item['syllabus_file'] != ''){
				$syllabusFile__ = $item['syllabus_file'];
			} else {
				$syllabusFile__ = '';
			}
			if($item['syllabus_file'] != ''){ ?>
				<?php $files__ = explode(',', $item['syllabus_file']); ?>
				<div class="specific_downloads_">
					<table class="table">
						<tr>
							<th colspan="2"><?php echo $item['ABBREV'];?></th>
						</tr>
						<?php for($i=0; $i<count($files__);$i++){?>
							<tr>
								<td>
									<img src="<?php echo base_url('assets/img/pdf.png'); ?>?version=1.0" style="width: 15px">
								</td>
								<td>
							<a href="<?php echo base_url('assets/syllabus/'.$college.'/'.$files__[$i]);?>" target="_blank" style="color: #000000;">
							<?php echo explode('.',$files__[$i])[0]; ?>
							</a>
								</td>
							</tr>
						<?php } ?>
					</table>	
				</div>
			<?php } else if($item['path_'] != ''){ ?>
				<?php $files__ = explode(',', $item['path_']); ?>
				<div class="specific_downloads_">
				<table class="table">
				<tr>
					<th colspan="2"><?php echo $item['ABBREV'];?></th>
				</tr>
				<?php for($i=0; $i<count($files__);$i++){?>
					<tr>
						<td>
							<img src="<?php echo base_url('assets/img/pdf.png'); ?>?version=1.0" style="width: 15px">
						</td>
						<td>
							<a href="<?php echo $files__[$i];?>" target="_blank" style="color: #000000;">Link <?php echo $i+1;?></a>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			<?php } ?>
	<?php } ?>
</div>
<div <?php echo $class_;?>>
	<h5>Other Downloads</h5>
		<?php foreach ($dwn_['downloads'] as $item) { ?>
			<div class="downloads_">
				<table class="table">
					<tr>
						<td>
							<img src="<?php echo base_url('assets/img/pdf.png'); ?>?version=1.0" style="width: 15px">
						</td>
						<td>
							<a href="<?php echo $item['path']; ?>" style="color: #000000" target="_blank">
								<?php echo $item['content']; ?>
							</a>
						</td>
					</tr>
				</table>
			</div>
		<?php } ?>
</div>
