father(john, paul).
father(paul, test).
father(test, foo).

ancestor(X, Y) :-
    father(X, Y).

ancestor(X, Y) :-
    father(X, Z), ancestor(Z, Y).
