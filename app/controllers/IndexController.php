<?php

class IndexController extends BaseController 
{
	private $client;

	public function actionController()
	{
		$action       = Input::get('a');
		//$this->client = $this->loginClient('tung.ph.th@gmail.com', 'Rajus272');

		return method_exists($this, $action) ? $this->{$action}() : $this->index();
	}

	public function index()
	{
		//$dates = $this->getLastDrawDates();
		$draws = Draw::all();

		//foreach($dates as $key => $date) $this->setPastDraws($date);

		$this->setDrawNumberCount($draws);
		$this->getNumbersOfLastDraws();

		return View::make('index.index', array
		(
			
		));
	}

	private function getNumbersOfLastDraws()
	{
		$draws = Draw::orderBy('draw_date', 'DESC')->take(5)->get();
		
		foreach($draws as $key => $draw)
		{
			
		}
	}

	private function setDrawNumberCount($draws)
	{
		$numbers      = array();
		$superNumbers = array();

		for($i = 1; $i <= 49; $i++) $numbers[] = array('id' => $i, 'count' => 0);
		for($i = 0; $i <= 9; $i++)  $superNumbers[] = array('id' => $i, 'count' => 0);

		foreach($draws as $key => $draw) 
		{
			foreach($numbers as $_key => $number)
			{
				for($i = 1; $i <= 6; $i++)
				{
					if($number['id'] == $draw->{'number_'.$i}) $number['count']++;
				}
			}

			foreach($superNumbers as $key => $superNumber)
			{
				if($superNumber['id'] == $draw->super_number) $superNumber['count']++;
			}
		}

		foreach($numbers as $key => $number)      Count49Draw::where('id', $number['id'])->update(array('drawn' => $number['count']));
		foreach($superNumbers as $key => $number) CountSuperDraw::where('id', $number['id'])->update(array('drawn' => $number['count']));
	}

	private function getPastDrawDates()
	{
		$dates    = array();
		$start    = strtotime('today');
		$end      = strtotime('today - 1 years');
		$saturday = strtotime('saturday', $start);

		while($saturday >= $end) 
		{
		    $dates[]  = date('Y-m-d', $saturday);
		    $dates[]  = date('Y-m-d', strtotime('-3 days', $saturday));    
		    $saturday = strtotime('-1 weeks', $saturday);
		}

		return $dates;
	}

	private function getLastDrawDates()
	{
		$dates   = array();
		$dates[] = date('Y-m-d', strtotime('last Saturday'));
		$dates[] = date('Y-m-d', strtotime('last Wednesday'));

		return $dates;
	}

	private function setPastDraws($date) 
	{
		try
		{
			$count = Draw::where('draw_date', $date)->count();

			if($count === 0)
			{
				$drawByDate = $this->client->getGewinnzahlenFromDatum($date);

				if($drawByDate->Fehlernummer === 0) 
				{
					$draw = array
					(
						'draw_date'    => $drawByDate->Ziehungsdatum,
						'number_1'     => $drawByDate->Gewinnzahl_1,
						'number_2'     => $drawByDate->Gewinnzahl_2,
						'number_3'     => $drawByDate->Gewinnzahl_3,
						'number_4'     => $drawByDate->Gewinnzahl_4,
						'number_5'     => $drawByDate->Gewinnzahl_5,
						'number_6'     => $drawByDate->Gewinnzahl_6,
						'super_number' => $drawByDate->Superzahl,
						'game_77'      => $drawByDate->Spiel77,
						'game_6'       => $drawByDate->Super6
					);

					Draw::create($draw);
				}
			}
		}
		catch(SoapFault $error) { return $error->faultstring; }
	}

	private function loginClient($email, $password)
	{
		$client = new SoapClient('http://www.lotto-api.de/WS_Version_1.1/WebService.php?WSDL');

		try
		{
			$login = $client->Login($email, $password);

			if($login) return $client;
		}
		catch(SoapFault $error) { return $error->faultstring; }
	}
}