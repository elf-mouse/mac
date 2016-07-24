## 通过命令行打DLL

```
mcs -r:/Applications/Unity/Unity.app/Contents/Frameworks/Managed/UnityEngine.dll -target:library /Users/mac/Desktop/DebugUtility/Assets/DebugUtility.cs
```

* `-r`指定了发布时被包含的库的路径，在这个例子中是UnityEngine的库。
* `-target`指定了发布时需要的文件；"library"被用于选着的发布一个DLL。最后，ClassForDLL.cs就是将要被编译的文件。 (假定这个文件是在当前工作目录，如果必要的话你可以指定文件使用的完整路径)。如果一切顺利，生成的DLL文件不久就会出现在源文件的同一文件夹下。

### 如果shell 提示“command not found”,说明未配置命令路径

配置命令路径：`PATH=$PATH:/Applications/Unity/MonoDevelop.app/Contents/Frameworks/Mono.framework/Versions/2.10.11/bin/`
