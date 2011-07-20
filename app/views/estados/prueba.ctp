<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8">
	jQuery.expr[':'].regex = function(elem, index, match) {
	    var matchParams = match[3].split(','),
	        validLabels = /^(data|css):/,
	        attr = {
	            method: matchParams[0].match(validLabels) ? 
	                        matchParams[0].split(':')[0] : 'attr',
	            property: matchParams.shift().replace(validLabels,'')
	        },
	        regexFlags = 'ig',
	        regex = new RegExp(matchParams.join('').replace(/^\s+|\s+$/g,''), regexFlags);
	    return regex.test(jQuery(elem)[attr.method](attr.property));
	}
</script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	jQuery.noConflict();
	jQuery('.buscador').click(function(){
			jQuery('.estado').toggle();
		});
		
	jQuery('.buscador').keypress(function(){
		
		//obtiene el valor del campo de texto buscador
		var selectedValue= jQuery('#buscador').val();
		//navega atravez del #contenedor
		jQuery('div.estado').each(function(i){
			jQuery(this).hide();
		});
		jQuery('div.estado:regex(name, .*'+selectedValue+'.*)').each(function(i){
			jQuery(this).show();
		});
	});	
	jQuery('div.estado').hover(function(){
		jQuery(this).addClass('hover');
	});
	
	jQuery('.estado').click(function(){
		jQuery('#buscador').val()='jQuery(this).html';
	});	
});
</script>
<style type="text/css" media="screen">
	.hover{
		background-color:red;
		color:black;
	}
	input{
		border-color:gray;
		width:200px;
		height:20px;
	}
	.estado{
		display:none;
		border-color:gray;
		background-color:gray;
		color:white;
	}
	.displayOff{
		display:none;
	}
</style>
<input type="text" name="estado" id="buscador" class="buscador">
<img src="http://localhost/Casa-Mercedes-Web/img/arrow.png" class="buscador"/>
<div id="Container">
<?php
$i = 0;
foreach ($estados as $estado):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<div class="estado" name="<?php echo $estado['Estado']['title']; ?>">
		<input type="hidden" name="estadoValue" value="<?php echo $estado['Estado']['id']; ?>"/>
		<?php echo $estado['Estado']['title']; ?>
	</div>

<?endforeach;?>
</div>