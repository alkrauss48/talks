QueryType = GraphQL::ObjectType.define do
  name "Query"
  description "The query root for this schema"

  field :pets do
    type types[PetType]
    resolve -> (obj, args, ctx) {
      Pet.all
    }
  end

  field :people do
    type types[PersonType]
    resolve -> (obj, args, ctx) {
      Person.all
    }
  end
end
