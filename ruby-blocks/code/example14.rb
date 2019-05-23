def lambda_example
  l = lambda {|x,y| x * y }
  result = l.call(2, 4) * 10
  return result
end

puts lambda_example
