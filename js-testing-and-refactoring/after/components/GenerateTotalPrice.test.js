import generateTotalPrice from './GenerateTotalPrice.js';

test('properly generates total price', () => {
  const input = [1, 2];

  expect(generateTotalPrice(input)).toBe(3.24);
});
