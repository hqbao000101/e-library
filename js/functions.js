$(document).ready(function() {

	$(window).scroll(function() {
		/* Act on the event */
		if( $(this).scrollTop() > 40 ){
			$("#scroll_to_top").fadeIn();
		} else {
			$("#scroll_to_top").fadeOut();
		}
	});


	$("#scroll_to_top").click(function() {
		/* Act on the event */
		$('html, body').animate({scrollTop : 0}, 'smooth');
	});

	
    $('body main #contact').on('click','.check', function() {
    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var mobile = $('#mobile').val();
    if(mobile !==''){
        if (vnf_regex.test(mobile) == false) 
        {
            alert('Số điện thoại của bạn không đúng định dạng!');
            event.preventDefault();
        }
    }
    });

});
