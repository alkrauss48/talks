def generate_total_price(amounts):
    tax_rate = 1.08
    subtotal = sum(
        [amt for amt in amounts
         if isinstance(amt, (float, int)) and amt > 0
        ]
    )

    grand_total = subtotal * tax_rate
    return grand_total

if __name__ == '__main__':
    all_amounts = [1.78, -100, 10.88, 5.23, 'a']

    total_price = generate_total_price(all_amounts)
    print(total_price)
