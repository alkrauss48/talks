def foo(&block)
  puts 'We\'re in the method'
  bar(&block)
end

def bar
  yield
end

foo do
  puts 'Now we\'re in the block!'
end
