$( document ).ready(function() {
    $("button").click(function() {
        let card_id = $(this).attr('id');
        let card_id_formatted = card_id.split('-more-info').join('');
        $('#card-title').text(JSONobject[card_id_formatted][card_id_formatted+'_title']);
    });
});