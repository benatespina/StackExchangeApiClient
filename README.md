#![stackExchange-logo](https://d13yacurqjgara.cloudfront.net/users/237691/avatars/mini/se-logo_256-circle.png?1393431053) Stack Exchange v2.2 API Client
> PHP library for interacting with the [Stack Exchange](http://stackexchange.com/)'s version 2.2 REST API.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/1ebace1c-be1b-4a53-bef8-78d910aa2200/mini.png)](https://insight.sensiolabs.com/projects/1ebace1c-be1b-4a53-bef8-78d910aa2200)
[![Build Status](https://travis-ci.org/benatespina/StackExchangeApiClient.svg)](https://travis-ci.org/benatespina/StackExchangeApiClient)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/benatespina/StackExchangeApiClient/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/benatespina/StackExchangeApiClient/?branch=master)
[![HHVM Status](http://hhvm.h4cc.de/badge/benatespina/stack-exchange-api-client.svg)](http://hhvm.h4cc.de/package/benatespina/stack-exchange-api-client)
[![Latest Stable Version](https://poser.pugx.org/benatespina/stack-exchange-api-client/v/stable.svg)](https://packagist.org/packages/benatespina/stack-exchange-api-client)
[![Latest Unstable Version](https://poser.pugx.org/benatespina/stack-exchange-api-client/v/unstable.svg)](https://packagist.org/packages/benatespina/stack-exchange-api-client)
[![Total Downloads](https://poser.pugx.org/benatespina/stack-exchange-api-client/downloads.svg)](https://packagist.org/packages/benatespina/stack-exchange-api-client)

***This is a work in progress library and some features are not available yet.***

##Installation
The recommended and the most suitable way to install is through [Composer](https://getcomposer.org/).
Be sure that the tool is installed in your system and execute the following command:
```shell
$ composer require benatespina/stack-exchange-api-client:dev-master
```

##Usage
If you check out the [API documentation](http://api.stackexchange.com/docs), you will see that there are some calls that
do not need authentication, but nevertheless there are other calls that need the authentication.

First of all, you have to instantiate the Client that to be used like a parameter of  the constructor of the API objects.
And then, after create the API object, simply you have to call the different methods that this object offers.

The only difference between with or without authentication is the `Client` constructor. Without authentication the
constructor used the `null` value by default; otherwise, with authentication, firstly, you have to construct the `OAuth`
object that then it passed as parameter in `Client` constructor.

###Without authentication:
```php
$client = new Client();
$answerAPI = new AnswerAPI($client);

$answers = $answerAPI->getAnswersById(array('2359967', '1932551'));
```

*The second parameter has been omitted, because the method `getAnswersById` already contains by default the minimum
params to do a proper request: `['site' => 'stackoverflow', 'sort' => 'activity']`*

###With authentication:
There are two variants to construct the `OAuth2` object:

The first one directly passed the `$key` and `$accessToken`.
```php
$oauth2 = new OAuth2($key, $accessToken);

$client = new Client($oauth2);
$questionAPI = new QuestionAPI($client);

$question = $questionAPI->postQuestion('The title of question', 'The body of the question', ['php', 'api']);
```

But the **recommended** variant is the variant that passes the `$key`, `$clientId`, `$scope`, `$redirectUri` and
the `getAccessToken()`, and returns the token.
```php
$oauth2 = new OAuth2($key, null, $clientId, $scope, $redirectUri);

$client = new Client($oauth2);
$questionAPI = new QuestionAPI($client);

$question = $questionAPI->postQuestion('The title of question', 'The body of the question', ['php', 'api']);
```

##Current status
This API has many methods, so the status of the calls are separated **by type** in the following files:

 - ![progressed.io - 3 methods](http://progressed.io/bar/100)&nbsp;[Access Tokens](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/access_tokens.md)
 - ![progressed.io - 16 methods](http://progressed.io/bar/31)&nbsp;[Answers](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/answers.md)
 - ![progressed.io - 7 methods](http://progressed.io/bar/100)&nbsp;[Badges](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/badges.md)
 - ![progressed.io - 15 methods](http://progressed.io/bar/100)&nbsp;[Comments](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/comments.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/100)&nbsp;[Errors](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/errors.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Events](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/events.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/100)&nbsp;[Filters](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/filters.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Flag Options](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/flag_options.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Inbox Items](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/inbox_items.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Network Users](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/network_users.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Merge History](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/merge_history.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Network Activity](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/network_activity.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Notifications](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/notifications.md)
 - ![progressed.io - 3 methods](http://progressed.io/bar/0)&nbsp;[Posts](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/posts.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Privileges](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/privileges.md)
 - ![progressed.io - 35 methods](http://progressed.io/bar/0)&nbsp;[Questions](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/questions.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Question Timelines](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/question_timelines.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Reputation](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/reputation.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Reputation History](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/reputation_history.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Revisions](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/revisions.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Search Excerpts](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/search_excerpts.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Sites](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/sites.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Suggested Edits](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/suggested_edits.md)
 - ![progressed.io - 6 methods](http://progressed.io/bar/0)&nbsp;[Tags](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tags.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Tag Scores](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tag_scores.md)
 - ![progressed.io - 2 methods](http://progressed.io/bar/0)&nbsp;[Tag Synonyms](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tag_synonyms.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Tag Wikis](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tag_wikis.md)
 - ![progressed.io - 3 methods](http://progressed.io/bar/0)&nbsp;[Top Tags](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/top_tags.md)
 - ![progressed.io - 4 methods](http://progressed.io/bar/0)&nbsp;[Users](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/users.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[User Timeline](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/user_timeline.md)
 - ![progressed.io - 1 methods](http://progressed.io/bar/0)&nbsp;[Write Permissions](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/write_permissions.md)

##Tests
This library is completely tested by **[PHPSpec][1], SpecBDD framework for PHP**.

If you want to run the tests, only you have to run the following command:
```shell
$ vendor/bin/phpspec run -fpretty
```

##Contributing
This projects follows PHP coding standards, so pull requests need to execute the Fabien Potencier's [PHP-CS-Fixer][5]
and Marc Morera's [PHP-Formatter][6]. Furthermore, if the PR creates some not-PHP file remember that you have to put
the license header manually.
```
$ vendor/bin/php-cs-fixer fix
$ vendor/bin/php-cs-fixer fix --config-file .phpspec_cs

$ vendor/bin/php-formatter formatter:use:sort .
$ vendor/bin/php-formatter formatter:header:fix .
```

There is also a policy for contributing to this project. Pull requests must be explained step by step to make the
review process easy in order to accept and merge them. New methods or code improvements must come paired with
[PHPSpec][1] tests.

If you would like to contribute it is a good point to follow Symfony contribution standards, so please read the
[Contributing Code][2] in the project documentation. If you are submitting a pull request, please follow the guidelines
in the [Submitting a Patch][3] section and use the [Pull Request Template][4].

##Credits
Inspirated by my friend [Gorka Laucirica](http://gorkalaucirica.net)'s
[Hipchat v2 Api Client](https://github.com/gorkalaucirica/HipchatAPIv2Client)

Created by **@benatespina** - [benatespina@gmail.com](mailto:benatespina@gmail.com).
Copyright (c) 2014

##Licensing Options
[![License](https://poser.pugx.org/benatespina/stack-exchange-api-client/license.svg)](https://github.com/benatespina/StackExchangeApiClient/blob/master/LICENSE)

[1]: http://www.phpspec.net/
[2]: http://symfony.com/doc/current/contributing/code/index.html
[3]: http://symfony.com/doc/current/contributing/code/patches.html#check-list
[4]: http://symfony.com/doc/current/contributing/code/patches.html#make-a-pull-request
[5]: http://cs.sensiolabs.org/
[6]: https://github.com/mmoreram/php-formatter
