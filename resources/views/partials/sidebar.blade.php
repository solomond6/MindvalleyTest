<div class="bg-grey-darkest relative h-full min-h-screen">
  <div class="xl:py-2">
    <div class="hidden xl:block uppercase font-bold text-grey-darker text-xs px-4 py-2">
      Main
    </div>
    <div class="group relative sidebar-item with-children">
      <a href="{{ route('home')}}" class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-transparent hover:bg-black">
        <div class="text-white text-xs">Dashboard</div>
      </a>
    </div>
    <div class="group relative sidebar-item with-children">
      <a href="{{ route('create.post.form')}}" class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-transparent hover:bg-black">
        <div class="text-white text-xs">New Post</div>
      </a>
    </div>
  </div>
</div>