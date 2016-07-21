var link = "http://www.northside.imarkclients.com/";
/************************************* PLUGIN JS*********************************************/
		jQuery(document).ready(function(){
			jQuery(".approve_order").each(function(){
				jQuery(this).click(function(){
				var order_id = jQuery(this).data("attribute");
				jQuery.ajax({
				type: "POST",
				url: link+'wp-content/plugins/orderssss/ajax/approve_order.php',
				data:{order_id:order_id,format:'raw'},
				success:function(resp){
					if( resp !="")
						{
							location.reload();
						}

				}
			});
				})
			})
		});
		
				jQuery(document).ready(function(){
			jQuery(".cancel_order").each(function(){
				jQuery(this).click(function(){
				var order_id = jQuery(this).data("attribute");
				jQuery.ajax({
				type: "POST",
				url: link+'wp-content/plugins/orderssss/ajax/cancel_order.php',
				data:{order_id:order_id,format:'raw'},
				success:function(resp){
					if( resp !="")
						{
							location.reload();
						}

				}
			});
				})
			})
		});