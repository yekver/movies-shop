<?php


class Movie
{
	const CHILDRENS = 2;
	const REGULAR = 0;
	const NEW_RELEASE = 1;

	private $_title;

	/**
	 * @var Price
	 */
	private $_price;

	public function __construct($title, $priceCode) {
		$this->_title = $title;
		$this->setPriceCode($priceCode);
	}

	public function setPriceCode($priceCode) {
		switch($priceCode) {
			case Movie::REGULAR :
				$this->_price = new RegularPrice();
				break;
			case Movie::CHILDRENS :
				$this->_price = new ChildrensPrice();
				break;
			case Movie::NEW_RELEASE :
				$this->_price = new NewReleasePrice();
				break;
			default:
				throw new Exception('Incorrect Price Code!');
		}
	}

	public function getTitle() {
		return $this->_title;
	}

	public function getPriceCode() {
		return $this->_price->getPriceCode();
	}

	public function getCharge($daysRented) {
		return $this->_price->getCharge($daysRented);
	}

	public function getFrequentRenterPoints($daysRented) {
		return $this->_price->getFrequentRenterPoints($daysRented);
	}
}