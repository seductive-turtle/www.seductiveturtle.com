$(document).ready(function(){
	var id = 235811;

	
	//hide it ^.^
	//$('a[name="'+id+'"]').next().remove();
	
	$.ajax({
		url: 'http://www.tickld.com/VotesPro/votes.php',
		type: 'POST',
		data: {dir:-1, item_name:id}
	});
	
	$.ajax({
		url: 'http://www.tickld.com/VotesPro/votes.php',
		type: 'POST',
		data: {dir:-1, item_name:235890}
	});
});
