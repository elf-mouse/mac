Q: `dyld: Library not loaded: /usr/local/opt/openssl/lib/libssl.1.0.0.dylib`

A1: 安装 `openssl.rb`

```sh
brew install https://github.com/tebelorg/Tump/releases/download/v1.0.0/openssl.rb
```

A2: 切换 `openssl` 版本

```sh
brew switch openssl 1.0.2t
```

---

Q: `dyld: Library not loaded: /usr/local/opt/icu4c/lib/libicui18n.64.dylib`

A: `brew upgrade icu4c`

---

Q: `dyld: Library not loaded: /usr/local/opt/icu4c/lib/libicui18n.63.dylib`

A:

1. cd to Homebrew's formula directory

   ```sh
   cd $(brew --prefix)/Homebrew/Library/Taps/homebrew/homebrew-core/Formula
   ```

2. Find desired commit (version 63 for icu4c) to checkout

   ```sh
   git log --follow icu4c.rb
   ```

3. Checkout to a new branch

   ```sh
   git checkout -b icu4c-63 e7f0f10dc63b1dc1061d475f1a61d01b70ef2cb7
   ```

4. Reinstall the library with the new version

   ```sh
   brew reinstall ./icu4c.rb
   ```

5. Switch to the reinstalled version

   ```sh
   brew switch icu4c 63.1
   ```

6. Checkout back to master

   ```sh
   git checkout master
   ```

---

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

```md
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

```sh
rm /Users/yiban/Library/Caches/Homebrew/libgphoto2-2.5.10.tar.bz2
rm /Users/yiban/Library/Caches/Homebrew/little-cms2-2.7.tar.gz
```

```md
手动下载 http://sourceforge.net/projects/gphoto/files/
手动下载 https://sourceforge.net/projects/lcms/files/

复制到 /Users/yiban/Library/Caches/Homebrew/
```

---

Q: If Homebrew was updated on Aug 10-11th 2016 and brew update always says Already up-to-date. you need to run:

A: `cd "$(brew --repo)" && git fetch && git reset --hard origin/master && brew update`

---

Q: Can't uninstall filezilla / "No Cask with this name exists"

A: Delete the `$(brew --prefix)/Caskroom/filezilla` directory worked

---

Q: zsh: no matches found

A: Edit `.zshrc`: `setopt no_nomatch`

---

Q: bad CPU type in executable

A: For Mac M1 - install Rosetta `softwareupdate --install-rosetta`

---

Q: fatal error: 'pcre2.h' file not found
A: For Mac M1 - `ln -s /opt/homebrew/include/pcre2.h /opt/homebrew/Cellar/php@7.4/7.4.32/include/php/ext/pcre/pcre2.h `
