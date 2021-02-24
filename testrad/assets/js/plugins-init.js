$('.has-tooltip').tooltip();

$(function () { 
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});

$(function() {
	$(".switch-checkbox").bootstrapSwitch();
});

(function() {
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
			$("input:required:invalid").parents('.dropzone').css("borderColor", "red");
			$("input:required:invalid").parents('.custom-file').find('.custom-file-label').css("borderColor", "red");
			$("textarea:required:invalid").parents('.form-group').find('.note-editor').css("borderColor", "red");
		}, false);
	});
})();


$.fn.editableform.buttons = '<button type="submit" class="btn btn-sm btn-primary editable-submit">&check;</button><button type="button" class="btn btn-sm btn-secondary editable-cancel">&times;</button>';
$(function(){
	$.fn.editable.defaults.ajaxOptions = {type: "post"};
	$.fn.editable.defaults.params = {csrf_token : csrfToken};
	$.fn.editable.defaults.emptytext = '...';
	$.fn.editable.defaults.textFieldName = 'label';
	
	$('.is-editable').editable();
	
	$(document).on('click', '.inline-edit-btn', function(e){
		e.stopPropagation();
		$(this).closest('td').find('.make-editable').editable('toggle');
	});
});







