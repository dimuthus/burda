Description:

CHIP as a publishing company provides articles on a microsite.
From provided JSON files write a small service which imports the files and stores the data in a local DB.
Read the data from the DB to render a microsite which displays the article in a simple layout.
You have a given local dev environment with PHP 7, MySQL and NGINX based on Docker.
There is also an optional container with Node, NPM & Sass for building the frontend.
Two JSON files are provided in data/json/, one is valid, one is invalid (for error handling).

Backend requirements:
- install docker if not already installed https://docs.docker.com/install/
- start the local environment with 'docker-compose up', the site is available under http://localhost:8080/
- use a composer skeleton, e.g. Symfony
- create the entity class(es) and the table(s) based on the data in the JSON files and save the content to the local DB, e.g. Doctrine
- output the data from the DB using a template engine, e.g. TWIG
- appropriate error handling & logging
- nice to have: test cases

Frontend requirements:
- optional: you can use the Node container for building 'docker exec npm_api npm -v; docker exec npm_api node-sass /var/www/../source.scss /var/www/../target.css'
- create a simple responsive layout using mixins without any libraries (Bootstrap, Foundation, ...), e.g. SASS/LESS
- create a JS Lightbox module to overlay a bigger image size, don't use any existing Lightbox frameworks!
- nice to have: AMP Layout https://amp.dev/

General requirements:
- use the MVC and OOP design patterns
- a working HTML microsite & a working JSON import service
- description on how to setup and run the application 
- description on how to build the frontend