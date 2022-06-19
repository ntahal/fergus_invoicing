# fergus_invoicing
invoicing assesment web app

this short invoicing system allows you to view invoices for your user.

This uses Laravel framework with a few extra plugins installed (follows MVC). (see composer file for more info).

The models store the database schema.
The route directs requests to the right controllers.
The controllers then process data and brings up views for the request.
The views hold the content which is to be shown to the end user.

The database is in sqlite and stored in the database folder.

you will need to update your .env file to point to the database while commenting out some of the lines pertaining to mysql db connection.

DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=~/database/database.sqlite  <-- requires hard path to the db file
#DB_CONNECTION=mysql
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=


you will need to login to be able to see your current invoices

login email: test@test.com
password: 12345678

I have prefilled the database with some data which shoud surfice for this demo.

You can sort the invoices by date, site address, job type, purchase order, subtotal, due date status.

Going into  view the invoice you can see all the details and are able to edit the status of the invoice.

You can also view,edit or add notes per invoice.
