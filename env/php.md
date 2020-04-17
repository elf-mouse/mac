**Q:** `Uncaught ErrorException: preg_match_all(): JIT compilation failed: no more memory in phar`

**A:** This is a known PHP 7.3 bug.

edit `/path/to/php.ini`, disable PHP PCRE JIT compilation by changing:

```config
;pcre.jit=1
pcre.jit=0
```
