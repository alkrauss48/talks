require './animal'

class Dog < Animal
  def initialize
    super('dog')
  end

  def make_noise!
    is_healthy? ? 'woof' : nil
  end

end

dog = Dog.new

puts dog.make_noise!
