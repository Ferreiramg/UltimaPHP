## UltimaPHP - Ultima Online OpenSource Server

UltimaPHP is a modern Ultima Online server written in PHP 5.4.

This server was created for thoes who ever wanted to create differend addaptations on the core of your shard or even in Ultima Online.

The base idea of how to keep the server written in PHP alive and monitoring the sockets came from Matthew [Ankron, on sphere community].

I decided to help the project and for study propose i've re-scripted the entire socket server to understand how it works and after that i decided to create a lightweight standalone version of the server that runs in any OS easly.

## How to install?

First of all you will need to install PHP 5.4 or greater and MySQL Server 5 or greater (or any database compatible with PDO) on your machine, for that open this links:

* [PHP download page](http://php.net/downloads.php) and get the version of PHP you want to use
* [MySQL dowload page](http://dev.mysql.com/downloads/mysql/) and get the right version of MySQL for your machine.

After install PHP and MySQL on the machine (mysql will ask to create the password or a new user on the instalation), edit the file ```ultimaphp.ini``` as you wish, import the file ```database.sql``` to your database (with some query program, like [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)) and follow the next steps to start the server:

Note 1: The default owner account/password in the database is: test/test
Note 2: Passwords is allways stored in MD5 encryption

### Linux

 * Open the terminal and navigate to the root folder of UltimaPHP
 * Type: ```php startserver.php```

### Mac

 * We need someone with mac to help us

### Windows

 * Open the manu bar and open ```cmd```
 * Navigate to PHP installation folder
 * type ```php.exe c:\ultimaphp\instalation\folder\startserver.php```


### Coding padronization

 * All .php files should start with <?php and end with ?>
 * All .php files should have the comment line header
 * All class names starts with UPPERCASE character, IE: class ClassName {...}
 * All method names muust start with LOWERCASE character and all next words start with UPPDERCASE character with no space, IE: goodMethodName()
 * All codes must be idented with tab
 * All codes must be formatted in K&R style before commited, manually or using your preffered tool

### Database padronization

 * All data storage tables must have an ID indexed
 * All secure information, like passwords, must be stored encrypted
 * All relashionship must have an foreign key linkng the table columns
 * All tables names must be LOWERCASE and words separated with underline, IE: good_table_name

### What is already working?

 * Package compression using the Huffman algorythin and the pre-defined Ultima Online Byte Tree
 * Package decompression using the Huffman algorythin and auto-generated Byte Trees
 * Response PING request
 * Disconnect player
 * Login request
 * Login validation trought PDO Database
 * Server list response
 * Get client version information
 * Client selected server handler
 * Character list trought PDO Database (for old and new clients, packet change since client 7.0.13.0)
 * Client selected character handler
 * Enable locked client features
 * Receive the client language (We will use later to create an multi-language shard system)
 * Receive the client Screen Size (I really dunno why... but the client sends anyway before connect to the server)
 * Receive the client flags (I dunno what this is too... but the client sends anyway before connect to the server)
 * Send the player locale and body information to the client
 * Send all skill status to the client (80%, the packet is already done but we need to create the database to store the skills and show the information on the packet to the client)
 * Connecting the client to the world (98%, all packets was done... but no map appeared untill now)
 * Changes cursor color
 * Play music
 * Update status bar info
 * Changes light
 * Changes weather
 * Changes season
 * Enable map diffs on the client
 * Drawn char and player
 * Defines mount speed
 * Show extended status
 * Change war mode
 * Send confirmation login packet
 * Support for Encrypted clients (0%, we founded information about encrypt/decrypt the packets using the BLOWFISH/TWOFISH algorythin so it's an feature improvement)

#### Usefull links that could help you code
 * [Sublime Text 3](http://www.sublimetext.com/3) recommended IDE used to program the server
 * [CodeFormatter](https://github.com/akalongman/sublimetext-codeformatter) used to format the code in K&R style
 * [SocketSniff](http://nirsoft.net/utils/socket_sniffer.html) program i use to monitor an program sockets communication
 * [POL Packet Guide](http://docs.polserver.com/packets/index.php) for learning all about the packages sent trought server and client
 * [Sphere 0.56b leaked code](https:///github.com/necr0potenc3/Sphere) to see how things works
 * [RunUO repository](https://github.com/runuo/runuo) to see how things works
 * [POL Repository](https://github.com/polserver/polserver) to see how things works
 * [NodeUO](https://github.com/chjj/node-uo)

#### CodeFormatter PHP configuration default:
```js
"codeformatter_php_path": "C:/php/php.exe",
"codeformatter_php_options":
{
    "indent_size": 1,
    "indent_with_tabs": true,
    "indent_style": "k&r",
    "newline_before_comment": true,
    "new_line_before": "",
    "new_line_after": "",
    "format_array_nested": true,
    "pear": true,
    "pear_add_header": "",
    "pear_newline_class": true,
    "pear_newline_trait": true,
    "pear_newline_function": false,
    "pear_switch_without_indent": false,
    "lowercase": true,
    "fluent": false,
    "list_class_function": false,
    "equals_align": false,
    "phpbb": false,
    "space_in_paren": false,
    "space_in_square": false
}
```

### Authors
Escriba - Brazil
Ankron  - USA