# HealthTrack

HealthTrack is a comprehensive health management application designed to help users track doctor visits, treatments, and other health-related activities. The application allows users to create, view and manage events such as doctor visits, routine examinations and medical tests. Users can also track their illnesses and treatments. In addition, users can receive detailed information about their appointments by email.

## Features

* **User Authentication:** Secure user registration and login.
* **Event Management:** Create, update, view, and delete health-related events.
* **Event info:** Send email with details about upcoming events.
* **File Upload:** Attach files such as doctor referrals or test results to events.
* **Responsive Design:** Mobile-friendly design with flexible layout adjustments.
* And more...

## Installation

### Prerequisites

* PHP >= 8.2
* Composer
* Laravel
* Node.js & npm

### Steps

1. Clone the repository

* ```git clone https://github.com/Volodymyr0587/laravel-health-track```

* ```cd laravel-health-track```

2. Install dependencies

* ```composer install```

* ```npm install```

* ```npm run dev```

3. Set up the environment

* ```cp .env.example .env```

* ```php artisan key:generate```

4. Database

* ```create mysql database``` **health_track**

5. Run migrations

* ```php artisan migrate```

6. Create a symbolic link

* ```php artisan storage:link```

7. Serve the application

* ```php artisan serve```

## Usage
Register a new user.

### Creating a Health Event

1. Log in to the application.
2. Navigate to the events page.
3. Click on "Create Event".
4. Fill in the event details.
5. Submit the form to create the event.

### Adding Disease and creating Treatments

To create a 'Treatment', you first need to add (create) a disease in the 'Disease' section, which sounds logical, right? ;) After that, you can choose the disease for which it is from the drop-down list in the "Treatment" section.

### Receive information about events by e-mail

To receive email event information, provide the mail server credentials provided by your Email Delivery Platform, such as mailtrap.io, in the ```.env``` file.
Example:
```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=username from you mailer
MAIL_PASSWORD=password from your mailer
MAIL_FROM_ADDRESS="health@track.com"
MAIL_FROM_NAME="${APP_NAME}"
``` 
By default, messages will be written to ```storage/logs/laravel.log```


Also run the ```php artisan queue:work``` command to send emails asynchronously in the background.

## License

This project is licensed under the MIT License.

## Acknowledgments

    Laravel
    Tailwind CSS
    Flowbite
