# My Bussiness PUSH #

1. Business targer - reduction of phone calls between customer (user) and employer (admin). 

2. Data Model:
 - create user/admin by FOSUserBundle update with email and phone (add during registration)
 - message system by FOSMessageBundle
 - class Commission: 
    - id
    - KERG number
    - id_admin
    - id_user
    - id_status
    - title
    - add_date
    - status_date

 - class Status:
    - id
    - title

3. Views:
    - main page: login or registration
    - alffer login -> user main page with all commissions concerns this user
    - if is grnated -> access to admin penel 
    Admin panel:
      3 main funcitons:
        - add commission
        - see all commissions
        - all actions about status (index, new, edit, show)

4. Processes

    Aplication send message and email to customer every single change status for commission.

5. Screenshots:
![Main_page](https://github.com/dominikgrabinski/My_Order_BOX/blob/master/web/screenshots/My_Business_PUSH.png)
![User_page](https://github.com/dominikgrabinski/My_Order_BOX/blob/master/web/screenshots/User_page.png)
![Admin_panel](https://github.com/dominikgrabinski/My_Order_BOX/blob/master/web/screenshots/Admin_panel.png)

