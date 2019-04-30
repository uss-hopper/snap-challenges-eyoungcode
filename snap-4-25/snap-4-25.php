	<?php
	/**
	 * Doing a snap challenge in which we need to write a class with two state variables, accessors, mutators, and a method that does something
	 */

		class DOG {
			/** color of the dog
			 * @var string $dogColor
			 */
			public $color;
			/** breed of the dog
			 * @var string $dogBreed
			 */
			public $breed;


			public function getDogColor() {
		return ($this->color);
	}
	public function getBreed() {
		return ($this->breed);
		}}
		/**
	 * constructor for dog
	 *
	 * @param string $newDogColor provide the color of the dog
	 * @param string $newDogBreed provide the breed of the dog
	 **/