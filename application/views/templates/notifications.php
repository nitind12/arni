<style>
    td{
        font-family: 'Times New Roaman';
        font-weight: 400 !important;
    }
    tr:nth-child(odd){
        background-color: #fcfae5;
    }
</style>
<?php
    $count = 1;
?>
<div class="notifications-tab" style="min-height: 150px; height: 220px; overflow: auto">
    <table style="border-collapse: collapse; width: 450px">
	<?php foreach($all_notices as $item){?>
	    <tr style="border-bottom: #A0A000 dotted 1px; padding: 5px 0px; vertical-align: top;">
	        <td style="padding: 0px 5px 0px 0px;">::</td>
	        <td>
	            <?php if($count <= $notice_today){?>
	                    <span class='new-notification'>new</span>
        	        <?php $count++; ?>
        	        <?php } ?>
	            <?php if($item->PATH_ATTACH != ''){?>
	                <a href="<?php echo ADMIN___ . '/_assets_/notices/' . $item->PATH_ATTACH;?>" style="color: #0000f0" target="_blank">
    	            <b><?php echo $item->SUBJECT; ?></b>
    	            </a>
    	            <?php if($item->ANNOUNCEMENT != 'x' && $item->ANNOUNCEMENT != 'X'){?>
        	            <br>
        	            <?php echo $item->ANNOUNCEMENT; ?>
    	            <?php } ?>
	            <?PHP } ?>
	        </td>
	    </tr>
	<?php } ?>
	</table>
</div>
<div style="clear: both; padding: 3px 0px"></div>