<script>
	$('input#ativo').change(function(){
		$('div#alvo').fadeIn();
	});
	
	$('input#inativo').change(function(){
		$('div#alvo').fadeOut();
	});
</script>