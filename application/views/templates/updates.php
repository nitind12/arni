<div class="col-sm-4" style="background-color:#fff; border-radius: 10px; height: 400px;">
                <h2>Recents Updates</h2>
                <div style="color:#0087BD">
                	<marquee scrollamount="3" direction="up" height="300px;" onmouseover="this.stop();" onmouseout="this.start();">
                		<?php for($loop1=1; $loop1<=4; $loop1++){?>
                			<?php foreach ($news_ as $item) {?>
			                    <blockquote>
			                        <p><?php echo $item->SUBJECT; ?></p>
			                        <small><?php echo $item->NEWS; ?> <div style="clear: both; height: 3px"></div><cite title="Source Title" style="color: #ff0090">
			                        	<?php if($item->PATH_ATTACH != 'xpath'){?>
										<a href="<?php echo base_url() . 'nitnav/newsevents/' . $item->PATH_ATTACH; ?>" target="_blank" style="text-decoration: none; color:#FFFFFF; background: #28a8db; padding: 4px; border-radius: 3px">click for detail</a><br />
									<?php }?><br />
			                        	<?php echo $item->DATE_ . " | " . $item->TIME_; ?></cite></small>
			                    </blockquote>
                    		<?PHP } ?>
                    	<?PHP } ?>
                    </marquee>
                </div>
            </div>