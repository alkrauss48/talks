import generateTotalPrice from './components/GenerateTotalPrice.js';

// The full list of amounts, coming from user input.
const allAmounts = [1.78, -100, 10.88, 5.23, 'a'];

// Calculate and print out the total price
const totalPrice = generateTotalPrice(allAmounts);
console.log(totalPrice);
