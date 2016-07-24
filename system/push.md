做苹果推送服务器，很重要的一步，就是生成与苹果APNS连接的证书，一般是.pem文件；

1. 首先在苹果开发者中心 生成 aps_devlopment.cer文件；然后下载；双击导入钥匙串；
2. 打开钥匙串 -选择登录--证书--找到 Apple Development iOS Push Server证书右键导出--生成apns_dev_cert.p12文件 不要设置密码
3. 然后 选择 密钥 -- 找到 User下面的--Apple Development iOS Push Server密钥---右键---生成 apns_dev_key.p12文件 不要设置密码
4. 打开终端，把上面的p12文件生成 .pem文件
5. `openssl pkcs12 -clcerts -nokeys -out apns-dev-cert.pem -in apns_dev_cert.p12`  生成apns-dev-cert.pem
6. `openssl pkcs12 -nocerts -out apns-dev-key.pem -in apns_dev_key.p12`   生成apns-dev-key.pem 这个要输入密码，记住输入的密码；
7. `openssl rsa -in apns-dev-key.pem -out apns-dev-key-noenc.pem`  生成 apns-dev-key-noenc.pem 因为上面的 apns-dev-key.pem有密码，这一步生成的就是把密码取消的文件；
9. `cat apns-dev-cert.pem apns-dev-key-noenc.pem > apns-dev.pem` 合并 apns-dev-cert.pem apns-dev-key-nonec.pem 把这两个文件合成 apns-dev-cert.pem ;
10. 最后在服务器端使用apns-dev-cert.pem就可以了；
11. `openssl s_client -connect gateway.sandbox.push.apple.com:2195 -cert apns-dev-cert.pem -key apns-dev-key-noenc.pem` 测试证书是否正常使用 该命令执行结事时：可以直接输入任意字符串，回车 出现closed ；这表示成功可用；否之 打印错误信息；
