%title: Building a Stand-alone RESTful API with Rails
%author: thecodeboss
%date: 2014-12-11

-> Intro <-
=========

-> But first off, Merry Christmas!

                            _...
                      o_.-"`    `\
              .--.  _ `'-._.-'""-;     _
            .'    \`_\_  {_.-a"a-}  _ / \
          _/     .-'  '. {c-._o_.){\|`  |
          (@`-._ /       \{    ^  } \\ _/
          `~\  '-._      /'.     }  \}  .-.
            |>:<   '-.__/   '._,} \_/  / ())  
            |     >:<   `'---. ____'-.|(`"`
            \            >:<  \\_\\_\ | ;
              \                 \\-{}-\/  \
              \                 '._\\'   /)
                '.                       /(
                  `-._ _____ _ _____ __.'\ \
                    / \     / \     / \   \ \ 
                _.'/^\'._.'/^\'._.'/^\'.__) \
            ,=='  `---`   '---'   '---'      )
        `"""""""""""""""""""""""""""""""`

-> Ho Ho Ho! This will be our form of *GIF*-ts this year! <-

-------------------------------------------------

-> # Aaron Krauss <-

Hi, I'm a

> Full-Stack Developer & Director of Awesome at Staplegun
> Tea Enthusiast
> Dog Lover
> Coolest guy you'll ever meet

*@thecodeboss* on Twitter, where I tweet pure magic

http://github.com/alkrauss48 on GitHub

                        ###########################
                       #############################
                       ###                       ###
                       ###        ##   ##        ###
                       ###         ###  ###      ###
                       ###        ##   ##        ###
                       ###                       ###
                       #############################
                        ###########################
                              ###############
                             #################
                            ###  #########  ###
                            ###  #########  ###
                            ###  #########  ###
                                 #### ####
                                 #### ####
                                 #### ####

-------------------------------------------------

-> # APIs <-

An API is a *set of routines, protocols, and tools for building software applications*

Imagine a full app, but without any views.

An API will help us
> Modularize our application
> Support multiple front-ends
> Stay out of messing with any HTML/CSS nonsense

                 .=     ,        =.
         _  _   /'/    )\,/,/(_   \ \
           `//-.|  (  ,\\)\//\)\/_  ) |
          //___\   `\\\/\\/\/\\///'  /
      ,-"~`-._ `"--'_   `"""`  _ \`'"~-,_
      \       `-.  '_`.      .'_` \ ,-"~`/
        `.__.-'`/   (-\        /-) |-.__,'
          ||   |     \O)  /^\ (O/  |
          `\\  |         /   `\    /
            \\  \       /      `\ /
            `\\ `-.  /' .---.--.\
              `\\/`~(, '()      ('
                /(O) \\   _,.-.,_)
              //  \\ `\'`      /
             / |  ||   `""""~"`
            /'  |__||
                  `o 

-> MOOOOve on over monolith apps, APIs are where it's at <-

-------------------------------------------------

-> # RESTful APIs <-

What is *REST*?

> What does it stand for?
> What does it actually mean?


                 ||
                 ||                   ||
              ||/||___                ||
              || /`   )____________||_/|
              ||/___ //_/_/_/_/_/_/||/ |
              ||(___)/_/_/_/_/_/_/_||  |
              ||     |_|_|_|_|_|_|_|| /|
              ||     | | | | | | | ||/||
              ||~~~~~~~~~~~~~~~~~~~||
              ||                   ||

-> No, Not that kind of Rest -_- <-

-------------------------------------------------

-> # REST <-

*REST* is an architectural style consisting of a
coordinated set of architectural constraints
applied to components, connectors, and data
elements, within a distributed hypermedia system.

So what we care about:

> Base URI, such as http://example.com/resources/
> Stateless
> An Internet media type for the data. This is often JSON
> Standard HTTP methods (e.g., GET, PUT, POST, or DELETE)
> Hypertext links to reference state
> Hypertext links to reference related resources

So can we build our API now?

-------------------------------------------------

-> ## Building an API <-

Here's our plan of attack:

> *Scaffold an API*
>> We're going to build a blog
>> Response content-type will be *JSON*

> *Serialize* our JSON

> Add in *Authentication*

-> ## Bonus <-

> Talk about *Cross Origin Resource Sharing* (CORS)
> *Filtering* our API response with queries

-------------------------------------------------

-> ## Scaffolding an API <-

Let's take a look at what our models will be:

▛▀▀▀▀▀▀▀▀▀▜
▌  User   ▐ - - - - - -
▙▄▄▄▄▄▄▄▄▄▟           |
     |                |
     v                v
▛▀▀▀▀▀▀▀▀▀▜      ▛▀▀▀▀▀▀▀▀▀▜
▌  Post   ▐  ->  ▌ Comment ▐
▙▄▄▄▄▄▄▄▄▄▟      ▙▄▄▄▄▄▄▄▄▄▟

## User
> Has many *posts*
> Has many *comments*

## Post
> Has many *comments*
> Belongs to  *user*

## Comment
> Belongs to  *post*
> Belongs to  *user*

Let's code!

-------------------------------------------------

-> ## Serializing our JSON <-

*Serialization* is the process of translating data structures or object state into a
format that can be stored and reconstructed later

