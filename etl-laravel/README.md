Extracting, Loading, and Transforming Data Really Efficiently with Laravel
---
By [@thecodeboss](https://thecodeboss.dev)


Extract-Transform-Load (ETL) processes have been around for a long time in programming, and they're not too challenging to understand: you take data from one or many sources (legacy DB, SAP, third-party data lake, spreadsheets, etc.), transform it to fit your own application's workflows, and then load it into your own data sources. You can use ETL processes for syncing data across sources, migrating legacy data, aggregating multiple data sources, and more.

As you might expect, ETL processes involve a lot of data, and it's up to you to ensure that you're building a nice, lean ETL process. No one wants an ETL process that takes hours to run if it's possible to run it in minutes. In this live-demo talk, we'll use Laravel to implement an ETL process where we start with a functioning yet inefficient scenario and step-by-step turn it into a lean, mean ETL process. No prior Laravel knowledge is necessary, just an open mind. We'll review writing efficient database queries, architecting your code to avoid common inefficient pitfalls, and more.

Aaron Krauss is a senior software engineer at Clevyr where he works with an awesome team building web apps, mobile apps, games, and more. Off work hours, he and his wife just welcomed their first-born son into the world which is taking up all his free time!

## Run the Slides
```
./sent presentation.txt
```

## Run the App
```
cd etl-demo

# Setup the project
cp .env.example .env
composer install

# Run it
docker-compose up

# To run the commands
docker-compose exec app php artisan step1
docker-compose exec app php artisan step2
...
docker-compose exec app php artisan step9
```
