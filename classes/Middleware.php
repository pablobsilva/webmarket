<?php
class Middleware 
{
	public function login()
	{
		if (!isset($_SESSION['auth']['id'])) {
			Helper::redirect('auth/login');
			exit;
		}
	}

	public function facturador()
	{
		if ($_SESSION['auth']['perfil'] != 2 && $_SESSION['auth']['perfil'] != 99) {
			Helper::redirect('/');
			exit;
		}
	}
}