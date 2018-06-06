# ***honeypot-wasp***

**Table of contents**
*   [Definition](#definition)
*   [Details](#details)
*   [Usage](#usage)
*   [Contact](#contact)

----

## Definition

Simple honeypot that logs access attempts on web server directories.

For an enhanced version with a fake username and password prompt see [honeypot-hornet](https://github.com/urbanware-org/honeypot-hornet).

[Top](#honeypot-wasp)

## Details

Many websites provide administrative access to a management interface for the webmaster, mostly via a sub-directory called `/admin` and also `/login`.

In case your website does not have such a directory (or with a different name), you can create a fake one and use this honeypot to see the access attempts.

[Top](#honeypot-wasp)

## Usage

### Installation

Installing the honeypot is simple.

1.  Edit `honeypot-wasp.php` and change the name of the log file to something less guessable than `logfile.txt`.
    ```php
    $file = 'logfile.txt';
    ```
1.  Create an empty text file with that name.
1.  Rename `honeypot-wasp.php` to `index.php` or `index.html`.
1.  Create the desired directory where you want to install the honeypot on your web server, e. g. `/admin`.
1.  Upload the renamed file as well as the empty text file into that directory.

### Function test

Use your web browser to navigate to the directory on your website which contains the honeypot file. The page will return code **500** (**Internal server error**).

After that the attempted access has been logged into the given log file. For example:

```
[2018-04-28 - 09:42:10] Attempt to access 'https://www.foo.bar/admin'
[2018-04-28 - 09:42:10] IP address: 192.168.1.2
[2018-04-28 - 09:42:10] User agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36
```

[Top](#honeypot-wasp)

## Contact

Any suggestions, questions, bugs to report or feedback to give?

You can contact me by sending an email to <dev@urbanware.org>.

[Top](#honeypot-wasp)
