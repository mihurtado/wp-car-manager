<?php

namespace Never5\WPCarManager\Vehicle;

class Car extends MotorVehicle {

	/** @var String */
	private $body_style;

	/** @var int */
	private $doors;

	/**
	 * @return String
	 */
	public function get_body_style() {
		return $this->body_style;
	}

	/**
	 * Get formatted body style
	 *
	 * @return String
	 */
	public function get_formatted_body_style() {
		$body_styles = Data::get_body_styles();
		$body_style  = $this->get_body_style();
		if ( isset( $body_styles[ $body_style ] ) ) {
			$body_style = $body_styles[ $body_style ];
		}

		return $body_style;
	}

	/**
	 * @param String $body_style
	 */
	public function set_body_style( $body_style ) {
		$this->body_style = $body_style;
	}

	/**
	 * @return int
	 */
	public function get_doors() {
		return $this->doors;
	}

	/**
	 * @param int $doors
	 */
	public function set_doors( $doors ) {
		$this->doors = $doors;
	}

}