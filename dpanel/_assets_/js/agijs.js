$(function(){
	var facid_for_sequence = 'x';
    $(window).on("load", function () {
        if ($("#frmFacultySeq").length != 0) {
            fill_faculty_for_sequence('');
        }
    $('#old_pwd').focus(function(){$('#msg_').html('');});
	$('#new_pwd').focus(function(){$('#msg_').html('');});
	$('#new_re-pwd').focus(function(){$('#msg_').html('');});
    });
	
	$('#changepwdbutt').click(function(){
		if($.trim($('#old_pwd').val()) == ''){
			$('#msg_').html("X: Please mention your old password");
		} else if($.trim($('#new_pwd').val()) == ''){
			$('#msg_').html("X: New password should not be left blank.");
		} else if($.trim($('#new_pwd').val()) != $.trim($('#new_re-pwd').val())){
			$('#msg_').html("X: Please confirm the new password correctly.");
		} else {
			url_ = site_url_ + '/c_pwd/changepwd';
			data_ = $('#frm_cpwd').serialize();
			$('#msg_').html('<span style="color: #0000ff">Loading...</span>');
			
			$.ajax({
				type: "POST",
				url: url_,
				data: data_,
				success: function(data){
					if(data == "All three chances over."){
						$('#fullform').css({'padding':'20px'});
						$('#fullform').html("Please contact administrator to reset your password.<br /><a href='"+site_url_+"/dashboard/log__out'>Logout</a>");
					} else {
						$('#msg_').html(data);	
					}
					$('#frm_cpwd')[0].reset();
				}
			});
		}
	});
	
	function fill_faculty_for_sequence(id__){
		url_ = site_url_ + "/faculty/getActiveFaculty/"+$('#txtCourse_for_sequence').val();
		$('#faculty_sequence_here').html('<img src="'+base_url_+'_assets_/images/load.gif" style="width: 15px"> Loading...');
		$.ajax({
			type: "POST",
			url : url_,
			success:  function(data){
				var obj = JSON.parse(data);
				var str_html = '';
				str_html = str_html + "<tr>";
                str_html = str_html + "<th>Faculty Name</th>";
				str_html = str_html + "<th>Designation</th>";
				str_html = str_html + "<th>Change Sequence</th>";
				str_html = str_html + "</tr>";
				for (i=0; i<obj.length; i++) {
					str_html = str_html + "<tr>";
					str_html = str_html + "<td>"+obj[i].FACULTY_NAME+"</td>";
					str_html = str_html + "<td>"+obj[i].DESIG+"</td>";
					if(id__ != '' && id__ == obj[i].FAC_ID){
						str_html = str_html + '<td><input type="text" name="'+obj[i].FAC_ID+'" id="'+obj[i].FAC_ID+'" class="myseq_txt bordercolorji" value="'+obj[i].SEQ+'"></td>';
					} else {
						str_html = str_html + '<td><input type="text" name="'+obj[i].FAC_ID+'" id="'+obj[i].FAC_ID+'" class="myseq_txt" value="'+obj[i].SEQ+'"></td>';
					}
					str_html = str_html + "<tr>";
				}
				$('#faculty_sequence_here').html(str_html);
				if(id__ != '') $('#'+id__).focus();
			}, error(xhr, status, error){
				$('#faculty_sequence_here').html(xhr.responseText);
			}
		});
	return false;
	}
	
	$('body').on('focus', '.myseq_txt', function(){
    		facid_for_sequence = $('#'+this.id).val();
    	});
    $('body').on('blur', '.myseq_txt', function(){
    	var id__ = this.id;
    	if($.trim($('#'+this.id).val()) != ''){
	    	if($('#'+this.id).val() != facid_for_sequence){
	    		data_ = 'seq_='+$('#'+this.id).val()+"&facid="+this.id;
	    		url_ = site_url_ + "/faculty/changesequence";
	    		$('#faculty_sequence_here').html('<img src="'+base_url_+'_assets_/images/load.gif" style="width: 15px"> Loading...');
	    		$.ajax({
	    			type: "POST",
	    			url: url_,
	    			data: data_,
	    			success: function(data){
	    				var obj = JSON.parse(data);
	    				if(obj.res_ == true){
	    					fill_faculty_for_sequence(id__);
	    				} else {
	    					alert(obj.msg_);
	    				}
	    			}, error(xhr, status, error){
	    				//$('#faculty_sequence_here').html("<span style='color: #ff0000'>"+error+". Check your internet connection and <b>reload</b> the page and try again. <br />If still error occurs then please drop email to <span style='color: #0000ff'>nitin.d12@amrapali.ac.in <b>OR</b> navtewari@amrapali.ac.in</span></span>");
	    			}
	    		});
	    	}
    	} else {
			$('#'+this.id).val(facid_for_sequence);
		}
    return false;
    });
    
    $('.blog_update_input').change(function(){
        var str = this.id;
        var arr = str.split('_');
        var id_ = arr[0];
        var col_ = arr[1];
        var instance = arr[2];
        var url_ = site_url_ + "/blog/update_blog_detail/"+id_+"/"+col_+"/"+instance;
        if(col_ == 'STATUS'){
            if($('#'+str).val() == 0){
                var data_ = instance+'='+1;
            } else {
                var data_ = instance+'='+0;
            }
        } else {
            var data_ = instance+'='+$('#'+str).val();
        }
        $('#msg_update').show();
        $('#msg_update').html('Saving...');
        $('#msg_error').html('');
         $.ajax({
            type: 'POST',
            url: url_,
            data: data_,
            success: function(data){
                if(data != '1'){
                    $('#msg_error').show();
                    $('#msg_error').html('Some server Error. Try again.');
                    $('#msg_error').fadeOut(3500);
                    
                    if(col_ == 'STATUS'){ // If error occurs then intact original value at client to view in actual
                        val__ = $("#"+str).val();
                        if(val__ == '0'){
                            $("#"+str).val('0');
                        } else {
                            $("#"+str).val('1');
                        }
                    }
                } else {
                    if(col_ == 'STATUS'){ // If successful occurs then change modified value at client to view in actual
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
            }
         });
    });
    $('.delete_bloglink').click(function(){
        var str = this.id;
        var arr = str.split('_');
        var id_ = arr[1];
        var new_id = 'delete_'+id_;
        var url_ = site_url_ + "/blog/delete_blog_detail/"+id_;
        $('#msg_update').show();
        $('#msg_update').html('Deleting...');
        $('#msg_error').html('');
        $.ajax({
            type : 'POST',
            url : url_,
            success: function(data){
                if(data =='1'){
                    $('#msg_update').html('deleted successfully.');
                    $('#msg_update').fadeOut(3000);
                    $('#'+new_id).fadeOut(1500);
                } else {
                    $('#msg_error').show();
                    $('#msg_error').html('Some server Error. Try again.');
                    $('#msg_error').fadeOut(3500);
                }
            }
        });
        
    });
});
function setDeptDate(startDate, endDate) {
    endDate.setAttribute('min', startDate.value);
}