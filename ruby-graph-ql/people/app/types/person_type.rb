PersonType = GraphQL::ObjectType.define do
  name "Person"
  description "A Person"
  field :id, types.ID
  field :name, types.String
  field :surname, types.String
  field :pets do
    type types[PetType]
    resolve -> (person, args, ctx) {
      person.pets
    }
  end
end
