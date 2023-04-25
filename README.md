<h1>Zadanie rekrutacyjne Currency-api</h1>

<h3>Uruchom serwer Laravel:</h3>

php artisan serve

Otwórz Postman i wykonaj następujące kroki dla każdego z endpointów:
Endpoint: Autoryzacja

W naszym przypadku nie ma dedykowanego endpointu autoryzacji, ale zamiast tego używamy nagłówka Api-Key. Upewnij się, że dodajesz ten nagłówek do wszystkich żądań, które wykonasz.


<h3>1. Endpoint: Dodanie kursu waluty (POST)</h3>

a) wybierz metodę żądania jako POST.
b) Wpisz: http://127.0.0.1:8000/api/currency-rates.
c) Kliknij na zakładkę Headers i dodaj nowy nagłówek o nazwie Api-Key i wartości your-secret-api-key.
d) Kliknij na zakładkę Body, wybierz raw i ustaw typ danych na JSON.
Wpisz przykład danych w polu tekstowym np:

{
    "currency": "EUR",
    "date": "2023-04-13",
    "amount": 4.66
}

Kliknij na przycisk Send. Powinieneś otrzymać odpowiedź z dodanym kursem waluty.


<h3>2. Endpoint: Lista kursów walut z danego dnia (GET)</h3>

a) Wybierz metodę żądania jako GET.
b) Wpisz: http://127.0.0.1:8000/api/currency-rates?date=2023-04-13.
c) Kliknij na zakładkę Headers i dodaj nowy nagłówek o nazwie Api-Key i wartości your-secret-api-key.
d) Kliknij na przycisk Send. Powinieneś otrzymać odpowiedź z listą kursów walut z danego dnia.

3.
<h3>3. Endpoint: Pobranie kursu dla wybranej waluty z danego dnia (GET)</h3>

a) Wybierz metodę żądania jako GET.
b) Wpisz: http://127.0.0.1:8000/api/currency-rates/EUR?date=2023-04-13.
c) Kliknij na zakładkę Headers i dodaj nowy nagłówek o nazwie Api-Key i wartości your-secret-api-key.
d) Kliknij na przycisk Send. Powinieneś otrzymać odpowiedź z kursem wybranej waluty z danego dnia.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
