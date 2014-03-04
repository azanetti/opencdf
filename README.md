Contact Discovery Framework
===========================

Purpose
-------

The **Contact Discovery Framework**, *CDF in short*, is a solution to get contact information from entities or services by using [Domain Name System](http://en.wikipedia.org/wiki/DNS) (DNS).
CDF uses DNS TXT records to store contact information.

Example
-------

The following example is a CDF record defining the email address that needs to be used to contact opencdf.org entity:

```
opencdf.org. 600 IN TXT "v=cdf1 c:email contact@opencdf.org"
```

Why using DNS to store information?
-----------------------------------

DNS is a distributed, delegated, cached, fault tolerant service used by all ISP and hosting services.

Using DNS TXT records is a simple and effective way to store and retrieve contact information.

DNS protocol is a low-level, well-known protocol implemented in all programming languages.

How to setup CDF records?
-------------------------

CDF records are new TXT DNS records added to your domain zone file.

The first part of a CDF records is the CDF version used.
`v=cdf1` means version 1 of CDF.

CDF attributes followed the version. Each piece of contact information can be defined by its own attribute.

For instance, `c:email` defines the email that should be used to contact the entity.
Then, following the attribute name is the actual value of the attribute.

List of the current supported attributes
----------------------------------------

Attribute | Description | Example
--- | --- | ---
c:email | Email address | `opencdf.org. 600 IN TXT "v=cdf1 c:email contact@opencdf.org"`
c:phone | Phone | `opencdf.org. 600 IN TXT "v=cdf1 c:phone +33387000000"`
c:geo | Geolocation (latitude,longitude) | `opencdf.org. 600 IN TXT "v=cdf1 c:geo 49.1003985,6.1835716"`
c:name | Contact name | `opencdf.org. 600 IN TXT "v=cdf1 c:name Antony Zanetti"`
c:addr | Full Postal Address | `opencdf.org. 600 IN TXT "v=cdf1 c:addr 57 rue Lothaire, 57000 Metz, France"` |
c:addr.street | Street part of the postal address | `opencdf.org. 600 IN TXT "v=cdf1 c:street 57 rue Lothaire"` |
c:addr.city | City part of the postal address | `opencdf.org. 600 IN TXT "v=cdf1 c:city Metz"` |
c:addr.zip | Zipcode part of the postal address | `opencdf.org. 600 IN TXT "v=cdf1 c:addr.zip 57000"` |
c:addr.state | State part of the postal address | `opencdf.org. 600 IN TXT "v=cdf1 c:addr.state Lorraine"` |
c:addr.country | Country part of the postal address | `opencdf.org. 600 IN TXT "v=cdf1 c:addr.country France"` |

**There is no mandatory attributes** and an attribute can be used more than once if needed.

Copyright
---------

Copyright (c) 2014 Antony Zanetti. Released under the MIT License.