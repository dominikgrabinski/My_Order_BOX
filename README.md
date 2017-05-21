# My_Order_BOX #

1. Cel biznesowy - zmniejszenie połączeń telefonicznych zleceniodawcy ze zleceniobiorcą
    
    Aplikacja posiada możliwość informowania zleceniodawcy o statusie jego zlecenia/zleceń przez:
       - email 
       - SMS
    
    Admin (właściciel firmy) będzię mógł zmienić status danego zlecenia, o czym zleceniodawca będzie informowany w ww sposób.

2. Model Danych

    Users:
        - admin jako właściciel firmy/wykonawca zlecenia -> jeden do wielu (order)
        - user -> jeden do wielu (order)
        Struktura:
            -id
            -name (name + surname)
            -email
            -phone
            -adress

    Order:

        Struktura:
            -id 
            - numer kat zlecenia (KERG)
            - tytuł
            - id_usera (zleceniodawcy) -> wiele (zamówień) do jendego (usera)
            - id_admina (właściciela) -> wiele (zamówień) do jednego admina/wykonawcy
            - data przyjęcia zamównia
            - id_status -> jeden do jednego (status)
            - data statusu (zmiany statusu)
    
    Status (odnoszący się do Order -> jeden do jednego): 
        id
        tytuł 
        - zgłoszenie pracy
        - odebranie materiałów
        - wykonanie pomiaru 
        - złożenie operatu
        - przekazanie operatu do ośrodka (info nad mocy prawnej od 2 tyg do 1 miesiąca)
        - odebranie operatu z ośrodka
        - przekazanie operatu zleceniodawcy
        - zakończenie zlecenia
    
    Box:
        - id
        - id_admina
        - id_zleceniodawcy
        - id_zamównienia
        - tytul_statusu
        - data_statusu


3. Widoki
    strona logowania

    dla Admina (w postaci tabularycznej):
        pełnoprawny dostęp do wszystkich zleceń o
    dla Uzytkownika (też tabularyczie):
        widok tylko dla zleceń związanych zleceniodawcy

4. Procesy

    Admin: 
    - dodawanie/usuwanie/archiwizowanie zleceń
    - zmiany statusu np w formie rozwilajnego menu, przy zmianie info do zleceniodawcy

    Zleceniodawca (customer)
    - sprawdzenie statusu zlecenia 
    - sprawdzenie historii odnosnie zamówienia
