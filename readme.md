Backend for simple to do applications...

Available routes:

+--------+-----------+-------------------------------------+---------------+---------------------------------------------------+--------------+
| Domain | Method    | URI                                 | Name          | Action                                            | Middleware   |
+--------+-----------+-------------------------------------+---------------+---------------------------------------------------+--------------+
|        | GET|HEAD  | /                                   |               | Closure                                           | web          |
|        | GET|HEAD  | api/user                            |               | Closure                                           | api,auth:api |
|        | GET|HEAD  | users                               | users.index   | App\Http\Controllers\ClientController@index       | web          |
|        | POST      | users                               | users.store   | App\Http\Controllers\ClientController@store       | web          |
|        | GET|HEAD  | users/create                        | users.create  | App\Http\Controllers\ClientController@create      | web          |
|        | GET|HEAD  | users/{client_id}/tasks             | tasks.index   | App\Http\Controllers\ClientTaskController@index   | web          |
|        | POST      | users/{client_id}/tasks             | tasks.store   | App\Http\Controllers\ClientTaskController@store   | web          |
|        | GET|HEAD  | users/{client_id}/tasks/create      | tasks.create  | App\Http\Controllers\ClientTaskController@create  | web          |
|        | GET|HEAD  | users/{client_id}/tasks/{task}      | tasks.show    | App\Http\Controllers\ClientTaskController@show    | web          |
|        | PUT|PATCH | users/{client_id}/tasks/{task}      | tasks.update  | App\Http\Controllers\ClientTaskController@update  | web          |
|        | DELETE    | users/{client_id}/tasks/{task}      | tasks.destroy | App\Http\Controllers\ClientTaskController@destroy | web          |
|        | GET|HEAD  | users/{client_id}/tasks/{task}/edit | tasks.edit    | App\Http\Controllers\ClientTaskController@edit    | web          |
|        | GET|HEAD  | users/{user}                        | users.show    | App\Http\Controllers\ClientController@show        | web          |
|        | PUT|PATCH | users/{user}                        | users.update  | App\Http\Controllers\ClientController@update      | web          |
|        | DELETE    | users/{user}                        | users.destroy | App\Http\Controllers\ClientController@destroy     | web          |
|        | GET|HEAD  | users/{user}/edit                   | users.edit    | App\Http\Controllers\ClientController@edit        | web          |
+--------+-----------+-------------------------------------+---------------+---------------------------------------------------+--------------+