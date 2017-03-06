class PostSerializer < ActiveModel::Serializer
  attributes :id, :body

  belongs_to :user
end
