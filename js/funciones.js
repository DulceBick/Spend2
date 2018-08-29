var init = function (){

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

    
    $('#addNewVacant').on('shown.bs.modal', function () {
  $('#myModalLabel').focus()
})
    
};

init();

