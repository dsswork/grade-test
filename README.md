## Grade Test

### Software Stack
- PHP 8.1.23
- MySQL 8.1.0
- Laravel 9.0
- Doctrine 2

### Base Settings
1. Run git clone https://github.com/dsswork/grade-test.git
2. Run cp .env.example .env
3. Set up your settings in .env:
   - DOCKER_NGINX_PORT
   - DOCKER_USERNAME
   - DOCKER_USER_ID
4. Run docker compose build
5. Run docker compose up -d
6. Run docker exec -it Books-app -bash
7. Run composer install
8. Run php artisan key:generate
9. Run php artisan migrate --seed
