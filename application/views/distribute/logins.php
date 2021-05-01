<style>
    .profile{
        position: relative;
        float:left;
        width:250px;
        height:200px;
        background: #ffffe6;
        box-shadow: 1px 1px 1px #e6e6e4;
        padding:10px;
        margin:10px;
    }
    .pname{
        color: #08C;
        font-weight:400;
        line-height: 10px;
        margin-top: 12px;
    }
    .presume{
        color: #c7254e;
        font-weight:400;
    }
    .cross{
        position: absolute;
        top: 0px;
    }

    .enable{
        position: absolute;
        top: 0px;
        right:0px;
    }

    .disable{
        position: absolute;
        top: 0px;
        right:0px;
    }
    .textfield{
    	font-size: 11px;
    	font-family: verdana;
    	border: #f0f0f0 solid 0px;
    	border-bottom: #f0f0f0 solid 1px;
    	color: #0000ff;
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
<body>
    <div id="msg_update">Saving...</div>
    <div id="msg_error">Error...</div>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">
                    </section>
                </div>
                <div class="container">
                        <div class="content-wrapper">
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content">
                                            <h4 align="left">&nbsp;&nbsp;Sending Email 
                                                <span style="float:right;"><h4><a href="<?php echo site_url('AlumniProfileLogin');?>">Logout</a></h4></span>
                                            </h4>                                        
                                                <div class="panel table-responsive">
                                                    <?php
                                                        $data = array(
                                                            'name'=>'frmEmailLogins',
                                                            'id'=>'frmEmailLogins'
                                                        );
                                                        echo form_open('', $data);
                                                    ?>
                                                    <table class="table">
                                                        <tr>
                                                            <td colspan="2">
                                                                <div style="padding: 5px 5px; float: left; text-align: center; background: #CFFFFD; cursor: pointer" id="checkall">Check all</div>
                                                                <div style="padding: 5px 5px; float: left; font-weight: bold">&nbsp;/&nbsp;</div>
                                                                <div style="padding: 5px 5px; float: left;background: #ff0; text-align: center; cursor: pointer" id="uncheckall">Un-Check all</div></td>
                                                            <td colspan="2" style="text-align: right"><input type="button" class="btn btn-primary" value="Send Email to the selected ones..." id="send_email_btn"></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align: center">Reg No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach($lms_data as $item){ ?>
                                                        <tr>
                                                            <td style="text-align: center; background: #F7FFCF"><input type="checkbox" name="sendmailtome[]" value="<?php echo $item->username;?>" id="_<?php echo $item->username;?>_" class="select_options_for_email"></td>
                                                            <td><?php echo $item->username;?></td>
                                                            <td><?php echo $item->first_name." ".$item->last_name;?></td>
                                                            <td><?php echo $item->email;?></td>
                                                        </tr>
                                                        <?php }?>
                                                    </table>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
