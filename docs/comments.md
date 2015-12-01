#Available and missing methods of COMMENTS
The following list shows methods available and missing of Comments:

| Available | Method                                  | Description
|:---------:|:---------------------------------------:| -----------------------------------------------------------------------|
| YES       | **/answers/{ids}/comments**             | Get comments on the answers identified by a set of ids.                |
| YES       | **/comments**                           | Get all comments on the site.                                          |
| YES       | **/comments/{ids}**                     | Get comments identified by a set of ids.                               |
| YES       | **/comments/{id}/delete**               | Delete a comment identified by its id. auth required                   |
| YES       | **/comments/{id}/edit**                 | Edit a comment identified by its id. auth required                     |
| YES       | **/comments/{id}/flags/add**            | Get all tagged-based badges in alphabetical order.                     |
| YES       | **/comments/{id}/upvote**               | Casts an upvote on the given comment. auth required                        |
| YES       | **/comments/{id}/upvote/undo**          | Undoes an upvote on the given comment. auth required                       |
| YES       | **/posts/{ids}/comments**               | Get comments on the posts (question or answer) identified by a set of ids. |
| YES       | **/posts/{id}/comments/add**            | Create a new comment on the post identified by id. auth required           |
| YES       | **/posts/{id}/comments/render**         | Renders a hypothetical comment on the given post.                          |
| YES       | **/questions/{ids}/comments**           | Get the comments on the questions identified by a set of ids.              |
| YES       | **/users/{ids}/comments** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/comments** | Get the comments posted by the users identified by a set of ids. |
| YES       | **/users/{ids}/comments/{toid}** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/comments/{toid}** | Get the comments posted by a set of users in reply to another user. |
| YES       | **/users/{ids}/mentioned** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/mentioned** | Get the comments that mention one of the users identified by a set of ids. |
