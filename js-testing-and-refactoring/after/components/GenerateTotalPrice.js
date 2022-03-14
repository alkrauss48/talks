/**
 * @type {number}
 * @const
 */
const TAX_RATE = 1.08;

/**
 * Generate the total price of the incoming data
 * @param {array} amounts - The list of amounts.
 * @returns {number} The grand total.
 */
const generateTotalPrice = (amounts) => {
  // Get the amounts that are numbers, and are positive,
  // and sum them together.
  const subTotal = amounts
    .filter((amount) => typeof(amount) === 'number')
    .filter((amount) => amount > 0)
    .reduce((carry, amount) => carry + amount, 0);

  // Build grand total.
  const grandTotal = subTotal * TAX_RATE;

  return grandTotal;
}

export default generateTotalPrice;
