# Fizz Buzz Application

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- [Docker Desktop](https://www.docker.com/products/docker-desktop)
- [Git](https://git-scm.com/)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/RubenCoDev/FizzBuzzAplication.git

    Change into the project directory:

    bash

cd FizzBuzzAplication

Copy the .env.example file and rename it to .env:

bash

cp .env.example .env

Install PHP dependencies:

bash

docker run --rm -v $(pwd):/app composer install

Modify permissions on storage:

bash

chmod -R 777 storage

Run the Laravel Sail installation command:

bash

./vendor/bin/sail up -d

Generate application key:

bash

./vendor/bin/sail artisan key:generate

Usage

    To start the application, run:

    bash

./vendor/bin/sail up -d

To stop the application, run:

bash

    ./vendor/bin/sail down

Accessing the Application

Once the application is running, you can access it in your web browser at http://localhost.

Accessing Fizz Buzz

Once the application is running, you can access it in your web browser at http://localhost/api/fizzbuzz.

Running Tests

To run the application's tests, execute the following command:

bash

./vendor/bin/sail test

Additional Information

For more information on Laravel Sail and Docker, refer to the following documentation:

    Laravel Sail Documentation
    Docker Documentation
