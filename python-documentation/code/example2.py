def generate_total_price(amounts):
    return sum([amt for amt in amounts if isinstance(amt, (float, int)) and amt > 0 ]) * 1.08

if __name__ == '__main__':
    print(generate_total_price([1.78, -100, 10.88, 5.23, 'a']))
