
    
	<head>
    	<title>TICKET</title>
        <style type="text/css">
			.head{font-family:"Times New Roman", Times, serif; font-size:16px; padding:5px;}
			.label{font-family:"Times New Roman", Times, serif; font-size:16px; padding:5px;}
			.label1{font-family:"Times New Roman", Times, serif; font-size:10px; padding:5px;}
			.data{font-family:"Times New Roman", Times, serif; font-size:14px; padding:5px;font-style:italic;}
			.data_large{font-family:"Times New Roman", Times, serif; font-size:16px; padding:5px;font-style:italic;font-weight:bold;}
			h6{color:#CCC;}
		</style>
    </head>
    
    <body>
    <center>
    <h5>OFFICE COPY</h5>
    	<table width="542" cellpadding="0" cellspacing="0" border="1" bordercolor="#333333">
        	<tr align="center">
            	<td colspan="2"><img src="<?PHP echo base_url() . 'assets/img/logo.png'?>" title="Amrapali Group of Institutes"></td>
            </tr>
            <tr height="50" align="center" bgcolor="#F2f2f2">
            	<td class="head" width="242" align="left">Registration token no:<span class="data_large"> <?PHP echo $ticket->regID; ?></span></td>
                <td width="300" class="head" align="center">
                      	Course Registered : <span class="data_large"> <?PHP echo $ticket->course; ?></span>
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                	<table border="0" bordercolor="#f2f2f2" cellpadding="0" cellspacing="0" width="542">
                    	<tr height="50">
                        	<td rowspan="3" class="head" bgcolor="#EBEBEB" align="center" valign="middle">DETAIL</td>
                        	<td class="label">
                            	Name :<span class="data"> <?PHP echo $ticket->name; ?></span>
                            </td>
                            <td class="label" align="left">
                            	DOB : <span class="data"> <?PHP echo $ticket->dob; ?></span>
                            </td>
                        </tr>
                        
                        <tr height="50">
                        	<td class="label">
                            	Draft No :<span class="data"> <?PHP echo $ticket->draftNo; ?></span>
                            </td>
                            <td class="label">
                            	Draft Date : <span class="data"> <?PHP echo $ticket->draftDate; ?></span>
                            </td>
                        </tr>
                        
                        <tr height="50">
                        	<td class="label">
                            	Bank :<span class="data"> <?PHP echo $ticket->draftBank; ?></span>
                            </td>
                            <td class="label"></td>
                        </tr>
                        
                        <tr height="40">
                        	<td class="label1" colspan="2"><b>NOTE : </b>Send this part of token along with Demand Draft at <br />Amrapali Institute, Shikha Nagar, Lamachaur, Haldwani (263139),<br /> disit. Nainital, Uttarakhand, India</td>
                        	<td class="label" align="right">Signature</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <h6>-------------------------------------------------------------------------cut from here-----------------------------------------------------------------------------</h6>
        <h5>STUDENT COPY</h5>
        <table width="542" cellpadding="0" cellspacing="0" border="1" bordercolor="#333333">
        	<tr align="center">
            	<td colspan="2"><img src="<?PHP echo base_url() . 'assets/img/logo.png'?>" title="Amrapali Group of Institutes"></td>
            </tr>
            <tr height="50" align="center" bgcolor="#F2f2f2">
            	<td class="head" width="242" align="left">Registration token no:<span class="data_large"> <?PHP echo $ticket->regID; ?></span></td>
                <td width="300" class="head" align="center">
                      	Course Registered : <span class="data_large"> <?PHP echo $ticket->course; ?></span>
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                	<table border="0" bordercolor="#f2f2f2" cellpadding="0" cellspacing="0" width="542">
                    	<tr height="50">
                        	<td rowspan="3" class="head" bgcolor="#EBEBEB" align="center" valign="middle">DETAIL</td>
                        	<td class="label">
                            	Name :<span class="data"> <?PHP echo $ticket->name; ?></span>
                            </td>
                            <td class="label" align="left">
                            	DOB : <span class="data"> <?PHP echo $ticket->dob; ?></span>
                            </td>
                        </tr>
                        
                        <tr height="50">
                        	<td class="label">
                            	Draft No :<span class="data"> <?PHP echo $ticket->draftNo; ?></span>
                            </td>
                            <td class="label">
                            	Draft Date : <span class="data"> <?PHP echo $ticket->draftDate; ?></span>
                            </td>
                        </tr>
                        
                        <tr height="50">
                        	<td class="label">
                            	Bank :<span class="data"> <?PHP echo $ticket->draftBank; ?></span>
                            </td>
                            <td class="label"></td>
                        </tr>
                        
                        <tr height="40">
                        	<td class="label1" colspan="2"><b>NOTE : </b>Send this part of token along with Demand Draft at <br />Amrapali Institute, Shikha Nagar, Lamachaur, Haldwani (263139),<br /> disit. Nainital, Uttarakhand, India</td>
                        	<td class="label" align="right">Signature</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>