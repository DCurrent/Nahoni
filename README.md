# Nahoni
PHP library to manage session variables via database. PHP normally stores session data as an assembly of delimited variables housed in serialized text files. This system is adequate for most single server applications, but quickly falls apart when greater scaling is required. It is also a difficult system to manage and does not lend well to organization, cleanup, and debugging.

Fortunately, PHP’s allows replacement of its built in functionality via class file overrides. Nahoni (named for the Nahoni Mountain Range) does just that. By leveraging PHP’s class overrides, there is no need for further code modifications in your application once Nahoni is installed. You may continue to use the <code>$_SESSION[]</code> methods as before - the session data will be routed to and from your RDBMS of choice.

Nohoni requires the [Yukon database library](https://github.com/DCurrent/Yukon) . Both are meant for use with MSSQL, but may be easily modified to accommodate other RDBMS if desired. 

# Install
Note these instructions assume you have already installed the [Yukon database library](https://github.com/DCurrent/Yukon) and have registered an autoload class.

1. Download and extract package.
1. Locate the database folders and run the enclosed scripts with your RDBMS. This will create the needed table and stored procedures.
1. Located the following line in class Session constructor: <code>\dc\yukon\Database()</code>. Adjust the path to suit your application file tree.
1. All PHP session methods are now overridden with the Nahoni library. Start a PHP session and set a session variable. You should be able to locate the session as a table entry in your RDMS.

