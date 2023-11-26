<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = session();
		$logged_in = $session->get('admin_logged_in');
		if ($logged_in) {
			return redirect()->to(base_url('dashboard'));
		} else {
			echo view('login');
		}
	}

	public function auth()
	{
		$session = session();
		$uname = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		if ($uname == 'tyma' && $password == 'egbayewa2023') {
			$newdata = array(
				'admin' => $uname,
				'admin_logged_in' => TRUE
			);
			$session->set($newdata);
			return redirect()->to(base_url('dashboard'));
		} else {
			return redirect()->to(base_url('/'));
		}
	}

	public function logout()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			session()->destroy();
			return redirect()->to(base_url('/'));
		} else {
			echo view('login');
		}
	}

	public function dashboard()
	{
		// echo('dashboard');	
		$logged_in = session()->get('admin_logged_in');
		$Delegates = new \App\Models\Delegates();
		$ManualDel = new \App\Models\ManualDel();
		if ($logged_in) {

			$data = [
				'total_del' => $Delegates->countAll(),
				// 'remo' => $Delegates->where('lb', 'Remo')->countAllResults(),
				// 'egba' => $Delegates->where('lb', 'Egba')->countAllResults(),
				// 'ijebu' => $Delegates->where('lb', 'Ijebu')->countAllResults(),
				// 'aoo' => $Delegates->where('lb', 'Adoodo')->countAllResults(),
				// 'others' => $Delegates->where('lb', 'others')->countAllResults(),
				'male' => $Delegates->where('gender', 'male')->countAllResults(),
				'female' => $Delegates->where('gender', 'female')->countAllResults(),
				// 'psec' => $Delegates->where('category', 'primary')->countAllResults(),
				// 'jsec' => $Delegates->where('category', 'jsec')->countAllResults(),
				// 'ssec' => $Delegates->where('category', 'ssec')->countAllResults(),
				// 'hi' => $Delegates->where('category', 'hi')->countAllResults(),
				// 'workers' => $Delegates->where('category', 'Workers')->countAllResults(),
				// 'sch_leaver' => $Delegates->where('category', 'sch_leaver')->countAllResults(),
				// 'manual' => [
				// 	'total_del' => $ManualDel->countAll(),
				// 	'remo' => $ManualDel->where('lb', 'Remo')->countAllResults(),
				// 	'egba' => $ManualDel->where('lb', 'Egba')->countAllResults(),
				// 	'ijebu' => $ManualDel->where('lb', 'Ijebu')->countAllResults(),
				// 	'aoo' => $ManualDel->where('lb', 'Adoodo')->countAllResults(),
				// 	'others' => $ManualDel->where('lb', 'others')->countAllResults(),
				// 	'male' => $ManualDel->where('gender', 'male')->countAllResults(),
				// 	'female' => $ManualDel->where('gender', 'female')->countAllResults(),
				// 	'psec' => $ManualDel->where('category', 'primary')->countAllResults(),
				// 	'jsec' => $ManualDel->where('category', 'jsec')->countAllResults(),
				// 	'ssec' => $ManualDel->where('category', 'ssec')->countAllResults(),
				// 	'hi' => $ManualDel->where('category', 'hi')->countAllResults(),
				// 	'workers' => $ManualDel->where('category', 'Workers')->countAllResults(),
				// 	'sch_leaver' => $ManualDel->where('category', 'sch_leaver')->countAllResults(),
				// ]
			];

			echo view('header');
			echo view('dashboard', $data);
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	public function manual()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {

			echo view('header');
			echo view('manualUpload');
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	public function manual1()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {

			echo view('header');
			echo view('manualUpload1', $this->request->getGet());
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	public function manual2()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {

			$manual = new \App\Models\ManualDel();
			$incoming = $this->request->getPost();
			$res = $manual->insert($incoming);

			return redirect()->back();
		} else {
			echo view('login');
		}
	}

    public function pins()
    {
        $logged_in = session()->get('admin_logged_in');
        if ($logged_in) {

            $Pins = new \App\Models\Pins();
            $data = array(
                'pins' => $Pins->findAll()
            );

            echo view('header');
            echo view('pins', $data);
            echo view('footer');
        } else {
            echo view('login');
        }
    }

	public function printe()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			$Delegates = new \App\Models\Delegates();

			$data = array(
				'delegates' => $Delegates->findAll(),
				'type' => 'Electronic'
			);

			echo view('header');
			echo view('print', $data);
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	public function printm()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			$Delegates = new \App\Models\ManualDel();

			$data = array(
				'delegates' => $Delegates->findAll(),
				'type' => 'Electronic'
			);

			echo view('header');
			echo view('print', $data);
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	//--------------------------------------------------------------------

}
