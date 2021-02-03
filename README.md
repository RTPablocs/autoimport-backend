# Autoimport Backend Application
Based on Slim Skeleton project, with some changes to make it work with a Database,
This app uses PSR-7 implementation, PHP-DI container and Monolog logger

## Getting the app
```bash
git clone https://github.com/RTPablocs/autoimport-backend.git
```

## Running the App (Development)
```bash
cd autoimport-backend/
php -S localhost:8080 public/index.php
```

## Running tha App (Docker)

```bash
cd autoimport-backend
docker-compose up -d 
```

To check if works, you need to point your browser to `localhost:8080` and you'll see a Hello World message


## Working with the app
Simple steps to make the app work
### Database Settings
* First of all, the database settings, they're located in `app/settings.php` use your own Database settings
### Classes
* 
### Actions

### Autowiring

### Routes

### Testing

Now, go get'em, the world awaits your app!