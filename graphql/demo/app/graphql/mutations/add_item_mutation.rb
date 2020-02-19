module Mutations
  class AddItemMutation < Mutations::BaseMutation
    argument :title, String, required: true
    argument :description, String, required: false
    argument :image_url, String, required: false

    field :item, Types::ItemType, null: true
    field :errors, [String], null: true

    def resolve(title:, description: nil, image_url: nil)
      item = User.first.items.new(
        title: title,
        description: description,
        image_url: image_url,
      )

      if item.save
        { item: item }
      else
        { errors: item.errors.full_messages }
      end
    end
  end
end
