
$(document).ready(function() {
	$(".alert").delay(3000).slideUp();
    $(".notifyjs-corner").hide();
    $(".add_to_cart").on("click",function(){
      var id = $(this).attr("data-id");
      $.ajax({
        url : base_url+'/addtocart/'+id,
        dataType : 'html',
        success: function(result){
			if(result){
				 $(".notifyjs-corner").fadeIn("fast").delay(3000).fadeOut();
         		 $(".item_cart").html(result+" Sản phẩm");
				}
        	}
      	});
    });
	$(".item-remove").on("click",function(){
		var id = $(this).attr("data-id");
		 $.ajax({
			url : base_url+'/xoa-cart/'+id,
			dataType : 'html',
			success: function(result){
				if(result){
						window.location = base_url+'/gio-hang';
					}
				}
		});
	});
	$(".update_cart").on("click",function(){
		var id = $(this).attr("data-id");
		var qty = $(".item_cart_"+id).val();
		//alert(qty);
		 $.ajax({
			url : base_url+'/update-cart/'+id+'/'+qty,
			dataType : 'html',
			success: function(result){
				if(result){
						window.location = base_url+'/gio-hang';
					}
				}
		});
	});
});