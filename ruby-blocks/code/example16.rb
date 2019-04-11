require 'markdown_checkboxes'

# Initializes a Checkbox Markdown parser
parser = CheckboxMarkdown.new(renderer, extensions = {})

markdown = <<-TEXT
# List
- [ ] Item 1
TEXT

parser.render(markdown) do |data, updated_text|
  data.remote = true
  data.method = :put
  data.url = post_path(@post, post: { body: updated_text })
end
