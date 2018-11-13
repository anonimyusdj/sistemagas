$(document).ready(function() {
  //csss
  $('input#input_text, textarea#textarea1').characterCounter();
  $('select').material_select();

  //mascara
  $('#telefono').mask('0000-0000');
  $('#dui').mask('00000000-0');
  $('#nit').mask('0000-000000-000-0');

 });
