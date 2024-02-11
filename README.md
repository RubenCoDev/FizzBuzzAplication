# Fizz Buzz Application

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- [Docker Desktop](https://www.docker.com/products/docker-desktop)
- [Git](https://git-scm.com/)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/RubenCoDev/FizzBuzzAplication.git
   
2. Change into the project directory:

    ```bash

    cd FizzBuzzAplication

3. Copy the .env.example file and rename it to .env:

    ```bash

    cp .env.example .env

4. Install PHP dependencies:

    ```bash

    docker run --rm -v $(pwd):/app composer install

5. Modify permissions on storage:

    ```bash

    chmod -R 777 storage

6. Run the Laravel Sail installation command:

    ```bash

    ./vendor/bin/sail up -d

7. Generate application key:

    ```bash

    ./vendor/bin/sail artisan key:generate

## Usage
- To start the application, run:

    ```bash

    ./vendor/bin/sail up -d

- To stop the application, run:

    ```bash

    ./vendor/bin/sail down

## Accessing the Application

Once the application is running, you can access it in your web browser at http://localhost.

## Accessing Fizz Buzz

Once the application is running, you can access it in your web browser at http://localhost/api/fizzbuzz.

## Running Tests

- To run the application's tests, execute the following command:

    ```bash

    ./vendor/bin/sail test

## Additional Information

For more information on Laravel Sail and Docker, refer to the following documentation:

[Laravel Sail Documentation](https://laravel.com/docs/10.x/sail)
