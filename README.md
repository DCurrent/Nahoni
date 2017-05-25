# Nahoni
PHP library to manage session variables via database. PHP normally stores session data as a polyparous group of delimited variables housed in serialized text files. This system is adequate for most single server applications, but quickly falls apart when greater scaling is required. It is also a difficult system to manage and does not lend well to organization, cleanup, and debugging.

Fortunately, PHP’s allows replacement of its built in functionality via class file overrides. Nahoni (named for the Nahoni Mountain Range) does just that. By leveraging PHP’s class overrides, there is no need for further code modifications in your application once Nahoni is installed. You may continue to use the <code>$_SESSION[]</code> methods as before - the session data will be routed to and from your RDBMS of choice.

Nohoni requires the [Yukon database library](https://github.com/DCurrent/Yukon) . Both are meant for use with MSSQL, but may be easily modified to accommodate other RDBMS if desired. 

