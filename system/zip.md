You can use zip command in Terminal to zip the files without the `.DS_Store`, `__MACOSX` and other `.*` files.

Open Terminal (search for terminal in spotlight)
Navigate to the folder you want to zip using the cd command
Paste this `zip -r dir.zip . -x ".*" -x "__MACOSX"`

Example: Let's say you have a folder on your desktop called Folder with stuff to zip.
Open terminal and write following commands:

```sh
cd Desktop/Folder
zip -r dir.zip . -x ".*" -x "__MACOSX"
```

Now you have a file called dir.zip without `__MACOSX` and `.*` files in the folder Folder on your desktop.
