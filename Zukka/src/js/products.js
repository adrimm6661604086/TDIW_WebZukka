// CATEGORY AND FILTER

$(document).ready(function() {
  $('.category').on('click', function(selectedCategory)
  {
    if ($(selectedCategory.target).hasClass("active")) {
    } 
    else {
      $('.category').removeClass('active');
      $(selectedCategory.target).addClass("active");
    }


    if($(selectedCategory.target).attr('data-name') === "all")
    {
      $('.product').removeClass('hidden');
      $('.product').addClass("show");
    }
    else
    {
      var products = $(".product");
      products.each(function(){
        if($(this).attr('data-name') === $(selectedCategory.target).attr('data-name'))
        {
          $(this).removeClass('hidden');
          $(this).addClass('show');
        }
        else
        {
          $(this).removeClass('show');
          $(this).addClass('hidden');
        }
      })
    }

  })

});
