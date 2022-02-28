<?php

if (!isset($pobl))
{
    $pobl = "";
}
//dd(session());
if (!isset($cantidad))
{
    $cantidad=0;
}
 $pobla=0;
 $cantidad2=0;
 ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://calefaccion.store/images/9998Simon Grup.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1 , width=320, height=device-height">
 
    <title>@yield('title')</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>

<script>
$(document).ready(function(){
    // Defining the local dataset
   var cars =['Darmos', 'Botarell', 'Borges del Camp', 'Bellmunt del Priorat', 'Vimbodi','Vilaverd', 'Solivella', 'Sarral', 'Prenafeta',  'Poblet', 'Pira', 'Picamoixons', 'Montblanc', 'L´illa', 'La Riba', 'Espluga del Francoli', 'Cabra del Camp', 'Barbera de la conca', 'Vallfogona de Balaguer', 'Puigverd de Lleida', 'Lleida', 'La Bordeta', 'Juneda', 'Balaguer', 'Artesa de Lleida', 'Albi', 'Vistabella', 'Vilaseca', 'Vilallonga del Camp', 'Vilabella', 'Valls', 'Vallmoll', 'Torreforta', 'Tarragona', 'Sant Salvador', 'Sant Pere i Sant Pau', 'Rourell', 'Reus', 'Renau', 'Puigpelat', 'Puigdelfi', 'Port de Tarragona' , 'Perafort', 'Pallaresos', 'Nulles', 'Masmolets', 'Masies Catalanes', 'L´Argilaga', 'La Selva del Camp', 'La Secuita', 'La Pobla de Mafumet', 'La Plana Vilaseca', 'La Maso', 'La Canonja', 'Jardins Imperi', 'Hostalets Pallaresos', 'Gunyoles', 'Fontscaldes', 'Fontscaldas' ,'Fonscaldes', 'Els Pallaresos', 'Els Pallaresos (Els Plans)', 'Els Garidells', 'El Morell', 'El Mila', 'Constanti', 'Castellvell del Camp', 'Castellvell', 'Castellmoster', 'Boscos de Tarragona', 'Bonavista', 'Almoster', 'Alcover', 'Albiol', 'El Lloar', 'El Molar', 'Falset', 'Garcia', 'Ginestar', 'Gratallops', 'La Serra d´Almos', 'La Torre de Fontaubella', 'Les Borges del Camp', 'Les Irles', 'Maspujols', 'Masroig', 'Mora d´Ebre', 'Mora la Nova', 'Poboleda', 'Porrera', 'Pradell de la Teixeta', 'Riudecols', 'Vila-nova d´Escornalbou', 'Albinyana', 'Alio', '43746','43772','43350','43738','43430','43490','43412','43424','43415','46635','43423','43491','43400','43414','43450','43440','43811','43422','25680','25153','25070','25001','25430','25600','25150','25450','50482','43480','43141','43886','43800','43144','43006','43070','43130','43007','43142','43200','43886','43812','43155','43070','43152','43887','43460','43675','43470','43765','43140','43480','43143','43110','43151','43154','43813','43151','43153','43760','43143','43120','43392','43007','43100','43393','43460','43479','43737','43736','43730','33416','17151','43737','43746','43774','43350','43390','43382','43736','43740','43770','43376','43739','43774','43390','43311','43716','43813','Alalpardo','Alovera', 'Azuqueca De Henares','Cabanillas Del Campo','Camarma de Esteruelas','Chiloeches','El Casar', 'El Clavín','Fresno de Torote','Galápagos','Guadalajara','Horc','Iriepal','Marchama','Meco','Quer','Ribatejada','Serracines','Taracena','Valdeaveruelo','Torija','Torrejon del Rey','Tórtola de Henares','Valdeavero','Valdenoches','Valdeolmos','Villanueva de la Torre','Valdeaveruelo ','Cañizar','Caspueñas','Ciruelas','Fontanar','Hita','Humanes de Mohernando','Mohernando','Trijueque','Valdegrudas','Valfermoso de las Monjas','Yebes','Yunquera de Henares','Aldeanueva','Atanzón','Brihuega','Centenera','El Molar','Fuente el Saz','Guadalix de la Sierra ','Lupiana','Mesones','Pedrezuela','San Agustín de Guadalix','Talamanca del Jarama','Torrelaguna','Torremocha Del Jarma','Uceda','Valdenuño','Valdetorres del Jarama','Venturada','Almoguera','Armuña de Tajuña','Driebes','El Pozo ','Fuente La Higuera','Loranca de Tajuña','Málaga de Fresno','Malaguilla','Mondéjar','Pioz','Usanos','Valdilecha','Venturada','Villarejo de Salvanés','Santorcaz','Alpedrete','Becerril de la Sierra','Borox','Cercedilla','Collado Mediano','Collado Villalba','Cormenar Viejo','Cubas de la Sagra','Fuenlabrada','Galapagar','Getafe','Griñón','Guadarrama','Humanes de Madrid','Las Mátas','Las Rozas','Majadahonda','Moralzarzal','Morata de Tajuña','Pantoja','Parla','Pinto','Pozuelo De Alarcón','San Martín de la Vega','Seseña','Torrelodones','Torres De La Alameda','Torrejón de la Calzada','Valdemoro','Velilla de San Antonio','Arroyomolinos','Boadilla del Monte','Brunete','Campo real','Casarrubios del Monte','El Álamo','Móstoles','Navalcarnero','Villalbilla','Villamanta','Ajalvir','Alcalá de Henares','Alcobendas','Alcorcon','Algete','Arganda del Rey','Boadilla del Monte','Cobeña','Coslada','Daganzo de Arriba','El Pardo','Fuente del Fresno','Getafe','Leganés','Loeches','Los Santos de Humosa ','Madrid','Majadahonda','Mejorada Del Campo','Paracuellos del Jarama','Rivas Vaciamadrid','San Fernando de Henares','San Sebastian de los Reyes','Torrejón de Ardoz','Torres de la Alameda','Vallecas','Vicalvaro','Cambrils','Hospitalet de l´Infant','Masboquera','Miami Playa','Mont-roig del Camp','Montbrio','Mont-roig Mar','Pratdip','Riudecanyes','Riudoms','Vandellos','Vilafortuny','Vinyols i els Arcs','Almàserra','Higueras','Benisano','Foios','Carpesa','Tavernes Blanques','Albalat dels Sorells','La Cañada','La Vallesa','L´Eliana','San Antonio de Benageber','Montecolorado(Urbanizacion)','La Pobla de Vallbona','Mislata','Quart de Poblet','El Raco','Manises','La Presa','Cruz de Gracia','Paterna','Polígono Fuente del Jarro','Terramelar','La Sima','L´Argila','Maravissa','Montesano','El Perigall','La Conrada','La Malla','Los Almudes','La Florida','Mas Camarena','Cabes Bort','Casablanca','Serra','Massamagrell','Emperador','Mahuella Tauladella Rafalell y Vistabella','Museros','Rafelbuñol','La Pobla de Farnals','Gilet','Santo Espiritu del Monte','Sagunto','Petres','Puerto de Sagunto','Canet d´en Berenguer','Puçol','El Puig','Albuixech','Massalfassar','Albalat dels Taronchers','Segart','Los Monasterios','Alboraya','Xirivella','Riba-roja de Túria','Llíria','Municipio de Olocau','Estivella','Faura','28440','28970','28000','28230','28220','28411','28530','45290','28980','28320','28223','28330','45224','28250','28813','28991','28340','28891','10161','28660','28690','28510','45950','28607','28930','28600','28810','28610','28864','28800','28000','28000','28110','28500','28660','28863','28820','28814','28048','28708','28900','28910','28890','28817','28070','28220','28840','28860','28529','28830','28000','28850','28813','28053','Artesa','Benifaraig','Borboto','Carpesa','Tavernes Blanques','Valencia', 'Venimamet','Burjassot','Campo Olivar', 'Godella', 'Rocafort','Santa Barbara, Urbanitzacio','Masarrochos','Moncada', 'Vinalesa', 'Alfara del Patriarca','Masias','San Isidro de Benageber', 'Betera','Cartuja de Portaceli','Porta Coeli','Campamento Militar de Betera','Bonrepòs i Mirambell'];
    
    var cars = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: cars
    });
    
    // Initializing the typeahead
    $('.typeahead').typeahead({
        hint: true,
        highlight: true, 
        minLength: 1 
    },
    {
        name: 'cars',
        source: cars
    });
});  
$(document).ready(function(){
    // Defining the local dataset
   var cars =['Darmos', 'Botarell', 'Borges del Camp', 'Bellmunt del Priorat', 'Vimbodi','Vilaverd', 'Solivella', 'Sarral', 'Prenafeta',  'Poblet', 'Pira', 'Picamoixons', 'Montblanc', 'L´illa', 'La Riba', 'Espluga del Francoli', 'Cabra del Camp', 'Barbera de la conca', 'Vallfogona de Balaguer', 'Puigverd de Lleida', 'Lleida', 'La Bordeta', 'Juneda', 'Balaguer', 'Artesa de Lleida', 'Albi', 'Vistabella', 'Vilaseca', 'Vilallonga del Camp', 'Vilabella', 'Valls', 'Vallmoll', 'Torreforta', 'Tarragona', 'Sant Salvador', 'Sant Pere i Sant Pau', 'Rourell', 'Reus', 'Renau', 'Puigpelat', 'Puigdelfi', 'Port de Tarragona' , 'Perafort', 'Pallaresos', 'Nulles', 'Masmolets', 'Masies Catalanes', 'L´Argilaga', 'La Selva del Camp', 'La Secuita', 'La Pobla de Mafumet', 'La Plana Vilaseca', 'La Maso', 'La Canonja', 'Jardins Imperi', 'Hostalets Pallaresos', 'Gunyoles', 'Fontscaldes', 'Fontscaldas' ,'Fonscaldes', 'Els Pallaresos', 'Els Pallaresos (Els Plans)', 'Els Garidells', 'El Morell', 'El Mila', 'Constanti', 'Castellvell del Camp', 'Castellvell', 'Castellmoster', 'Boscos de Tarragona', 'Bonavista', 'Almoster', 'Alcover', 'Albiol', 'El Lloar', 'El Molar', 'Falset', 'Garcia', 'Ginestar', 'Gratallops', 'La Serra d´Almos', 'La Torre de Fontaubella', 'Les Borges del Camp', 'Les Irles', 'Maspujols', 'Masroig', 'Mora d´Ebre', 'Mora la Nova', 'Poboleda', 'Porrera', 'Pradell de la Teixeta', 'Riudecols', 'Vila-nova d´Escornalbou', 'Albinyana', 'Alio', '43746','43772','43350','43738','43430','43490','43412','43424','43415','46635','43423','43491','43400','43414','43450','43440','43811','43422','25680','25153','25070','25001','25430','25600','25150','25450','50482','43480','43141','43886','43800','43144','43006','43070','43130','43007','43142','43200','43886','43812','43155','43070','43152','43887','43460','43675','43470','43765','43140','43480','43143','43110','43151','43154','43813','43151','43153','43760','43143','43120','43392','43007','43100','43393','43460','43479','43737','43736','43730','33416','17151','43737','43746','43774','43350','43390','43382','43736','43740','43770','43376','43739','43774','43390','43311','43716','43813','Alalpardo','Alovera', 'Azuqueca De Henares','Cabanillas Del Campo','Camarma de Esteruelas','Chiloeches','El Casar', 'El Clavín','Fresno de Torote','Galápagos','Guadalajara','Horche','Iriepal','Marchama','Meco','Quer','Ribatejada','Serracines','Taracena','Valdeaveruelo','Torija','Torrejon del Rey','Tórtola de Henares','Valdeavero','Valdenoches','Valdeolmos','Villanueva de la Torre','Valdeaveruelo ','Cañizar','Caspueñas','Ciruelas','Fontanar','Hita','Humanes de Mohernando','Mohernando','Trijueque','Valdegrudas','Valfermoso de las Monjas','Yebes','Yunquera de Henares','Aldeanueva','Atanzón','Brihuega','Centenera','El Molar','Fuente el Saz','Guadalix de la Sierra ','Lupiana','Mesones','Pedrezuela','San Agustín de Guadalix','Talamanca del Jarama','Torrelaguna','Torremocha Del Jarma','Uceda','Valdenuño','Valdetorres del Jarama','Venturada','Almoguera','Armuña de Tajuña','Driebes','El Pozo ','Fuente La Higuera','Loranca de Tajuña','Málaga de Fresno','Malaguilla','Mondéjar','Pioz','Usanos','Valdilecha','Venturada','Villarejo de Salvanés','Santorcaz','Alpedrete','Becerril de la Sierra','Borox','Cercedilla','Collado Mediano','Collado Villalba','Cormenar Viejo','Cubas de la Sagra','Fuenlabrada','Galapagar','Getafe','Griñón','Guadarrama','Humanes de Madrid','Las Mátas','Las Rozas','Majadahonda','Moralzarzal','Morata de Tajuña','Pantoja','Parla','Pinto','Pozuelo De Alarcón','San Martín de la Vega','Seseña','Torrelodones','Torres De La Alameda','Torrejón de la Calzada','Valdemoro','Velilla de San Antonio','Arroyomolinos','Boadilla del Monte','Brunete','Campo real','Casarrubios del Monte','El Álamo','Móstoles','Navalcarnero','Villalbilla','Villamanta','Ajalvir','Alcalá de Henares','Alcobendas','Alcorcon','Algete','Arganda del Rey','Boadilla del Monte','Cobeña','Coslada','Daganzo de Arriba','El Pardo','Fuente del Fresno','Getafe','Leganés','Loeches','Los Santos de Humosa ','Madrid','Majadahonda','Mejorada Del Campo','Paracuellos del Jarama','Rivas Vaciamadrid','San Fernando de Henares','San Sebastian de los Reyes','Torrejón de Ardoz','Torres de la Alameda','Vallecas','Vicalvaro','Cambrils','Hospitalet de l´Infant','Masboquera','Miami Playa','Mont-roig del Camp','Montbrio','Mont-roig Mar','Pratdip','Riudecanyes','Riudoms','Vandellos','Vilafortuny','Vinyols i els Arcs','Almàserra','Higueras','Benisano','Foios','Carpesa','Tavernes Blanques','Albalat dels Sorells','La Cañada','La Vallesa','L´Eliana','San Antonio de Benageber','Montecolorado(Urbanizacion)','La Pobla de Vallbona','Mislata','Quart de Poblet','El Raco','Manises','La Presa','Cruz de Gracia','Paterna','Polígono Fuente del Jarro','Terramelar','La Sima','L´Argila','Maravissa','Montesano','El Perigall','La Conrada','La Malla','Los Almudes','La Florida','Mas Camarena','Cabes Bort','Casablanca','Serra','Massamagrell','Emperador','Mahuella Tauladella Rafalell y Vistabella','Museros','Rafelbuñol','La Pobla de Farnals','Gilet','Santo Espiritu del Monte','Sagunto','Petres','Puerto de Sagunto','Canet d´en Berenguer','Puçol','El Puig','Albuixech','Massalfassar','Albalat dels Taronchers','Segart','Los Monasterios','Alboraya','Xirivella','Riba-roja de Túria','Llíria','Municipio de Olocau','Estivella','Faura','28440','28970','28000','28230','28220','28411','28530','45290','28980','28320','28223','28330','45224','28250','28813','28991','28340','28891','10161','28660','28690','28510','45950','28607','28930','28600','28810','28610','28864','28800','28000','28000','28110','28500','28660','28863','28820','28814','28048','28708','28900','28910','28890','28817','28070','28220','28840','28860','28529','28830','28000','28850','28813','28053','Artesa','Benifaraig','Borboto','Carpesa','Tavernes Blanques','Valencia', 'Venimamet','Burjassot','Campo Olivar', 'Godella', 'Rocafort','Santa Barbara, Urbanitzacio','Masarrochos','Moncada', 'Vinalesa', 'Alfara del Patriarca','Masias','San Isidro de Benageber', 'Betera','Cartuja de Portaceli','Porta Coeli','Campamento Militar de Betera','Bonrepòs i Mirambell'];
    //document.write(cars);
    // Constructing the suggestion engine
    var cars = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: cars
    });
    
    // Initializing the typeahead
    $('.searchty').typeahead({
        hint: true,
        highlight: true, /* Enable substring highlighting */
        minLength: 1 /* Specify minimum characters required for showing result */
    },
    {
        name: 'cars',
        source: cars
    });
});  
</script>
<script type='text/javascript'>
 
