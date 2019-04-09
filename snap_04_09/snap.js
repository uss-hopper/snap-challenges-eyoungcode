/**
 * take two numbers and multiply them.
 *
 * @parm int firstNumber One number to multiply.
 * @param int secondNumber The other number to multiply.
 * @return int The product of the two numbers.
 */
function multiplyNumbers (firstNumber, secondNumber) {
	return firstNumber * secondNumber;
}

console.log(multiplyNumbers(-2,5));

let myNumber = -5;
let firstNumber = 29;
multiplyNumbers(firstNumber, myNumber);
/** you can multiplyNumbers either this way(-2,5) or create a
 * let (put in a value)
 *
 */
/**
 * take 2 names and concatenate them.
 * @param string firstName The given name to concatenate.
 * @param string lastName the family name to concatenate.
 * @return string The full name of our person.
 */
function getFullName(firstName, lastName){
	return firstName +' ' + lastName;

}
console.log(getFullName("paul", "young"));
