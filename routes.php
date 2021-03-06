<?php
//funkcija, ki kliče kontrolerje in hkrati vključuje njihovo kodo
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
		case 'strani':
			$controller = new StraniController();
			break;
		case 'oglasi':
			require_once('models/oglas.php');
			$controller = new OglasiController();
			break;
		case 'registracija':
			require_once('models/uporabnik.php');
			$controller = new RegistracijaController();
			break;
		case 'uporabnik':
			require_once('models/uporabnik.php');
			$controller = new UporabnikController();
			break;
    }
    $controller->{ $action }();
  }

   $controllers = array('strani' => ['domov', 'napaka'],
                       'oglasi' => ['index', 'prikazi','dodaj','shrani'],
					   'uporabnik' => ['index', 'prikazi','dodaj','shrani','urediHTML', 'uredi'],
					   'registracija' => ['index','shrani', 'prijavaHTML', 'prijava', 'odjava']);
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('strani', 'napaka');
    }
  } else {
    call('strani', 'napaka');
  }
?>