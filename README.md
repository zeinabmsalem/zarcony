
## About Pizza Order Application Using Laravel

1- It's an application where you add pizza where all crud functionality is applied where you can:

- List all pizza available in the system.
- Create new pizaa.
- Update each pizza item.
- Delete pizza item.


2- It's an application where you add pizza order where all crud functionality is applied where you can:

- List all pizza orders available in the system.
- Create new pizaa order where you can specify the desired flavor of a pizza, the number of pizzas and it's size and adding Customer information as name and Address as they are must.
- Update each pizza order delivery status.
- Delete pizza order only if it's delieverd.



## Application Specification

-Use PHP 7.2+.
-Laravel version 6
-Laravel Authentication is applied
-Has Docker Container


## Clone the application from GitHub instructions working with Linux host:

1- Open Terminal.

2- Create new directory: sudo mkdir directory_name 

3- Change the current working directory to the location of the new directory you just created: cd directory_name

4- On GitHub, navigate to the main page of the repository

5- Under the repository name, click Clone or download. 

6- To clone the repository using HTTPS, under "Clone with HTTPS", click Use HTTPS. To clone the repository using an SSH key, including a certificate issued by your organization's SSH certificate authority, click Use SSH.

7- Type git clone and then paste the URL you copied in Step 5 : 

	-$ git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY>.

8- A new directory inside directory_name will be created cd to this one.

9- Open Application go to .env file change:

	-DB_DATABASE=
	-DB_USERNAME=
	-DB_PASSWORD=

	to the values equal to your MySQl Connection so you can connect to your Database.

10- Then migrate the database migration files in this application to be loaded to your mysql database:

	-sudo php artisan migrate

11- Then run application on apache server:

	-sudo php artisan serve

	-get the link created run it on browser to serve your application


## To Run Application on Docker Container:

1- you must change ownership on storage and bootstrap folders:

	- go to terminal
	- cd to your application directory and type:

	- sudo chown -R www-data:www-data bootstrap/  storage/

	- now type: ls -l
	    you will find ownership changed to user and group named <www-data>

	-then type on terminal:  sudo docker-compose up

	-go to browser and type:  localhost:8080 as it's the port specified 
	 for the container to run on in the  docker-compose.yml file.



## To Run Scheduled Task Automatically:

1- You must specifiy a cron job on your server

  -open terminal

  -cd application directory

  -type: 
      sudo env EDITOR=gedit crontab -e

  -this will open the crontab file

  -add this line at the bottom of the file:

     * *    * * *       cd /path/to/application/ && php artisan schedule:run >> /dev/null 2>&1

  -you will have to replace /path/to/application/ with your own path 
    of the application ex:  /var/www/html/pizzaorder/

  -save and close file.






