class PostSerializer < ActiveModel::Serializer
  attributes :id, :title, :body, :something

  has_many :comments

  def something
    "Herrow #{object.title}"
  end
end
