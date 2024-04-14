## Initial Setu
- Ensure Docker is installed on your machine
- Clone the git repository into a local folder of your choice (this example uses /var/www/avrillo)
- `cd /var/www/avrillo`
- `vendor/bin/sail build`
- `vendor/bin/sail up -d`
- `vendor/bin/sail artisan migrate`
- `vendor/bin/sail npm i`
- `vendor/bin/sail npm run dev`

## Checklist
- [x] A rest API that shows 5 random Kayne West quotes (must)
- [x] There should be an endpoint to refresh the quotes and fetch the next 5 random quotes (must)
- [x] Authentication for these APIs should be done with an API token, not using any package. (must)
    - This is my first time using Laravel 11 as a base and it doesn't include API routes etc by default and it seems like Sanctum comes with the installer for API. I tried to remove it as best as possible and it shouldn't be used anywhere but there might be remnants.
- [x] The above features are tested with Feature tests (must)
- [x] The above features are tested with Unit tests (nice to have)
- [x] Provide a README on how we can set up and test the application (must)
- [ ] Implementation of API using Laravel Manager Design Pattern (Plus)
    - I have no experience with this so kept to the way I'm used to for the sake of saving time
- [ ] Making third-party API response quick by cache(Plus)
    - Didn't implement caching specifically due to time constraints, but the frontend does preload the next result to improve speed