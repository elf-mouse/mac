**Q:** `Uncaught ErrorException: preg_match_all(): JIT compilation failed: no more memory in phar`

**A:** This is a known PHP 7.3 bug.

edit `/path/to/php.ini`, disable PHP PCRE JIT compilation by changing:

```config
;pcre.jit=1
pcre.jit=0
```

---

**Q:**

```sh
dyld: Library not loaded: /usr/local/opt/icu4c/lib/libicui18n.63.dylib
  Referenced from: /usr/local/opt/php@7.2/bin/php
  Reason: image not found
```

**A:**

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
