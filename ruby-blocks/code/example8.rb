def foo
  puts 'We\'re in the method'
  yield(3, 'bar', {}) if block_given?
end

foo do |count|
  count.times do
    puts 'Now we\'re in the block!'
  end
end
