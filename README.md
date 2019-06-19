# leakedpassword.com
_An API for validating the leaked status of a given password or hash, based on data from [Have I Been Pwned](https://haveibeenpwned.com)_

View the full documentation here: [leakedpassword.com/documentation](https://leakedpassword.com/documentation/)

## Using the API
There are two basic ways of querying the API. You can send us the unecrypted password and let us sha1 hash it before retrieving the data:
`https://api.leakedpassword.com/pass/{your-clear-text-password}`

Or you can hash the password before sending it to us. In theory this method should be faster, and obviously more secure:
`https://api.leakedpassword.com/sha1/{your-sha1-hashed-password}`

### The response
The typical successful response should look something like this:

```
"password": {
    "leak": true,
    "hash": "7110eda4d09e062aa5e4a390b0a572ac0d2c0220",
    "seen": 1256907
}
```

#### SHA1 format
If you chose to query the API for a sha1 hash, this must be rendered as a hexadecimal number, 40 digits long (Example: `7110eda4d09e062aa5e4a390b0a572ac0d2c0220`). Otherwise the API will return an error:

```
{
    "error": "The hash was not in a valid SHA1 format"
}
```

#### HTTPS
The API cannot be invoked over an unencrypted HTTP connection. The API will return the following error if called from a non-HTTPS connection:
```
{
    "error": "Query from non-secure connection"
}
```

#### General errors
Other unsuccessful queries will return:
```
{
    "error": "Invalid API query"
}
```