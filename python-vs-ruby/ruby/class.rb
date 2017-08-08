class Foo
  attr_accessor :bar

  def initialize
    @bar = "bar"
  end

  def baz
    "Instance method baz: #{@bar}"
  end

  def self.bazbar
    "Class method baz"
  end
end

x = Foo.new

puts x.bar

puts x.baz

puts Foo.bazbar
