# Project "Ciudad Fluida"

This application reports the state of the roads, recommending routes that include access to people with disabilities. It also allows the programming of trips including departure and arrival times using the preferred means of transport (private vehicle, integrated transport system or bicycle). All this in order to improve the movement of the inhabitants and visitors of Bogotá.

It uses the following technologies:

- Laravel (Php framework):
    - Creation of app admins and super-users
    - Change role of admins and super-users
    - Create new incidents 


- Ruby on Rails (Rails framework)
    - Routes, controllers, views, models for normal users of the app
- Postgresql
    - Roads, streets, places, etc. to generate map on the front end

- Mysql
    - Admins
    - Super-users
    - Users

## Admins and super-users

### PATH

:heavy_check_mark: POST /api/Paths                           Agrega un nuevo camino con sus respectivos coordenadas

:heavy_check_mark: GET /api/ Paths                            Obtiene toda la lista de los caminos disponibles

:heavy_check_mark: GET /api/ Paths /{id}                     Obtiene un camino en específico y sus coordenadas

:heavy_check_mark: PATCH /api/ Paths /{id}                 Modifica las coordenas de un camino

:heavy_check_mark: DELETE /api/ Paths /{id}                Elimina un camino

### DIRECTION

:heavy_check_mark: POST /api/Directions                      Agrega una dirección en coordenadas a la base de datos

:heavy_check_mark: GET /api/ Directions                 Obtiene todas las direcciones

:heavy_check_mark: GET /api/ Directions/{id}               Obtiene una dirección con sus coordenadas

:heavy_check_mark: PATCH /api/ Directions/{id}          Modifica las coordenadas de una dirección

:heavy_check_mark: DELETE /api/ Directions/{id}        Elimina una dirección
### ROUTE

:heavy_check_mark: POST /api/Routes Crea una nueva ruta

:heavy_check_mark: GET /api/ Routes                              Muestra todas las rutas, su nombre y su camino

:heavy_check_mark: GET /api/ Routes /{id}                    Muestra una ruta con su respectivo nombre y camino

:heavy_check_mark: PATCH /api/ Routes/{id} Modifica una ruta ya sea su nombre o su camino

:heavy_check_mark: DELETE /api/ Routes /{id} Elimina una ruta
### SCHEDULE

:heavy_check_mark: POST /api/Schedules                      Agrega un horario ya sea de Transmilenio, sitp o alimentador     

:heavy_check_mark: GET /api/ Schedules                        Obtiene todos los horarios

:heavy_check_mark: GET /api/ Schedules /{id}              Obtiene un horario en día y hora

:heavy_check_mark: PATCH /api/ Schedules /{id}         Modifica el día o la hora de un horario

:heavy_check_mark: DELETE /api/ Schedules /{id}        Elimina un horario
### STOP

:heavy_check_mark: POST /api/Stops                               Agrega un paradero ya sea de Transmilenio, sitp o alimentador

:heavy_check_mark: GET /api/ Stops                                 Obtiene todos los paraderos

:heavy_check_mark: GET /api/ Stops /{id}                       Obtiene un paradero con su respectivo nombre

:heavy_check_mark: PATCH /api/ Stops /{id}                 Modifica el nombre o la dirección que está asociada al paradero

:heavy_check_mark: DELETE /api/ Stops /{id}                 Elimina un paradero
### BIKE ROUTE

:heavy_check_mark: POST /api/BiciRoutes                      Agrega una cicloruta y le asocia su camino

:heavy_check_mark: GET /api/ BiciRoutes                       Muestra todas las ciclorutas

:heavy_check_mark: GET /api/ BiciRoutes /{id}             Muestra una cicloruta con su camino asociado

:heavy_check_mark: PATCH /api/ BiciRoutes /{id}        Modifica el nombre de la cicloruta y/o su camino asociado

:heavy_check_mark: DELETE /api/ BiciRoutes /{id}       Elimina una cicloruta
### CAR ROUTE

