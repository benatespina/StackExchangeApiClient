#Available and missing methods of ANSWERS
The following list shows methods available and missing of Answers:

| Available | Method                                  | Description
|:---------:|:---------------------------------------:| -----------------------------------------------------------------------|
| YES       | **/answers**                            | Get all answers on the site.                                           |
| YES       | **/answers/{ids}**                      | Get answers identified by a set of ids.                                |
| YES       | **/answers/{id}/accept**                | Casts an accept vote on the given answer. auth required                |
| YES       | **/answers/{id}/accept/undo**           | Undoes an accept vote on the given answer. auth required               |
| YES       | **/answers/{id}/delete**                | Deletes the given answer. auth required                                |
| YES       | **/answers/{id}/downvote**              | Casts a downvote on the given answer. auth required                    |
| YES       | **/answers/{id}/downvote/undo**         | Undoes a downvote on the given answer. auth required                   |
| YES       | **/answers/{id}/edit**                  | Edits the given answer. auth required                                  |
| YES       | **/answers/{id}/upvote**                | Casts an upvote on the given answer. auth required                     |
| YES       | **/answers/{id}/upvote/undo**           | Undoes an upvote on the given answer. auth required                    |
| YES       | **/answers/{id}/flags/add**             | Casts a flag on the given answer. auth required                        |
| YES       | **/questions/{ids}/answers**            | Get the answers to the questions identified by a set of ids.           |
| YES       | **/questions/{id}/answers/add**         | Creates an answer on the given question. auth required                 |
| YES       | **/questions/{id}/answers/render**      | Renders a hypothetical answer to a question.                           |
| YES       | **/users/{ids}/answers** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/answers** | Get the answers posted by the users identified by a set of ids. |
| YES       | **/users/{id}/tags/{tags}/top-answers** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/tags/{tags}/top-answers** | Get the top answers a user has posted on questions with a set of tags. |
