require './animal'

class Dog < Animal
  attr_accessor :breed

  def initialize(breed)
    super('dog')

    @breed = breed
  end

  def speed
    is_healthy? ? 'run' : 'walk'
  end

  def make_noise!
    puts 'Ruff ruff!'
  end

end

dog = Dog.new('dog')

dog.sound = 'Woof'
dog.make_noise!

puts dog.speed
