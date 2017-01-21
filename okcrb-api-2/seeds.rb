# Users
user1 = User.create(
  first_name:   'Johnny',
  last_name:    'User',
  email:        'user@example.com',
  password:     'password'
)

user2 = User.create(
  first_name:   'Sammy',
  last_name:    'User',
  email:        'user2@example.com',
  password:     'password'
)

# Posts
post1 = Post.create(
  title:    "Ruby - for when Python just can't cut it.",
  body:     "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
  user_id:  user1.id
)

post2 = Post.create(
  title:    "Who would win between a Ruby Warrior or a Ruby Rogue?",
  body:     "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
  user_id:  user1.id
)

post3 = Post.create(
  title:    "Topazes are nice, but Rubies are nicer.",
  body:     "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
  user_id:  user2.id
)

post4 = Post.create(
  title:    "BRO DO YOU EVEN RUBY?",
  body:     "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
  user_id:  user2.id
)

# Comments
Comment.create(
  body:     "Ruby is pretty rootin' tootin' neat.",
  post_id:  post1.id,
  user_id:  user2.id
)

Comment.create(
  body:     "Charizard is red. Rubies are red. Enough said.",
  post_id:  post2.id,
  user_id:  user2.id
)

Comment.create(
  body:     "The US Army wants you to use Ruby.",
  post_id:  post3.id,
  user_id:  user1.id
)

Comment.create(
  body:     "All of your friends are doing Ruby. Don't you want to be cool?",
  post_id:  post4.id,
  user_id:  user1.id
)
