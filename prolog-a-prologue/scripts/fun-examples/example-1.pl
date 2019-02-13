likes(aaron, tea).
likes(patrick, tea).
likes(blixa, coffee).

friend(X, Y) :- likes(X, Z), likes(Y, Z).
