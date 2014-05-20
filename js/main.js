$('input[id=image-input]').change(function() {
    $('#photoCover').val($(this).val());
});

var container = document.querySelector('#people-wrapper');
var msnry = new Masonry( container, {
    itemSelector: '.person-wrapper',
    columnWidth: '.person-wrapper'
});