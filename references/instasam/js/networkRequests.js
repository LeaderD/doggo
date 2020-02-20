function fetchComments(postId) {
  return $.ajax({
    url: `api/comments.php?postId=${postId}`,
    method: 'GET'
  })
}

function fetchAllPosts() {
  return $.ajax({
    url: 'api/insta_posts.php',
    method: 'GET'
  })
}

function createNewPost(data) {
  
}

function createNewComment(data) {

}

function signUp(data) {
  return $.ajax({
    method: 'POST',
    data: data,
    url: 'api/users.php'
  })
}

function login(data) {
  return $.ajax({
    method: 'POST',
    data: data,
    url: 'api/login.php'
  })
}
