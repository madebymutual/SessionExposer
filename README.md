# Session Exposer plugin for Craft CMS

Exposes the Craft Session ID


## Installation

To install Session Exposer, follow these steps:

1. Download & unzip the file and place the `sessionexposer` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/madebymutual/SessionExposer.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require https://github.com/madebymutual/SessionExposer`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `sessionexposer` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Session Exposer works on Craft 2.4.x and Craft 2.5.x.

## Session Exposer Overview

Session Exposer allows you to output a visitor's Session ID on the front-end of a Craft CMS website.

Granted, this is a niche requirement, but can be useful if (for example) you need to detect a session ID on a cached Varnish page to load in an AJAX shopping basket.

This isn't a supported plugin, but feel free to adopt and adapt as required.

## Configuring Session Exposer

No configuration required.

## Using Session Exposer

In your template you can expose the session in Twig using `{{ craft.sessionExposer.sessionId }}`

Brought to you by [Mutual](https://madebymutual.com)
