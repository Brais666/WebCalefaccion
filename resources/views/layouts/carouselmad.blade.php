<?php
use App\Oferta;

$i= 0;
$ofertas = Oferta::whereNotNull('nombre')->where('zonas','LIKE','%Madrid%')->orWhere('zonas','LIKE','%Guadalajara%')->where('fecha_ini','<',$now)->where('fecha_fin','>',$now)->get(); 
?>
<div id="myCarousel" class="carousel slide bg-white" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators ocultar-div">
         @foreach ($ofertas as $oferta)
            @if($i==0)<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            @else<li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
            @endif 
         @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach ($ofertas as $oferta)
        <?php
            $img = 'https://134.122.70.106/admin/public/images/'.$oferta->nombre.'';
        ?>
         @if($i==0)<div class="item active">@else<div class="item">@endif
          <img src="{{$img}}" alt="promoción" class="car-mov img-fluid">
                < @if(($oferta->titular != ".") && ($oferta->desc_oferta != "."))
                <div class="carousel-caption d-none d-md-block opacity-1 ocultar-div">
                    <div class="col-sm-7 pl-1 pt-2">
                        <h4>{{$oferta->titular}}</h4>
                        <p class="ocultar-div">{{$oferta->desc_oferta}}</p>
                    </div>
                    <div class="col-sm-5 pt-b">
                        <button type="button" class="btn btn-light"><a href="https://{{$oferta->link}}" style="color: blue;">Saber m獺s</a></button>
                    </div>
                    
                </div>
            @endif
        </a> 
          <?php
           $i++;
           ?>
        </div>
        @endforeach
    </div>

    <!-- Controls -->
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>-->
</div>

<script type="text/javascript">
	// Call carousel manually
	$('#myCarouselCustom').carousel();

	// Go to the previous item
	$("#prevBtn").click(function(){
	    $("#myCarouselCustom").carousel("prev");
	});
	// Go to the previous item
	$("#nextBtn").click(function(){
	    $("#myCarouselCustom").carousel("next");
	});
</script>

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