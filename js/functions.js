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

	
	// contact form
    $('body main #contact').on('click','.check', function() {
	    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	    var mobile = $('#mobile').val();
	    if(mobile !==''){
	        if (vnf_regex.test(mobile) == false) 
	        {
	            alert('Số điện thoại của bạn không đúng định dạng!');
	            event.preventDefault();
	        }
	        else {
	        	alert("Your form has been saved and sent to the Admin. Thanks for your contact!");
	        }
	    }
    });

    // upload form
    $('body main #upload_book').on('click','.check', function() {
   		alert('Your upload book has been sent to administrators for checking. Please wait several days!');
    });

    // Dark mode
    $("#dark").click(function () {
    	var mode = $("#dark").html();
    	
    	if (mode == "Dark mode") {
    		$("#dark").html("Light mode");

    		// header
    		$("main").css('background-color', '#222f3e');
    		$("header").css('background-color', 'black');
    		$("header > #header-right > ul > li > a").css('color', 'white');
    		$("header #header-left #advance").css('color', 'white');

    		// main
    		$("main #navbar-left ul li a").css('color', 'white');
    		$("main #book-storage .grid-items h5").css('color', 'white');
    		$("main hr").css({
    			'background-color': 'black',
    			'border-color': 'black'
    		});

    		// Contact
    		$("main #contact form span").css('color', 'white');
    		
    		// Account
    		$("main #account h3").css('color', 'white');
    		$("main #account h5").css('color', 'white');

    		// Detail
    		$("#details .detail-wrapper h3").css('color', 'white');
    		$("main #details .detail-wrapper p").css('color', 'white'); 
    		$("main #details .detail-wrapper .flex-detail #left-image .detail-list span").css('color', 'white'); 
    		$("main #details .detail-wrapper .flex-detail #left-image .detail-list i ").css('color', 'white'); 
    	}
    	// Light mode
    	else {
    		$("#dark").html("Dark mode");

    		// header
    		$("main").css('background-color', '#f2f2f2');
    		$("header").css('background-color', '#f8f8f8');
    		$("header #header-right ul li a").css('color', '#9fa8bc');
    		$("header #header-left #advance").css('color', '#9fa8bc');

    		// main
    		$("main #navbar-left ul li a").css('color', '#444444');
    		$("main #book-storage .grid-items h5").css('color', '#44446a');
    		$("main hr").css({
    			'background-color': 'gray',
    			'border-color': 'gray'
    		});

    		// Contact
    		$("main #contact form span").css('color', '#2d3436');

    		// Account
    		$("main #account h3").css('color', 'black');
    		$("main #account h5").css('color', 'black'); 

    		// Detail
    		$("#details .detail-wrapper h3").css('color', 'black');
    		$("main #details .detail-wrapper p").css('color', 'black'); 
    		$("main #details .detail-wrapper .flex-detail #left-image .detail-list span").css('color', 'black'); 
    		$("main #details .detail-wrapper .flex-detail #left-image .detail-list i ").css('color', '#444444'); 
    	}
    });

    
    // Signup form
    $('body #signup').submit(function(event) {
    	/* Act on the event */
    	// Check username and password
    	var pass = $('body #signup .textbox #pass').val();
    	var repass = $('body #signup .textbox #repass').val();
    	if (pass != repass) {
    		$('body #signup #checkPass').html("Password does not match. Please check again!");
    		event.preventDefault();
    	}

    	// check genre input
    	// var genre = $('body #signup .textbox .genre').val();
    	// const genre_list = ["Horror", "Adventure", "Science", "Mystery", "Romance", "Religious", "Family", "Autobiography"];
    	// if (!(genre in genre_list)) {
    	// 	$('body #signup span.genre').html("Your genre input is not validated");
    	// 	// alert('Your genre input is not validated. Please choose "Horror" or "Adventure"');
    	// 	event.preventDefault();
    	// }
    });

    // Signin From
    $('body #signin').submit(function(event) {
    	/* Act on the event */
    	var username = $('body #signin .textbox #signin-username').val();
    	var password = $('body #signin .textbox #signin-password').val();
    	if (username != "admin" || password != "123"){
    		$('body #signin #checkInput').html("Username or Password is wrong !!");
    		event.preventDefault();
    	}
    });

});


let suggestions = [
	"Rip",
	"Hành trình ngàn dặm",
	"Buông bỏ để hạnh phúc",
	"Bí ẩn của nước",
	"10 Bước làm chủ thời gian",
	"Thầy lang",
	"3 Người thầy vĩ đại",
	"Đắc nhân tâm",
	"Thiên tài bên trái, kẻ điên bên phải",
	"The one thing",
	"Dám nghĩ lớn",
	"Nhà giả kim",
	"Những bài học cuộc sống",
	"Điều kì diệu cảu thái độ sống",
	"Tội ác và hình phạt",
	"Harry Potter",
	"Ông già và biển cả",
	"Tỉ phú bán giày",
	"Mặc kệ thiên hạ",
	"Hai số phận",
	"Think and grow rich",
	"Không gia đình",
	"Cuộc chiến công nghệ số"
];

// Getting elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = document.querySelector("input");
const suggBox = document.querySelector(".autocom-box");

// if users press any key and release
inputBox.onkeyup = (e)=>{
	let userData = e.target.value; // user enter data
	let emptyArray = [];
	if(userData) {
		emptyArray = suggestions.filter((data)=>{
			// filtering array value and user char to lowercase and 
			// return only those words which start with user entered word
			return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
		});
		emptyArray = emptyArray.map((data)=>{
			return data = '<li><a href="detail.php" style="color: black;text-decoration: none;">'+ data +'</a></li>';
		});
		console.log(emptyArray);
		suggBox.classList.add("active");
		showSuggestions(emptyArray);

		let allList = suggBox.querySelectorAll("li");
		for (let i = 0; i < allList.length; i++) {
			allList[i].setAttribute("onclick", "select(this)");
		}
	}else{
		suggBox.classList.remove("active");
	}
}

function select(element) {
	let selectUserData = element.textContent;
	inputBox.value = selectUserData;
	suggBox.classList.remove("active");
}

function showSuggestions(list) {
	let listData;
	if(!list.length){
		userValue = inputBox.value;
		listData = '<li>'+ userValue +'</li>'
	}else{
		listData = list.join('');
	}
	suggBox.innerHTML = listData;
}