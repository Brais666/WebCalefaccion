<!--<img src="..." class="img-fluid header" alt="...">-->
<div class="row bg-white" id="image">
	<!--<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid slideimg" width="98%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect>
		<text x="40%" y="50%" fill="white" dy=".5em">Descubre los dias verdes</text>

		<text x="45%" y="60%" fill="#dee2e6" dy=".5em"><a href="#" class="toggle"> Ver +</a></text>
</svg>
<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid slideimg2" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#9D2235"></rect>
		<text x="40%" y="50%" fill="white" dy=".5em">Descubre los dias verdes</text>

		<text x="45%" y="60%" fill="#dee2e6" dy=".5em"><a href="#" class="slide">Ver -</a></text>
</svg>-->

</div>

<script>

$( ".toggle" ).click(function() { 	
  	$(".slideimg").css('display',"none");
  	$(".slideimg2").css('display',"block");
  	$(".slideimg3").css('display',"block");
  	$(".slideimg4").css('display',"block");
  	$(".slideimg5").css('display',"block");  
});

$( ".slide" ).click(function() { 	
  	$(".slideimg2").css('display',"none");
  	$(".slideimg3").css('display',"none");
  	$(".slideimg4").css('display',"none");
  	$(".slideimg5").css('display',"none");
  	$(".slideimg").css('display',"block");
});
</script>