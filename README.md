# M2M Connect; SMS => PHP Processing

The EE SMS server accepts SMS/GPRS messages and stores them in XML format. The EE
M2M Connect web-service makes these stored messages available to be downloaded via the
EE SOAP server. Once a message has been downloaded by a SOAP client it can be parsed
and the embedded data extracted, sanitised, validated and stored in a local database. After
the data has been downloaded and stored, then web-page reports can be prepared on demand
by a user.

## Built With

* [SLIM 3](http://www.slimframework.com/) - PHP Framework

## Authors

* **Mykolas Kaminskas** - [Github](https://github.com/Mykolaskam)
* **Vinay Tailor** - [GitHub](https://github.com/vinsta11)
