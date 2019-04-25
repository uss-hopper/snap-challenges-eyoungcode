	<?php
	/**
	 * Doing a snap challenge in which we need to write a class with two state variables, accessors, mutators, and a method that does something
	 */

		class dog {
			/** color of the dog
			 * @var string $dogColor
			 */
			public $dogColor;
			/** breed of the dog
			 * @var string $dogBreed
			 */
			public $dogBreed;

			public function getDogColor() {
		return ($this->dogColor);
	}
	public function getDogBreed() {
		return ($this->dogBreed);
		}}

	/**
	 * constructor for dog
	 *
	 * @param string $newDogColor provide the color of the dog
	 * @param string $newDogBreed provide the breed of the dog
	 **/