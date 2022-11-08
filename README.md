# Init the project

    cd /docker  
    docker-compose up --build -d

#### OPTIONAL   
    
    sudo vi /etc/hosts

Append to this file next line  

    127.0.0.1 ushorter.loc


## Install dependencies

    cd /docker  
    docker-compose exec php composer install