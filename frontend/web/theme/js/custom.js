function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

$(document).on('click','a.details',function(e){
    e.preventDefault();
    $('#Modal').modal('show')
        .find('.modal-body')
        .load($(this).attr('href'));

    $('#Modal').on('hidden.bs.modal', function() {
        $(this).removeData();
    });
});

