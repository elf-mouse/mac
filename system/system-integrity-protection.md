Apple's documentation covers disabling SIP, About [System Integrity Protection on your Mac](https://support.apple.com/en-us/HT204899).

[An article on lifehacker.com](http://lifehacker.com/how-to-fix-os-x-el-capitans-annoyances-1733836821) lists these steps:

> 1. Reboot your Mac into Recovery Mode by restarting your computer and holding down `Command`+`R` until the Apple logo appears on your screen.
> 2. Click Utilities > Terminal.
> 3. In the Terminal window, type in `csrutil disable` and press `Enter`.
> 4. Restart your Mac.

You can verify if a file or folder is restricted by issuing this ls command using the capital O (and not zero 0) to modify the long listing flag:

```sh
ls -lO /System /usr
```

Look for the __restricted__ text to indicate where SIP is enforced.

By default (=SIP enabled), the following folders are restricted (see [Apple Support page](https://support.apple.com/en-us/HT204899)):

```
/System
/usr
/bin
/sbin
Apps that are pre-installed with OS X
```

... and the following folders are free:

```
/Applications
/Library
/usr/local
```
