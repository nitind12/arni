$(function(){
    $('.delete_alumni').click(function(){
        var str = this.id;
        var arr = str.split('_');
        var id_ = arr[1];
        var new_id = 'delete_'+id_;
    
        var url_ = site_url_ + "/agi/delete_alumni_data/"+id_;
        $('#msg_update').show();
        $('#msg_update').html('deleting...');
        $.ajax({
            type: 'POST',
            url: url_,
            success: function(data){
                
                if(data == 'true'){
                    $('#msg_update').html('deleted successfully.');
                    $('#msg_update').fadeOut(3000);
                    $('#'+new_id).hide(1500);
                }
            },
            error: function(xhr, status, error){
                if(status != 200){
                    $('#msg_error').html('Check your Internet Connection.');
                    $('#msg_error').fadeOut(3000);  
                } else {
                    alert('Some server error. Please re-login and try again.');
                }
            }
        });
    });
    $('.alumni_update_profile').change(function(){
        $('#msg_update').show();
        var str = this.id;
        var arr = str.split('_');

        var id_         = arr[0];
        var col_        = arr[1];
        var instance    = arr[2];

        if(col_ == 'status' || col_ == 'allowed'){
            if($('#'+str).val() == 0){
                var data_ = instance+'='+1;
            } else {
                var data_ = instance+'='+0;
            }
        } else if(col_ == 'DOB'){
            var dob_generated = $('#'+id_+"_"+col_+"_"+'txtDate').val() + '-' + $('#'+id_+"_"+col_+"_"+'txtMonth').val();
            instance = 'txtDOB'; // Re-creation of instance in case of DOB
            var data_ = instance+'='+dob_generated;
        } else {
            var data_ = instance+'='+$('#'+str).val();
        }
        var url_ = site_url_ + "/agi/update_alumni_profile/"+id_+"/"+col_+"/"+instance

        $.ajax({
            type: 'POST',
            url: url_,
            data: data_,
            success: function(data){
                if(data != 'true'){
                    $('#msg_error').html('Some server Error. Try again.');
                    $('#msg_error').fadeOut(3000);
                    if(col_ == 'status' || col_ == 'allowed'){ // If error occurs then intact original value at client to view in actual
                        val__ = $("#"+str).val();
                        if(val__ == '0'){
                            $("#"+str).val('0');
                        } else {
                            $("#"+str).val('1');
                        }
                    }
                } else {
                    if(col_ == 'status' || col_ == 'allowed'){ // If successful occurs then change modified value at client to view in actual
                        val__ = $("#"+str).val();
                        if(val__ == '0'){
                            $("#"+str).val('1');
                        } else {
                            $("#"+str).val('0');
                        }
                    }
                    $('#msg_update').html('successfully updated');
                    $('#msg_update').fadeOut(2500);
                }
            },
            error:  function(xhr, status, error){
                if(status != 200){
                    $('#msg_error').html('Check your Internet Connection.');
                    $('#msg_error').fadeOut(3000);
                    alert('');   
                } else {
                    alert(xhr.responseText);
                }
            }
        });
        return false;
    });
    $('.alumni_pic_upload').change(function(e){
        e.preventDefault();

        var file_ = this.files[0].name;

        filesize = this.files[0].size/1024;
        var extension = file_.substr( (file_.lastIndexOf('.') +1) );
        var extension = extension.toLowerCase();
        if(extension == 'jpg' || extension == 'jpeg'){
            if(filesize <= 35){

            var str = this.id;
            var arr = str.split('_');

            var id_         = arr[0];
            var col_        = arr[1];
            var instance    = arr[2];

            var formData = new FormData($('#frmPicUpload_'+id_)[0]);
            var url_ = site_url_ + "/agi/update_alumni_profile_photo/"+id_+"/"+col_+"/"+instance
            $('#pic_'+id_).html('loading...');
            $.ajax({
                type: 'POST',
                url: url_,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){
                    var obj = JSON.parse(data);
                    if(obj.pic != 'x'){
                        $('#pic_'+id_).html('<img class="media-object img-responsive" src="'+base_path+'/assets/alumniPic/'+obj.pic+'" alt="Amrapali alumni - '+obj.name_+'" style="max-width: 70px;">')
                    } else {
                        $('#pic_'+id_).html('<img class="media-object img-responsive" src="'+base_path+'/assets/alumniPic/sample.jpg" alt="Amrapali alumni - Sample" style="max-width: 70px;">')
                    }
                },
                error:  function(xhr, status, error){
                    alert(xhr.responseText);
                }
            });
            } else {
                alert('Alumni Photo should be less than and equals to 20KB only.');
            }
        } else {
            alert('Only .jpg | .jpeg extensions are allowed');
        }
    return false;
    });
    /*
    $('#frmOnlineRegister').on('submit', function(e){
        e.preventDefault();
        // CSRF Hash
        var csrfHash = $("input[name=csrf_test_name]").val(); // CSRF hash
        
        var url_ = site_url_ + '/Agi/checkcaptcha_ajax/';
        var data_ = $(this).serializeFormJSON();
    	//var data_ = {[csrfName]: csrfHash, site_: site_, folder_: folder_ };
    	console.log(data_);
    	$.ajax({
    	    type: 'post',
    	    url: url_,
    	    dataType: 'json',
            contentType: 'application/json',
    	    data: JSON.stringify(data_),
    	    success: function (data){
    	        alert(data);
    	        //var obj = JSON.parse(data);
    	        //$("input[name=csrf_test_name]").val(obj.token);
    	    },
                error:  function(xhr, status, error){
                    alert(xhr.responseText);
                }
    	});
    	return false;
    });
    $.fn.serializeFormJSON = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
    */
    $('#frmEnquiry').submit(function () {
        if ($('#txtEnqName').val() == '') {
            $('#cntct_msg_').text('Your Name Please...');
        } else if ($('#txtEnqEmail').val() == '') {
            $('#cntct_msg_').text('Your Email Please...');
        } else if ($('#txtSubject').val() == '') {
            $('#cntct_msg_').text('Subject Please...');
        } else if ($('#txtWriteHere').val() == '') {
            $('#cntct_msg_').text('Please describe the subject...');
        } else {
            form_data = $('#frmEnquiry').serialize();
            url_ = site_url_ + '/Agi/Contact_Enquiry_email';
            $('#cntct_msg_').html('<img src="' + base_path + 'assets/img/loading.gif" style="width: 20px" /> Loading...');
            $.ajax({
                url: url_,
                type: 'POST',
                data: form_data,
                success: function (msg) {
                    $('#cntct_msg_').html(msg);

                    $('#txtEnqName').val('');
                    $('#txtEnqEmail').val('');
                    $('#txtSubject').val('');
                    $('#txtWriteHere').val('');
                }, 
                error: function(xhr, status, error){
                    $('#cntct_msg_').html(xhr.responseText);                    
                }
            });
        }
        return false;
    });

    $('#frmCareer').submit(function(){
        event.preventDefault();
        if($.trim($('#txtYrName').val())==''){
            $('#career_msg_').html('X: Your Name Please...');
            $('#txtYrName').focus();
        }else if($.trim($('#txtYrEmail').val())==''){
            $('#career_msg_').html('X: Your Email Please...');
            $('#txtYrEmail').focus();
        }else if($.trim($('#txtPostAppliedFor').val())==''){
            $('#career_msg_').html('X: Mention the Post you are applying...');
            $('#txtPostAppliedFor').focus();
        }else if($.trim($('#cmbDept').val())=='x'){
            $('#career_msg_').html('X: Select the department for the Post...');
            $('#cmbDept').focus()
        }else if($.trim($('#txtUploadResume').val())==''){
            $('#career_msg_').html('X: Upload your resume...');
            $('#txtUploadResume').focus();
        }else if($.trim($('#txtCaptcha').val())==''){
            $('#career_msg_').html('X: Submit the correct captcha from the image...');
            $('#txtCaptcha').focus();
        }else{
            $('#career_msg_').html('');
            form_data=$('#frmCareer').serialize();
            url_=site_url_+'/Agi/upload_resume_for_career';
            $('#career_msg_').html('<span style="color: #009000">Please wait. Its Sending...</span>');
            $(this).ajaxSubmit({
                url:url_,
                type:'POST',
                data:form_data,
                success:function(data){
                    $('#career_msg__').html(data+"<br><a href='"+site_url_+"/Agi/career'>Back to Openings</a>");
                    if(data=='<b style="color: #0000FF">Resume sent successfully. </b>'){
                        $('#frmCareer').resetForm();
                        $('#cmbDept').val('x');
                        $('#txtPostAppliedFor').val('');
                        $('#upload_resume').css('display', 'none');
                    }
                }
            });
        }
    return 1;
    });

    $('#clickforotp').click(function(){
        var mob_ = $('#txtPhone').val();
        $(this).css('color', '#ff0000');
        $(this).html('Requesting...');

        if(!isNaN(mob_)){
            if(mob_.length == 10){
                var url_ = site_url_ + "/agi/x___x_enq/"+mob_;
                $.ajax({
                    type: 'POST',
                    url: url_,
                    success: function(data){
                        $('#clickforotp').css('color', '#000080')
                        $('#clickforotp').html('Click here...');
                        alert('OTP is sent to to your number. Please check');
                    }, error: function(xhr, status, error){
                        alert('Something goes wrong. Please try again...');
                    }
                });
            } else {
                alert("Please fill mobile no correctly.");
            }
        } else {
            alert("Only numbers are allowed.")
        }
    });
    $('#verifyOTP_enquiry').click(function(){
        var o = $.trim($('#txtOTP').val());
        if(o != ''){
            if(o.length == 4){
                var url_ = site_url_ + "/agi/x___x__/" + o;
                $.ajax({
                    type: 'POST',
                    url: url_,
                    success: function(data){
                        if(data == 'true'){
                            $('#submit').removeAttr('disabled');
                            $('#submit').removeClass('btn-default');
                            $('#submit').addClass('btn-success');
                            $('#txtPhone').attr('type', 'hidden');
                            //$('#contactVerification').hide();
                            $('#fullTextForOtp').hide();
                            $('#txtOTP').attr('type', 'hidden');
                            $('#verifyOTP_enquiry').hide();
                            $('#verified_contact').html($('#txtPhone').val()+ "<img src='"+base_path+"/assets/img/tick.png' style='width: 56px'>");
                        } else {
                            alert('In-correct OTP');
                        }
                    }, error: function(xhr, status, error){
                        alert('Something goes wrong. Please try again...');
                    }
                });
            } else {
                alert('In-correct OTP');
            }
        } else {
            alert("Fill OTP for verification.");
        }
    });
    $('#frmScoialEnquiry').submit(function(){
        if($('#txtEnqName').val()==''){
            $('#cntct_msg_').text('Your Name Please...')
        }else if($('#txtEnqCity').val()==''){
            $('#cntct_msg_').text('Your City Please...')
        }else if($('#txtPhone').val()==''){
            $('#cntct_msg_').text('Your Phone Please...')
        }else if($('#txtCourse').val()==''){
            $('#cntct_msg_').text('Course Please...')
        }else{
            form_data=$('#frmScoialEnquiry').serialize();
            //alert(form_data);
            url_=site_url_+'/Contact_social_Enquiry_email';
            $('#cntct_msg_').html('<img src="'+base_path+'assets/img/loading.gif" /> Loading...');
            $.ajax({
                url:url_,
                type:'POST',
                data:form_data,
                success:function(msg){
                    $('#Overall_Message').css('color', '#ff0000');
                    $('#Overall_Message').html(msg);
                    $('#txtEnqName').val('');
                    $('#txtEnqCity').val('');
                    $('#txtEnqEmail').val('');
                    $('#txtPhone').val('');
                    $('#txtPhone').val('');
                    $('#txtCourse').val('');
                    $('#txtWriteHere').val('');
                }
            });
        }
    return false;
    });

    $('#userBrochureEnquiry').submit(function () {
        if ($('#txtEnqName').val() == '') {
            $('#cntct_msg_').text('Your Name Please...');
        } else if ($('#txtEnqEmail').val() == '') {
            $('#cntct_msg_').text('Your Email Please...');
        } else if ($('#txtPhone').val() == '') {
            $('#cntct_msg_').text('Contact Number Please...');
        } else if ($('#txtBrochure').val() == '0') {
            $('#cntct_msg_').text('Please select the brochure you want...');
        } else {
            form_data = $('#userBrochureEnquiry').serialize();
            url_ = site_url_ + '/userBrochureEnquiry';
            $('#cntct_msg_').html('<img src="' + base_path + 'assets/img/loading.gif" style="width: 20px" /> Working...');
            $.ajax({
                url: url_,
                type: 'POST',
                data: form_data,
                success: function (msg) {
                    $('#cntct_msg_').html(msg);

                    $('#txtEnqName').val('');
                    $('#txtEnqEmail').val('');
                    $('#txtPhone').val('');                    
                }, 
                error: function(xhr, status, error){
                    $('#cntct_msg_').html(xhr.responseText);                    
                }
            });
        }
        return false;
    });

    $('#userFeeEnquiry').submit(function () {
        if ($('#txtEnqName').val() == '') {
            $('#cntct_msg_1').text('Your Name Please...');
        }/* else if ($('#txtEnqEmail').val() == '') {
            $('#cntct_msg_1').text('Your Email Please...');
        } else if ($('#txtPhone').val() == '') {
            $('#cntct_msg_1').text('Contact Number Please...');
        } else if ($('#txtCourse').val() == '0') {
            $('#cntct_msg_1').text('Please select the Course for fee structure you want...');
        } */else {
            form_data = $('#userFeeEnquiry').serialize();
            url_ = site_url_ + '/userFeeEnquiry';
            $('#cntct_msg_1').html('<img src="' + base_path + 'assets/img/loading.gif" style="width: 20px" /> Working...');
            $.ajax({
                url: url_,
                type: 'POST',
                data: form_data,
                success: function (msg) {
                    $('#feestructure').show();
                    $('#feeform').hide();
                    $('#cntct_msg_1').html(msg);
                    $('#txtEnqName').val('');
                    $('#txtEnqEmail').val('');
                    $('#txtPhone').val('');                    
                },
                error: function(xhr, status, error){
                    $('#feestructure').hide();
                    $('#feeform').show();
                    $('#cntct_msg_1').html(xhr.responseText);                    
                }
            });
        }
        return false;
    });
    
    $('#cmbEvent').change(function(){
        var url_ = site_url_ + "/agi/getCommittee_n_position";
        if($('#cmbEvent').val() != ''){
            var data_ = "cmbEvent="+$('#cmbEvent').val();
            $('#cmbCommittee').html("<option value=''>Loading...</option>");
            $('#cmbPosition').html("<option value=''>Loading...</option>");
            $.ajax({
                type: 'POST',
                url: url_,
                data: data_,
                success:  function(data){
                    var obj = JSON.parse(data);
                    var str = '';
                    str = str + "<option value=''>Select Committee</option>";
                    for(i=0; i<obj.committee.length; i++){
                        str = str + "<option value='"+obj.committee[i].CMTID+"'>"+obj.committee[i].C_NAME+"</option>"
                    }
                    $('#cmbCommittee').html(str);
                    str = '';
                    str = str + "<option value=''>Select Position</option>";
                    for(i=0; i<obj.position.length; i++){
                        str = str + "<option value='"+obj.position[i].POSID+"'>"+obj.position[i].P_NAME+"</option>"
                    }
                    $('#cmbPosition').html(str);
                }
            });
        } else {
            $('#cmbCommittee').html("<option value=''>Select Committee</option>");
            $('#cmbPosition').html("<option value=''>Select Position</option>");
        }
    });
    
    $('.career_apply_').click(function(){
        var str = this.id;
        var data_ = str.split("_");
        
        $('#upload_resume').css('display', 'block');
        $('#openings_here').css('display', 'none');
        $('#cmbDept').val(data_[0]);
        $('#txtDept').html($("#cmbDept").find("option:selected").text());
        $('#txtPostAppliedFor').val(data_[1]);
        $('#career_msg_').html('');
        $('#career_msg__').html('');
        $('#txtYrName').focus();
        
        return false;
    });
    $('#back_to_openings').click(function(){
        $('#openings_here').css('display', 'block');
        $('#cmbDept').val('x');
        $('#txtDept').html('');
        $('#txtPostAppliedFor').val('');
        $('#career_msg_').html('');
        $('#career_msg__').html('');
        $('#upload_resume').css('display', 'none');
    });

    $('#send__x').click(function(){
        var mob_ = $('#correspondanceContact').val();
        $(this).html('Sending...');
        if(!isNaN(mob_)){
            if(mob_.length == 10){
                var url_ = site_url_ + "/agi/x___x/"+mob_;
                $.ajax({
                    type: 'POST',
                    url: url_,
                    success: function(data){
                        $('#send__x').html('Send OTP');
                        alert('OTP is sent to to your number. Please check');
                    }, error: function(xhr, status, error){
                        alert('Something goes wrong. Please try again...');
                        $('#send__x').html('Send OTP');
                    }
                });
            } else {
                alert("Please fill mobile no correctly.");
                $('#send__x').html('Send OTP');
            }
        } else {
            alert("Only numbers are allowed.");
            $('#send__x').html('Send OTP');
        }
    });
    $('#verifyOTP').click(function(){
        var o = $.trim($('#otp_').val());
        $('#verifyOTP').html('verifying...');
        if(o != ''){
            if(o.length == 4){
                var url_ = site_url_ + "/agi/x___x__/" + o;
                $.ajax({
                    type: 'POST',
                    url: url_,
                    success: function(data){
                        if(data == 'true'){
                            $('#update2nd').removeAttr('disabled');
                            $('#update2nd').removeClass('btn-default');
                            $('#update2nd').addClass('btn-success');
                            $('#correspondanceContact').attr('type', 'hidden');
                            $('#correspondanceContact__tempMain1').hide();
                            $('#correspondanceContact__tempMain').show();
                            $('#correspondanceContact__temp').html($('#correspondanceContact').val()+ "<img src='"+base_path+"/assets/img/tick.png' style='width: 56px'>");
                            $('#verification_corner').css('display', 'none');
                            $('#correspondanceContact__').addClass('verifiedContact');
                            $('#send__x').hide();
                        } else {
                            alert('In-correct OTP');
                            $('#verifyOTP').html('Verify OTP');
                        }
                    }, error: function(xhr, status, error){
                        alert('Something goes wrong. Please try again...');
                        $('#verifyOTP').html('Verify OTP');
                    }
                });
            } else {
                alert('In-correct OTP');
                $('#verifyOTP').html('Verify OTP');
            }
        } else {
            alert("Fill OTP for verification.");
            $('#verifyOTP').html('Verify OTP');
        }
    });

    $('.delete_me').click(function(){
        var str = this.id;
        var arr = str.split('_');
        var id_ = arr[1];
        if(confirm('Are you sure you want to delete the record no. '+id_+ '?')){
            var url_ = site_url_+"delOnlineReg/"+id_;
            $.ajax({
                type: 'GET',
                url:url_,
                success: function(data){
                    if(data == true){
                        $('#_'+str).css('background', '#000000');
                        $('#_'+str).fadeOut(1500);
                    }else{
                        alert('Some server Error!! Please try again');
                    }
                },
                error: function(xhr, status, error){
                    alert(xhr.responseText);
                }
            });
        }
    });
    $('#broken_link').click(function(){
        var url_ = site_url_ + "reportbrokenlink";
        var data_ = 'uri_='+encodeURI(window.location.pathname);
        $.ajax({
            type: 'GET',
            url: url_,
            data: data_,
            success: function(data){
                $('#broken_link').html('<span style="color: #009000">'+data+'</span>')
            }
        });
    })
});