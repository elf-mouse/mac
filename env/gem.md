## Uninstall all installed gems

**Rubygems >= 2.1.0**

```sh
gem uninstall -aIx
```

**Rubgems < 2.1.0**

```sh
for i in `gem list --no-versions`; do gem uninstall -aIx $i; done
```

---

Q:

```
ERROR:  While executing gem ... (TypeError)
    no implicit conversion of nil into String
```

A:

```sh
gem update --system
```

---

Q:

```
ERROR:  While executing gem ... (Gem::FilePermissionError)
    You don't have write permissions for the /Library/Ruby/Gems/2.x.x directory.
```

A:

```sh
sudo gem install -n /usr/local/bin XXX
```
