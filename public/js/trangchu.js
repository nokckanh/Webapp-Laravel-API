

document.addEventListener('scroll', onScroll);
var availableTags = ["Buôn Ma Thuột", "Hà Nội", "Quảng Nam", "Đà Nẵng", "Huế", "Gia Lai", "đăk lăk", "Kom tum", "Quảng Trị", "Thanh Hóa", "Nghệ An", "Hà Nam","Sài Gòn","Hòa Bình"];

$("#Placefrom ,#Placeto").autocomplete({
	source: availableTags
});

$("#day" ).datepicker({
	showButtonPanel: true,
	dateFormat: "mm/dd/yy",
	beforeShow: function(){    
		$(".ui-datepicker").css("font-size", 12) }
	});

$(document).on('click','ul li',function(){
	$(this).addClass('fullscreen').siblings().removeClass('fullscreen');
});

// $(document).ready(function () {
// 	$("#Placefrom").toggle(function () {
		
			
// 			var text = $(this).text();
// 			$("#Placefrom").val(text);


// 	});
// });

