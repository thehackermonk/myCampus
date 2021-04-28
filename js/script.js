$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();

	$('#signupForm-name').on("keypress",function(evt){
		var keycode=evt.charCode || evt.keyCode;
		if(keycode==46)
		{
			return false;
		}
	});

	$('#signupForm-rpass').keyup(function(){
		var pass=$('#signupForm-pass').val();
		var rpass=$('#signupForm-rpass').val();
		if(pass==rpass)
		{
			$('#signupbtn').removeAttr("disabled");
		}
		else
		{
			$('#signupbtn').attr("disabled","disabled");
		}
	});

	$(document).on('change','.btn-file:file',function(){
		var input=$(this),
		label=input.val().replace(/\\/g,'/').replace(/.*\//,'');
		input.tigger('fileselect',[label]);
	});

	$('btn-file:file').on('fileselect',function(event,label){
		var input=$this.parents('.input-group').find(':text'),
		log=label;
		if(input.length)
		{
			input.val(log);
		}
		else
		{
			if(log)
				alert(log);
		}
	});

	function readURL(input)
	{
		if(input.files && input.files[0])
		{
			var reader=new FileReader();
			reader.onload=function(e)
			{
				$('#img-upload').attr('src',e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#imgInp').change(function(){
		readURL(this);
	});

	function readURL2(input)
	{
		if(input.files && input.files[0])
		{
			var reader=new FileReader();
			reader.onload=function(e)
			{
				$('#img-Edit').attr('src',e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#imgEdt').change(function(){
		readURL2(this);
	});

	$(window).scroll(function() {

		if($(this).scrollTop()>100)
		{
			$('#scrollTop').fadeIn();
		}
		else
		{
			$('#scrollTop').fadeOut();
		}

	});

	$('#scrollTop').click(function(){
		$("html,body").animate({scrollTop:0},600);
		return false;
	});

	$('#newMsgBody').keyup(function() {
		var len=$('#newMsgBody').val().length;
		$('#msg_len').text(500-len);
	});

	$('#postBox').keyup(function(){
		var len=$('#postBox').val().length;
		$('#postLen').text(500-len);
	});

	$('#chng-rePass').keyup(function(){

		var pass=$('#chng-newPass').val();
		var rpass=$('#chng-rePass').val();
		if(pass==rpass)
		{
			$('#chngPassBtn').removeAttr("disabled");
		}
		else
		{
			$('#chngPassBtn').attr('disabled','disabled');
		}
		
	});

	$('#monthlyCal').monthly({
		mode: 'event',
		xmlUrl: 'http://localhost/mycampus_prototype2/events.xml'
	});

});