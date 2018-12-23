<?php
header("Content-type: application/javascript");
?>
$(document).ready(function(){

	var hiddenMailOptions = function() {
		if($('.checkbox-mail:checked').length) {
			$('.mail-hidden-options').css('display', 'inline-block');
		} else {
			$('.mail-hidden-options').css('display', 'none');
		};
	};

	hiddenMailOptions();

	$('.check-mail-all').click(function () {
		$('.checkbox-mail').click();
	});

		$('.checkbox-mail').each(function() {
			$(this).click(function() {
				if($(this).closest('tr').hasClass("checked")){
					$(this).closest('tr').removeClass('checked');
					hiddenMailOptions();
				} else {
					$(this).closest('tr').addClass('checked');
					hiddenMailOptions();
				}
			});
		});

			$('.mailbox-content table tr td').not(":first-child").on('click', function(e) {
				e.stopPropagation();
				e.preventDefault();

				$.ajax({
					url: "<?php echo site_url("ajaxMsg/msgDetail") ?>",
					type: 'POST',
					success: function(msg){
						$("#actionName").html("Message Detail");
						$("#msgBody").html(msg);
					}
				});
			});
});
