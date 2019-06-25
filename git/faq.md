**Q:**

```md
fatal: CRLF would be replaced by LF in
```

A1: `.gitattributes`

```config
*.csv eol=crlf
```

A2: `dos2unix`

```sh
dos2unix <filename>
```
