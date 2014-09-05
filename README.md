# ![stackExchange-logo](https://d13yacurqjgara.cloudfront.net/users/237691/avatars/mini/se-logo_256-circle.png?1393431053) Stack Exchange v2.2 API Client
> PHP library for interacting with the [Stack Exchange](http://stackexchange.com/)'s version 2.2 REST API.

[![Build Status](https://travis-ci.org/benatespina/StackExchangeApiClient.svg)](https://travis-ci.org/benatespina/StackExchangeApiClient)
[![Coverage Status](https://img.shields.io/coveralls/benatespina/StackExchangeApiClient.svg)](https://coveralls.io/r/benatespina/StackExchangeApiClient)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/benatespina/StackExchangeApiClient/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/benatespina/StackExchangeApiClient/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/1ebace1c-be1b-4a53-bef8-78d910aa2200/mini.png)](https://insight.sensiolabs.com/projects/1ebace1c-be1b-4a53-bef8-78d910aa2200)

***This is a work in progress library and some features are not available yet.***

Usage
-----

If you check out the [API documentation](http://api.stackexchange.com/docs), you will see that there are some calls that
do not need authentication, but nevertheless there are other calls that need the authentication. 
For this reason, I have exposed two different use examples with two variants.

First of all, you have to instantiate the Client that to be used like a parameter of  the constructor of the API objects.
And then, after create the API object, simply you have to call the different methods that this object offers.

The only difference between two variants is when you are creating the `Client`. Without authentication, the client
constructor used `null` value by default. 

### Without authentication:

        $client = new Client();
        $answerApi = new AnswerAPI($client);

        $answers = $answerApi->getAnswersById(array('2359967', '1932551'));

*The second parameter has been omitted, because the method `getAnswersById` already contains by default the minimum
params to do a proper request: `array('site' => 'stackoverflow', 'sort' => 'activity')`*

Current status
---------------

This API has many methods, so the status of the calls are separated **by type** in the following files:
 
 - [Access Tokens](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/access_tokens.md)
 - [Answers](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/answers.md)
 - [Badges](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/badges.md)
 - [Comments](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/comments.md)
 - [Errors](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/errors.md)
 - [Events](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/events.md)
 - [Filters](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/filters.md)
 - [Flag Options](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/flag_options.md)
 - [Inbox Items](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/inbox.md)
 - [Network Users](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/network_users.md)
 - [Merge History](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/merge_history.md)
 - [Network Activity](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/network_activity.md)
 - [Notifications](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/notifications.md)
 - [Posts](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/posts.md)
 - [Privileges](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/privileges.md)
 - [Questions](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/questions.md)
 - [Question Timelines](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/question.md)
 - [Reputation](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/reputation.md)
 - [Reputation History](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/reputation_history.md)
 - [Revisions](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/revisions.md)
 - [Search Excerpts](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/search_excerpts.md)
 - [Sites](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/sites.md)
 - [Suggested Edits](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/suggested_edits.md)
 - [Tags](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tags.md)
 - [Tag Scores](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tag_scores.md)
 - [Tag Synonyms](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tag_synonyms.md)
 - [Tag Wikis](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/tag_wikis.md)
 - [Top Tags](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/top_tags.md)
 - [Users](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/users.md)
 - [User Timeline](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/user.md)
 - [Write Permissions](https://github.com/benatespina/StackExchangeApiClient/blob/master/Resources/doc/write_permissions.md)

Tests
-----

This library is completely tested by **[PHPSpec][1], SpecBDD framework for PHP**.

Because you want to contribute or simply because you want to throw the tests, you have to type the following command
in your terminal.

    phpspec run -fpretty

*Depends the location of the `bin` directory (sometimes in the root dir; sometimes in the `/vendor` dir) the way that
works every time is to use the absolute path of the binary `vendor/phpspec/phpspec/bin/phpspec`*

Contributing
------------

This projects follows PHP coding standards, so pull requests must pass PHP Code Sniffer and PHP Mess Detector
checks. In the root directory of this library you have the **custom rulesets** ([ruleset.xml]() for PHPCS and
[phpmd.xml]() for PHPMD).

There is also a policy for contributing to this project. Pull requests must
be explained step by step to make the review process easy in order to
accept and merge them. New methods or code improvements must come paired with [PHPSpec][1] tests.

If you would like to contribute it is a good point to follow Symfony contribution standards,
so please read the [Contributing Code][2] in the project
documentation. If you are submitting a pull request, please follow the guidelines
in the [Submitting a Patch][3] section and use the [Pull Request Template][4].

[1]: http://www.phpspec.net/
[2]: http://symfony.com/doc/current/contributing/code/index.html
[3]: http://symfony.com/doc/current/contributing/code/patches.html#check-list
[4]: http://symfony.com/doc/current/contributing/code/patches.html#make-a-pull-request

Credits
-------
Inspirated by my friend [Gorka Laucirica](http://gorkalaucirica.net)'s
[Hipchat v2 Api Client](https://github.com/gorkalaucirica/HipchatAPIv2Client)

Created by **benatespina** - [benatespina@gmail.com](mailto:benatespina@gmail.com).
Copyright (c) 2014
