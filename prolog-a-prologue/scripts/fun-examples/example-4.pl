father(____, ____).
father(____, ____).

ancestor(X, Y) :-
    father(X, Y).

ancestor(X, Y) :-
    father(X, Z), ancestor(Z, Y).