var url = window.location.href;


/// Elementos de li
var tabs = ["unclick","precios", "simon", "financiacion", "quienessomos", "faq", "contacto"];
//document.write(tabs);
tabs.forEach(e => {
    /// Agregar .php y ver si lo contiene en la url
    if (url.indexOf(e) !== -1) {
        /// Agregar tab- para hacer que coincida la Id
        setActive("tab-" + e);
    }

});

/// Funcion que asigna la clase active
function setActive(id) {
    document.getElementById(id).setAttribute("class", "nav-item active");
}
</script>

    <script type='text/javascript'>
$(document).ready(function() {
 $("body").css("display", "none");
    $("body").fadeIn(0);
 
 $("a.transicion").click(function(event){
  event.preventDefault();
  linkLocation = this.href;
  $("body").fadeOut(1000, redirectPage);   });
   function redirectPage() {
  window.location = linkLocation;
 }
});
</script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css" />
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-white ocultar-div ">
             @include('layouts.navbar')
        </div>
        <div class="row bg-white ocultar-div ">
            @include('layouts.navbarsur')
        </div>
        <div class="row bg-white ocultar-div-tab ocultar-div-desk">
             @include('layouts.navbarmovil')
        </div>
        <div class="row bg-white">
            @include('layouts.carousel')
        </div>
        <div class="row bg-white pbmov-2">
            @include('layouts.hoysin')
        </div>
        <div class="row ">
            <form action="{{action('RutaController@index')}}" id="formulario" class="navfont">
                @csrf
               <div class="form-group text-center">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if(!empty($danger))
                            <div class="bg-danger col-sm-12 text-danger pt-2 pb-2 text-center "> <b>{{ $danger }}</b></div>
                        @endif
                        <div class="col-md-6 col-sm-5 col-xs-12 pbmov-2 text-left">
                          <label for="poblacion" class="col-sm-12 labelmov" style="padding-left:0 !important;">Introduce la población</label>
                          <input type="text" class="searchty input col-sm-12" id="poblacion" name="poblacion" placeholder="{{$pobl}}" id="poblacion" name="poblacion">
                        </div>
                        <div class="col-md-2 col-xs-6 pbmov-2 text-left">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" class="form-control input" id="cantidad" name="cantidad" placeholder="{{$cantidad2}}" id="cantidad" name="cantidad" min="1">
                              </div>
                        <div class="col-md-2 col-xs-6 pbmov-2 text-left">
                                <label for="select">Unidad</label>
                                <select class="form-control input" name="select" id="select">
                                  <option value="Lts.">Lts.</option>
                                  <option value="€">€</option>
                                </select>
                              </div>            
                        <div class="col-md-2 col-sm-2 col-xs-12 align-middle pt-med ">
                            <button type="submit" class="btn buttoncons">
                                Consultar precios
                            </button>
                        </div>
                        
                    </div>
                    <div="col-md-2"></div>
                  </div>     
            </form>
              
        </div>
        <div class="footer pt-9">
            
            @include('layouts.footer')
        </div>
       
        <div class="row">
           @include('layouts.cookies') 
        </div>
    </div>
</body> 

</html>