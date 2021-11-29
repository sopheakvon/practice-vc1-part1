## ROUTE DOCUMENTATION EXAMPLE


### 1. [Sign-in/signup route]
---

| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----  |       :--- |
| POST        | /signup        |  The route to signup the user |
| POST        | /signin        |  The route to signin the user |
| POST        | /logout        |  The route to logout the user |

| GET        | /users        |  The route to get all the user |
| GET        | /users/{id}   |  The route to get user by given id |
| PUT        | /users/{id}   |  The route to update user by giben id|
| DELETE     | /users/{id}   |  The route to delete user|


### 1. [Sign-in/signup route for frontend]

routes: [
    {path: | '/signup', | component: SignupView},
    {path: | '/signin', | component: SigninView},
    {path: | '/logout', | component: LogoutView}
]


