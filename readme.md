Backend for simple to do applications...

Available routes:


GET|HEAD  | /                                   |               
GET|HEAD  | api/user                            |               
GET|HEAD  | users                               | users.index   
POST      | users                               | users.store   
GET|HEAD  | users/create                        | users.create  
GET|HEAD  | users/{client_id}/tasks             | tasks.index   
POST      | users/{client_id}/tasks             | tasks.store   
GET|HEAD  | users/{client_id}/tasks/create      | tasks.create  
GET|HEAD  | users/{client_id}/tasks/{task}      | tasks.show    
PUT|PATCH | users/{client_id}/tasks/{task}      | tasks.update  
DELETE    | users/{client_id}/tasks/{task}      | tasks.destroy 
GET|HEAD  | users/{client_id}/tasks/{task}/edit | tasks.edit    
GET|HEAD  | users/{user}                        | users.show    
PUT|PATCH | users/{user}                        | users.update  
DELETE    | users/{user}                        
GET|HEAD  | users/{user}/edit                   