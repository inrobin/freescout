# FreeScout — Free Self-Hosted HelpScout Alternative

![FreeScout](https://raw.githubusercontent.com/freescout-helpdesk/freescout/master/public/img/banner.png)

**FreeScout** is a free open source help desk and shared inbox written in PHP (Laravel 5.5 framework), full analog of HelpScout. FreeScout is currently under active development. As you may know Help Scout on November 29, 2018 will force all free accounts to upgrade to the paid plan, so developing a free open source alternative is kind of urgent. If you would like to join efforts, just fork this repo and we will contact you.

[![HitCount](http://hits.dwyl.io/freescout-helpdesk/freescout.svg)](http://hits.dwyl.io/freescout-helpdesk/freescout)

## Features

**FreeScout** will provide the same set of features as a HelpScout: help desk tools, email management and analytics. Also **FreeScout** will provide several extra features in addition to the standard HelpScout features:

  * Sending message to multiple customers at once.
  * Starred conversations.
  * Trash section.
  * Quick changing of customer.
  * Option allowing to decide what to do after sending a reply: open next conversation or stay in the current.
  
You can suggest features or vote for features [here](https://feedback.userreport.com/de1fc910-a7f3-41b1-ada5-466ac6316fe2/)

## Project Homepage

[https://github.com/freescout-helpdesk/freescout](https://github.com/freescout-helpdesk/freescout)

## Requirements

  * PHP >= 7.0.0
  * MySQL/MariaDB >= 5.0

## Installation Guide

Coming as soon as the first stable version will be released.

## Plugins

List of available FreeScout plugins: https://packalyst.com/s/freescout

## Development Guide

FreeScout development rules and guidelines:

  * Feel free to impelement and push any HelpScout functionality which is not implemented yet.
  * Please stick to the HelpScout design and functionality, no need to reinvent the wheel. FreeScout provides all the HelpScout features out of the box plus several [most needed extra features](https://feedback.userreport.com/de1fc910-a7f3-41b1-ada5-466ac6316fe2/). Additional features are added by developing plugins for FreeScout as standard Laravel packages.
  * FreeScout API must be completely equal to [HelpScout's API](https://developer.helpscout.com/help-desk-api/)
  * All strings must be translatable.
  * Design must be mobile friendly.
  * In copmoser.json make sure to specify only exact versions of packages (Example: 1.0.2)

## Plugins Development

1. Develop your plugin as standard Laravel package: [Laravel package development guide](https://laravel.com/docs/5.5/packages). Make sure to give your plugin name starting with **"freescout-"**.
2. Add your plugin to the [Laravel packages repository](https://packalyst.com/).

## Screenshots

Coming soon
