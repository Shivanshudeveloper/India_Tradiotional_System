$(document).ready(function(){
	$("input[type='radio']").click(function(){
		var radioValue = $("input[name='worked_as']:checked").val();
		if(radioValue == "Organization"){
			$("#workLocation").attr('type', 'text');
			$("#workLocation").attr('value', '');
		} else {
			$("#workLocation").attr('type', 'hidden');
			$("#workLocation").attr('value', 'Not Selected');
        }
	});
});