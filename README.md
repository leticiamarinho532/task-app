# Tech Challange

## A RESTful API for a task management application (to-do list)

### Sumary

1. Technologies
2. How to use on your machine
    - Cloning
    - Setting Environment Variables
    - Running
3. Important Informations


## **1. Technologies**
1. PHP 8.1
2. Laravel 10.10
4. MYSql 8.0
5. VueJs 3
6. Docker

## **2. How to use on your machine**

#### Cloning
- Install Docker in your location [Docker site](https://docs.docker.com/desktop/).
- Clone this repository.

#### Setting Environment Variables
-  Copy the .env.example to the .env file
#### Rodando

```
Warning: It is not necessary to run commands to install project dependencies as there is already an automatic configuration together with the docker settings.
```

```
Observation: Stop the local apache and mysql for ports 8080 and 3306 be used for the project.
```

- Run this `docker compose up` command in the root folder (where the docker-compose.yaml file is).
- You already have migrations and seeders ready to use! to use them it is necessary to do the step by step mentioned in the `topic tests` to enter the container and then run the command `php artisan migrate --seed`.

## **3. Important Informations**

- Because it is a technical challenge, I put the .env.example (backend) with information that in a real project, this information should not be public. They are only in this location to be easy to test the project.

- In the frontend has some festures not created: refresh list when task is created and deleted and the is no style applied.