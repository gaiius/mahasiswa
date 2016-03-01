<div id="results">
	
</div>

<script src="assets/js/jquery.min.js"></script>
<script>

		$('#results').load('fetch_page.php');
		$('#results').on('click', '.pagination a', function(e) {
		e.preventDefault();
		
		var page = $(this).attr("data-page");
		$('#results').load('fetch_page.php', {"page":page});
	});
	
</script>