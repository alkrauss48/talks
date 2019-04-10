# Procs
p1 = Proc.new { puts 'Proc!' }
p2 = proc { puts 'Proc!' }

# Lambdas
l1 = lambda { puts 'Lambda!' }
l2 = -> { puts 'Lambda!' }

p1.call
p2.call
l1.call
l2.call
