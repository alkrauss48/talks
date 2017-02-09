%title: Best Practices for Building a JSON API with Rails 5
%author: thecodeboss
%date: 2016-05-17



-> Best Practices for Building a JSON API with Rails 5 <-
=========

-> *By Aaron Krauss* <-

-------------------------------------------------



-> # About Me <-

Site: *thesocietea.org*

Twitter: *@thecodeboss*

Where I Work: *Clevyr*

-------------------------------------------------



-> # What We'll Cover <-

- Building a base JSON API with Active Model Serializers
- The JSON API Spec
- Pagination
- Versioning

-------------------------------------------------



-> # The Database <-

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

-------------------------------------------------



-> # The JSON API spec <-

<br>
Started in 2013 when Yehuda Katz was helping to build Ember.js.

Became stable at v1.0 in May 2015.

<br>
*This is a best practice*

-------------------------------------------------



-> # Pagination <-


-------------------------------------------------



-> # Pagination <-

Typically send links through response body

<br>
RFC 5988:
Better to do it through the Link Header

-------------------------------------------------



-> # Pagination <-

2 Gems:

will_paginate
api-pagination

-------------------------------------------------



-> # Pagination <-

Options:

- No links at all
<br>

- Send links in response body
<br>

- Send pagination through the HTTP Link Header
<br>
  *This is a best practice*

-------------------------------------------------



-> # Versioning <-


-------------------------------------------------



-> # Versioning <-

2 ways of doing it:

- URL
- Accept header

-------------------------------------------------



-> # Versioning - URL <-

Include the version in your URL path

<br>
It's easy - but it's also not a best practice because the version doesn't
represent the resource's data

-------------------------------------------------



-> # Versioning - Accept Header <-

Set the version via the HTTP Accept header

<br>
*This is a best practice*

-------------------------------------------------



-> Thanks! <-



*@thecodeboss* on Twitter
