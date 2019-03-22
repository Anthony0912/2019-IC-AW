/*var id = $(this).parent().parent().parent().attr('id');
alert(id);*/

function parentRow(selector) {
	return selector.parent().parent().parent();
}

$(document).ready(function() {
	$('.delete-btn').click(function() {
		var row = parentRow($(this));
		row.find('.hidden-btn').removeClass('d-none');
		row.find('.action-btn').hide();
	});

	$('.cancel-btn').click(function(event) {
		var row = parentRow($(this));
		row.find('.hidden-btn').addClass('d-none');
		row.find('.action-btn').show();
	});

	$('.accept-btn').click(function(event) {
		var row = parentRow($(this));
		var id = row.attr('id');
		$.post('/cars/delete.php?id=' + id, {}, function(data) {
			row.remove();
		});
	});
});