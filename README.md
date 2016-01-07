#![stackExchange-logo](http://files.quickmediasolutions.com/so-images/stackexchange.svg) Stack Exchange v2.2 API Client
> PHP library for interacting with the [Stack Exchange](http://stackexchange.com/)'s version 2.2 REST API.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/1ebace1c-be1b-4a53-bef8-78d910aa2200/mini.png)](https://insight.sensiolabs.com/projects/1ebace1c-be1b-4a53-bef8-78d910aa2200)
[![Build Status](https://travis-ci.org/benatespina/StackExchangeApiClient.svg)](https://travis-ci.org/benatespina/StackExchangeApiClient)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/benatespina/StackExchangeApiClient/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/benatespina/StackExchangeApiClient/?branch=master)
[![Total Downloads](https://poser.pugx.org/benatespina/stack-exchange-api-client/downloads.svg)](https://packagist.org/packages/benatespina/stack-exchange-api-client)
[![Latest Stable Version](https://poser.pugx.org/benatespina/stack-exchange-api-client/v/stable.svg)](https://packagist.org/packages/benatespina/stack-exchange-api-client)
[![Latest Unstable Version](https://poser.pugx.org/benatespina/stack-exchange-api-client/v/unstable.svg)](https://packagist.org/packages/benatespina/stack-exchange-api-client)

***This is a work in progress library and some features are not available yet.***

##Installation
The recommended and the most suitable way to install is through [Composer](https://getcomposer.org/).
Be sure that the tool is installed in your system and execute the following command:
```shell
$ composer require benatespina/stack-exchange-api-client
```

##Usage
If you check out the [API documentation](http://api.stackexchange.com/docs), you will see that there are some calls that
do not need authentication, but nevertheless there are other calls that need the authentication so, this library allows
to instantiate **StackExchange client with or without Authentication**.

`StackExchange` class is a simple facade that provides the library api method wrappers to simplify the use process but,
in case your use case only need for example the AnswerApi method wrapper you can directly create an instance of
`AnswerApi` class.

```php
    $client = new StackExchange(new Authentication('stack-exchange-key', 'stack-exchange-access-token'));
    $answer = $client->answerApi()->answersOfIds(19492059);
    
    $answerApi = new AnswerApi();
    $answer2 = $answerApi->answersOfIds(19492059);
    
    $answer === $answer2            # true
```

##Current status
This API has many methods, so the status of the calls are separated **by type** in the following files:

 - ![progressed.io - 3 methods](http://progressed.io/bar/100)&nbsp;[Access Tokens](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/access_tokens.md)
 - ![progressed.io - 16 methods](http://progressed.io/bar/100)&nbsp;[Answers](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/answers.md)
 - ![progressed.io - 7 methods](http://progressed.io/bar/0)&nbsp;[Badges](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/badges.md)
 - ![progressed.io - 15 methods](http://progressed.io/bar/0)&nbsp;[Comments](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/comments.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Errors](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/errors.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Events](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/events.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Filters](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/filters.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Flag Options](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/flag_options.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Inbox Items](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/inbox_items.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Network Users](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/network_users.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Merge History](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/merge_history.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Network Activity](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/network_activity.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Notifications](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/notifications.md)
 - ![progressed.io - 3 methods](http://progressed.io/bar/0)&nbsp;[Posts](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/posts.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Privileges](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/privileges.md)
 - ![progressed.io - 35 methods](http://progressed.io/bar/0)&nbsp;[Questions](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/questions.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Question Timelines](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/question_timelines.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Reputation](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/reputation.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Reputation History](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/reputation_history.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Revisions](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/revisions.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Search Excerpts](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/search_excerpts.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Sites](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/sites.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Suggested Edits](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/suggested_edits.md)
 - ![progressed.io - 6 methods](http://progressed.io/bar/0)&nbsp;[Tags](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/tags.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Tag Scores](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/tag_scores.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Tag Synonyms](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/tag_synonyms.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Tag Wikis](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/tag_wikis.md)
 - ![progressed.io - 3 methods](http://progressed.io/bar/0)&nbsp;[Top Tags](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/top_tags.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Users](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/users.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[User Timeline](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/user_timeline.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Write Permissions](https://github.com/benatespina/StackExchangeApiClient/blob/master/docs/write_permissions.md)

##Tests
This library is completely tested by **[PHPSpec][1], SpecBDD framework for PHP**.

If you want to run the tests, only you have to run the following command:
```shell
$ vendor/bin/phpspec run -fpretty
```

##Contributing
This project follows PHP coding standards, so pull requests need to execute the Fabien Potencier's [PHP-CS-Fixer][5]
and Marc Morera's [PHP-Formatter][6]. Furthermore, if the PR creates some not-PHP file remember that you have to put
the license header manually. In order to simplify we provide a Composer script that wraps all the commands related with
this process.
```bash
$ composer run-script cs
```

There is also a policy for contributing to this project. Pull requests must be explained step by step to make the
review process easy in order to accept and merge them. New methods or code improvements must come paired with
[PHPSpec][1] tests.

If you would like to contribute it is a good point to follow Symfony contribution standards, so please read the
[Contributing Code][2] in the project documentation. If you are submitting a pull request, please follow the guidelines
in the [Submitting a Patch][3] section and use the [Pull Request Template][4].

##Credits
Created by **@benatespina** - [benatespina@gmail.com](mailto:benatespina@gmail.com).<br>
Copyright (c) 2014, 2016

##Licensing Options
[![License](https://poser.pugx.org/benatespina/stack-exchange-api-client/license.svg)](https://github.com/benatespina/StackExchangeApiClient/blob/master/LICENSE)

[1]: http://www.phpspec.net/
[2]: http://symfony.com/doc/current/contributing/code/index.html
[3]: http://symfony.com/doc/current/contributing/code/patches.html#check-list
[4]: http://symfony.com/doc/current/contributing/code/patches.html#make-a-pull-request
[5]: http://cs.sensiolabs.org/
[6]: https://github.com/mmoreram/php-formatter
