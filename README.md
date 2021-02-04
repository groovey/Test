# Tester

### Instructions on how to use the API.
* Use postman for testing
* tester.test is an example domain, use whatever domain you choose.

* Get all customers records:
`GET --> http://tester.test/api/v1/customers`

* Get a single customer record base on ID
`GET --> http://tester.test/api/v1/customers/find?customer_id=1`

* Create a customer record
`POST --> http://tester.test/api/v1/customers?contact_name=sample`

* Updating a customer record base on id
`PUT --> http://tester.test/api/v1/customers?contact_name=updated_sample&customer_id=9`

* Deleting a customer record base on id
`DELETE --> http://tester.test/api/v1/customers?customer_id=9`


### If you want to install locally:

* Set up database (customers table)
* Set environment variables.
- Copy .env.example on the folder to .env
- Replace the .env variables with your postgres values

* Make sure you have composer and a php that is at least 7.3.

### If you want to run it via Docker

Run `$ docker-compose up -d`, you need a separate db. 

You can download my postgres repository on : https://github.com/groovey/docker-common


### Finally Heroku

- https://cartrack-api.herokuapp.com/

### What has been done?

* There is no framework that has been used here. Instead I created a simple Crud API framework. 
* The code comes with MVC structure.
* Simple enough to create routes under ./routes/api.php
* Use symfony components via composer and other packagist
* Coding standard to PSR
* Ready for ESlint for javascript, using (https://standardjs.com/)
* Added autoloading and namespacing
* Code is has been run on `$ php-cs-fixer`

### Questions and clarification?

Feel free to contact me on my github. 