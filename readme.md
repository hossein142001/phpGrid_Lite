## System Requirements

phpGrid is operating system independent. It works on both Windows and Linux as long as the following components are installed:
- PHP 5.3 or later
- Apache, Tomcat, or Microsoft IIS web server
- Major relational database such as MySQL/MariaDB, PostgreSQL, SQL Server, Oracle, DB2, SQL Lite, Access etc.

If you are new to Apache/PHP/mySql, consider XAMPP or WAMP. Either installs Apache, PHP, and MySQL in one batch installation and requires almost no configuration for both Windows and Linux operating systems.
## Technical Overview
- **System Environment**: Web-based
- **Intended Audience**: Non-Technical Users, Web Developers,
- **Language**: Multilingual
- **Operating System**: OS Independent
- **Programming Language**: PHP, jQuery, jqGrid, XHTML, SQL
- **Database**: All Modern Relational Database (thru ADOdb)

Since the major system architecture shift in phpGrid version 4, the new version abandons the old programming model which heavily relies on server side scripting, both in rendering and data operations. Much of the datagrid rendering now resides on the client side browser using jQuery and jqGrid. The server side is solely responsible for data CRUD operations. The new version is much more scalable than the previous generation, It also offers more features, such as subgrid and theme roller.

PHP web-based editable datagrid now can be achieved in two lines of code rather than five lines in the previous version. It also use Cascading Style Sheets, or CSS, extensively for display related tasks, a perfect balance between simplicity and features.


## Installation
First and foremost, download the phpGrid from the download page, and then extract the zip file somewhere on your web server.

#### Configuration

Before you begin coding using phpGrid, you must specify database information in conf.php. conf.php is our phpGrid configuration file in which we specify database connection parameters and path to the phpGrid.

Starting phpGrid version 6, The constant names prefiex with “PHPGRID_” to avoid potential naming collison. Please note that in PHP the method name and parameters are case sensitive.

