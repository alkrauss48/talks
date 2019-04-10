def foo(my_proc)
  puts 'We\'re in the method'
  bar(my_proc)
end

def bar(my_proc)
  my_proc.call
end

cool_proc = Proc.new do
  puts 'Now we\'re in the block!'
end

foo(cool_proc)
