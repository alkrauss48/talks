def foo(my_proc)
  puts 'We\'re in the method'
  bar(my_proc)
end

def bar(my_proc)
  my_proc.call(3)
end

cool_proc = Proc.new do |x|
  puts 'Now we\'re in the proc!'
end

foo(cool_proc)
