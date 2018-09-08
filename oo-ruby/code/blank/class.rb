klass = Class.new do
  def foo
    puts 'foo'
  end
end

puts klass

bar = klass.new

bar.foo
