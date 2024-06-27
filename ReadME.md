## Symfony Geometry Calculator

This repository showcases a Symfony-based solution for a geometry calculator task. The goal is to demonstrate best programming practices, skills, and techniques in solving a single task.

## Technologies
- PHP >=8.1 
- Symfony 6.4

### How to run the application

Below are the steps you need to successfully set up and run the application.

- Clone the app from the repository and cd into the root directory of the app
- Check into the project directory and run composer install
- Install Composer
```
 composer install
```
### Run the Symfony server

```bash
    symfony server:start
 ```


## Task Overview

Create a Symfony application that calculates surface and diameter for Circle and Triangle shapes. Implement a service for calculating the sum of areas and diameters for two given objects.

## Solution Structure

###  Models
 - Circle.php
 - Triangle.php

### Controllers
 - CircleController.php
 - TriangleController.php

### Service

   - GeometryCalculator.php

### Payload
 #### GET /circle/{radius}

 Request:
    GET /circle/2.0

Response:
```json
    {
    "type": "circle",
    "radius": 2.0,
    "surface": 12.56,
    "circumference": 12.56
    }
```

#### GET /triangle/{a}/{b}/{c}

Request:
  GET /triangle/3.0/4.0/5.0

Response:
```json
{
  "type": "triangle",
  "a": 3.0,
  "b": 4.0,
  "c": 5.0,
  "surface": 6.0,
  "circumference": 12.0
}
```