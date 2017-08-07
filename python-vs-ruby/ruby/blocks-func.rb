def has_a_block
  puts "before block"

  yield if block_given?

  puts "after block"
end

has_a_block do
  puts "in the block"
end
