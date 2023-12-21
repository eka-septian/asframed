<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Ubuntu" />

    <div id="gallery" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="" />
        </div>
        <!-- Item 2 -->
        <div
          class="hidden duration-700 ease-in-out"
          data-carousel-item="active">
          <img
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="" />
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="" />
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="" />
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="" />
        </div>
      </div>
      <!-- Slider controls -->
      <button
        type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg
            class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 6 10">
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button
        type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg
            class="w-4 h-4 text-white dark:text-blue-950 rtl:rotate-180"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 6 10">
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
  </head>
  <body>
    <div class="text-blue-950 font-bold text-center text-3xl">
      <p>Find Your Experience</p>
      <br>
    </div>
    <nav class="bg-white p-5 fixed w-full top-0 flex justify-between">
      <div class="container mx-auto">
        <a href="" class="text-black-50 font-bold px-4">AsFrammed</a>
        <a href="" class="text-blue-950 font-bold py-2 px-4">Explore</a>
        <a href="" class="text-blue-950 font-bold py-2 px-4">Crate</a>
      </div>
      <div class="flex justify-end">
        <div class="mr-4">
          <input
            type="text"
            class="border p-2 px-4 rounded-full"
            placeholder="Search" />
        </div>
      <div class="container mx-auto flex justify-end">
        <button
          class="bg-blue-950 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
          Login
        </button>
        <button class="text-blue-950 font-bold py-2 px-4 rounded-full">
          Register
        </button>
      </div>
    </nav>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <div class="grid gap-4">
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg"
            alt="" />
        </div>
      </div>
      <div class="grid gap-4">
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
            alt="" />
        </div>
      </div>
      <div class="grid gap-4">
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg"
            alt="" />
        </div>
      </div>
      <div class="grid gap-4">
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg"
            alt="" />
        </div>
        <div>
          <img
            class="h-auto max-w-full rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
            alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
