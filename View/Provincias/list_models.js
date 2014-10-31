$(document).ready(function(){
  $('#car-name').live('change', function() {
    if($(this).val().length != 0) {
      $.getJSON('/Provincias/get_models_ajax',
                  {carId: $(this).val()},
                  function(Departamento) {
                    if(Departamento !== null) {
                      populateCarModelList(Departamento);
                    }
        });
      }
    });
});

function populateCarModelList(Departamento) {
  var options = '';

  $.each(Departamento, function(index, carModel) {
    options += '<option value=&quot;' + index + '&quot;>' + Departamento + '</option>';
  });
  $('#car-model-name').html(options);
  $('#car-models').show();

}