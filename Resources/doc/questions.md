#Available and missing methods of QUESTIONS
The following list shows methods available and missing of Questions:

| Available | Method                            | Description
|:---------:|:---------------------------------:| ----------------------------------------------------------------------------------------------------------|
| NO        | **/answers/{ids}/questions**      | Gets all questions the answers identified by ids are on.                                                  |
| NO        | **/questions**                    | Get all questions on the site.                                                                            |
| NO        | **/questions/{ids}**              | Get the questions identified by a set of ids.                                                             |
| NO        | **/questions/{id}/delete**        | Deletes the given question. auth required                                                                 |
| NO        | **/questions/{id}/downvote**      | Casts a downvote on the given question. auth required                                                     |
| NO        | **/questions/{id}/downvote/undo** | Undoes a downvote on the given question. auth required                                                    |
| NO        | **/questions/{id}/edit**          | Edits the given question. auth required                                                                   |
| NO        | **/questions/{id}/favorite**      | Favorites the given question. auth required                                                               |
| NO        | **/questions/{id}/favorite/undo** | Undoes favoriting the given question. auth required                                                       |
| NO        | **/questions/{id}/flags/add**     | Casts a flag on the given question. auth required                                                         |
| NO        | **/answers/{id}/flags/add**       | Casts a flag on the given answer. auth required                                                           |
| NO        | **/questions/{ids}/linked**       | Get the questions that link to the questions identified by a set of ids.                                  |
| NO        | **/questions/{ids}/related**      | Get the questions that are related to the questions identified by a set of ids.                           |
| NO        | **/questions/{id}/upvoter**       | Casts an upvote on the given question. auth required                                                      |
| NO        | **/questions/{id}/upvote/undo**   | Undoes an upvote on the given question. auth required                                                     |
| NO        | **/questions/add**                | Creates a new question. auth required                                                                     |
| NO        | **/questions/featured**           | Get all questions on the site with active bounties.                                                       |
| NO        | **/questions/render**             | Renders a hypothetical question. auth required                                                            |
| NO        | **/questions/unanswered**         | Get all questions the site considers unanswered.                                                          |
| NO        | **/questions/unanswered/my-tags** | Get questions the site considers unanswered within a user's favorite or interesting tags. auth required   |
| NO        | **/questions/no-answers**         | Get all questions on the site with no answers.                                                            |
| NO        | **/search**                       | Search the site for questions meeting certain criteria.                                                   |
| NO        | **/search/advanced**              | Search the site for questions using most of the on-site search options.                                   |
| NO        | **/similar**                      | Search the site based on similarity to a title.                                                           |
| NO        | **/tags/{tags}/faq**              | Get frequently asked questions in a set of tags.                                                          |
| NO        | **/questions/{id}/upvoter**       | Casts an upvote on the given question. auth required                                                      |
| NO        | **/questions/{id}/upvoter**       | Casts an upvote on the given question. auth required                                                      |
| NO        | **/questions/{id}/upvoter**       | Casts an upvote on the given question. auth required                                                      |
| NO        | **/users/{ids}/favorites** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/favorites** | Get the questions favorited by users identified by a set of ids. |
| NO        | **/users/{ids}/questions** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/questions** | Get the questions asked by the users identified by a set of ids. |
| NO        | **/users/{ids}/questions/featured** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/questions/featured** | Get the questions on which a set of users, have active bounties. |
| NO        | **/users/{ids}/questions/no-answers** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/questions/no-answers** | Get the questions asked by a set of users, which have no answers. |
| NO        | **/users/{ids}/questions/unaccepted** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/questions/unaccepted** | Get the questions asked by a set of users, which have at least one answer but no accepted answer. |
| NO        | **/users/{ids}/questions/unanswered** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/questions/unanswered** | Get the questions asked by a set of users, which are not considered to be adequately answered. |
| NO        | **/users/{id}/tags/{tags}/top-questions** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/tags/{tags}/top-questions** | Get the top questions a user has posted with a set of tags. |
