def foo
  puts 'We\'re in the method'
  yield if block_given?
end

foo

foo do
  puts 'Now we\'re in the block!'
end
