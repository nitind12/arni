$(function(){
	$('#frmApplyNow').submit(function(){
		var url_ = site_url_ + "register";
		data_ = $('#frmApplyNow').serialize();
		$.ajax({
			type: "POST",
			url: url_,
			data: data_,
			success: function(data){
				if(data == 1){
					$("#myModalApplyNow").modal('show');
					$('#applynow_name_here').html("Dear " + $('#txtName').val());
					// Now when modal dialog box closes then redirect to home page
				} else {
					alert("Some Server Error. Please try again");
				}
			}, error: function(xhr, status, error){
				console.log(xhr.responseText);
			} 
		})
	return false;
	});

	$('.cmdApplyNowOK').click(function(){
		window.open(site_url_, '_parent');
	})

	$('#cmbDegreeDiploma').change(function(){
		callCourses();
	});
	$('#cmbSchool').change(function(){
		callCourses();
	});
	function callCourses(){
		// CSRF Hash
        //var csrfHash = $("input[name=csrf_test_name]").val(); // CSRF hash
		var school = $('#cmbSchool').val();
		var degreediploma = $('#cmbDegreeDiploma').val();

		if(school != '' && degreediploma != ''){
			var url_ = site_url_ + "getCourse";
			var data_ = "cmbSchool="+school+"&cmbDegreeDiploma="+degreediploma;
			//var data_ = {['csrfName']: csrfHash, cmbSchool: school, cmbDegreeDiploma: degreediploma };
			//console.log(url_);
			//console.log(data_);
			$.ajax({
				type: 'POST',
				url: url_,
				data: data_,
				success: function(data){
					var obj = JSON.parse(data);
					var len_ = obj.length;
					var str = '';
					$('#appliedcourselabel').html("Course <span style='color: #0000ff !important; font-weight: bold !important'>("+len_+")</span>");
					str = "<option value=''>Select Course</option>";
					$('#cmbAppliedCourse').html("<option>Loading...</option>");
					for(i=0; i<len_; i++){
						str = str + "<option value='"+obj[i]['CRSDETID']+"_"+obj[i]['COURSE']+"'>"+obj[i]['COURSE']+"</option>"
					}
					$('#cmbAppliedCourse').html(str);
					//$("input[name=csrf_test_name]").val(obj.token);
				}, error: function(xhr, status, error){
					console.log(xhr.responseText);
				}
			});
		} else {
			$('#appliedcourselabel').html("Course");
			$('#cmbAppliedCourse').html("");
		}
	}

	$('body').on('click', '.confirm_notconfirm', function(){
		var str = this.id;
		var arr = str.split("_");
		id_ = arr[1]; 
		status_ = $('#'+str).attr("parameter");
		var url_ = site_url_ + "toggle_registrations";
		var data_ = "status="+status_+"&id_="+id_;
		console.log(data_);
		console.log(url_);
		$.ajax({
			type: "POST",
			url: url_,
			data: data_,
			success: function(data){
				if(data == 1) $("#rec_"+id_).css("display", "none");
			}, error: function(xhr, status, error){
				console.log(xhr.responseText);
			}
		})
	});
});