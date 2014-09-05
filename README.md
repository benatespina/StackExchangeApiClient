#Stack Exchange v2.2 API Client
PHP library for interacting with the [Stack Exchange](http://stackexchange.com/)'s version 2.2 REST API.

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
 
 - [Access Tokens](https://github.com/benatespina/blob/master/access_tokens.md)
 - [Answers](https://github.com/benatespina/blob/master/answers.md)
 - [Badges](https://github.com/benatespina/blob/master/badges.md)
 - [Comments](https://github.com/benatespina/blob/master/comments.md)
 - [Errors](https://github.com/benatespina/blob/master/errors.md)
 - [Events](https://github.com/benatespina/blob/master/events.md)
 - [Filters](https://github.com/benatespina/blob/master/filters.md)
 - [Flag Options](https://github.com/benatespina/blob/master/flag_options.md)
 - [Inbox Items](https://github.com/benatespina/blob/master/inbox.md)
 - [Network Users](https://github.com/benatespina/blob/master/network_users.md)
 - [Merge History](https://github.com/benatespina/blob/master/merge_history.md)
 - [Network Activity](https://github.com/benatespina/blob/master/network_activity.md)
 - [Notifications](https://github.com/benatespina/blob/master/notifications.md)
 - [Posts](https://github.com/benatespina/blob/master/posts.md)
 - [Privileges](https://github.com/benatespina/blob/master/privileges.md)
 - [Questions](https://github.com/benatespina/blob/master/questions.md)
 - [Question Timelines](https://github.com/benatespina/blob/master/question.md)
 - [Reputation](https://github.com/benatespina/blob/master/reputation.md)
 - [Reputation History](https://github.com/benatespina/blob/master/reputation_history.md)
 - [Revisions](https://github.com/benatespina/blob/master/revisions.md)
 - [Search Excerpts](https://github.com/benatespina/blob/master/search_excerpts.md)
 - [Sites](https://github.com/benatespina/blob/master/sites.md)
 - [Suggested Edits](https://github.com/benatespina/blob/master/suggested_edits.md)
 - [Tags](https://github.com/benatespina/blob/master/tags.md)
 - [Tag Scores](https://github.com/benatespina/blob/master/tag_scores.md)
 - [Tag Synonyms](https://github.com/benatespina/blob/master/tag_synonyms.md)
 - [Tag Wikis](https://github.com/benatespina/blob/master/tag_wikis.md)
 - [Top Tags](https://github.com/benatespina/blob/master/top_tags.md)
 - [Users](https://github.com/benatespina/blob/master/users.md)
 - [User Timeline](https://github.com/benatespina/blob/master/user.md)
 - [Write Permissions](https://github.com/benatespina/blob/master/write_permissions.md)

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
