$(document).ready(function() {
	$(".send_danh_gia").on("click",function(){
		
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var name = $(".txtname").val();
		var email =$(".txtemail").val();
		var content = $(".txtcontent").val();
		var sao = $('[name="danhgia"]:radio:checked').val();
		var id = $('.ip_product').val();
		if(name == ""){
			$("#myModalfail1").modal();
			$(".txtname").focus();
			return false;
		}
		if(email == ""){
			$("#myModalfail2").modal();
			$(".txtemail").focus();
			return false;
		}
		if(!regex.test(email)){
			$("#myModalfail3").modal();
			$(".txtemail").focus();
			return false;
		}
		if(content == ""){
			$("#myModalfail4").modal();
			$(".txtcontent").focus();
			return false;
		}
		//alert(name+email+content+sao+id);
		$.ajax({
			url:base_url+'/danh-gia',
			type:'GET',
			dataType:"json",
			beforeSend: function(){
				$(".guidulieu").text("Đang xủ lý dủ liệu...");
			},
			data:{
				'name':name,
				'email':email,
				'content':content,
				'danhgia':sao,
				'id':id
				},
			success: function(response){
				$("#myModalfail5").modal(); 
				$("#contact").remove();
				$(".guidulieu").text("Nỗi dung đã được gửi đi.Cảm ơn bạn").delay(3000).hide();
			}
		});
	}); 
});