class UserSerializer < ActiveModel::Serializer
  attributes :id, :email, :first_name

  has_many :posts
  has_many :comments
end
