def do_the_thing(x):
    return sum([i for i in x if isinstance(i, (int, float)) and i > 0]) * 1.08

if __name__ == '__main__':
    print(do_the_thing([1.78, -100, 10.88, 5.23, 'a']))
