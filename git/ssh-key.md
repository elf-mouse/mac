## 本地多个ssh-key的问题

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
4. 在github里添加新生成的key。
5. __需要配置一下访问不同地址的用户__
    ```sh
    ~/.ssh$ sudo vi ~/.ssh/config
    ```
6. 将类似以下内容复制进去保存
    ```
    host github
    user git
    hostname github.com
    port 22
    identityfile ~/.ssh/github
    ```
7. 测试：
    ```sh
    ~/.ssh$ ssh -T github
    ```
8. 链接成功的会提示：
    ```
    You've successfully authenticated, but GitHub does not provide shell access.
    ```

__注解:__

1. 本地的config文件配置事例：
    ```
    host github
    user git
    hostname github.com
    port 22
    identityfile ~/.ssh/github

    host bitbucket
    user git
    hostname bitbucket.org
    port 22
    identityfile ~/.ssh/bitbucket
    ```
2. 一般情况下，都会配置全局的git的username等
    ```sh
    git config --global user.name [username]
    git config --global user.email [email]
    ```
3. 在邮箱不同的情况下，需要配置局部的username：
    ```sh
    git config user.name [username]
    git config user.email [email]
    ```

可以使用 `git config -l` 来查看本地git的配置情况，若要查看局部的username，需要进入对应的文件夹使用该命令。
