food_type(gouda, cheese).
food_type(provolone, cheese).
food_type(ham, meat).
food_type(pepsi, soda).
food_type(cheesecake, dessert).

flavor(sweet, dessert).
flavor(savory, meat).
flavor(savory, cheese).
flavor(sweet, soda).

food_flavor(X, Y) :- food_type(X, Z), flavor(Y, Z).
