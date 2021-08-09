$(function() {
	$(document).ready(function() {
    $('.select2').select2({
    	placeholder: 'Select an option'
    });
	});
  var editor = editormd("text-editor", {
    markdown: $("#append-test").text(),
    width: "100%",
    height: "600px",
    placeholder: 'Text article ...',
    emoji: true,
    toolbarAutoFixed: false,
    imageUpload: true,
    imageFormats: ["jpg", "jpeg", "gif", "png"],
    imageUploadURL: '/upload-image',
    path : "/markdown-editor/lib/"  // Autoload modules mode, codemirror, marked... dependents libs path
  });
});
