rIPAM diff Description 
===========	
rIPAM is a fork of phpipam by Miha Petkovsek (miha.petkovsek@gmail.com // http://phpipam.net) 
It was started as a result of custom features needed on an existing phpipam installation, while not being features needed in a mainstream IPAM. 
With time, some of the features might be used as patches against phpipam.
Forked by jon@runnane.no // http://runnane.no

Original README following beneath:

Description 
============
phpipam is an open-source web IP address management application. Its goal is to provide light and simple |P address management application. 
It is ajax-based using jQuery libraries, it uses php scripts and javascript and some HTML5/CSS3 features, so some modern browser is preferred to be able to display javascript quickly and correctly...

Features and tools:
- Section / Subnet separation
- Subnet nesting
- IPv4/IPv6 support
- Subnet ICMP/telnet scanning and automatic status updates
- Displays free range and number of clients
- Subnet statistics
- User management
- AD/LDAP/OpenLDAP authentication support
- E-Mail notification with IP details
- Import IP addresses from XLS / CSV file
- Export IP database to XLS file
- IPv4/IPv6 calculator
- Search IP database
- IP request module
- Custom IP address fields
- and much more...

What it does not do:
- Updates DNS server

License
=======
phpipam is released under the GPL v3 license, see misc/gpl-3.0.txt.

Requirements
============
- Apache2 web server with php and mod_rewrite support (set "AllowOverride all" in vhost config)
- Mysql server (5.1+)
- PHP version 5.2+ with following modules (On windows php 5.3 is required!)
	+ + mysqli              : Adds support for the improved mySQL libraries
    + + session             : Adds persistent session support
    + + gmp                 : Adds support for dev-libs/gmp (GNU MP library) -> to calculate IPv6 networks
    + + ldap                : Adds LDAP support (Lightweight Directory Access Protocol)
    + + json				: Adds supports for JSON data-interexchange format
    + + SimpleXML			: Adds SimpleXML support for parsin XML files
    + + gettext				: Add support for gettext translations
- PHP PEAR support (dev-php/pear)


Install 
=======
- see INSTALL.txt file for details

Update 
=======
- see UPDATE file for details

Demo page
============
http://demo.phpipam.net

Default user
============
Admin / ipamadmin

Changelog
=========
See misc/CHANGELOG

Roadmap
=========
See misc/Roadmap

Contact
=======
miha.petkovsek@gmail.com

special thank also to Hosterdam team (http://www.hosterdam.com) for VPS server 
that is used for development of phpIPAM and for demo site.
	
And also to all users that filed a bug report / feature report and helped with feature testing!
