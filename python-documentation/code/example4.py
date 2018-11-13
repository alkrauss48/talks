def generate_total_price(amounts):
    tax_rate = 1.08

    return sum(
        [amt for amt in amounts
         if isinstance(amt, (float, int)) and amt > 0
        ]
    ) * tax_rate

if __name__ == '__main__':
    all_amounts = [1.78, -100, 10.88, 5.23, 'a']

    print(generate_total_price(all_amounts))
