# pars-master

[![Build Status](https://travis-ci.com/pars/pars-master.svg?branch=master)](https://travis-ci.com/pars/pars-master)
[![Coverage Status](https://coveralls.io/repos/github/pars/pars-master/badge.svg?branch=master)](https://coveralls.io/github/pars/pars-master?branch=master)

PARS Master is primarily used for development and testing of the PARS Framework and CMS.
It combines all modules in one project for development.

## Installation

Clone this repository:
```bash
$ git clone https://github.com/pars-framework/pars-master.git
$ cd pars-master
$ git submodule init
$ git submodule update
$ git submodule foreach --recursive git checkout master
```

Install PHP 7.4 for macOS
```bash
$ brew install php@7.4
```

Install composer for macOS
```bash
$ brew install composer
```

Install maria db for macOS
```bash
$ brew install mariadb
```

Install project dependencies
```bash
#navigate to project folder
$ composer install
$ composer update
$ composer run-script serve --timeout=0
```

Add entry to hosts file
```bash
$ sudo nano /etc/hosts
```
```
127.0.0.1       admin.localhost
```

Setup a MariaDB database and user and then open admin.localhost:8080 in a browser and enter db config.
To setup the database you can use MySQL workbench https://www.mysql.com/products/workbench/, command line interface or any other MySQL client.
Done. Now open the project in your favourite editor and start developemnt.

Frontend should be available at [localhost:8080](localhost:8080)

Admin should be available at [admin.localhost:8080](admin.localhost:8080)

## Documentation
work in progress
Browse the documentation online at https://docs.parsphp.org/pars-master/

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you
would like to change.

In general, we follow the "fork-and-pull" Git workflow:
1. Fork the repo on GitHub
2. Clone the project to your own machine
3. Commit changes to your own branch
4. Push your work back up to your fork
5. Submit a Pull request so that we can review your changes

Please refer to the project's guidelines for submitting patches and additions and make sure
to update tests as appropriate.

NOTE: Be sure to merge the latest from "upstream" before making a pull request!

## Support
work in progress
* [Issues](https://github.com/pars/pars-master/issues/)
* [Forum](https://discourse.parsphp.org/)
