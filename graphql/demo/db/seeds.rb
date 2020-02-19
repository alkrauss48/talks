john = User.create!(
  email: "john.doe@example.com",
  first_name: "John",
  last_name: "Doe"
)

jane = User.create!(
  email: "jane.doe@example.com",
  first_name: "Jane",
  last_name: "Doe"
)

Item.create!(
  [
    {
      title: "Frankenstein",
      description: "A monster is pretty nice at first, but then he's mean.",
      user: john,
      image_url: "https://upload.wikimedia.org/wikipedia/en/4/45/The-Martian-Chronicles.jpg"
    },
    {
      title: "Dracula",
      description: "Only 30% in, but Dracula is also mean.",
      user: john,
      image_url: "https://upload.wikimedia.org/wikipedia/en/c/c3/The_Martian_2014.jpg"
    },
    {
      title: "The Handmaid's Tale",
      description: "This book was incredibly depressing.",
      user: jane,
      image_url: "https://upload.wikimedia.org/wikipedia/en/5/57/Doom_cover_art.jpg"
    },
    {
      title: "The Hobbit",
      description: "I felt like I was playing D&D while reading this.",
      user: jane,
      image_url: "https://upload.wikimedia.org/wikipedia/en/b/bd/Mars_attacks_ver1.jpg"
    },
    {
      title: "Life of Pi",
      description: "Bengal tigers are pretty cool.",
      user: jane,
      image_url: "https://upload.wikimedia.org/wikipedia/en/b/bd/Mars_attacks_ver1.jpg"
    }
  ]
)
