$( document ).ready(function() {
	var scroll = new SmoothScroll('a[href*="#"]');
	
    $("button.Open").click(function() {
        let card_id = $(this).attr('id');
        let card_id_formatted = card_id.split('-more-info').join('');
			
        $('#card-title').html(JSONobject[card_id_formatted]['title']);
			
				$('#card-description').html(JSONobject[card_id_formatted]['text']);
			
				$('#website-link').html(JSONobject[card_id_formatted]['website_link']);
				$('#website-link').attr('href', JSONobject[card_id_formatted]['website_link']);
			
				$('#country-restrictions').html(JSONobject[card_id_formatted]['country_restrictions']);
			
				$('#token-symbol').html(JSONobject[card_id_formatted]['token_symbol']);
			
				$('#accepted-currency').html(JSONobject[card_id_formatted]['accepted_currency']);
			
				$('#current-price').html(JSONobject[card_id_formatted]['current_price']);
			
				$('#airdrop-lp-link').attr('href', "https://airdrops.trade.io/" + JSONobject[card_id_formatted]['airdrop_lp_link']);
    });
	
	
});