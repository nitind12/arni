<style>
    .member-info a{
        color: #0c5981;
        font-weight: bold;
    }
    .member-info a:hover{
        color: #ffa200;
    }
    ul.check-circle li {
        display: list-item;
        position: relative;
        line-height: 28px;
        padding-left: 25px;
        color:#8b4b05;
    }
    hr{
        border:1px solid #aaaaaa;
    }
</style>

<!--script>
    function addfavlink(loc, dispname, siteurl){
         var shl = WScript.CreateObject("WScript.Shell");
        var shor = shl.CreateShortcut(loc + "" + dispname + ".URL");
        shor.TargetPath = siteurl;
        shor.save();
    }
</script-->
<body>
    <?php $this->load->view('tagmanager'); ?>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <?php $this->load->view('templates/menu'); ?>
                    </header>
                    <?php $this->load->view('admissions/slider'); ?>
                    </div>
                    <!-- #x-corp-carousel-->
                    <div style="clear: both;"><br></div>
                    <div class="container">
                        <div class="content-wrapper">                          
                            <section class="" style="display: inline;">
                                <?php $this->load->view('templates/submenu'); ?>
                            </section>
                            <?php $this->load->view('admissions/innerpages/'.$inner_page); ?>                                                    
                        </div>
                    </div>