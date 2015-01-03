<?php


class Rental
{
	/**
	 * @var Movie
	 */
	private $_movie;
	private $_daysRented;

	public function __construct(Movie $movie, $daysRented) {
		$this->_movie = $movie;
		$this->_daysRented = $daysRented;
	}

	public function getDaysRented() {
		return $this->_daysRented;
	}

	public function getMovie() {
		return $this->_movie;
	}

	public function getCharge() {
		return $this->_movie->getCharge($this->_daysRented);
	}

	public function getFrequentRenterPoints() {
		return $this->_movie->getFrequentRenterPoints($this->_daysRented);
	}
}