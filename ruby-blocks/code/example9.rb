def foo
  puts 'We\'re in the method'
  bar
end

def bar
  yield
end

foo do
  puts 'Now we\'re in the block!'
end
