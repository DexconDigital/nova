<?php

$nombre_inmobiliaria = "Nova Inmobiliaria";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/logo.png",
		"alt" => "Logo Nova Inmobiliaria"
	],
];

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
];

// redes sociales
$redes_sociales = [
	// "facebook" => [
		// "link" => "https://www.facebook.com/andinainmobiliariamed/",
		// "icono" => "fab fa-facebook-f",
		// "imagen" => "images/facebook.png"
	// ],
	// "twitter" => [
		// "link" => "https://twitter.com/inmobiliariagya",
		// "icono" => "fab fa-twitter",
		// "imagen" => "images/twitter.png"
	// ],
	"instagram" => [
		"link" => "Instagram https://www.instagram.com/novainm/?hl=es-la",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
];

//datos de contacto 
$datos_contacto = [
		"direccion" => [
			"direccion" => "Calle 32 C # 80 A 75 Manzana A Nueva Villa de Aburrá Medellín – Antioquia",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "0344447228",
			"imprimir" => "+57 (4) 444 7228",
			"icono" => "fas fa-phone-alt",
		],
		"celular" => [
			"link"=> "+573045266756",
			"imprimir" => "304 526 6756",
			"icono" => "fas fa-mobile-alt",
		],
		"whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573045266756&text=&source=&data=",
			"imprimir" => "304 526 6756",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => [
			"correo" => "novainmpr@gmail.com",
			"icono" => "far fa-envelope",
		],
		"horario" => [
			"horario" => "De lunes a viernes de 8:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 5:00 p.m. Sábados de 8:00 a.m. a 12:00 p.m.",
			"icono" => "fas fa-calendar-alt",
		],
];

//logos aliados
$logos_aliados = [
	0 => "images/libertador.png",
	1 => "images/simi.png",
	2 => "images/sura.png",
	3 => "images/fincaraiz.png",
	4 => "images/espacio_urbano.png",
	5 => "images/cien_cuadras.png",
	6 => "images/davivienda.png",
	7 => "images/bancolombia.png",
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//iconos nostotros
$iconos_nosotros = [
	"reseña" => "fas fa-film",
	"mision" => "fas fa-bullseye-arrow",
	"vision" => "fas fa-binoculars",
	"valores" => [
		"lealtad" => "fas fa-hand-holding-heart",
		"respeto" => "fas fa-handshake",
		"honestidad" => "fas fa-gavel",
		"responsabilidad" => "fas fa-hands",
		"pertenencia" => "fas fa-users",
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Reseña Histórica",//en negrita
		"parrafo" => "NOVA INMOBILIARIA es una empresa conformada por jóvenes emprendedores, con amplia trayectoria en el sector inmobiliario y legal, quienes a través de su experiencia y el uso de las plataformas tecnológicas pretende satisfacer las necesidades de sus clientes, tanto propietarios como inquilinos, para el beneficio de sus intereses; garantizando el cumplimiento de las obligaciones de ambas partes mediante la prestación de un servicio ágil, confiable y seguro.",
		],	

	"mision" => [
		"titulo" => "Misión",//en negrita
		"parrafo" => "Somos una empresa vanguardista en el mercado inmobiliario, encargada de prestar servicios de arrendamiento, ventas, avalúos de propiedad raíz y asesoría jurídica en el Valle de Aburrá y el Oriente cercano, orientada a satisfacer las necesidades de nuestros clientes, ofreciéndoles respaldo, confianza, tranquilidad, responsabilidad y respeto con el fin de que encuentren en nosotros un servicio de excelente calidad que cumpla con todas sus expectativas. Adicionalmente brindar utilidades a nuestros accionistas y generar empleos de calidad en la región.",
	],
	"vision" => [
		"titulo" => "Visión",//en negrita
		"parrafo" => "En el 2022 Nova inmobiliaria tendrá un posicionamiento en el mercado que nos permitirá ser una empresa reconocida en el sector inmobiliario, teniendo presente siempre el mejoramiento continuo; a través de una cultura de creatividad e innovación permanente en la prestación de nuestros servicios, con responsabilidad social y ambiental, maximizando la rentabilidad de la organización.",
	],
	"valores" => [
		"titulo" => "Valores Corporativos",//en negrita
		"parrafos" => [
			0 => "Lealtad", 
			1 => "Respeto", 
			2 => "Honestidad",
			3 => "Responsabilidad",
			4 => "Sentido de Pertenencia",
			5 => "Nova Inmobiliaria y cada uno de sus colaboradores están orientados hacia los principios y valores, estos son los pilares de la empresa, por lo que nuestro equipo humano lo promueve y lo aplica de manera permanente. También es nuestro objetivo el respeto por el medio ambiente y contribuimos con la conservación del mismo.",
		], 
	],
];


// imaganes varias
$imagenes = [
	"servicios" => [
		'imagen' => 'images/banner_servicios.jpg',
		'alt' => 'Imagen'
	],
	"nosotros" => [
		'imagen' => 'images/banner_nosotros.jpg',
		'alt' => 'Imagen'
	],
	"inmuebles" => [
		'imagen' => 'images/banner_inmuebles.jpg',
		'alt' => 'Imagen'
	],
	"detalle" => [
		'imagen' => 'images/banner_detalle_inmueble.jpg',
		'alt' => 'Imagen'
	],
	"blog" => [
		'imagen' => 'images/banner_blog.jpg',
		'alt' => 'Imagen'
	],
	"contacto" => [
		'imagen' => 'images/banner_contacto.jpg',
		'alt' => 'Imagen'
	],
];

//iconos servicios
$iconos_servicios = [
	"arriendos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"avaluos" => "fas fa-balance-scale",
];
	
//textos servicios
$texto_servicios = [
	"arriendos" => [
		"titulo" => "Arriendos",
			"parrafo" => "Somos capaces de ofrecer el mejor asesoramiento para la venta de tu inmueble, brindándote todo el acompañamiento necesario, para que logres tus objetivos con los mejores resultados y beneficios, colocaremos toda nuestra experiencia y recursos publicitarios a tu servicio.",
	],	
	"ventas" =>[
		"titulo" => "Ventas",
		"parrafo" => "Una completa oferta inmobiliaria, contamos con una mezcla entre diseño y funcionalidad, para que encuentres el mejor inmueble, a un precio favorable, en el menor tiempo posible, te haremos vivir la mejor de las experiencia en la búsqueda de tu inmueble.",
	],
	"avaluos" =>[
		"titulo" => "Avalúos",
		"parrafo" => "Realizamos avalúos cumpliendo con toda la normatividad del país, asegurando la idoneidad y precisión y técnicas del cálculo del valor para que cuentes con información valiosa para que dinamices la negociación de tu inmueble.",
	],
];
?>