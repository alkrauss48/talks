# The sum of the squares of the first ten natural numbers

sum_of_squares = 0;

(1..10).each do |num|
  sum_of_squares += num**2
end

puts sum_of_squares
