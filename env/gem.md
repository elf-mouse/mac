## Uninstall all installed gems

__Rubygems >= 2.1.0__

```sh
gem uninstall -aIx
```

__Rubgems < 2.1.0__

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

```
gem update --system
```
