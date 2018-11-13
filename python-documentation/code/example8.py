"""
This is a demo on how to document and refactor Python code.
"""

def generate_total_price(amounts):
    """
    Generates the total price for the passed-in amounts.

    :param amounts: The list of amounts
    :return: the grand total
    """
    tax_rate = 1.08
    subtotal = sum(
        [amt for amt in amounts
         if isinstance(amt, (float, int)) and amt > 0
        ]
    )

    grand_total = subtotal * tax_rate
    return grand_total

def main():
    """The main function. Do not import."""
    all_amounts = [1.78, -100, 10.88, 5.23, 'a']

    total_price = generate_total_price(all_amounts)
    print(total_price)


if __name__ == '__main__':
    main()
