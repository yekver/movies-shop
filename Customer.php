<?php


class Customer
{
	private $_name;
	/**
	 * @var Rental[]
	 */
	private $_rentals = array();

	public function __construct($name) {
		$this->_name = $name;
	}

	public function addRental(Rental $rental) {
		$this->_rentals[] = $rental;
	}

	public  function getName() {
		return $this->_name;
	}

	private function getTotalCharge(){
		$result = 0;
		foreach ($this->_rentals as $rental) {
			$result += $rental->getCharge();
		}

		return $result;
	}

	private function getTotalFrequentRenterPoints() {
		$result = 0;
		foreach ($this->_rentals as $rental) {
			$result += $rental->getFrequentRenterPoints();
		}

		return $result;
	}

	public function statement() {
		foreach ($this->_rentals as $each) {
			echo $each->getMovie()->getTitle() .' стоимость: ' . $each->getCharge() . '<br />';
		}

		echo 'Итого к оплате: ' . $this->getTotalCharge() . '<br />';
		echo 'Заработано очков: ' . $this->getTotalFrequentRenterPoints();
	}
}