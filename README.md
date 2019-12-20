# Breakable_Website
- This is a web app designed to break
### useful commands when using this app
- no need to install and configure apache, instead use phpcli tool
> php -S 127.0.0.1:80 -t .
- to get this webapp to work, you'll have to figure out mysql.
> create table badbird_db (name varchar(20), owner VARCHAR(20), birth DATE, death Date);
> select * from users where name = 'badb';
- alter column 
> ALTER TABLE table_name
  MODIFY column_name column_definition
    [ FIRST | AFTER column_name ];

## to do, create some kind of index 
