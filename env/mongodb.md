Q:

```md
Error: couldn't connect to server 127.0.0.1:27017, connection attempt failed: SocketException: Error connecting to 127.0.0.1:27017 :: caused by :: Operation timed out :
connect@src/mongo/shell/mongo.js:257:13
@(connect):1:6
exception: connect failed
```

A: 权限问题

1. 删除 `/data/db` 下的 `.lock` 文件
2. `sudo chown -R 用户名 /data/db`
