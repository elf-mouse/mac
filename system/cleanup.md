[Cleanup](http://stackoverflow.com/questions/29930198/can-i-delete-data-from-ios-devicesupport)

```sh
df -h         #查看整个硬盘的大小 ，-h表示人可读的
du -d 1 -h    #查看当前目录下所有文件夹的大小 -d 指深度，后面加一个数值
```

## [Problem with Kernel Task - EI Capitan](https://discussions.apple.com/thread/7253639)

0. Reboot into recovery mode (Command + R on boot prior to startup chime), select __Utilities/Terminal__, `csrutil disable <Enter>` (repeat process, use `csrutil enable` after removing the file), reboot.
1. Go to About this mac under the apple in the upper left and click on More info
2. Click on system report
3. make a note of what it says after Model Identifier (MacBookPro8,2 is mine).
4. From the Root drive (not home folder): – System  `Library – Extensions – IOPlatformPluginFamily.kext (alt-click/View Contents) – Plugins – ACPI_SMC_PlatformPlugin.kext – View Contents – Resources` -– find the name from step 3 and move it to a folder that you can find again if needed.
5. Restart and you’re done (other than enabling SIP).

## 磁盘被 `kernel_task` 写满

⚠️注意1：目录 `/System/Library/Caches/com.apple.coresymbolicationd` 需要 _root_ 才能访问 普通管理用户是无法访问和操作的。访问方法最后介绍。

⚠️注意2：本方法仅供有需求的人参考，不一定适用于所有情况。

终端登录root并删除data文件方法：

1. 打开终端
2. 获得root权限 `sudo -s`
3. 获取root权限成功后可以操作目标目录 `cd /System/Library/Caches/com.apple.coresymbolicationd`
4. 查看目标目录下data文件的大小 `du -d 1 -h`
5. rm data
6. 重启电脑
