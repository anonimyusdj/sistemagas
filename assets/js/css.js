$(document).ready(function() {
  //csss
  $('input#input_text, textarea#textarea1').characterCounter();
  $('select').material_select();

  //mascara
  $('#telefono').mask('0000-0000');
  $('#dui').mask('00000000-0');
  $('#nit').mask('0000-000000-000-0');
  $('.datepicker').pickadate({
      monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
      monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
      weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
      weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
      today: 'hoy',
      clear: 'borrar',
      close: 'cerrar',
      firstDay: 1,
      format: 'd !/ m !/ yyyy',
      formatSubmit: 'yyyy/mm/dd',
      closeOnSelect: true ,// Close upon selecting a date,
      container: undefined, // ex. 'body' will append picker to body
    });
    $("#fecha").pickadate(new Date());

 });
