# From Wordpress to Hugo
By Aaron Krauss

@thecodeboss
thecodeboss.dev

![Clevyr logo](https://github.com/alkrauss48/talks/blob/master/shecodes-workshop-intro/images/clevyr.png?raw=true)

![OKC WebDevs logo](https://github.com/alkrauss48/talks/blob/master/shecodes-workshop-intro/images/okc-webdevs.png?raw=true)

From Wordpress to Hugo

## History

2014

Started learning
front-end dev

jQuery was king

Sass was still new

Build automation tools
were not yet the norm

Worked at ad agency

We built sites with CMSs

Like ModX, Craft CMS, and...

Wordpress!

Deployed my site on my **$5/month**
[Digital Ocean](https://www.digitalocean.com/) VM

![Thumbs-up kid meme](https://media.tenor.com/A-ozELwp694AAAAC/thumbs-thumbs-up-kid.gif)
This was great

2021

Things have changed

DevOps

Containers

![Containers
meme](https://media.makeameme.org/created/containers-containers-everywhere.jpg)

So what's better than a **$10/month** droplet?

A **$20/month** single-node Kubernetes cluster

<small>Let's just ignore that it was:</small>
* Same memory & CPU
* Single node
* Basically the same thing I already had at twice the price

But now we're using **Infrastructure
as code**!

But I noticed that my site was using a lot of memory

Like 600MB

It was a combination of the DB, and PHP cache

So I evaluated:

* My site was old
* I, a dev, am the only one who manages content
* I'd love to get rid of the database

So what if I could shrink that 600MB down to 2MB

Using a static site generator, like [Hugo](https://gohugo.io/)

![Hugo
Logo](https://d33wubrfki0l68.cloudfront.net/c38c7334cc3f23585738e40334284fddcaf03d5e/2e17c/images/hugo-logo-wide.svg)

Pros of Hugo:

* Super fast build time
* Stood the test of time
* Great community
* It's written in Go

So, during 2022/2023

Rebuilt my entire site using:

* Hugo
* Tailwind CSS
* Rollup.js
* Typescript
* Linting & Tests
* Docker
* CI / CD

Demo

Thanks!

Aaron Krauss
@thecodeboss
thecodeboss.dev

Questions?
