## To create a self signed server certificate so that can run HTTPS use:

```sh
# Step 1: Generate a Private Key
openssl genrsa -des3 -out server.key 1024

# Step 2: Generate a CSR (Certificate Signing Request)
openssl req -new -key server.key -out server.csr

# Step 3: Remove Passphrase from Key
cp server.key server.key.org
openssl rsa -in server.key.org -out server.key

# Step 4: Generating a Self-Signed Certificate
openssl x509 -req -days 365 -in server.csr -signkey server.key -out server.crt
```

## To create a client certification for client authentication use:

```sh
# Step 1: Create the CA Key and Certificate for signing Client Certs.
openssl genrsa -des3 -out ca.key 4096
openssl req -new -x509 -days 365 -key ca.key -out ca.crt

# Step 2: Create the Client Key and CSR
openssl genrsa -des3 -out client.key 1024
openssl req -new -key client.key -out client.csr

# Step 3: Sign the client certificate with our CA cert.  Unlike signing our own server cert, this is what we want to do.
openssl x509 -req -days 365 -in client.csr -CA ca.crt -CAkey ca.key -set_serial 01 -out client.crt
```
