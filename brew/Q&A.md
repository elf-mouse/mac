Q: `brew cask uninstall <Cask>` 无效时

A: `brew cask uninstall --force <Cask>`

---

Q: `brew install findutils --with-default-names` ## This will cause 'brew doctor' to issue Warning: Putting non-prefixed findutils in your path can cause python builds to fail.

A: `brew install findutils`

---

Q: Warning: The default Caskroom location has moved to `/usr/local/Caskroom`.

A: `mv /opt/homebrew-cask/Caskroom /usr/local` and `brew cask install --force` them

---

Q:

```
Error: SHA256 mismatch
Expected: 8d8668d432ba595c7466442aec2cf553bdf8782ec171291dbc65717c633a4ef2
Actual: 818a4b8bbcb50878a8b1b9f71b4274d242ab46bf860c74676e98dec1d0248821
Archive: /Users/yiban/Library/Caches/Homebrew/libgphoto2-2.5.10.tar.bz2
To retry an incomplete download, remove the file above.

Error: SHA256 mismatch
Expected: 4524234ae7de185e6b6da5d31d6875085b2198bc63b1211f7dde6e2d197d6a53
Actual: 818a4b8bbcb50878a8b1b9f71b4274d242ab46bf860c74676e98dec1d0248821
Archive: /Users/yiban/Library/Caches/Homebrew/little-cms2-2.7.tar.gz
To retry an incomplete download, remove the file above.
```

A:

```
rm /Users/yiban/Library/Caches/Homebrew/libgphoto2-2.5.10.tar.bz2
rm /Users/yiban/Library/Caches/Homebrew/little-cms2-2.7.tar.gz

手动下载 http://sourceforge.net/projects/gphoto/files/
手动下载 https://sourceforge.net/projects/lcms/files/

复制到 /Users/yiban/Library/Caches/Homebrew/
```
