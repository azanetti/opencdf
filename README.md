Contact Discovery Framework
===========================

The **Contact Discovery Framework**, *CDF in short*, is a solution to get contact information from entities or services by using [Domain Name System](http://en.wikipedia.org/wiki/DNS) (DNS).
CDF uses DNS TXT records to store contact information associated to a domain thus an entity.

Example
-------

```
opencdf.org. IN TXT "v=cdf1 c:email contact@opencdf.org"
```

Why using DNS to store information?
-----------------------------------

DNS is a distributed, delegated, cached, fault tolerance database.

How to setup CDF records?
-------------------------

CDF records are new TXT DNS records added to your domain zone file.

The first part of a CDF records is the CDF version used.
`v=cdf1` means version 1 of CDF.

CDF attributes followed the version.

Each piece of contact information can be defined by its own attribute.

For instance, `c:email` defines the email that should be used to contact the entity.

Then, following the attribute name is the actual value of the attribute.

List of the current supported attributes
----------------------------------------

Attribute | Description | Example
--- | --- | ---
c:email | Email address | `opencdf.org. IN TXT "v=cdf1 c:email contact@opencdf.org"`
c:phone | Phone | `opencdf.org. IN TXT "v=cdf1 c:phone +33387000000"`
c:geo | Geolocation (latitude,longitude) | `opencdf.org. IN TXT "v=cdf1 c:geo 49.1003985,6.1835716"`
c:name | |
c:addr.street | |
c:addr.city | |
c:addr.zip | |
c:addr.state | |
c:addr.country | |

Some attributes can be used more than once.