conf.php for phpGrid version 6 and above (find phpGrid version #):

```
define('PHPGRID_DB_HOSTNAME','hostname'); // database host name or TNS name (Oracle only)
define('PHPGRID_DB_USERNAME', 'username'); // database user name
define('PHPGRID_DB_PASSWORD', 'password'); // database password
define('PHPGRID_DB_NAME', 'sampledb'); // database name
define('PHPGRID_DB_TYPE', 'mysql'); // database type
define('PHPGRID_DB_CHARSET','utf8'); // OPTIONAL. Leave blank to use the default charset
````
conf.php for phpGrid version 4, 5, 5.x (find phpGrid version #):

```
define('DB_HOSTNAME','hostname'); // database host name or TNS name (Oracle only)
define('DB_USERNAME', 'username'); // database user name
define('DB_PASSWORD', 'password'); // database password
define('DB_NAME', 'sampledb'); // database name
define('DB_TYPE', 'mysql'); // database type
define('DB_CHARSET','utf8'); // OPTIONAL. Leave blank to use the default charset
````
If you use Apache alias directive or IIS virtual directory, you need to also set SERVER_ROOT value.

Once values in conf.php are set, simply reference phpGrid by adding the following at on top of your PHP code:
```
require_once("phpGrid/conf.php"); // relative path to conf.php without leading slash
```
– or –

```
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) ."/phpGrid/conf.php"); // absolute path to conf.php
```
### Database Type

phpGrid supports wide range of database types. Simply define PHPGRID_DB_TYPE parameter value to your own database type. It can be one of the following strings. The default database type for phpGrid is “mysql”. PHPGRID_DB_TYPE string is case sensitive.

| PHPGRID_DB_TYPE | Description |
| --------------- | ------------- | 
| mysql	 | MySQL (default, using the new MySQLi driver) |
| mysql_dsn | 	MySQL (similar to above but using DSN) |
| odbc_mssql | SQL Server (*nix Only) |
| odbc_mssql_native | SQL Server Windows native (Download PHP SQL Server Driver) |
| oci805 | Oracle (Got TNS?) |
| sqlite | SQLite |
| postgres | PostGreSql |
| access | Microsoft Access |
| pdo_odbc_db2 | DB2 (PDO) |
| db2 | DB2 (Requires IBM_DB2 extension in IBM i environment) |
| db2-dsnless | DB2 DSN-less connection |
| informix | Informix |
| informix72 | Alternative Informix Driver |
| ibase | Firebird/InterBase |
| odbc | Generic ODBC |
 

A full list of supported databases and naming convention are available in ADOdb website. Not required but we encourage users to visit ADOdb website. It helps you understand how phpGrid utilizes it under the hood.
new phpGrid now supports local array data source without using a database.


 

### PHP Grid Oracle 9, 10g, 11g, 12c

When using PHP datagrid for Oracle database with TNS (Transparent Network Substrate), replace the database host name with the TNS Name in conf.php e.g.

```
define('PHPGRID_DB_HOSTNAME', 'YOUR ORACLE TNS NAME');
```

IMPORTANT: SERVER_ROOT

In conf.php, SERVER_ROOT is the value tells your script where to find phpGrid library on web server.

When NOT using Apache alias directive or IIS virtual directory, phpGrid can successfully generate SERVER_ROOT value using the following script in conf.php. You don’t need to do anything. However, you should set SERVER_ROOT manually when use Apache alias directive or IIS virtual directory.

```
define('SERVER_ROOT', str_replace(str_replace('\', '/', realpath($_SERVER['DOCUMENT_ROOT'])),'', str_replace('\', '/',dirname(__FILE__))));
```

### How to set SERVER_ROOT value manually

When you do use Apache alias directive or IIS virtual directory, you need to set SERVER_ROOT value manually.

SERVER_ROOT value is the URL to the phpGrid library folder subtracts the host name. For instance, if the URL to get to the phpGrid is http://www.yoursite.com/phpGrid, or http://localhost/phpGrid, the SERVER_ROOT should be “/phpGrid” – with leading slash.

```
define('SERVER_ROOT', '/phpGrid');
```
Another example, if the URL to phpGrid is http://www.yoursite.com/admin/phpGrid, or http://localhost/admin/phpGrid, the SERVER_ROOT should be “/admin/phpGrid” – with leading slash,

```
define('SERVER_ROOT', '/admin/phpGrid');
```
# phpGrid Constructor
After successful installation, call the constructor similar to the following:

```
$dg = new C_DataGrid("SELECT * FROM Orders", "orderNumber", "Orders");
```
The details of phpGrid constructor is explained below:
```
__constructor($sql, $sql_key=’id’, $sql_table=”, $db_connection=”)
```
+ Parameter(s):
    + **$sql**: SQL SELECT statement. This is the only SQL statement users needs to implement. The SELECT statement must include the primary key as one of the columns if not using the wildcard start(*) in SELECT statement.
This parameter can also be a local array (version 5.5+). See phpGrid local array data source usage example.
    + **$sql_key**: The name of the database table primary key. The default is “id”.
Starting version 6, phpGrid supports composite primary key (Requires Enterprise and higher Licenses) by simply passing an array of string as $sql_key.
Note that composite PK is not supported as foreign key referential in master/detail and subgrid.
    + **$sql_table**: Name of the database table used in the SQL statement. If not defined, the table name is automatically parsed from the SQL statementent.
    + **$db_connection**: Optional. Since version 4.3, the 4th parameter was introduced and used to overwrite connection parameters in conf.php. It allows datagrid to reference to a difference data source on the fly. See Reference to Multiple Databases example for more information on this parameter. If you have only one database, you can safely ignore this parameter.
+ Description:
    + This is our datagrid object constructor. Use this method to create the phpGrid object. Usually this is the first line in your code.
+ Example:

`Do NOT include WHERE clause in $sql. Instead use set_query_filter() method (version 4.2+) to set query filter. If not using the wildcard star(*), the SELECT statement MUST include the primary key as one of the columns.`

## Single primary key:

```
$dg = new C_DataGrid("SELECT * FROM Orders", "orderNumber", 'Orders');
```
– OR –

```
$dg = new C_DataGrid("SELECT * FROM Orders", array("orderNumber"), 'Orders');
```
Composite primary key (Enterprise and higher licenses only) new

```
$dg = new C_DataGrid("SELECT * FROM orderdetails", array("productCode", "orderNumber"), "orderdetails");
```
Check out the composite primary key online example.

## set_query_filter($WHERE)
+ Parameters:
    + $WHERE: Sql WHERE statement to select data conditionally (DO NOT include WHERE keyword).
+ Description:
    + The query filter is essentially the WHERE clause without the WHERE. The method adds WHERE condition an existing Sql SELECT statement. Use this method if you have WHERE clause in your SQL statement. You should use the same SQL syntax, such as single quotes around non-numeric values, and even SQL functions.
+ Remark:
    + DO NOT include keyword “WHERE” the filter. phpGrid automatically adds WHERE to the query.
    + Use on ly SINGLE QUOTE around the filtered value.
+ Example:
```
$dg -> set_query_filter("status='Shipped' AND YEAR(shippedDate) = 2003");
```
# enable_edit() *
* Please note this feature is only available in paid versions.

+ Parameters:
    + $edit_mode: FORM, INLINE, or CELL. The default is FORM.
    + $operations: specify allowed datagrid edit operations. By default, all edit operations are allowed.
        + C = Create
        + R = Review
        + U = Update
        + D = Delete
    + $edit_file: Optional. Use a custom edit file other than the default “edit.php”. Do not set this parameter unless you ABSOLUTELY know what you are doing!
+ Description:
    + When Form edit mode is used, additional icons appear in the data grid footer used for editing. When set to inline mode, the cells in the selected row become editable when the row is clicked. Only a single row can be edited for either mode.
+ Remark:
    + Multiple records can be deleted when multiple select is enabled. See set_multiselect() for more information on this method.
    + For inline edit, the user must press Enter key to save changes
    + In FORM edit mode,  double click triggers the popup edit window to display. In INLINE edit it is a single click to edit, similar to how Excel works. This is a design decision.
    + When edit mode set to ‘CELL’, the datagrid will behave like an Excel spreadsheet. It is advisable to also enable keyboard navigation with enable_kb_nav().
+ Example:
```
$dg -> enable_edit('FORM', 'CRU'); // Everything is allowed but delete
```
It’s also possible to load a custom form in an iframe in a modal window with your own custom CRUD scripts. 

# enable_export()
+ Parameter(s):
    + $type: Export type can be EXCEL, EXCELXML, CSV, or HTML. The default is EXCEL, the native .xls format. EXCELXML is the OpenOffice .xml format.
+ Description:
    + When export is enabled, the export icon appears in the grid footer. The datagrid can be exported in EXCEL, PDF, CSV or HTML format. The Excel is exported in native Excel XML format.  More formats will be supported in the future.
+ Example:
Export in Excel

```
$dg -> enable_export('EXCEL');
```

# form_only() *
* Please note Form-only mode is only available in paid versions. It is supported from version 7.0 and above.

+ Parameter(s):
    + none
+ Description:
    + Display the add form only without the datagrid. The form will remain on the screen and reset after each successful submit.
+ Remark:
       + Must call enable_edit(‘FORM’) prior to form_only().
+ Example:
```
$dg -> enable_edit('FORM') -> form_only();
```
# enable_pagecount()
+ Parameters:
    + $page_count: boolean: true or false.
+ Description:
    + Enable page count in the pager. Default to true. Set to false to optimize performance for very large (e.g. millions) database table.
+ Example:
 

```
$dg -> enable_pagecount(false);
```
