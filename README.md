# Charles Hopkins ABC Contact Rolodex
This is a simple app for saving contacts.


## Installation
To install
1. Install composer for autoload
2. Setup database, create user, and grant the user full access to the new database.
```
create database abc;
create user 'abc'@'localhost' identified by 'abc_password';
grant all on abc.* to 'abc'@'localhost';
```
3. Update the /data/config.json file with the database info.
4. run install.php
5. Setup your http server to point to the /public directory
