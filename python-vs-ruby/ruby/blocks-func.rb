def accepts_block
  puts "before block"

  yield(5) if block_given?

  puts "after block"
end

accepts_block do |x|
  puts "in block #{x}"
end

accepts_block


