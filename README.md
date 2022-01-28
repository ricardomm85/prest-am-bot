docker run --rm --interactive --volume $PWD:/app --tty composer create-project symfony/skeleton xxx

sudo chown -R ricardo:ricardo xxx
sudo chmod -R 775 xxx

composer require bref/bref

docker-compose exec php /bin/bash

https://9prqejzhz3.execute-api.us-east-1.amazonaws.com/


# DEPLOY
composer install --prefer-dist --optimize-autoloader --no-dev && serverless deploy

# ENV Variables
aws ssm put-parameter --region us-east-1 --name '/prest-am-bot/my-parameter' --type String --value 'mysecretvalue' --profile ricardo
```
    provider:
        # ...
        environment:
            MY_PARAMETER: ${ssm:/prest-am-bot/my-parameter}
```
