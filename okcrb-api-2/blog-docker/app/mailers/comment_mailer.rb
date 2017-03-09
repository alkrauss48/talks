class CommentMailer < ApplicationMailer
  default from: "notifications@example.com"

  def new_comment(comment)
    @comment = comment
    mail(to: @comment.post.user.email, subject: "New Comment")
  end
end
