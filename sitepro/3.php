<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Contáctenos"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Contáctenos"); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta property="og:image" content="<?php echo htmlspecialchars(($seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20190725074849" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20190725074849" rel="stylesheet" type="text/css" id="wb-site-stylesheet" />
	<link href="css/common.css?ts=1564690000" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1564690000" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
</script>
	<!-- Custom head script -->
<script src="https://servidor2.constructorsitiosweb.com/space/colhost.js?2"></script>
<!-- Custom head script end -->
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body class="site"><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance17" class="wb_element wb-menu"><ul class="hmenu"><li><a href="" target="_self">Inicio</a></li><li><a href="Nuestro-Frigor%C3%ADfico/" target="_self">Nuestro Frigorífico</a></li><li><a href="Nuestro-Equipo-de-Trabajo/" target="_self">Nuestro Equipo de Trabajo</a></li><li><a href="Planta-de-Beneficio-Porcino/" target="_self">Planta de Beneficio Porcino</a></li><li><a href="Refrigeraci%C3%B3n-y-Almacenamiento/" target="_self">Refrigeración y Almacenamiento</a></li><li><a href="Productos/" target="_self">Productos</a></li><li><a href="Log%C3%ADstica-y-Transporte/" target="_self">Logística y Transporte</a></li><li><a href="Pol%C3%ADtica-de-Calidad-y-Pol%C3%ADtica-Ambiental/" target="_self">Política de Calidad y Política Ambiental</a></li><li class="active"><a href="Cont%C3%A1ctenos/" target="_self">Contáctenos</a></li></ul><div class="clearfix"></div></div></div><div class="wb_cont_outer"><div id="wb_element_instance18" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance19" class="wb_element wb_text_element" style=" line-height: normal;"><h4 class="wb-stl-custom5"><strong>Contáctenos</strong></h4>
</div><div id="wb_element_instance20" class="wb_element"><form class="wb_form" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="f5616ac0"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th class="wb-stl-normal">Nombre&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Nombre"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr class="area-row"><th class="wb-stl-normal">Mensaje&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Mensaje"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea></td></tr><tr><th class="wb-stl-normal">Adjuntos&nbsp;&nbsp;</th><td><div class="form-file-wrapper"><input class="form-field" type="file" multiple name="wb_input_3[]"></div></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Enviar</button></td></tr></table><input type="hidden" name="MAX_FILE_SIZE" value="31457280"></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "f5616ac0") { ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("f5616ac0", formValues, formErrors);
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success");
				if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
					var prompt = $("<div>")
						.addClass("alert alert-wb-form alert-<?php echo $wb_form_send_success ? "success" : "danger"; ?>")
						.append("<?php echo str_replace('"', '\"', $wb_form_send_state); ?>")
						.prepend($("<button>").addClass("close")
							.html("&nbsp;&times;")
							.on("click", function() { $(this).parent().remove(); })
						)
					.appendTo("body");
					setTimeout(function() { prompt.animate({ opacity: 1, right: 0 }, 250); }, 250);
					<?php $wb_form_send_success = false; $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance21" class="wb_element wb_text_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><strong><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">Km 6 transversal 1 #3-50 </span></span></span></strong></h4>

<h4 class="wb-stl-pagetitle"><strong><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">Carretera troncal de occidente Via Sampues - Sincelejo</span></span></span></strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Celulares:</strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Gerente:                            3215195391</strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Jefe Administrativa:     3208489264</strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Recepcion:</strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Jefe de Calidad:              </strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Contabilidad:</strong></h4>

<h4 class="wb-stl-pagetitle"><strong>Jefe de Planta:</strong></h4>

<h4 class="wb-stl-pagetitle"><strong><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">Email: </span></span></span></strong></h4>

<h4 class="wb-stl-pagetitle"><strong><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">gerencia@frigorificolamarranera.com</span></span></span></strong></h4>

<h4 class="wb-stl-pagetitle"><strong><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">recepcion@frigorificolamarranera.com</span></span></span></strong></h4>

<h4 class="wb-stl-pagetitle"><strong><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">servicioalcliente@frigorificolamarranera.com</span></span></span></strong></h4>
</div><div id="wb_element_instance22" class="wb_element wb_element_picture" title=""><img alt="gallery/image" src="gallery_gen/9fc30127f007f8ffceb90b52f83ebbb4_400x364.png"></div><div id="wb_element_instance23" class="wb_element wb_element_picture" title=""><img alt="gallery/ubicacion en el mapa" src="gallery_gen/23bf8d0c745e7382425d277b51ae4629_529x370.jpg"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance24" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
