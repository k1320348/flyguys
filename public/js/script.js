$(document).ready(function() {

  <!-- //silviomoreto.github.io/bootstrap-select/options/ -->
  $('#from.selectpicker').selectpicker({
    liveSearchPlaceholder: 'Type to start searching'
  });

  $('#to.selectpicker').selectpicker({
    liveSearchPlaceholder: 'Type to start searching'
  });

  $('#from.selectpicker').change(function() {
    if($(this).val() != 'Stansted'){
      $("#to.selectpicker").prop("disabled", true);
      $("#to.selectpicker").val("Stansted");
      $('#to.selectpicker').selectpicker('render');
    } else {
      $("#to.selectpicker").prop("disabled", false);
      $('#to.selectpicker').selectpicker('render');
    }
  });

  $('#datePicker')
  .datepicker({
    format: 'dd-mm-yyyy'
  })
  .on('changeDate', function(e) {
    // Revalidate the date field
    $('#eventForm').formValidation('revalidateField', 'date');
  });

  $('#eventForm').formValidation({
    framework: 'bootstrap',
    icon: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      name: {
        validators: {
          notEmpty: {
            message: 'The name is required'
          }
        }
      },
      date: {
        validators: {
          notEmpty: {
            message: 'The date is required'
          },
          date: {
            format: 'DD/MM/YYYY',
            message: 'The date is not a valid'
          }
        }
      }
    }
  });




});