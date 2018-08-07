class Animal
  attr_accessor :sound
  attr_accessor :type
  attr_reader :status

  @@count = 0

  def initialize(type, status='healthy')
    @type = type
    @sound = 'No Sound Yet'
    @status = status
    @@count += 1
  end

  def make_noise!
    if is_healthy?
      puts "The #{@type} goes: #{@sound}"
    else
      puts "The sick #{@type} says nothing."
    end
  end

  def self.status
    "There are #{@@count} animal(s)."
  end

  def is_healthy?
    @status != 'sick'
  end

  private :is_healthy?

end

animal = Animal.new('dog', 'sick')

animal.sound = 'woof'
animal.make_noise!

puts Animal.status
puts animal.status


# Fails:
# animal.status = 'sick'
animal.is_healthy?
# Animal.count
