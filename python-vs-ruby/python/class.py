class Foo:
    def __init__(self):
        self.bar = "bar"

    def baz(self):
        return "Instance method baz: %s" % (self.bar)

    @staticmethod
    def bazbar():
        return "Class method baz"

x = Foo()

print(x.bar)

print(x.baz())

print(Foo.bazbar())
