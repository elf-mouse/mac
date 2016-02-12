## Zsh配置

### [oh-my-zsh](https://github.com/robbyrussell/oh-my-zsh)：一套强大的开源zsh配置文件。

```
// 使用curl安装
$ sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
// 或者使用wget安装
$ sh -c "$(wget https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"
// 安装后重新载入配置
$ source .zshrc
```

### [oh-my-zsh主题](https://github.com/robbyrussell/oh-my-zsh/wiki/themes)

oh-my-zsh有多款配套主题，点击前面的主题链接可以看到所有主题。这里主要介绍下agnoster主题。修改zsh配置文件（~/.zshrc）中的主题属性为agnoster即可。

安装这个主题需要额外安装[powerline](https://github.com/powerline/fonts)字体，不然会显示乱码。如果你想隐藏自己的用户名信息，需要在zsh配置文件中设置默认用户。具体安装配置如下：

```
// 修改zsh配置文件
$ vim ~/.zshrc
  ZSH_THEME="agnoster"  //在.zshrc中修改ZSH_THEME
  DEFAULT_USER=username // 在.zshrc中添加或者修改默认用户为自己，开启终端后就不会显示自己的用户名信息
$ source ~/.zshrc       // 重新载入配置文件

// poweline font 安装
$ git clone https://github.com/powerline/fonts.git
$ cd fonts
$ ./install.sh
```

## iTerm2配置

[字体](https://github.com/powerline/fonts)：接着要在iterm2的Perferences中Text中选择常规字体 为consolas字体或者其他你喜欢的字体，非ASCII码字体为powerline字体（一定要是名字中带powerline的字体，不然还是乱码）。如下：

```
Regular Font
14pt Consolas

Non-ASCII Font
12pt Fira Mono
```

[iTerm2配色](https://github.com/mbadolato/iTerm2-Color-Schemes)：从这里可以获取很多别人的配色主题，把整个项目git clone下来，然后在iterm2的Perferences中的Colors最下面的Load Presets中import git下来的schemes文件夹里面itermcolors后缀的文件，自己可以根据自己喜欢调整自己喜欢的颜色，我选的是Fish Tank。

> 快捷键：`command + i`
