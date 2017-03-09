ApiPagination.configure do |config|

  config.page_param do |params|
    if params[:page].is_a? ActionController::Parameters
      params[:page][:number]
    else
      params[:page]
    end
  end

  config.per_page_param do |params|
    if params[:page].is_a? ActionController::Parameters
      params[:page][:size]
    else
      params[:per_page]
    end
  end

end
