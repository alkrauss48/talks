food_type(____, cheese).
food_type(____, cracker).
food_type(____, meat).
food_type(____, meat).
food_type(____, soda).
food_type(____, dessert).

flavor(sweet, dessert).
flavor(savory, meat).
flavor(savory, cheese).
flavor(sweet, soda).

food_flavor(X, Y) :- food_type(X, Z), flavor(Y, Z).
