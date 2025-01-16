# Getting Started

## How to Use

Clone the project

```bash
  https://github.com/agusheryanto182/backend-sql.git
```

Copy `.env.prod` file for production or `.env.testing` for testing to `.env` file

```bash
  //for production
  cp .env.prod .env

  //for testing
  cp .env.testing .env
```

Setting Environmental Variable on `.env` file

If you want to run in development mode

```bash
  php artisan serve
```

You can build and run the project using docker

```bash
  sudo make up
```

Run the endpoints as in the postman documentation

API Documentation: <br>
<a href="https://documenter.getpostman.com/view/32137512/2sAYQZHCM4">
<img src="https://img.shields.io/badge/backend-test-purple?logo=postman&logoColor=white" alt="Postman Badge">
</a>

# About Project

<p align="justify">
  The project is an API for managing employees, allowing you to perform CRUD operations on employee records.
</p>

### Features available in this project:

| Feature      | Method |
| ------------ | ------ |
| Get Nilai RT | GET    |
| Get Nilai ST | GET    |

## 🛠️ Tech Stack

| Feature/Functionality | Package/Technology                                            |
| --------------------- | ------------------------------------------------------------- |
| Server-Side Framework | [Laravel](https://laravel.com/)                               |
| PHP Runtime           | [PHP](https://www.php.net/)                                   |
| Package Management    | [Composer](https://getcomposer.org/)                          |
| Environment Variables | [Dotenv](https://www.npmjs.com/package/dotenv)                |
| Database ORM          | [Eloquent ORM](https://laravel.com/docs/8.x/eloquent)         |
| Database              | [MySQL](https://www.mysql.com/)                               |
| Logger                | [Monolog](https://github.com/Seldaek/monolog)                 |
| HTTP Request Logger   | [Laravel Log](https://laravel.com/docs/8.x/logging)           |
| Data Validation       | [Laravel Validation](https://laravel.com/docs/8.x/validation) |
| Testing Framework     | [PHPUnit](https://phpunit.de/)                                |
| HTTP Testing          | [Laravel HTTP Tests](https://laravel.com/docs/8.x/testing)    |

## Contributor

**Agus Heryanto**
<br>
[![Agus Heryanto - LinkedIn](https://img.shields.io/badge/Agus_Heryanto-blue?logo=linkedin)](https://www.linkedin.com/in/agus-heryanto-b34561284/)
[![Agus Heryanto - GitHub](https://img.shields.io/badge/Agus_Heryanto-black?logo=github)](https://github.com/agusheryanto182)
