Sample CRUD Operations Using Laravel and AJAX

Step 1 : Create a .env file copy the setting in .env.example file . 
Update your database connections in the .env file

Step 2 : Run the command php artisan migrate in terminal to create tables

Now all the tables will be created in the mysql

Step 3 : Run php artisan serve 

Step 4 : Go to this link : 

http://localhost:8000/productajaxCRUD



**Task 1 :
How would you store the information in a database (suggest a schema or data model)?
What kind of database would you choose for implementing the said schema/data model Relational or non-relational? And why?**

1. We can store the informations using a mysql database . We can create multiple tables in a database and will use a PRIMARY KEY constraint to uniquely identify each record in a database table and a FOREIGN KEY to link two tables together.


2. Will use a mysql database , which is a an open source relational database management system (RDBMS) based on Structured Query Language (SQL) to implement such a web application.

Relational databases use Structured Querying Language (SQL), making them a good choice for applications that involve the management of several transactions. The structure of a relational database allows you to link information from different tables through the use of foreign keys (or indexes), which are used to uniquely identify any atomic piece of data within that table. Other tables may refer to that foreign key, so as to create a link between their data pieces and the piece pointed to by the foreign key. This comes in handy for applications that are heavy into data analysis.

If we want our application to handle a lot of complicated querying, database transactions and routine analysis of data,it's best we stick with a relational database. And if the application is going to focus on doing many database transactions, it’s important that those transactions are processed reliably. This is where ACID (the set of properties that guarantee database transactions are processed reliably) really matters, and where referential integrity comes into play.

**Task 2 : 
Implement a simple CRUD application with any modern MVC framework, using language of your choice.
 Also provide a reason for choosing a specific language and framework to build this.**

1. I have used Laravel to create a CRUD application - PHP MVC Framework used to develop web applications 

2. Laravel ships with some amazing features 

Eloquent ORM (object-relational mapping)

Query builder

Migration - Tables can be created/updated using migration.

Unit testing is provided as an integral part of Laravel

Automatic pagination simplifies the task of implementing pagination

Class auto loading provides automated loading of PHP classes

And there are so many supporting packages for different variety of operations like 
Socialite - provides simplified mechanisms for authentication with different OAuth providers, including Facebook, Twitter, Google, GitHub and Bitbucket.
Cashier- for managing subscription billing services provided by Stripe, such as handling coupons and generating invoices.

It is faster to set up a user authentication ( login/register ) as laravel ships with a default authentication.
It is well documented and we have lots of tutorials.
It is getting fixes related to security and new updations and features are coming in latest versions of laravel

