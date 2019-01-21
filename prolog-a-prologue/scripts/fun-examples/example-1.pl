likes(aaron, tea).
likes(____, tea).
likes(____, coffee).

friend(X, Y) :- likes(X, Z), likes(Y, Z).
