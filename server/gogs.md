Q:

```
createdb: could not connect to database template1: could not connect to server: No such file or directory
  Is the server running locally and accepting
  connections on Unix domain socket "/tmp/.s.PGSQL.5432"?
```

A:

```
brew remove postgresql (removed the 8.x)
brew install postgresql
```
