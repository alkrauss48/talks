class Animal
  attr_accessor :type, :sound

  @@count = 0

  def initialize(type, status='healthy')
    @type = type
    @sound = 'No sound yet'
    @status = status
    @@count += 1
  end

  def self.status
    "There are #{@@count} animal(s)"
  end

  def make_noise!
    if is_healthy?
      puts "The #{@type} goes: #{@sound}"
    else
      puts "The #{@type} makes no noise"
    end
  end

  def is_healthy?
    @status != 'sick'
  end

  private :is_healthy?

end

# animal = Animal.new('rabbit', 'sick')
# animal.sound = "Nibble"
# animal.make_noise!
#
# puts Animal.status
