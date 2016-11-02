## rvm命令工具

__安装__

```sh
curl -L get.rvm.io | bash -s stable
source ~/.bashrc
source ~/.bash_profile
```

__使用__

```
rvm list known 列出已知的 Ruby 版本
rvm install 2.2.0 安装一个 Ruby 版本
rvm use 2.2.0 切换 Ruby 版本
rvm use 2.2.0 –default  设置为默认版本
rvm list 查询已经安装的ruby
rvm remove 1.8.7 卸载一个已安装版本
```

## gem包管理工具

__常用__

```
gem -v 检查当前gem版本
gem update –system 更新RubyGems软件
gem update #更新所有包
gem list 列出已经安装过的gem
gem uninstall xxx 卸载xxx gem
gem install mysql2 -v 0.2.6 安装mysql的指定版本
```

__其他__

```
gem list d #列出本地以d打头的
gem query -n ”[0-9]” –local #查找本地含有数字的包
gem search log –both #从本地和远程服务器上查找含有log字符串的包
gem search log –remoter #只从远程服务器上查找含有log字符串的包
gem search -r log #只从远程服务器上查找含有log字符串的包
gem help #提醒式的帮助
gem help install #列出install命令 帮助
gem help examples #列出gem命令使用一些例子
gem build rake.gemspec #把rake.gemspec编译成rake.gem
gem check -v pkg/rake-0.4.0.gem #检测rake是否有效
gem cleanup #清除所有包旧版本，保留最新版本
gem contents rake #显示rake包中所包含的文件
gem dependency rails -v 0.10.1 #列出与rails相互依赖的包
gem environment #查看gem的环境
```
