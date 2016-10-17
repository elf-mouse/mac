## Github 访问时出现Permission denied (public key)

1. 首先尝试重新添加以前生成的key，添加多次，仍然不起作用。
2. 使用命令`ssh -v git@github.com`测试（或是`ssh -T github`），最后几行显示结果如下：
        ```
        debug1: Authentications that can continue: publickey
        debug1: Next authentication method: publickey
        debug1: Trying private key: /home/username/.ssh/id_rsa
        debug1: Trying private key: /home/username/.ssh/id_dsa
        debug1: Trying private key: /home/username/.ssh/id_ecdsa
        debug1: No more authentication methods to try.
        Permission denied (publickey).
        ```
3. 分析：尝试了3个private key，但都没有成功，最后是导致Permission denied。
4. 查看我的密钥，`ls ~/.ssh/`，会显示出密钥文件，如下
        ```
        bitbucket     config        github.pub    id_rsa.pub
        bitbucket.pub github        id_rsa        known_hosts
        ```
5. 使用`ssh-add -l`查看密钥列表
        ```
        2048 ea:4e:30:d5:60:9e:5e:c7:08:94:c8:a3:bf:53:3c:5b /Users/username/.ssh/id_rsa (RSA)
        ```
6. 发现此处只有一个RSA文件。使用命令将git的RSA添加进去。
        ```sh
        ssh-add ~/.ssh/github
        ```
7. 再次查看，如下，添加成功：
        ```
        2048 ea:4e:30:d5:60:9e:5e:c7:08:94:c8:a3:bf:53:3c:5b /Users/username/.ssh/id_rsa (RSA)
        2048 f2:2b:2d:9c:70:73:94:1d:c7:95:db:d9:09:2e:dc:2a /Users/username/.ssh/github (RSA)
        ```
8. 再使用`ssh -v git@github.com`测试连接，可以看到验证通过：
        ```
        debug1: Authentications that can continue: publickey
        debug1: Next authentication method: publickey
        debug1: Offering RSA public key: /home/username/.ssh/bajie
        debug1: Server accepts key: pkalg ssh-rsa blen 279
        debug1: Authentication succeeded (publickey).
        Authenticated to github.com
        ```
9. 可以使用`clone`、`push`等操作。
