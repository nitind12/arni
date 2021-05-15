<?php
    //echo "<h1>".$_SERVER['HTTP_REFERER']."</h1>";
?>
<style>
    .textfield{
    	font-size: 11px;
    	font-family: verdana;
    	border: #f0f0f0 solid 0px;
    	border-bottom: #f0f0f0 solid 1px;
    	color: #0000ff;
    }
    input:focus {
      background-color: #ECFEFF;
      border: #f0f0f0 solid 0px !important;
      outline: none;
      border-left: #ff0000 solid 1px !important;
    }
    #msg_update{
        position: fixed;
        z-index: 999999;
        background: #d0d0d0;
        border-radius: 5px;
        padding: 5px 8px;
        color: #fff;
        font-family: verdana;
        top: 20%;
        left: 0;
        right:0;
        width: 150px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 1px 2px 3px grey;
        opacity: .8;
        text-align: center;
        display: none
    }
    #msg_error{
        position: fixed;
        z-index: 999999;
        background: #ff0000;
        border-radius: 5px;
        padding: 5px 8px;
        color: #fff;
        font-family: verdana;
        top: 20%;
        left: 0;
        right:0;
        width: 150px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 1px 2px 3px grey;
        opacity: .8;
        text-align: center;
        display: none
    }
</style>

<div class="col-lg-12">
    <div class="panel panel-default"<?php echo $style_; ?>>
        <div class="panel-heading" style="overflow: hidden">
            <div style="float:left">Blogs for website</div>
            <div style="float: right"><a href="<?php echo site_url('blog/newblog');?>">New</a></div>
        </div>
    <div id="msg_update">Saving...</div>
    <div id="msg_error">Error...</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-sm-12">
                                    <div class="panel table-responsive">      
                                    	<table class="table" style="width: 95%">
                                        	<tr>
                                                <th style="width: 5%"></th>
                                                <th style="width: 5%">Active</th>
                                        		<th style="width: 45%">Title</th>
                                        		<th style="width: 45%">Link or Path</th>
                                        	</tr>
                                            <?php foreach ($bloglinks as $item) { ?>
                                            	<tr id="delete_<?php echo $item->ID;?>">
                                                    <td style="background: #FFCFCF; text-align: center; vertical-align: top; font-size: 11px; font-family: verdana"><b  class="delete_bloglink" id="del_<?php echo $item->ID;?>" style="background: #ff0000; color: #ffffff; border-radius: 5px; padding: 3px 6px; cursor: pointer">X</b></td>
                                            		<td>
                                                        <input class="textfield blog_update_input" type="checkbox"<?php if($item->STATUS==1){echo ' checked="checked"';}?> id="<?php echo $item->ID; ?>_STATUS_txtStatus" name="txtStatus" value="<?php echo $item->STATUS; ?>" class="textfield blog_update_profile">
                                                    </td>
                                            		<td id="Title_<?php echo $item->ID;?>">
                                            		    <input class="textfield blog_update_input" type="text" class="textfield" value="<?php echo $item->TITLE;?>" name="txtTitle" id="<?php echo $item->ID; ?>_TITLE_txtTitle" style="width: 100%">
                                            		</td>
                                            		<td id="Link_<?php echo $item->ID;?>">
                                            		    <input class="textfield blog_update_input" type="text" class="textfield" value="<?php echo $item->LINK;?>" name="txtLink" id="<?php echo $item->ID; ?>_LINK_txtLink" style="width: 100%">
                                            		</td>
                                            	</tr>
                                                <tr>
                                                    <td colspan="4" style="height: 1px; padding: 1px; background: #fff"></td>
                                                </tr>
                                            <?php } ?>          
                                    	</table>                                           
                                    </div>     
                        </div><!-- /.col-md-9 -->
                        
                    </div><!-- /.row -->
            </div>
<!--/#title-->