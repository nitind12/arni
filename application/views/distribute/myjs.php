<script>
    $(function(){
       $('#checkall').click(function(){
            var obj = $(".select_options_for_email");
            
            if(obj.length >= 10) var len_  = 10;
            else var len_ = obj.length;
            
            var i = 1;
            $("input[name='sendmailtome[]']").each(function (index, obj) {
                if(i>len_){
                    return false;
                }
                $(this).prop('checked', true);
                i++;
            });
       });
       $('#uncheckall').click(function(){
         $(".select_options_for_email").prop('checked', false);  
       });
       $('#send_email_btn').click(function(){
           data_ = $('#frmEmailLogins').serialize();
           var url_ = site_url_ + 'send_email_logins';
           $.ajax({
               'type': 'POST',
               url: url_,
               data: data_,
               success: function(response){
                   alert(response);
                   location.reload();
               }
           })
       })
    });
</script>