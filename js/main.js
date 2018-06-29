$( document ).ready(function() {
    $("button").click(function() {
        alert(this.id); // or alert($(this).attr('id'));
    });
});