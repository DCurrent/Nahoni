# Nahoni
PHP library to handle session variables through a Relational Database Management System (RDBMS). PHP normally stores session data as an assembly of delimited variables housed in serialized text files on the host server. This system is adequate for most single server applications, but quickly falls apart when greater scaling is required. It is also a difficult system to manage and does not lend well to organization, cleanup, and debugging.

Fortunately you may replace the default session functionality via class file overrides. Nahoni (named for the [Nahoni Mountain Range](http://www.geodata.us/canada_names_maps/maps.php?featureid=KAENM&f=312)) does just that. By leveraging PHP’s class overrides, there is no need for further code modifications in your application once Nahoni is installed. You may continue to use the <code>$_SESSION[]</code> methods as before - the session data will be routed to and from your RDBMS of choice.

Nahoni utilizes [PHP Data Objects (PDO)](https://www.php.net/manual/en/book.pdo.php) for database handling. The underlying code is written for Microsoft SQL Server but is easily adaptable to fit any common RDBMS.  

# Install
Note these instructions assume you have already configured [PDO]((https://www.php.net/manual/en/book.pdo.php) for your RDBMS.

1. Download and extract package.
1. Locate _database_ folder and run the enclosed scripts with your RDBMS. This will create the needed table and stored procedures.
1. Modify <code>\dc\yukon\Database()</code> path in _class Session_ constructor to suit your application file tree.
1. All PHP session methods are now overridden with the Nahoni Library. Start a PHP session and set a session variable. You should be able to locate the session as a table entry in your RDBMS.