Some of the common Ruby gems for serialization are:
> RABL
> JBuilder
> *Active Model Serializers*

                               __________
                               |________|
                              / \         \
                            /_____\_________\
                            |     | \       |
                            |     |  \      |
                            |     |   \     |
                            |     | M  \    |
                            |     |     \   |
                            |     |\  I  \  |
                            |     | \     \ |
                            |     |  \  L  \|
                            |     |   \     |
                            |     |    \  K |
                            |     |     \   |
                            |     |      \  |
                            |_____|_______\_|

-> What goes better with 'Serial' than milk? <-

-------------------------------------------------

-> ## Adding Authentication <-

We don't want a random user to be able to see all of our data.

Let's limit it to the users who are in the database.

This is where we're finally going to use that *auth_token* field.



            ad8888888888ba
            dP'         `"8b,
            8  ,aaa,       "Y888a     ,aaaa,     ,aaa,  ,aa,
            8  8' `8           "8baaaad""""baaaad""""baad""8b
            8  8   8              """"      """"      ""    8b
            8  8, ,8         ,aaaaaaaaaaaaaaaaaaaaaaaaddddd88P
            8  `"""'       ,d8""
            Yb,         ,ad8"
            "Y8888888888P"

-> Adding auth is always the *key* to a solid application <-

-------------------------------------------------

-> ## Adding Authentication <-


# Benefits:

> Adding security (duh!)
> You now know who is making the request


# Implementation Methods

> Basic Authentication
> Token Authentication
> OAuth or other 3rd party services


Based on our needs, the simplest and very safe option is to use
a combination of *Basic* and *Token* authentication - and Rails
provides some neat helper methods for this.

-------------------------------------------------

-> ## Adding Authentication <-

According to the HTTP 1.1 spec rfc 2616, the *Authorization* header
is used to authenticate with a server.

# Basic Authentication
+ *Request*
  - `Authorization="Basic username:password"`
  - Username/Password Base64 encoded

> *Response*
  - `{ token: 'our_token' }`


# Token Authentication
+ *Request*
  - `Authorization="Token token=our_token"`

+ *Response*
  - Our json data

-------------------------------------------------

-> ## BONUS <-

We made it to the bonus round! Let's talk about:
>*Cross Origin Resource Sharing*
>*Filtering our requests*

                                                ^^
            ^^      ..                                       ..
                    []                                       []
                  .:[]:_          ^^                       ,:[]:.
                .: :[]: :-.                             ,-: :[]: :.
              .: : :[]: : :`._                       ,.': : :[]: : :.
            .: : : :[]: : : : :-._               _,-: : : : :[]: : : :.
        _..: : : : :[]: : : : : : :-._________.-: : : : : : :[]: : : : :-._
        _:_:_:_:_:_:[]:_:_:_:_:_:_:_:_:_:_:_:_:_:_:_:_:_:_:_:[]:_:_:_:_:_:_
        !!!!!!!!!!!![]!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!![]!!!!!!!!!!!!!
        ^^^^^^^^^^^^[]^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^[]^^^^^^^^^^^^^
                    []                                       []
                    []                                       []
                    []                                       []
         ~~^-~^_~^~/  \~^-~^~_~^-~_^~-^~_^~~-^~_~^~-~_~-^~_^/  \~^-~_~^-~~- 
         ~ _~~- ~^-^~-^~~- ^~_^-^~~_ -~^_ -~_-~~^- _~~_~-^_ ~^-^~~-_^-~ ~^
           ~ ^- _~~_-  ~~ _ ~  ^~  - ~~^ _ -  ^~-  ~ _  ~~^  - ~_   - ~^_~
             ~-  ^_  ~^ -  ^~ _ - ~^~ _   _~^~-  _ ~~^ - _ ~ - _ ~~^ -
                 ~^ -_ ~^^ -_ ~ _ - _ ~^~-  _~ -_   ~- _ ~^ _ -  ~ ^-
                     ~^~ - _ ^ - ~~~ _ - _ ~-^ ~ __- ~_ - ~  ~^_-
                         ~ ~- ^~ -  ~^ -  ~ ^~ - ~~  ^~ - ~

-> I couldn't find a pun here for bonus, so let's just *get over* this one <-

-------------------------------------------------

-> ## Cross Origin Resource Sharing <-

*Cross Origin Resource Sharing* is a mechanism that allows many resources (e.g.,
fonts, JavaScript, etc.) on a web page to be requested from another domain
outside the domain from which the resource originated.

This prevents the user from spawning AJAX requests if the server doesn't allow
for it. You could always send all client-side logic through a server-side proxy,
but who wants to do that

# How to deal with CORS in Rails

> You don't. And thus remain a noob.

> Manually in your environment config files

> User a gem like rack-cors to make it easy.

-------------------------------------------------

-> ## Fin <-

Thanks for dealing with my *pun*-ishing talk.

You've all earned some *REST* now, just don't fall asleep on the *rails!* 

(it never ends well if you've seen those old damsel-in-distress *gems* from the 50's)


                      (+++++++++++)
                    (++++)
                (+++)
              (+++)
              (++)
              [~]
              | | (~)  (~)  (~)    /~~~~~~~~~~~~
          /~~~~~~~~~~~~~~~~~~~~~~~  [~_~_]  |    * * * /~~~~~~~~~~~|
        [|  %___________________            | |~~~~~~~~            |
          \[___] ___   ___   ___\  No. 4    | |   A.T. & S.F.      |
        /// [___+/-+-\-/-+-\-/-+ \\_________|=|____________________|=
      //// @-=-@ \___/ \___/ \___/  @-==-@      @-==-@      @-==-@

