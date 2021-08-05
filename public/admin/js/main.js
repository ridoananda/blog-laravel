$(function() {
	$(document).ready(function() {
    $('.select2').select2({
    	placeholder: 'Select an option'
    });
	});
  var editor = editormd("text-editor", {
    width: "100%",
    height: "600px",
    placeholder: 'Text article ...',
    markdown: VALUE,
    path : "/markdown-editor/lib/"  // Autoload modules mode, codemirror, marked... dependents libs path
  });
});
