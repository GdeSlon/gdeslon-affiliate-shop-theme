<?php get_header(); ?>

<div id="content">

<div id="contentleft">

<div class="postarea">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<!--			<div class="dpsc_grid_display">
					<div class="dpsc_grid_product">
					<div class="dpsc_grid_product_image">
					<a href="http://madoido.com/begi/?duka=pea-earings" title="Pea Earings"><img src="http://madoido.com/begi/wp-content/plugins/dukapress/lib/timthumb.php?src=http://madoido.com/begi/wp-content/uploads/2010/08/Earings3b.jpg&amp;w=120&amp;h=140&amp;zc=1"></a></div><div class="dpsc_grid_product_detail"><p class="title"><a href="http://madoido.com/begi/?duka=pea-earings" title="Pea Earings">Pea Earings</a></p><p class="detail"></p><p class="price"></p><p class="dpsc_price">Price: $<span class="is">25</span></p><p></p><form id="dpsc_product_form_128" name="dpsc_product_form_128" class="product_form" action="" method="post" enctype="multipart/form-data"><input type="submit" class="dpsc_submit_button" id="dpsc_submit_button_128" name="dpsc_add_to_cart" value="Add to Cart"><input type="hidden" id="dpsc_buy_now_button_present_128" name="dpsc_buy_now_button_present_128" value="0"><script language="javascript" type="text/javascript">-->
