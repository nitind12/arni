<style type="text/css">
	.thanks{
		font-family: "Roboto", sans-serif;;
		font-size: 150%;
		font-weight: bold;
		float: none;
		background: #0FE350;
		color: #fff;
		padding: 2%;
		border-radius: 20px;
		width: 60%;
		clear: both;
	}
	.payment_message{
		font-family: "Roboto", sans-serif;;
		font-size: 100%;
		font-weight: bold;
		float: none;
		color: #009000;
		padding: 2%;
		border: #0FE350 solid 1px;
		border-radius: 20px;
		width: 60%;
		clear: both;
	}
</style>
<div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">
                    </section>

                    <div class="container">
                        <div class="content-wrapper">   
                            <div class="inner-content">
                                <div class="row">
									<center>
										<div class="thanks">
											Dear <?php echo $ticket->name; ?>, <br> thanks for registering for <br><?php echo $ticket->course; ?> at Amrapali Group of Institutes.
										</div>
										<div class="payment_message">
											We had sent you the registration and payment detail on your <br>registered mobile number.
											<br><br>
											You are requested to pay <u>Rs. 2000</u> within next 5 days.
											<br>
											You can pay online at  <a href="https://www.amrapali.ac.in/sbi_online">State Bank of India</a>
											<br>
											- OR -
											<br>
											You can pay online at  <a href="https://www.amrapali.ac.in/hdfc_online">HDFC Bank Ltd.</a>
											<br>
											- OR -
											<br>

											through RTGS/NEFT in the following account.<br>
											 <u>Bank Name</u>: Union Bank of India <br> 
											 <u>Account number</u>: 411601010072023 <br> 
											 <u>Account Name</u>: Amrapali Institute <br> 
											 <u>IFSC code</u>: UBIN0541168
										</div>
									</center>
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->