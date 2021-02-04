# Tester

### Instructions on how to use the API.
* Use postman for testing
* tester.test is an example domain, use whatever domain you choose.

* Get all customers records:
`GET --> http://tester.test/api/v1/customers`

* Get a single customer record base on ID
`GET --> http://tester.test/api/v1/customers/find?id=1`

* Create a customer record
`POST --> http://tester.test/api/v1/customers?name=sample`

* Updating a customer record base on id
`PUT --> http://tester.test/api/v1/customers?name=updated_sample&id=9`

* Deleting a customer record base on id
`DELETE --> http://tester.test/api/v1/customers?id=9`


### If you want to install locally:

* Set up database

```mysql
    DROP TABLE IF EXISTS "customers";
    DROP SEQUENCE IF EXISTS customers_id_seq;
    CREATE SEQUENCE customers_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1 CACHE 1;

    CREATE TABLE "public"."customers" (
        "id" integer DEFAULT nextval('customers_id_seq') NOT NULL,
        "name" character varying NOT NULL
    ) WITH (oids = false);

    INSERT INTO "customers" ("id", "name") VALUES (1,	'one'), (2,	'two');
```

* Set environment variables.
- Copy .env.example on the folder to .env
- Replace the .env variables with your postgres values

* Make sure you have composer and a php that is at least 7.3.

### If you want to run it via Docker

Run `$ docker-compose up -d`, you need a separate db. 

You can download my postgres repository on : https://github.com/groovey/docker-common


### Finally Heroku








