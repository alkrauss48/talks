
# Building a Stand-Alone RESTful API with Rails

#### By [Aaron Krauss](http://thesocietea.org)
#### Presented at [OKC Ruby](http://www.okcruby.org/blog/2014/11/30/december-2014-meeting/)

---

## How to run the presentation

```shell
./mdp okcrb.md
```

[mdp](https://github.com/visit1985/mdp) is a command-line presenter tool which reads in markdown files and
presents them magnificently. In a world where presentations are taking a more
graphical approach, I decided to take a step back and see how we can use one of
our most basic tools (the command line) to present something.

Plus, this talk has a lot of live coding in it, and being directly in the
command line helps me out a lot.

## The Blog

A finished version of the blog that is live-coded throughout this presentation
is found in `blog_final`, and a list of commands that I use throughout the live coding
are found in `commands-list.txt`. Also, the seeds I use to populate my rails DB
are found in `seeds.rb`.

To run the server:

```shell
cd blog_final
rails s # Assuming you have the rails gem installed
```