:heavy_check_mark: POST /api/ CarRoutes                     Agrega una ruta vehicular, su nombre y le asocia un camino

:heavy_check_mark: GET /api/ CarRoutes                       Muestra todas las rutas vehiculares

:heavy_check_mark: GET /api/ CarRoutes /{id}             Muestra una ruta vehicular

:heavy_check_mark: PATCH /api/ CarRoutes /{id}        Modifica el nombre o el camino asociado de una ruta vehicular

:heavy_check_mark: DELETE /api/ CarRoutes /{id}       Elimina una ruta vehicular
### TRANSMILENIO

:heavy_check_mark: POST /api/Transmilenios              Agrega un Transmilenio con su nombre, paradas, horarios y ruta

:heavy_check_mark: GET /api/ Transmilenios                Usuario solicita todos los transmilenios

:heavy_check_mark: GET /api/ Transmilenios /{id}      Usuario solicita un Transmilenio

:heavy_check_mark: PATCH /api/ Transmilenios /{id} Modifica Transmilenio ya sea nombre, parada, horario y/o ruta

:heavy_check_mark: DELETE /api/ Transmilenios /{id} Elimina un Transmilenio
### SITP
:heavy_check_mark:	POST /api/Sitps 			Agrega un sitp con su nombre, paradas, horarios y ruta

:heavy_check_mark:	GET /api/ Sitps			Usuario solicita todos los sitp

:heavy_check_mark:	GET /api/ Sitps /{id}		Usuario solicita un sitp

:heavy_check_mark:	PATCH /api/ Sitps /{id}		Modifica un sitp, su nombre, paradas, horarios y/o rutas

:heavy_check_mark:	DELETE /api/ Sitps /{id}		Elimina un sitp

### ALIMENTADOR

:heavy_check_mark: POST /api/Alimentadors                Agrega un alimentador con su nombre, paradas, horarios y ruta

:heavy_check_mark: GET /api/ Alimentadors                 Usuario solicita todos los alimentadores

:heavy_check_mark: GET /api/ Alimentadors /{id}       Usuario solicita un alimentador

:heavy_check_mark: PATCH /api/ Alimentadors /{id}  Modifica un alimentador, su nombre, paradas, horarios y/o rutas

:heavy_check_mark: DELETE /api/ Alimentadors /{id} Se elimina un alimentador

## User
### FAV ROUTE
:heavy_check_mark: POST /api/Routes                            Un usuario agrega una ruta favorita

:heavy_check_mark: GET /api/ Routes                              Usuario solicita todas sus rutas favoritas

:heavy_check_mark: GET /api/ Routes /{id}                    Usuario solicita una ruta favorita en especifico

:heavy_check_mark: PATCH /api/ Routes /{id}               Usuario modifica una de sus rutas favoritas

:heavy_check_mark: DELETE /api/ Routes /{id}              Usuario elimina una ruta favorita
### FAV DIRECTION
:heavy_check_mark: POST /api/FavDirections               Usuario agrega una dirección favorita

:heavy_check_mark: GET /api/ FavDirections                  Usuario solicita todas sus direcciones favoritas

:heavy_check_mark: GET /api/ FavDirections /{id}       Usuario solicita una de sus direcciones favoritas

:heavy_check_mark: PATCH /api/ FavDirections /{id}  Usuario modifica una dirección favorita

:heavy_check_mark: DELETE /api/ FavDirections /{id}  Usuario elimina una dirección favorita
### USER
:heavy_check_mark: POST /api/Users                               Se agrega un usuario, contraseña, email y teléfono

:heavy_check_mark: GET /api/ Users                                 Se obtiene toda la lista de usuarios

:heavy_check_mark: GET /api/ Users /{id}                       Se obtiene un usuario especifico

:heavy_check_mark: PATCH /api/ Users /{id}                 Usuario modifica sus datos

:heavy_check_mark: DELETE /api/ Users /{id}                  Usuario elimina su cuenta
