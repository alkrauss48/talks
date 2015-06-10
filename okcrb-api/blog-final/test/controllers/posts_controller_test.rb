require 'test_helper'

class PostsControllerTest < ActionController::TestCase
  setup do
    @post = posts(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:posts)
  end

  test "should create post" do
    assert_difference('Post.count') do
      post :create, post: { body: @post.body, title: @post.title, user_id: @post.user_id }
    end

    assert_response 201
  end

  test "should show post" do
    get :show, id: @post
    assert_response :success
  end

  test "should update post" do
    put :update, id: @post, post: { body: @post.body, title: @post.title, user_id: @post.user_id }
    assert_response 204
  end

  test "should destroy post" do
    assert_difference('Post.count', -1) do
      delete :destroy, id: @post
    end

    assert_response 204
  end
end
