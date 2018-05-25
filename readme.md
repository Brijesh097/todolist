<center><img src="https://user-images.githubusercontent.com/25717047/40565969-3a5dfb2c-608c-11e8-8487-1108eb739d20.JPG" width="180"></center>
<hr style="border: 0; height: 0; border-top: 0px solid rgba(0, 0, 0, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.3);">

## About

**Todolist** are prioritized lists of all the tasks that you need to carry out. By keeping such a list, you make sure that your tasks are written down all in one place so you don't forget anything important. And by prioritizing tasks, you plan the order in which you'll do them, so that you can tell what needs your immediate attention, and what you can leave until later.

> **Never worry about forgetting things again.** <br>
> Let Todolist remember it all for you. You can get tasks out of your head and onto your todolist anytime, anywhere.

> **Focus your energy on the right things.** <br>
> Easily organize and prioritize your tasks and projects so you’ll always know exactly what to work on next.

> **From overwhelmed to on top of it.** <br>
> Todolist gives you the confidence that everything’s organized and accounted for, so you can make progress on the things that are important to you.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Things you'll need to install the software:

- **Xampp** <br>
    - First of all, we need Xampp, so we can download it from the official page: **[Download Xampp](https://www.apachefriends.org/)**

- **Version Control System** <br>
    - There are many version control systems, but we'll use Git. A free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency. **[Download Git](https://git-scm.com/)**

- **Composer** <br>
    - After you've downloaded and installed Xampp, we need to install Composer. Composer is a PHP package manager that is integrated with Laravel Framework. In Windows we can install it easy going to the official page and download the installer. **[Download Composer](https://getcomposer.org/download/)**

### Installing

A step by step procedure that explains you have to get your development environment running:

- **Clone GitHub repository**

  Find a location on your computer where you want to store the project. Now, run the following command to pull the project from GitHub and create a copy of it. And *cd* into the project.
  ```
  https://github.com/Brijesh097/todolist.git
  ```


- **Install Composer Dependencies**

  Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started. So to install all this source code we run composer with the following command.
  ```
  composer install
  ```


- **Install NPM Dependencies**

  Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix.
  ```
  npm install
  ```


- **Create a copy of your .env file**

  **.env** files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file.
  ```
  cp .env.example .env
  ```

- **Generate an app encryption key**

  Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.
  ```
  php artisan key:generate
  ```
  If you check the .env file again, you will see that it now has a long random string of characters in the **APP_KEY** field. We now have a valid app encryption key.

- **Create an empty database for the application**

  Create an empty database for the project. For this application will create a database named "**todolist**".

- **In the .env file, add database information to allow Laravel to connect to the database**

  We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the **.env** file and Laravel will handle the connection from there.

  In the **.env** file fill in the **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME**, and **DB_PASSWORD** options to match the credentials of the database you just created. This will allow us to run migrations in the next step.

- **Migrate the database**

  Once your credentials are in the **.env** file, now you can migrate your database.
  ```
  php artisan migrate
  ```
  It’s not a bad idea to check your database to make sure everything migrated the way you expected.

- **Wrapping Up**

  That is all you need to get started on this project.


## Contributing

Stay tuned for the details on the code of conduct, and the process for submitting the pull requests.

## Author

* **Brijesh**  ([Brijesh097](https://github.com/Brijesh097))
