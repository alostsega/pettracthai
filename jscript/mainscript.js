//template javascript

$(document).ready(function(){
	
	init_doc();

	var url = window.location.href.toString();
	var string = url.substring(29,40);
	if(string == "service.php")
	{
		$('#service').dataTable( {
					"bPaginate": true,
					"bLengthChange": true,
					"bFilter": true,
					"bSort": true,
					"bInfo": false,
					"bAutoWidth": false
		} );
	}
	
    //temp
    var token_signed = ""; 
    var userdata;
    //initail function
    function init_doc(){
    	
    	//$("#register_popup" ).load('register.php');
    	

    	$("#register_popup" ).offset({left:$(window).width()/2-$("#register_popup" ).width()/2,top:100});
   	 	$("#forgetpassword_popup" ).offset({left:$(window).width()/2-$("#forgetpassword_popup" ).width()/2,top:$(window).height()/3-$("#forgetpassword_popup" ).height()/2});
    	$("#editprofile_popup" ).offset({left:$(window).width()/2-$("#editprofile_popup" ).width()/2,top:100});


    	$("#register_popup" ).hide();
    	$("#forgetpassword_popup" ).hide();
    	$("#editprofile_popup" ).hide();
    	$("#user_member").load('member.php',function(){
    		//load complete
    		setup_member();
    	});
    	
    }
    //when load member.php complate
    function setup_member(){
		$("#table_logined" ).hide();
		$("#alpha_background").hide();
		//button logined
	    $("#btn_signin").click(function(){
	    	send_signin();
	    	
	    });
	    $("#btn_signout").click(function(){
	    	$("#table_logined" ).hide();
	    	$("#table_login" ).show();
	    });

	    	//button not login
	    $("#btn_signup").click(function(){
	    	//load register to inner html
	    	$("#register_popup" ).load('register.php',function() {
	    		  //add event to button and form
				  setup_register();
			});
	    	$("#register_popup" ).show();
	    });
	    $("#btn_forgetpass").click(function(){
	    	//load forget password to inner html
	    	$("#forgetpassword_popup" ).load('forgetpass.php',function(){
	    		//add event
	    		setup_forgetpass();
	    	});
	    	$("#forgetpassword_popup" ).show();

	    });


	    $("#btn_order").click(function(){

	    });
	    //change password click event
	    $("#btn_changepass").click(function(){
	    	$("#editprofile_popup" ).load('changepass.php',function(){
	    		$("#editprofile_popup").show();
	    		setup_changepass();
	    	});
	    });
	    //edit profile button clicked event
	    $("#btn_editprofile").click(function(){
	    	$("#editprofile_popup" ).show();
	    	$("#editprofile_popup" ).load('editprofile.php',function(){
	    		setup_editprofile();
	    	});
	    });
    }

    //sign in
    function send_signin(){
    	ajax_query('api/query_login.php',$("#sing_in_form").serialize(),success_signin);
    }
    function success_signin(data){
    	
    	obj = jQuery.parseJSON(data);
    	
    	userdata = obj;

    	if(obj.success == '1'){
    		token_signed = obj.token;
    		$("#username_loggin").html("ลงชื่อเข้าใช้โดย "+obj.username);
    		$("#table_logined" ).show();
	    	$("#table_login" ).hide();
    	}else{
    		if(obj.error == '2'){
    			alert('คุณใส่รหัสผ่านผิดเกิน 5 ครั้ง กรุณารอ 5 นาที่ จึงลงชื่อเข้าใจใหม่');
    		}else if(obj.error == '3'){
    			alert('ไอดี หรือ รหัสผ่านผิด!!');
    		}
    	}
    }
    //when load changepass.php popup complete
    function setup_changepass(){
    	$("#alpha_background").show();
    	$("#btn_changepass_cancel").click(function(){
    		$("#alpha_background").hide();
    		$("#editprofile_popup").hide();
    	});
    	$("#btn_changepass_ok").click(function(){
    		$("#changepass_form").valid();
	    	send_changepass();
	    });
	    $("#changepass_form").validate({
			rules: {
				newpassword: { required: true , equalTo: "#changepass_passowrd2",rangelength:[6,30]},
				newpassword2: { required: true, equalTo: "#changepass_passowrd", rangelength:[6,30]},
				password:{required:true,rangelength:[6,30]}

			}
		});
    }
    //change password function
    function send_changepass(){
    	ajax_query("api/query_changepassword.php?username="+userdata.username+"&token="+token_signed,$("#changepass_form").serialize(),success_changepass);
    }
    function success_changepass(data){
    	console.log(data);
    	obj = jQuery.parseJSON(data);
    	if(obj.success == '1'){
    		$("#alpha_background").hide();
    		$("#editprofile_popup").hide();
    	}else{
    		if(obj.error == '4')
    			alert('รหัสผ่านผิด');
    		else if(obj.error == '3')
    			alert('คุณกรอกรหัสผ่านผิดเกิน 5 ครั้ง กรุณารอ 5 นาที');
    		else
	    		alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
    	}
    }
    //when load editprofile.php popup complete
    function setup_editprofile(){
    //	console.log("...");
    //	console.log(userdata);
    	$("#alpha_background").show();
    	$('#editprofile_form input[name="fname"]').val(userdata.firstname);
    	$('#editprofile_form input[name="lname"]').val(userdata.lastname);
    	$('#editprofile_form input[name="email"]').val(userdata.email);
    	$('#editprofile_form input[name="tel"]').val(userdata.tel);
    	$('#editprofile_form textarea[name="address"]').html(userdata.address);
    //	$('#editprofile_form form[name="fname"]').val(userdata.firstname);
    	$("#btn_editprofile_cancel").click(function(){
    		$("#alpha_background").hide();
    		$("#editprofile_popup").hide();
    	});
    	$("#btn_editprifile_ok").click(function(){
//	console.log( 		$('#editprofile_form input[name="fname"]').val());
    		$("#editprofile_form").valid();
	    	send_editprofile();
	    });
	    $("#editprofile_form").validate({
			rules: {
				email:{required:true,email:true},
				fname: { required: true },
				lname: { required: true },
				tel: { required: true,digits:true, rangelength:[9,10] },
				address:{required:true},
				password:{required:true,rangelength:[6,30]}
			}
		});
    }

    //send edit profile
    function send_editprofile(){
    	ajax_query("api/query_editprofile.php?username="+userdata.username+"&token="+token_signed,$("#editprofile_form").serialize(),success_editprofile);
    }
    function success_editprofile(data){
    	obj = jQuery.parseJSON(data);
    	userdata = obj;
    	if(obj.success == '1'){
    		$("#alpha_background").hide();
    		$("#editprofile_popup" ).hide();
    	}else{
    		if(obj.error == '4')
    			alert('รหัสผ่านผิด');
    		else if(obj.error == '3')
    			alert('คุณกรอกรหัสผ่านผิดเกิน 5 ครั้ง กรุณารอ 5 นาที');
    		else
	    		alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
    	}
    }
    //when load forgetpass.php popup complete
    function setup_forgetpass(){
    	$("#alpha_background").show();
    	$("#form_forgetpass").show();
    	$("#form_forgetpass_otp").hide();
    	$("#form_forgetpass_changepass").hide();
    	//step 1
    	$("#btn_forgetpass_sendemail").click(function(){
    		$("#form_forgetpass").valid();
    		send_changepasslink();
    	});
    	//step 2
    	$("#btn_forgetpass_sendOTP").click(function(){
    		$("#form_forgetpass_otp").valid();
    		send_checkOTP();
    	});
    	//step 3
    	$("#btn_forgetpass_sendnewpass").click(function(){
    		$("#form_forgetpass_changepass").valid();
    		send_newpassword_e();
    	});
    	
    	$("#btn_forgetpass_cancel").click(function(){
    		$("#alpha_background").hide();
    		$("#forgetpassword_popup" ).hide();
    	});
    	$("#btn_forgetpass_cancel2").click(function(){
    		$("#alpha_background").hide();
    		$("#forgetpassword_popup" ).hide();
    	});
    	$("#btn_forgetpass_cancel3").click(function(){
    		$("#alpha_background").hide();
    		$("#forgetpassword_popup" ).hide();
    	});
    	//validate forgetpassowrd form
    	$("#form_forgetpass").validate({
			rules: {
				email:{required:true}
			}
		});
		$("#form_forgetpass_otp").validate({
			rules: {
				OTP_code:{required:true,digits:true}
			}
		});
		$("#form_forgetpass_changepass").validate({
			rules: {
				newpassword: { required: true , rangelength:[6,30], equalTo: "#mail_newpass2",},
				newpassword2: { required: true, rangelength:[6,30], equalTo: "#mail_newpass"},
			}
		});
    }
    //set email link to reset password
    function send_changepasslink(){
    	ajax_query('api/query_sendmail.php',$("#form_forgetpass").serialize(),success_sendmail);
    }
    function success_sendmail(data){
		
		obj = jQuery.parseJSON(data);
		console.log(data);
		if(obj.success == '1'){
			userdata = obj;

			$("#form_forgetpass").hide();
    		$("#form_forgetpass_otp").show();
		}else{
			if(obj.code == '2'){
				alert("คุณทำรายการผิดพลาดเกินจำนวนครั้งที่กำหนด กรุณารอ 5 นาทีเพื่อทำรายการใหม่")
			}else{
				alert("เกิดข้อผิดพลาดกรุณาลองใหม่")
			}
		}

	}
	//insert OTP send OTP to authe
	function send_checkOTP(){
		ajax_query('api/query_checkOTP.php?username='+userdata.username+'&token='+userdata.token,
			$("#form_forgetpass_otp").serialize(),success_checkOTP);
	}
	function success_checkOTP(data){
		console.log(data);
		obj = jQuery.parseJSON(data);
		
		if(obj.success == '1'){
			userdata = obj;
			$("#form_forgetpass_otp").hide();
    		$("#form_forgetpass_changepass").show();
		}else{
			if(obj.code == '2'){
				alert("คุณทำรายการผิดพลาดเกินจำนวนครั้งที่กำหนด กรุณารอ 5 นาทีเพื่อทำรายการใหม่");
				$("#alpha_background").hide();
				$("#forgetpassword_popup").hide();
			}else if(obj.code == '3'){
				alert("รหัส OTP ของคุณไม่ถูกต้อง")
			}else{
				alert("เกิดข้อผิดพลาดกรุณาลองใหม่")
			}
		}
	}
	//insert new pass and sent 
	function send_newpassword_e(){
		ajax_query('api/query_newpassword_e.php?username='+userdata.username+'&token='+userdata.token+'&OTP='+userdata.OTP,$("#form_forgetpass_changepass").serialize(),success_newpassword_e);
	}
	function success_newpassword_e(data){
		
		obj = jQuery.parseJSON(data);
		console.log(data);
		if(obj.success == '1'){
			//userdata = obj;
			alert("เปลี่ยนรหัสผ่านเส็จสมบูรณ์");
			$("#alpha_background").hide();
			$("#forgetpassword_popup").hide();
		}else{
			if(obj.code == '2'){
				alert("คุณทำรายการผิดพลาดเกินจำนวนครั้งที่กำหนด กรุณารอ 5 นาทีเพื่อทำรายการใหม่")
				$("#alpha_background").hide();
				$("#forgetpassword_popup").hide();
			}else{
				alert("เกิดข้อผิดพลาดกรุณาลองใหม่")
			}
		}
	}
    //when load register.php popup complete
    function setup_register(){
    	$("#alpha_background").show();
    	$("#btn_signup_cancel").click(function(){
    		$("#alpha_background").hide();
	    	$("#register_popup" ).hide();
	    });

    	//sign up
    	$("#signup_username").change(function()
			{
				if(document.getElementById("signup_username").value.match(/^[a-z0-9A-Z]+$/))
	    		{
	    		
		    	}else{
		    		alert("ไอดีต้องเป็นตัวอักษรภาษาอังกฤษหรือตัวเลขเท่านั้น");
		    		document.getElementById("signup_username").value = "";
		    	}
			});
	    $("#btn_signup2").click(function(){
	    	//valid character
	    	if(document.getElementById("signup_username").value.match(/^[a-z0-9A-Z]+$/))
	    	{
	    		
	    	}else{
	    		alert("ไอดีต้องเป็นตัวอักษรภาษาอังกฤษหรือตัวเลขเท่านั้น");
	    		document.getElementById("signup_username").value = "";
	    	}
	    	$("#data_register").valid();
	    	send_signup();
	    });
	    //validate register form
	    $("#data_register").validate({
			rules: {
				email:{required:true,email:true},
				username : { required: true ,rangelength:[6,20]},
				password: { required: true , equalTo: "#signup_passowrd2",rangelength:[6,30]},
				password2: { required: true, equalTo: "#signup_passowrd", rangelength:[6,30]},
				fname: { required: true },
				lname: { required: true },
				tel: { required: true,digits:true, rangelength:[9,10] },
				address:{required:true}
			}
		});
	}
	function send_signup(){
		ajax_query('api/query_register.php',$("#data_register").serialize(),success_singup);
	}
	function success_singup(data){
		//console.log(data);
		obj = jQuery.parseJSON(data);
		//console.log(data,obj);
		if(obj.success == '1'){
			alert("ลงทะเบียนสำเร็จ");
			$("#alpha_background").hide();
			$("#register_popup" ).hide();
			
		}else{
			if(obj.code == '2'){
				alert("ชื่อไอดี "+obj.username+" มีผู้อื่นใช้ไปแล้ว");
			}else if(obj.code == '3'){
				alert("ชื่ออีเมล "+obj.email+" มีผู้อื่นใช้ไปแล้ว");
			}else if(obj.code == '4'){
				alert("ท่านต้องยอมรับข้อตกลงในการใช้งานก่อน");
			}else{
				alert("เกิดข้อผิดพลาดกรุณาลองใหม่");
			}
		}
		
	}

	function setup_searchmicroship(){

	}
	// Validate Defuat msg
	jQuery.extend(jQuery.validator.messages, {
	    required: "<p style='color: #F00; height:20px; vertical-align: middle;'>กรุณากรอกข้อมูล</p>",
	    remote: "Please fix this field.",
	    email: "<p style='color: #F00; height:20px; vertical-align: middle;'>E-mail ไม่ถูกต้อง</p>",
	    url: "Please enter a valid URL.",
	    date: "Please enter a valid date.",
	    dateISO: "Please enter a valid date (ISO).",
	    number: "Please enter a valid number.",
	    digits: "<p style='color: #F00; height:20px; vertical-align: middle;'>ตัวเลขเท่านั้น</p>",
	    creditcard: "Please enter a valid credit card number.",
	    equalTo: "<p style='color: #F00; height:20px; vertical-align: middle;'>ไม่ตรงกัน</p>",
	    accept: "Please enter a value with a valid extension.",
	    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
	    minlength: jQuery.validator.format("มากกว่า {0} ตัวอักษร"),
	    rangelength: jQuery.validator.format("<p style='color: #F00; height:20px; vertical-align: middle;'>{0}-{1} ตัวอักษร</p>"),
	    range: jQuery.validator.format("<p style='color: #F00; height:20px; vertical-align: middle;'>ขนาด {0} - {1}</p>"),
	    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
	    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
	});
	// jQuery.validator.setDefaults({
	// 	 //debug: true,
	// 	success: "valid",
	// 	messages: {
	// 		email:"<p style='color: #F00; height:20px; vertical-align: middle;'>E-mail ไม่ถูกต้อง</p>",
	// 		required : "<p style='color: #F00; top:5px;'>E-mail ไม่ถูกต้อง</p>",
	// 	}
	// });
	function ajax_query(_url,_data,successfunction){
			$.ajax({
	           type: "POST",
	           url: _url,
	           data: _data,
	           success: successfunction
	         });
		}
});