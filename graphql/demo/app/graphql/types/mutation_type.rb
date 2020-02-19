module Types
  class MutationType < Types::BaseObject
    field :add_item, mutation: Mutations::AddItemMutation
  end
end
