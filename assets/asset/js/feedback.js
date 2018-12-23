$(function() {
	$("#feedback-tab").click(function() {
		$("#feedback-form").toggle("slide");
	});

	$("#feedback-form form").on('submit', function(event) {
		var $form = $(this);
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
				$("#feedback-form").toggle("slide").find("textarea").val('');
			}
		});
		event.preventDefault();
	});
});

$(function() {
	$("#feedback-tab2").click(function() {
		$("#feedback-form2").toggle("slide");
	});

	$("#feedback-form2 form").on('submit', function(event) {
		var $form = $(this);
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
				$("#feedback-form2").toggle("slide").find("textarea").val('');
			}
		});
		event.preventDefault();
	});
});

