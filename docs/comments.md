#Available and missing methods of COMMENTS
The following list shows methods available and missing of Comments:

| Available | Method                                  | Description
|:---------:|:---------------------------------------:| -----------------------------------------------------------------------|
| NO        | **/answers/{ids}/comments**             | Get comments on the answers identified by a set of ids.                |
| NO        | **/comments**                           | Get all comments on the site.                                          |
| NO        | **/comments/{ids}**                     | Get comments identified by a set of ids.                               |
| NO        | **/comments/{id}/delete**               | Delete a comment identified by its id. auth required                   |
| NO        | **/comments/{id}/edit**                 | Edit a comment identified by its id. auth required                     |
| NO        | **/comments/{id}/flags/add**            | Get all tagged-based badges in alphabetical order.                     |
| NO        | **/comments/{id}/upvote**               | Casts an upvote on the given comment. auth required                        |
| NO        | **/comments/{id}/upvote/undo**          | Undoes an upvote on the given comment. auth required                       |
| NO        | **/posts/{ids}/comments**               | Get comments on the posts (question or answer) identified by a set of ids. |
| NO        | **/posts/{id}/comments/add**            | Create a new comment on the post identified by id. auth required           |
| NO        | **/posts/{id}/comments/render**         | Renders a hypothetical comment on the given post.                          |
| NO        | **/questions/{ids}/comments**           | Get the comments on the questions identified by a set of ids.              |
| NO        | **/users/{ids}/comments** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/comments** | Get the comments posted by the users identified by a set of ids. |
| NO        | **/users/{ids}/comments/{toid}** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/comments/{toid}** | Get the comments posted by a set of users in reply to another user. |
| NO        | **/users/{ids}/mentioned** <br/> ![me](https://cdn.sstatic.net/apiv2/img/me.png?v=f1cb4f2bb0ba) **/me/mentioned** | Get the comments that mention one of the users identified by a set of ids. |
