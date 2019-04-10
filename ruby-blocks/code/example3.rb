def foo
  puts 'We\'re in the method'
  yield
end

foo do
  puts 'Now we\'re in the block!'
end
