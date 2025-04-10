URL Shortening API - README

Introduction
This is a simple URL shortening API built using PHP Laravel 11.


Requirements
To run this project, you need the following:
	•	PHP 8.0 or higher
	•	Composer
	•	Laravel 11
	•	MySQL
	•	Postman (for API testing)

Setup Instructions
Follow the steps below to run this project on your local machine.

1. Clone the Repository
First, clone the repository to your local machine.

git clone https://github.com/yousufalazad/shortening-url-api.git

2. Install Dependencies
Navigate to the project directory and install the dependencies using Composer.
cd shortening-url-api
composer install

3. Set Up the Environment File
Copy the .env.example file to .env.

4. Configure the Database
Open the .env file and configure the database connection with your database credentials.
Example:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shorten_url_db
DB_USERNAME=root
DB_PASSWORD=

5. Generate Application Key
php artisan key:generate

6. Run Migrations
php artisan migrate

7. Start the Local Development Server
php artisan serve


8. Test the API with Postman

You can now test the API endpoints using Postman.

Encode URL:
	•	Endpoint: POST http://localhost:8000/api/shorten
	•	Request Body (JSON):
{
  "original_url": "https://github.com/yousufalazad/shortening-url-api"
}

•	Response (JSON):
    {
  "shortened_url": "http://short.est/abcd12",
  "original_url": "https://github.com/yousufalazad/shortening-url-api"
}

Decode URL:
	•	Endpoint: GET http://localhost:8000/api/decode/{shortenedUrl}
	•	Replace {shortenedUrl} with the shortened part (e.g., abcd12).
•	Response (JSON):
{
  "original_url": "https://github.com/yousufalazad/shortening-url-api"
}

9. Conclusion

Once you’ve followed these steps, the project should be running on your local machine. You can now shorten URLs and retrieve them using the API.

Feel free to contact me if you need any further assistance 
Yousuf Al Azad
07538123775
London