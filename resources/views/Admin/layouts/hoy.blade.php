<?php
      $datehoy = Carbon\Carbon::now()->format('l');
      $meshoy = Carbon\Carbon::now()->format('F');
      $dathoyrest =Carbon\Carbon::now()->format('j');
      $anohoy = Carbon\Carbon::now()->format('Y');
      $hora = Carbon\Carbon::now()->isoFormat('H:mm a');

      switch($datehoy) {
        case 'Monday':
            $datehoy ='Lunes';
            break;
        case 'Tuesday':
            $datehoy ='Martes';
            break;
        case 'Wednesday':
            $datehoy ='Miércoles';
            break;
        case 'Thursday':
            $datehoy ='Jueves';
            break;
        case 'Friday':
            $datehoy = 'Viernes';
            break;
        case 'Saturday':
            $datehoy = 'Sábado';
            break;
        default:
            $datehoy = 'Domingo';

      }

       switch($meshoy) {
        case 'January':
            $meshoy ='Enero';
            break;
        case 'February':
            $meshoy ='Febrero';
            break;
        case 'March':
            $meshoy ='Marzo';
            break;
        case 'April':
            $meshoy ='Abril';
            break;
        case 'May':
            $meshoy = 'Mayo';
            break;
        case 'June':
            $meshoy = 'Junio';
            break;
        case 'July':
            $meshoy = 'Julio';
            break;
        case 'August':
            $meshoy = 'Agosto';
            break;
        case 'September':
            $meshoy = 'Septiembre';
            break;
        case 'October':
            $meshoy = 'Octubre';
            break;
        case 'November':
            $meshoy = 'Noviembre';
            break;
        default:
            $meshoy = 'Diciembre';

      }

?>
<div class="hoy">
    <div class="col-sm-2"></div>
    <div class="col-lg-1 border-right d-none d-lg-block"><h3><small>Hoy es</small></h3></div>
    <div class="col-lg-5 vertical-line">
        <div class="row pl-3  fecha"><h3><small>{{$datehoy}}, {{$dathoyrest}}  de {{$meshoy}} de {{$anohoy}}</small></h3></div>
    </div>
    <div class="col-lg-1 d-none d-lg-block vertical-line-right">
        <div class="float-right">
           <div>
            <small>
                Tarragona, España
            </small>
           </div>
            <div class="hora float-right d-none d-lg-block"><h5><small>{{$hora}}</small></h5></div>
        </div>                   
    </div>
    <div class="row float-right col-lg-2">
        <!-- weather widget start --><a target="_blank" href="https://hotelmix.es/weather/tarragona-848"><img src="https://w.bookcdn.com/weather/picture/5_848_1_4_137AE9_250_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=582&anc_id=17768"  alt="booked.net"/></a><!-- weather widget end -->
    </div> 
</div> 
<div class="row">
   
</div>

            
    
<!-- weather widget start -->
<script>

    <div id="m-booked-prime-72342"> <div class="booked-wzsp-prime-in"> <div class="booked-wzsp-prime-data"> <div class="booked-wzsp-prime-img wt18"></div> <div class="booked-wzsp-day-val"> <div class="booked-wzsp-day-number"><span class="plus">+</span>24</div> <div class="booked-wzsp-day-dergee"> <div class="booked-wzsp-day-dergee-val">&deg;</div> <div class="booked-wzsp-day-dergee-name">C</div> </div> </div> </div> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-prime.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_72342(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-prime-72342'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=848;type=5;scode=124;ltid=3457;domid=582;anc_id=17768;countday=undefined;cmetric=1;wlangID=4;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=72342';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) 
</script>

                <!-- weather widget end --> 