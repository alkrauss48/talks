:- use_module(library(http/thread_httpd)).

:- use_module(library(http/http_dispatch)).

server(Port) :-
        http_server(http_dispatch, [port(Port)]).

:- http_handler(/, say_hi, []).

say_hi(_Request) :-
        format('Content-type: text/plain~n~n'),
        format('Hello World!~n').
