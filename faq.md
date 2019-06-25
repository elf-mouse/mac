**Q:**

```sh
tar (child): *.tar.gz: Cannot open: No such file or directory
tar (child): Error is not recoverable: exiting now
tar: Child returned status 2
tar: Error is not recoverable: exiting now
```

**A:**

```sh
gunzip *.tar.gz
tar xf *.tar
```
