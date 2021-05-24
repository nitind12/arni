<style>
    .main-block{
        float: left; color: #606060
    }
    .main-headings{
        font-weight: bold;
        border
    }
    .records-block{
        border: #f00 solid 0px; overflow: auto; height: 600px
    }
    tr:nth-child(even) {background: #feffea}
</style>
<section class="trusted-client-wrapper">
                                    <div class="col-md-12">
                                        <?php $this->load->view('templates/breadcrumb'); ?>  
                                        <a name="notconfirm"> </a>
                                        <h2 class="section-title wow fadeInDown" ><?php echo $title;?></h2>
                                        <div style="text-align: right; padding: 20px 0px;">
                                            <a href="<?php echo site_url('downloadReg/0');?>" style="color: #ff0000">Download Not Confirmed</a> |
                                            <a href="<?php echo site_url('downloadReg/1');?>" style="color: #00AA00">Download Confirmed</a>
                                        </div>
                                        <div class="col-md-12 records-block">
                                            <h3 style="color: #0000ff">Non-Confirmed Candidates
                                                <a href="#confirm" style="float: right; font-size: 11px">Go to confirm registrations</a></h3>
                                            <table class="table table-striped">
                                                <tr>
                                                <th class="main-headings" style="text-align: center">Confirm it</th>
                                                <th class="main-headings" style="text-align: center">S. No.</th>
                                                <th class="main-headings">Name</th>
                                                <th class="main-headings">Contacts</th>
                                                <th class="main-headings">Address</th>
                                                <th class="main-headings">Course Enquired</th>
                                                <th class="main-headings">Reg. Date</th>
                                                <th class="main-headings">Delete</th>
                                                </tr>
                                                <?php foreach ($registered as $item) { ?>
                                                <tr id="<?php echo "rec_".$item->REGID;?>">
                                                <td class="content" style="text-align: center"><button class="btn btn-primary confirm_notconfirm" id="<?php echo "admitted_".$item->REGID;?>" parameter="1">Confirm</button></td>
                                                <td class="content" style="text-align: center"><?php echo $item->REGID;?></td>
                                                <td class="content"><?php echo $item->NAME_;?></td>
                                                <td class="content"><?php echo $item->MOBILE_1."<br>". $item->MOBILE_2;?></td>
                                                <td class="content"><?php echo $item->CITY.",<br>".$item->STATE;?></td>
                                                <td class="content"><?php echo $item->COURSE_APPLIED. "<br>". $item->SCHOOL;?></td>
                                                <td class="content"><?php echo $item->DATE_;?></td>
                                                <td class="content"><button class="btn btn-danger" id="<?php echo "admitted_".$item->REGID;?>">X</button></td>
                                                </tr>
                                                <?php } ?> 
                                            </table>
                                            </div> 
                                            <div style="clear:both"></div>
                                            <a name="confirm"> </a>
                                                <hr/>
                                                <hr/>
                                            <div style="clear:both"></div>
                                        <div style="text-align: right; padding: 20px 0px;">
                                            <a href="<?php echo site_url('downloadReg/0');?>" style="color: #ff0000">Download Not Confirmed</a> |
                                            <a href="<?php echo site_url('downloadReg/1');?>" style="color: #00AA00">Download Confirmed</a>
                                        </div> 
                                        <div class="col-md-12 records-block">
                                            <h3 style="color: #900000">Confirmed Candidates<a href="#notconfirm" style="float: right; font-size: 11px">Go to not confirm registrations</a></h3></h3>
                                            <table class="table table-striped">
                                                <tr>
                                                <th class="main-headings" style="text-align: center">Action</th>
                                                <th class="main-headings" style="text-align: center">S. No.</th>
                                                <th class="main-headings">Name</th>
                                                <th class="main-headings">Contacts</th>
                                                <th class="main-headings">Address</th>
                                                <th class="main-headings">Course Enquired</th>
                                                <th class="main-headings">Reg. Date</th>
                                                </tr>
                                                <?php foreach ($confirmed as $item) { ?>
                                                <tr id="<?php echo "rec_".$item->REGID;?>">
                                                <td class="content" style="text-align: center"><button class="btn btn-danger confirm_notconfirm" id="<?php echo "admitted_".$item->REGID;?>" parameter="0">Un-Confirm</button></td>
                                                <td class="content" style="text-align: center"><?php echo $item->REGID;?></td>
                                                <td class="content"><?php echo $item->NAME_;?></td>
                                                <td class="content"><?php echo $item->MOBILE_1."<br>". $item->MOBILE_2;?></td>
                                                <td class="content"><?php echo $item->CITY.",<br>".$item->STATE;?></td>
                                                <td class="content"><?php echo $item->COURSE_APPLIED. "<br>". $item->SCHOOL;?></td>
                                                <td class="content"><?php echo $item->DATE_;?></td>
                                                </tr>
                                                <?php } ?> 
                                            </table>
                                            </div>
                                            </div> 
                                        <div style="clear:both"></div>                            
                                    </div>

                            </section>
                            