<!--			                var flag=0;var SalePriceLabel1=0; //whether ie or ff-->
<!--			                if(navigator.appName=="Microsoft Internet Explorer"){initialCost=SalePriceLabel1.value;flag=1;}-->
<!--			                //change value in variant and get final price-->
<!--			                function getFinalPrice_128(){-->
<!--			                    try{-->
<!--			                        var drpdown;-->
<!--			                        var drpdownID;-->
<!--			                        var selIndex;-->
<!--			                        var selText;-->
<!--			                        var costDiff;-->
<!--			                        //---->
<!--			                        var SalePriceLabel1=document.getElementById("dpsc_actual_price_128");-->
<!--			                        var initialCost=SalePriceLabel1.value;-->
<!--			                        var SalePriceLabel=document.getElementById("dpsc_new_product_price_128");-->
<!--			                        var SalePrice=initialCost;//works diffent for IE and FF-->
<!--			                        //var promoOff=parseFloat(document.getElementById("ctl00_ctl00_Body_PageContent_uxPromoPerc").value);-->
<!--			                        //stores sale price; which is to be updated-->
<!--			                        //now getting the price from dropdowns-->
<!--			                        var check=document.dpsc_product_form_128.elements;-->
<!--			                        for(i=0;i<document.dpsc_product_form_128.elements.length;i++){-->
<!--			                            if(document.dpsc_product_form_128.elements[i].type=="select-one"){-->
<!--			                                drpdown=document.dpsc_product_form_128.elements[i];-->
<!--			                                selIndex=drpdown.selectedIndex;-->
<!--			                                srchIndex=drpdown.options[selIndex].id;-->
<!--			                                if(srchIndex!=0.00){-->
<!--			                                    costDiff=parseFloat(srchIndex);-->
<!--			                                    SalePrice=parseFloat(SalePrice);-->
<!--			                                    SalePrice=SalePrice+costDiff;-->
<!--			                                    SalePrice=Math.round(SalePrice*100)/100;-->
<!--			                                    //[Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.-->
<!--			                                    var desPos=String(SalePrice).indexOf(".");-->
<!--			                                    if(desPos>0){-->
<!--			                                        totalLen=String(SalePrice).length;-->
<!--			                                        valAfterDec=String(SalePrice).substring(desPos+1,totalLen);-->
<!--			                                        if(valAfterDec.length==1){SalePrice=String(SalePrice)+"0";}-->
<!--			                                    }-->
<!--			                                    if(String(SalePrice).indexOf(".")<0){SalePrice=String(SalePrice)+".00";}-->
<!--			                                    //END [Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.-->
<!--			                                }-->
<!--			                            }-->
<!--			                        }-->
<!--			                        if(flag==0){SalePriceLabel.textContent=SalePrice;}-->
<!--			                        if(flag==1){SalePriceLabel.innerText=SalePrice;}-->
<!--			                        document.dpsc_product_form_128.dpsc_price_updated.value=SalePrice;-->
<!--			                    }catch(ex){}}-->
<!--			            </script><input type="hidden" id="dpsc_new_product_price_hidden" name="dpsc_price_updated" value="25"><input type="hidden" name="product_weight" value="50">-->
<!--			                                        <input type="hidden" name="action" value="dpsc_add_to_cart"><div class="dpsc_update_icon" id="dpsc_update_icon_128" style="display:none;"><img src="http://madoido.com/begi/wp-content/plugins/dukapress/images/update.gif"></div>-->
<!--			                                        <input type="hidden" name="product_id" value="128">-->
<!--			                                        <input type="hidden" name="product" value="Pea Earings">-->
<!--			                                        <input id="dpsc_actual_price_128" type="hidden" name="price" value="25">-->
<!--			                                    </form><div id="dpsc_paypal_form_128"></div><script language="javascript" type="text/javascript">-->
<!--			                                                    getFinalPrice_128();-->
<!--			                                                </script></div></div><div class="dpsc_grid_product"><div class="dpsc_grid_product_image"><a href="http://madoido.com/begi/?duka=softie-earings" title="Softie Earings"><img src="http://madoido.com/begi/wp-content/plugins/dukapress/lib/timthumb.php?src=http://madoido.com/begi/wp-content/uploads/2010/08/Earings2b.jpg&amp;w=120&amp;h=140&amp;zc=1"></a></div><div class="dpsc_grid_product_detail"><p class="title"><a href="http://madoido.com/begi/?duka=softie-earings" title="Softie Earings">Softie Earings</a></p><p class="detail"></p><p class="price"></p><p class="dpsc_price">Price: $<span class="was">25</span>&nbsp;<span class="is">23</span></p><p></p><form id="dpsc_product_form_116" name="dpsc_product_form_116" class="product_form" action="" method="post" enctype="multipart/form-data"><input type="submit" class="dpsc_submit_button" id="dpsc_submit_button_116" name="dpsc_add_to_cart" value="Add to Cart"><input type="hidden" id="dpsc_buy_now_button_present_116" name="dpsc_buy_now_button_present_116" value="0"><script language="javascript" type="text/javascript">-->
<!--			                var flag=0;var SalePriceLabel1=0; //whether ie or ff-->
<!--			                if(navigator.appName=="Microsoft Internet Explorer"){initialCost=SalePriceLabel1.value;flag=1;}-->
<!--			                //change value in variant and get final price-->
<!--			                function getFinalPrice_116(){-->
<!--			                    try{-->
<!--			                        var drpdown;-->
<!--			                        var drpdownID;-->
<!--			                        var selIndex;-->
<!--			                        var selText;-->
<!--			                        var costDiff;-->
<!--			                        //---->
<!--			                        var SalePriceLabel1=document.getElementById("dpsc_actual_price_116");-->
<!--			                        var initialCost=SalePriceLabel1.value;-->
<!--			                        var SalePriceLabel=document.getElementById("dpsc_new_product_price_116");-->
<!--			                        var SalePrice=initialCost;//works diffent for IE and FF-->
<!--			                        //var promoOff=parseFloat(document.getElementById("ctl00_ctl00_Body_PageContent_uxPromoPerc").value);-->
<!--			                        //stores sale price; which is to be updated-->
<!--			                        //now getting the price from dropdowns-->
<!--			                        var check=document.dpsc_product_form_116.elements;-->
<!--			                        for(i=0;i<document.dpsc_product_form_116.elements.length;i++){-->
<!--			                            if(document.dpsc_product_form_116.elements[i].type=="select-one"){-->
<!--			                                drpdown=document.dpsc_product_form_116.elements[i];-->
<!--			                                selIndex=drpdown.selectedIndex;-->
<!--			                                srchIndex=drpdown.options[selIndex].id;-->
<!--			                                if(srchIndex!=0.00){-->
<!--			                                    costDiff=parseFloat(srchIndex);-->
<!--			                                    SalePrice=parseFloat(SalePrice);-->
<!--			                                    SalePrice=SalePrice+costDiff;-->
<!--			                                    SalePrice=Math.round(SalePrice*100)/100;-->
<!--			                                    //[Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.-->
<!--			                                    var desPos=String(SalePrice).indexOf(".");-->
<!--			                                    if(desPos>0){-->
<!--			                                        totalLen=String(SalePrice).length;-->
<!--			                                        valAfterDec=String(SalePrice).substring(desPos+1,totalLen);-->
<!--			                                        if(valAfterDec.length==1){SalePrice=String(SalePrice)+"0";}-->
<!--			                                    }-->
<!--			                                    if(String(SalePrice).indexOf(".")<0){SalePrice=String(SalePrice)+".00";}-->
<!--			                                    //END [Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.-->
<!--			                                }-->
<!--			                            }-->
<!--			                        }-->
<!--			                        if(flag==0){SalePriceLabel.textContent=SalePrice;}-->
<!--			                        if(flag==1){SalePriceLabel.innerText=SalePrice;}-->
<!--			                        document.dpsc_product_form_116.dpsc_price_updated.value=SalePrice;-->
<!--			                    }catch(ex){}}-->
<!--			            </script><input type="hidden" id="dpsc_new_product_price_hidden" name="dpsc_price_updated" value="23"><input type="hidden" name="product_weight" value="50">-->
<!--			                                        <input type="hidden" name="action" value="dpsc_add_to_cart"><div class="dpsc_update_icon" id="dpsc_update_icon_116" style="display:none;"><img src="http://madoido.com/begi/wp-content/plugins/dukapress/images/update.gif"></div>-->
<!--			                                        <input type="hidden" name="product_id" value="116">-->
<!--			                                        <input type="hidden" name="product" value="Softie Earings">-->
<!--			                                        <input id="dpsc_actual_price_116" type="hidden" name="price" value="23">-->
<!--			                                    </form><div id="dpsc_paypal_form_116"></div><script language="javascript" type="text/javascript">-->
<!--			                                                    getFinalPrice_116();-->
<!--			                                                </script></div></div><div class="dpsc_grid_product"><div class="dpsc_grid_product_image"><a href="http://madoido.com/begi/?duka=sunshine-earings" title="Sunshine Earings"><img src="http://madoido.com/begi/wp-content/plugins/dukapress/lib/timthumb.php?src=http://madoido.com/begi/wp-content/uploads/2010/08/Earings1b.jpg&amp;w=120&amp;h=140&amp;zc=1"></a></div><div class="dpsc_grid_product_detail"><p class="title"><a href="http://madoido.com/begi/?duka=sunshine-earings" title="Sunshine Earings">Sunshine Earings</a></p><p class="detail"></p><p class="price"></p><p class="dpsc_price">Price: $<span class="is">25</span></p><p></p><form id="dpsc_product_form_115" name="dpsc_product_form_115" class="product_form" action="" method="post" enctype="multipart/form-data"><input type="submit" class="dpsc_submit_button" id="dpsc_submit_button_115" name="dpsc_add_to_cart" value="Add to Cart"><input type="hidden" id="dpsc_buy_now_button_present_115" name="dpsc_buy_now_button_present_115" value="0"><script language="javascript" type="text/javascript">-->
<!--			                var flag=0;var SalePriceLabel1=0; //whether ie or ff-->
<!--			                if(navigator.appName=="Microsoft Internet Explorer"){initialCost=SalePriceLabel1.value;flag=1;}-->
<!--			                //change value in variant and get final price-->
<!--			                function getFinalPrice_115(){-->
<!--			                    try{-->
<!--			                        var drpdown;-->
<!--			                        var drpdownID;-->
<!--			                        var selIndex;-->
<!--			                        var selText;-->
<!--			                        var costDiff;-->
<!--			                        //---->
<!--			                        var SalePriceLabel1=document.getElementById("dpsc_actual_price_115");-->
<!--			                        var initialCost=SalePriceLabel1.value;-->
<!--			                        var SalePriceLabel=document.getElementById("dpsc_new_product_price_115");-->
<!--			                        var SalePrice=initialCost;//works diffent for IE and FF-->
<!--			                        //var promoOff=parseFloat(document.getElementById("ctl00_ctl00_Body_PageContent_uxPromoPerc").value);-->
<!--			                        //stores sale price; which is to be updated-->
<!--			                        //now getting the price from dropdowns-->
<!--			                        var check=document.dpsc_product_form_115.elements;-->
<!--			                        for(i=0;i<document.dpsc_product_form_115.elements.length;i++){-->
<!--			                            if(document.dpsc_product_form_115.elements[i].type=="select-one"){-->
<!--			                                drpdown=document.dpsc_product_form_115.elements[i];-->
<!--			                                selIndex=drpdown.selectedIndex;-->
<!--			                                srchIndex=drpdown.options[selIndex].id;-->
<!--			                                if(srchIndex!=0.00){-->
<!--			                                    costDiff=parseFloat(srchIndex);-->
<!--			                                    SalePrice=parseFloat(SalePrice);-->
<!--			                                    SalePrice=SalePrice+costDiff;-->
<!--			                                    SalePrice=Math.round(SalePrice*100)/100;-->
<!--			                                    //[Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.-->
<!--			                                    var desPos=String(SalePrice).indexOf(".");-->
<!--			                                    if(desPos>0){-->
<!--			                                        totalLen=String(SalePrice).length;-->
<!--			                                        valAfterDec=String(SalePrice).substring(desPos+1,totalLen);-->
<!--			                                        if(valAfterDec.length==1){SalePrice=String(SalePrice)+"0";}-->
<!--			                                    }-->
<!--			                                    if(String(SalePrice).indexOf(".")<0){SalePrice=String(SalePrice)+".00";}-->
<!--			                                    //END [Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.-->
<!--			                                }-->
<!--			                            }-->
<!--			                        }-->
<!--			                        if(flag==0){SalePriceLabel.textContent=SalePrice;}-->
<!--			                        if(flag==1){SalePriceLabel.innerText=SalePrice;}-->
<!--			                        document.dpsc_product_form_115.dpsc_price_updated.value=SalePrice;-->
<!--			                    }catch(ex){}}-->
<!--			            </script><input type="hidden" id="dpsc_new_product_price_hidden" name="dpsc_price_updated" value="25"><input type="hidden" name="product_weight" value="50">-->
<!--			                                        <input type="hidden" name="action" value="dpsc_add_to_cart"><div class="dpsc_update_icon" id="dpsc_update_icon_115" style="display:none;"><img src="http://madoido.com/begi/wp-content/plugins/dukapress/images/update.gif"></div>-->
<!--			                                        <input type="hidden" name="product_id" value="115">-->
<!--			                                        <input type="hidden" name="product" value="Sunshine Earings">-->
<!--			                                        <input id="dpsc_actual_price_115" type="hidden" name="price" value="25">-->
<!--			                                    </form><div id="dpsc_paypal_form_115"></div><script language="javascript" type="text/javascript">-->
<!--			                                                    getFinalPrice_115();-->
<!--			                                                </script></div></div><div class="clear"></div><div class="clear"></div><div class="dpsc_grid_pagination"></div><div class="clear"></div></div>-->
<div class="dpsc_product_main_container">
	<div class="dpsc_image_container">
		<div class="dpsc_image_section">
			<div class="dpsc_image_tab">
				<ul class="dpsc_tabs">
					<li><a class="dpsc_thumb_tab fancybox" id="128" rel="imgGroup"
						   href="http://madoido.com/begi/wp-content/uploads/2010/08/Earings3b.jpg"><img
							src="http://madoido.com/begi/wp-content/plugins/dukapress/lib/timthumb.php?src=http://madoido.com/begi/wp-content/uploads/2010/08/Earings3b.jpg&amp;w=50&amp;h=63&amp;zc=1"></a>
					</li>
					<li><a class="dpsc_thumb_tab fancybox current" id="128" rel="imgGroup"
						   href="http://madoido.com/begi/wp-content/uploads/2010/08/Earings3a.jpg"><img
							src="http://madoido.com/begi/wp-content/plugins/dukapress/lib/timthumb.php?src=http://madoido.com/begi/wp-content/uploads/2010/08/Earings3a.jpg&amp;w=50&amp;h=63&amp;zc=1"></a>
					</li>
				</ul>
			</div>
			<div class="dpsc_main_image main_128"><a
					href="http://madoido.com/begi/wp-content/uploads/2010/08/Earings3a.jpg"
					class="fancybox theProdMedia theProdMedia_alt" rel="imgGroup"><img
					src="http://madoido.com/begi/wp-content/plugins/dukapress/lib/timthumb.php?src=http://madoido.com/begi/wp-content/uploads/2010/08/Earings3a.jpg&amp;w=210&amp;h=300&amp;zc=1"></a>
			</div>
		</div>
	</div>
	<div class="dpsc_content_container"><p class="dpsc_price">Price: $<span id="dpsc_new_product_price_128">25</span>
	</p>

		<form id="dpsc_product_form_128" name="dpsc_product_form_128" class="product_form" action="" method="post"
			  enctype="multipart/form-data">
			<div class="dpsc_variation_main">
				<div id="dpsc_variation_0" class="dpsc_variation"><span class="dpsc_variation"
																		for="var">Select Size </span><select
						id="dpsc_variation_0_dpscVariant" name="var[]" onchange="getFinalPrice_128();">
					<option id="" value="Small,:_._:,">Small</option>
					<option id="10" value="Medium,:_._:,10">Medium</option>
					<option id="18" value="Large,:_._:,18">Large</option>
					<option id="18" value=",:_._:,18"></option>
				</select></div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<input type="submit" class="dpsc_submit_button" id="dpsc_submit_button_128" name="dpsc_add_to_cart"
				   value="Add to Cart"><input type="hidden" id="dpsc_buy_now_button_present_128"
											  name="dpsc_buy_now_button_present_128" value="0">
			<script language="javascript" type="text/javascript">
				var flag = 0;
				var SalePriceLabel1 = 0; //whether ie or ff
				if (navigator.appName == "Microsoft Internet Explorer") {
					initialCost = SalePriceLabel1.value;
					flag = 1;
				}
				//change value in variant and get final price
				function getFinalPrice_128() {
					try {
						var drpdown;
						var drpdownID;
						var selIndex;
						var selText;
						var costDiff;
						//--
						var SalePriceLabel1 = document.getElementById("dpsc_actual_price_128");
						var initialCost = SalePriceLabel1.value;
						var SalePriceLabel = document.getElementById("dpsc_new_product_price_128");
						var SalePrice = initialCost;//works diffent for IE and FF
						//var promoOff=parseFloat(document.getElementById("ctl00_ctl00_Body_PageContent_uxPromoPerc").value);
						//stores sale price; which is to be updated
						//now getting the price from dropdowns
						var check = document.dpsc_product_form_128.elements;
						for (i = 0; i < document.dpsc_product_form_128.elements.length; i++) {
							if (document.dpsc_product_form_128.elements[i].type == "select-one") {
								drpdown = document.dpsc_product_form_128.elements[i];
								selIndex = drpdown.selectedIndex;
								srchIndex = drpdown.options[selIndex].id;
								if (srchIndex != 0.00) {
									costDiff = parseFloat(srchIndex);
									SalePrice = parseFloat(SalePrice);
									SalePrice = SalePrice + costDiff;
									SalePrice = Math.round(SalePrice * 100) / 100;
									//[Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.
									var desPos = String(SalePrice).indexOf(".");
									if (desPos > 0) {
										totalLen = String(SalePrice).length;
										valAfterDec = String(SalePrice).substring(desPos + 1, totalLen);
										if (valAfterDec.length == 1) {
											SalePrice = String(SalePrice) + "0";
										}
									}
									if (String(SalePrice).indexOf(".") < 0) {
										SalePrice = String(SalePrice) + ".00";
									}
									//END [Nibha : 20080229] Patch added for missing .00 in case of perfectly round numbers.
								}
							}
						}
						if (flag == 0) {
							SalePriceLabel.textContent = SalePrice;
						}
						if (flag == 1) {
							SalePriceLabel.innerText = SalePrice;
						}
						document.dpsc_product_form_128.dpsc_price_updated.value = SalePrice;
					} catch (ex) {
					}
				}
			</script>
			<input type="hidden" id="dpsc_new_product_price_hidden" name="dpsc_price_updated" value="25"><input
				type="hidden" name="product_weight" value="50">
			<input type="hidden" name="action" value="dpsc_add_to_cart">

			<div class="dpsc_update_icon" id="dpsc_update_icon_128" style="display:none;"><img
					src="http://madoido.com/begi/wp-content/plugins/dukapress/images/update.gif"></div>
			<input type="hidden" name="product_id" value="128">
			<input type="hidden" name="product" value="Pea Earings">
			<input id="dpsc_actual_price_128" type="hidden" name="price" value="25">
		</form>
		<div id="dpsc_paypal_form_128"></div>
		<script language="javascript" type="text/javascript">
			getFinalPrice_128();
		</script>
	</div>
</div>
	<?php the_content('Подробнее...'); ?>
<div style="clear:both;"></div><?php edit_post_link('(Edit)', '', ''); ?>

	<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

</div>

</div>

<?php get_sidebar()?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>