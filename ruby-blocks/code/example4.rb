def foo
  puts 'We\'re in the method'
  puts yield
end

foo do
  'Now we\'re in the block!'
end
