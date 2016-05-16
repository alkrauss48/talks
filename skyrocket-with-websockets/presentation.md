%title: Skyrocket with WebSockets
%author: thecodeboss
%date: 2016-05-17



-> Skyrocket with WebSockets <-
=========

-> *By Aaron Krauss* <-

-------------------------------------------------



-> # About Me <-

Site: *thesocietea.org*

Twitter: *@thecodeboss*

GitHub: *github.com/alkrauss48*

-------------------------------------------------



-> # Traditional HTTP <-

- Client Requests Data
- Server Responds with Data

That's it
<br>

*What if the client wants to connect with other clients?*
<br>

It can't

-------------------------------------------------



-> # What Are Our Options? <-

- Long Polling
<br>
- Server-Sent Events
<br>
- *WebSockets*

-------------------------------------------------



-> # What Are WebSockets? <-

*WebSockets* represent a standard for bi-directional communication between a
client and a server which involves creating a TCP connection that links them
together.

<br>
The TCP connection sits outside of HTTP, and thus runs a separate server to
manage this communication.

<br>
To initialize this connection, a *handshake* is performed between the client and
the server

-------------------------------------------------



-> # The Handshake <-

There are 2 main steps in the WebSocket handshake.
<br>

1. An HTTP request is made with an *upgrade* header set to *websocket*, asking
   the server to begin the handshake.
<br>

2. If the server supports WebSockets, it will send a *101* response code back,
   which stands for *Switching Protocols*.
<br>

The handshake is complete.

-------------------------------------------------



-> # What We're Going to Build <-

A simple chat application that uses WebSockets

Examle: [http://websockets.thesocietea.org](http://websockets.thesocietea.org)

-------------------------------------------------



-> WebSocket Downfalls <-

- Browser Support
- Extra Service Running
- More Complexity (arguable)

-------------------------------------------------



-> Thanks! <-

Blog post reviewing everything we did here:

[https://thesocietea.org/2016/04/how-websockets-work-with-socket-io-demo/](https://thesocietea.org/2016/04/how-websockets-work-with-socket-io-demo/)



*@thecodeboss* on Twitter
