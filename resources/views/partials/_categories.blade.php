<div class="flex flex-col items-center space-y-2">
    <h3 class="text-xs md:text-sm mr-auto">
      Top Categories:
    </h3>
    <div class="flex items-center space-x-2 mr-auto">

      @foreach ($categories->random(3) as $category)
        <x-category-link :category="$category" />
      @endforeach
      <a href="/all-categories" class="p-1 w-24 flex items-center justify-around text-xs md:text-sm rounded-md" 
      style="background-color:#eca513">
        See all
        <svg class="h-2 lg:h-3" viewBox="0 0 24 16" fill="none">
          <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9L23 9V7L0 7L0 9Z" fill="#F3F3F3"/>
        </svg>
      </a>

    </div>
  </div>