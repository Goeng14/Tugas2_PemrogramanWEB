<?php
class Belajar extends CI_Controller {

	public function index()
	{
		echo 'Belajar CodeIgniter 3';
	}
	
	public function comments()
	{
		echo 'Look at this!';
	}
	
	public function shoes($sandals, $id)
    {
        echo "Sepatuku {$sandals} ukuran : {$id}";
		echo "<br>Ini controller : ".$this->uri->segment(1);	
		echo "<br>Ini nama function : ".$this->uri->segment(2);	
    }
		
}