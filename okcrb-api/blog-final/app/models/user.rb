class User < ActiveRecord::Base
  has_many :posts
  has_many :comments

  before_create -> { self.auth_token = SecureRandom.hex }
end
