<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ebooks</title>

    <!-- Start JS -->
    <script src="{{ asset('assets/js/tailwind34.js') }}"></script>
    <script src="{{ asset('assets/js/darkModeHead.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/tailwind.config.js') }}"></script> --}}
    <script>
      tailwind.config = {
        darkMode: "class", // Enables dark mode based on class
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
              primary: "#00aff0",
              primaryHover: "#0a9fd5",
              warning: "#fab105",
              warningHover: "#ffb915",
            },
          },
        },
      };
    </script>
    <!-- End Start JS -->

    <!-- Start CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pdfview.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/audioplayer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.css') }}" />
    <!-- <style>
      body ::selection {
        background-color: goldenrod; /* This is bg-blue-900 in Tailwind */
        color: white; /* This is text-white in Tailwind */
      }
    </style> -->
    <!-- end Start CSS -->
  </head>
  <body class="dark:bg-gray-800 w-full overflow-x-hidden">
    <!-- Head -->
    <div>
      <div class="relative w-full bg-primary px-2 xl:px-0">
        <img
          class="max-w-screen-xl mx-auto w-full max-h-[300px] dark:saturate-500"
          src="{{ asset('assets/images/bannerLight.png') }}"
          alt=""
        />

        <header
          class="md:absolute left-0 right-0 bottom-0 z-[30] bg-transparent"
        >
          <div class="bg-primary-400 px-2 text-white border-gray-200 z-20">
            <div
              class="flex flex-wrap items-center justify-end max-w-screen-xl mx-auto"
            >
              <div
                class="py-1 min-[1280px]:py-4 lg:order-2 justify-items-end max-[1280px]:w-full max-[1280px]:flex max-[1280px]:justify-between max-[1280px]:items-center"
              >
                <a
                  href="./index.html"
                  class="flex items-center inline-flex min-[1280px]:hidden"
                >
                  <img
                    src="http://aerd.rua.edu.kh/public/assets/icons/logo.png"
                    class="invisible h-14 mx-3"
                    alt="Logo"
                  />
                </a>
                <div class="shrink-0">
                  <!-- Toggle Dark mode -->
                  <button
                    id="theme-toggle"
                    type="button"
                    class="text-gray-100 hover:text-gray-500 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-gray-600 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2"
                  >
                    <svg
                      id="theme-toggle-dark-icon"
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                    <svg
                      id="theme-toggle-light-icon"
                      class="hidden w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                  <!--  Language -->
                  <a
                    href="#"
                    type="button"
                    class="inline-flex items-center font-medium justify-center p-2.5 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-white"
                  >
                    <img
                      class="w-5 h-5 rounded-full"
                      src="{{ asset('assets/images/khmer_flag.png') }}"
                      alt=""
                    />
                  </a>
                  <a
                    href="#"
                    type="button"
                    class="bg-gray-100 dark:bg-gray-300 inline-flex items-center font-medium justify-center p-2.5 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-white"
                  >
                    <img
                      class="w-5 h-5 rounded-full"
                      src="{{ asset('assets/images/english_flag.png') }}"
                      alt=""
                    />
                  </a>
                  <button
                    type="button"
                    data-drawer-target="drawer-body-scrolling"
                    data-drawer-show="drawer-body-scrolling"
                    data-drawer-body-scrolling="true"
                    aria-controls="drawer-body-scrolling"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 hover:text-gray-500 rounded-lg min-[1280px]:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-200 dark:hover:text-gray-700 dark:hover:bg-gray-200 dark:focus:ring-gray-600"
                  >
                    <span class="sr-only">Open main menu</span>
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 17 14"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <!-- ================== Menu Navigator ================== -->
              <nav
                class="py-1 md:py-4 pl-2 mr-10 hidden w-full min-[1280px]:block min-[1280px]:w-auto"
                id="navbar-default"
              >
                <ul
                  class="text-md flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0"
                >
                  <li
                    class="border-b-white border-b-2 border-b-transparent hover:border-b-white transition-all"
                  >
                    <a
                      href="/"
                      class="block py-2 px-3 rounded md:border-0 md:p-0 dark:text-white"
                    >
                      Home
                    </a>
                  </li>
                  <li
                    class="border-b-2 border-b-transparent hover:border-b-white transition-all"
                  >
                    <a
                      href="/"
                      class="block py-2 px-3 rounded md:border-0 md:p-0 dark:text-white"
                    >
                      News &amp; Events
                    </a>
                  </li>
                  <li
                    class="border-b-2 border-b-transparent hover:border-b-white transition-all"
                  >
                    <a
                      href="/"
                      class="block py-2 px-3 rounded md:border-0 md:p-0 dark:text-white"
                    >
                      About Us
                    </a>
                  </li>
                  <li
                    class="border-b-2 border-b-transparent hover:border-b-white transition-all"
                  >
                    <a
                      href="/"
                      class="block py-2 px-3 rounded md:border-0 md:p-0 dark:text-white"
                    >
                      Contact
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header>
      </div>
      <aside
        id="drawer-body-scrolling"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform bg-white min-w-64 max-w-[90vw] dark:bg-gray-800 -translate-x-full"
        tabindex="-1"
        aria-labelledby="drawer-body-scrolling-label"
        aria-hidden="true"
      >
        <h5
          id="drawer-body-scrolling-label"
          class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400"
        >
          MENU
        </h5>
        <button
          type="button"
          data-drawer-hide="drawer-body-scrolling"
          aria-controls="drawer-body-scrolling"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white"
        >
          <svg
            class="w-3 h-3"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 14 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
            ></path>
          </svg>
          <span class="sr-only">Close menu</span>
        </button>
        <!-- Drawer Menu -->
        <div class="py-4 overflow-y-auto">
          <ul class="space-y-2 font-medium">
            <li>
              <a
                href="/"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
              >
                <span class="ms-3">Home</span>
              </a>
            </li>
            <li>
              <a
                href="/"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
              >
                <span class="ms-3">News &amp; Events</span>
              </a>
            </li>
            <li>
              <a
                href="/"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
              >
                <span class="ms-3">About Us</span>
              </a>
            </li>
            <li>
              <a
                href="/"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
              >
                <span class="ms-3">Contact</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
    </div>
    <!-- End Head -->

    <!-- Start Search -->
    <div
      class="bg-gradient-to-r from-primary dark:from-primary to-transparent p-2"
    >
      <div class="max-w-screen-xl mx-auto">
        <form class="w-full" action="search_book.html">
          <div class="flex flex-wrap gap-2">
            <!-- Search Database -->
            <button
              id="dropdownDefaultButton"
              data-dropdown-toggle="dropdown"
              class="text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-tl-lg rounded-tr-lg md:rounded-s-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-gray-100 dark:focus:ring-gra2bg-gray-200 w-full md:w-auto justify-center md:rounded-tr-none border border-primary"
              type="button"
            >
              E-Publications
              <svg
                class="w-2.5 h-2.5 ms-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 4 4 4-4"
                />
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div
              id="dropdown"
              class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700"
            >
              <ul
                class="py-2 text-md text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownDefaultButton"
              >
                <li>
                  <a
                    href="./index.html"
                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >E-Publications</a
                  >
                </li>
                <li>
                  <a
                    href="./viewDetailVideo.html"
                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Videos</a
                  >
                </li>
                <li>
                  <a
                    href="./viewDetailAudio.html"
                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Audios</a
                  >
                </li>
                <li>
                  <a
                    href="./viewDetailImage.html"
                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Images</a
                  >
                </li>
                <li>
                  <a
                    href="./viewDetailBulletin.html"
                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Bulletins</a
                  >
                </li>
              </ul>
            </div>
            <!-- End Search Database -->

            <div class="flex flex-1">
              <input
                type="search"
                id="search-dropdown"
                class="block p-2.5 w-full z-20 text-md text-gray-900 bg-gray-50 border-gray-50 border-1 border border-gray-300 focus:ring-primary focus:border-blue-500 dark:bg-gray-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 rounded-bl-lg md:rounded-bl-none border border-primary"
                placeholder="Search Mockups, Logos, Design Templates..."
              />
              <button
                type="submit"
                class="top-0 end-0 p-2.5 text-md font-medium h-full text-white bg-primary rounded-e-lg border border-primary hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary dark:hover:bg-primary dark:focus:ring-primaryHover flex space-x-2 items-center justify-center ml-2 rounded-tr-none md:rounded-tr-lg"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 20"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                  />
                </svg>
                <span>Search</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Search -->

    <!-- Slide Show -->
    <div class="max-w-screen-xl mx-auto mt-2">
      <swiper-container
        autoplay="true"
        autoplay-delay="2000"
        speed="1000"
        effect="slide"
        class="mySwiper"
        pagination="true"
        pagination-clickable="true"
        space-between="30"
        loop="true"
      >
        <swiper-slide class="swiper-slide-item">
          <img
            class="swiper-slide-img"
            src="{{ asset('assets/images/slideDemo.jpg') }}"
            alt=""
          />
        </swiper-slide>
        <swiper-slide class="swiper-slide-item">
          <img
            class="swiper-slide-img"
            src="{{ asset('assets/images/slideDemo.jpg') }}"
            alt=""
          />
        </swiper-slide>
        <swiper-slide class="swiper-slide-item">
          <img
            class="swiper-slide-img"
            src="{{ asset('assets/images/slideDemo.jpg') }}"
            alt=""
          />
        </swiper-slide>
        <swiper-slide class="swiper-slide-item">
          <img
            class="swiper-slide-img"
            src="{{ asset('assets/images/slideDemo.jpg') }}"
            alt=""
          />
        </swiper-slide>
        <swiper-slide class="swiper-slide-item">
          <img
            class="swiper-slide-img"
            src="{{ asset('assets/images/slideDemo.jpg') }}"
            alt=""
          />
        </swiper-slide>
      </swiper-container>

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>
    <!-- End Slide Show -->

    <!-- Start Database -->
    <div class="max-w-screen-xl mx-auto mt-6">
      <p
        class="text-2xl text-gray-700 dark:text-white p-2 xl:p-0 font-bold uppercase"
      >
        Databases
      </p>
      <!-- Icon Blocks -->
      <div class="">
        <div
          class="grid grid-cols-3 sm:grid-cols-3 lg:grid-cols-6 items-center gap-4"
        >
          <a
            class="group p-4 flex flex-col justify-center items-center hover:bg-gray-100 rounded-xl dark:hover:bg-gray-600"
            href="#"
          >
            <div
              class="flex justify-center items-center h-20 aspect-square object-contain rounded-xl"
            >
              <img
                src="{{ asset('assets/icons/catalog.png') }}"
                alt=""
                class="h-full object-contain"
              />
            </div>
            <div class="mt-1">
              <h3
                class="group-hover:text-gray-600 text-md lg:text-lg whitespace-nowrap font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-gray-50"
              >
                Catalog
              </h3>
            </div>
          </a>
          <a
            class="group p-4 flex flex-col justify-center items-center hover:bg-gray-100 rounded-xl dark:hover:bg-gray-600"
            href="./index.html"
          >
            <div
              class="flex justify-center items-center h-20 aspect-square object-contain rounded-xl"
            >
              <img
                src="{{ asset('assets/icons/epublication.png') }}"
                alt=""
                class="h-full object-contain"
              />
            </div>
            <div class="mt-1">
              <h3
                class="group-hover:text-gray-600 text-md lg:text-lg whitespace-nowrap font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-gray-50"
              >
                E-Publications
              </h3>
            </div>
          </a>
          <a
            class="group p-4 flex flex-col justify-center items-center hover:bg-gray-100 rounded-xl dark:hover:bg-gray-600"
            href="./videos.html"
          >
            <div
              class="flex justify-center items-center h-20 aspect-square object-contain rounded-xl"
            >
              <img
                src="{{ asset('assets/icons/video.png') }}"
                alt=""
                class="h-full object-contain"
              />
            </div>
            <div class="mt-1">
              <h3
                class="group-hover:text-gray-600 text-md lg:text-lg whitespace-nowrap font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-gray-50"
              >
                Videos
              </h3>
            </div>
          </a>
          <a
            class="group p-4 flex flex-col justify-center items-center hover:bg-gray-100 rounded-xl dark:hover:bg-gray-600"
            href="./audios.html"
          >
            <div
              class="flex justify-center items-center h-20 aspect-square object-contain rounded-xl"
            >
              <img
                src="{{ asset('assets/icons/audio.png') }}"
                alt=""
                class="h-full object-contain"
              />
            </div>
            <div class="mt-1">
              <h3
                class="group-hover:text-gray-600 text-md lg:text-lg whitespace-nowrap font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-gray-50"
              >
                Audio
              </h3>
            </div>
          </a>
          <a
            class="group p-4 flex flex-col justify-center items-center hover:bg-gray-100 rounded-xl dark:hover:bg-gray-600"
            href="./images.html"
          >
            <div
              class="flex justify-center items-center h-20 aspect-square object-contain rounded-xl"
            >
              <img
                src="{{ asset('assets/icons/image.png') }}"
                alt=""
                class="h-full object-contain"
              />
            </div>
            <div class="mt-1">
              <h3
                class="group-hover:text-gray-600 text-md lg:text-lg whitespace-nowrap font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-gray-50"
              >
                Image
              </h3>
            </div>
          </a>
          <a
            class="group p-4 flex flex-col justify-center items-center hover:bg-gray-100 rounded-xl dark:hover:bg-gray-600"
            href="./bulletins.html"
          >
            <div
              class="flex justify-center items-center h-20 aspect-square object-contain rounded-xl"
            >
              <img
                src="{{ asset('assets/icons/bulletin.png') }}"
                alt=""
                class="h-full object-contain"
              />
            </div>
            <div class="mt-1">
              <h3
                class="group-hover:text-gray-600 text-md lg:text-lg whitespace-nowrap font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-gray-50"
              >
                Bulletin / News
              </h3>
            </div>
          </a>
        </div>
      </div>
      <!-- End Icon Blocks -->
    </div>
    <!-- End Database -->

    <!-- Start Items -->
    <div class="max-w-screen-xl mx-auto mt-6">
      <div class="flex justify-between bg-primary py-1 px-2 m-2 xl:m-0">
        <p class="text-lg text-white">New Books</p>
        <a
          class="text-lg text-white flex items-center gap-2 hover:underline hover:translate-x-2 transition-all cursor-pointer"
        >
          See More
          <img src="{{ asset('assets/icons/right-arrow.png') }}" alt="" class="w-5 h-5" />
        </a>
      </div>
      <!-- Card Grid -->
      <div
        class="py-2 lg:py-4 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-4 sm:gap-2 md:gap-4 lg:gap-4 m-2 xl:m-0"
      >
        <!-- Card -->
        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom1"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">ចំណងជើងខ្មែរ</p>
            </h3>

            <div
              id="tooltip-bottom1"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              1 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom2"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">
                A revamped and dynamic approach to yoga analytics
              </p>
            </h3>

            <div
              id="tooltip-bottom2"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              2 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom1"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">ចំណងជើងខ្មែរ</p>
            </h3>

            <div
              id="tooltip-bottom1"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              1 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom2"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">
                A revamped and dynamic approach to yoga analytics
              </p>
            </h3>

            <div
              id="tooltip-bottom2"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              2 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom1"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">ចំណងជើងខ្មែរ</p>
            </h3>

            <div
              id="tooltip-bottom1"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              1 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom2"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">
                A revamped and dynamic approach to yoga analytics
              </p>
            </h3>

            <div
              id="tooltip-bottom2"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              2 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom1"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">ចំណងជើងខ្មែរ</p>
            </h3>

            <div
              id="tooltip-bottom1"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              1 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom2"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">
                A revamped and dynamic approach to yoga analytics
              </p>
            </h3>

            <div
              id="tooltip-bottom2"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              2 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom1"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">ចំណងជើងខ្មែរ</p>
            </h3>

            <div
              id="tooltip-bottom1"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              1 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom2"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">
                A revamped and dynamic approach to yoga analytics
              </p>
            </h3>

            <div
              id="tooltip-bottom2"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              2 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom1"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">ចំណងជើងខ្មែរ</p>
            </h3>

            <div
              id="tooltip-bottom1"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              1 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>

        <a class="group block" href="view-detail.html">
          <div
            class="w-full overflow-hidden bg-gray-100 rounded-md dark:bg-neutral-800"
          >
            <img
              class="w-full aspect-[6/9] group-hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md"
              src="https://www.creativeparamita.com/wp-content/uploads/2022/03/the-mountain.jpg"
              alt="Image Description"
            />
          </div>

          <div class="pt-2">
            <h3
              data-tooltip-target="tooltip-bottom2"
              data-tooltip-placement="bottom"
              class="relative inline-block font-medium text-md text-black before:absolute before:bottom-[-0.1rem] before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-white"
            >
              <p class="line-clamp-1">
                A revamped and dynamic approach to yoga analytics
              </p>
            </h3>

            <div
              id="tooltip-bottom2"
              role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
            >
              2 revamped and dynamic approach to yoga analytics A revamped and
              dynamic approach to yoga analytics
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </a>
      </div>
      <!-- End Card Grid -->
    </div>
    <!-- End Items -->

    <!-- Pagination -->
    <div class="max-w-screen-xl mx-auto mt-6">
      <nav
        role="navigation"
        aria-label="Pagination Navigation"
        class="flex items-center justify-between m-2 xl:m-0"
      >
        <div class="flex justify-between flex-1 sm:hidden">
          <span
            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md"
          >
            « Previous
          </span>

          <a
            href="#"
            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
          >
            Next »
          </a>
        </div>

        <div
          class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between"
        >
          <div>
            <p class="text-sm text-gray-700 leading-5">
              Showing
              <span class="font-medium">1</span>
              to
              <span class="font-medium">8</span>
              of
              <span class="font-medium">11</span>
              results
            </p>
          </div>

          <div>
            <span class="relative z-0 inline-flex shadow-sm rounded-md">
              <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                <span
                  class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5"
                  aria-hidden="true"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
              </span>

              <span aria-current="page">
                <span
                  class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5"
                  >1</span
                >
              </span>
              <a
                href="#"
                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                aria-label="Go to page 2"
              >
                2
              </a>

              <a
                href="#"
                rel="next"
                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                aria-label="Next &amp;raquo;"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </nav>
    </div>
    <!-- End Pagination -->

    <!-- Footer -->
    <div class="bg-primary text-white dark:bg-gray-900">
      <div class="max-w-screen-xl mx-auto mt-6">
        <footer class="m-2 xl:m-0">
          <div class="mx-auto w-full max-w-screen-xl py-6 lg:py-8">
            <div class="min-[1300px]:flex md:justify-between">
              <div class="mb-6 min-[1300px]:mb-0">
                <a href="#" class="flex items-center">
                  <img
                    src="{{ asset('assets/images/logo.png') }}"
                    class="h-24 max-w-[250px] object-contain me-3"
                    alt="Logo"
                  />
                </a>
              </div>
              <div class="lg:flex justify-between gap-6 md:gap-8">
                <div class="max-w-[500px]">
                  <h2
                    class="mb-3 text-sm font-semibold uppercase dark:text-white"
                  >
                    Contact Us
                  </h2>
                  <ul class="dark:text-gray-400 font-medium mb-8">
                    <li class="mb-4">
                      <p>
                        Building (5th Floor), St,National Assembly, Sangkat
                        Tonle Basac, Khan Chamka Mon, Phnom Penh, Cambodia
                        <span><a href="#">Google Maps</a></span>
                      </p>
                      <p>Phone Number : +855 99 999 999</p>
                      <p>Email : beltei@beltei.kh</p>
                    </li>
                  </ul>
                </div>
                <div>
                  <h2
                    class="mb-3 text-sm font-semibold uppercase dark:text-white lg:text-center"
                  >
                    Download App
                  </h2>
                  <ul class="dark:text-gray-400 font-medium mb-8">
                    <li class="mb-4">
                      <button
                        type="button"
                        class="bg-transparent hover:bg-white dark:hover:bg-gray-400 border-2 border-white dark:border-gray-400 focus:ring-4 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center gap-2 hover:text-gray-600 dark:hover:text-white hover:scale-110 transition-all"
                      >
                        <img src="{{ asset('assets/icons/mobile-app.png') }}" alt="" class="h-8" />

                        Click Download
                      </button>
                    </li>
                  </ul>
                </div>
                <div>
                  <h2
                    class="mb-3 text-sm font-semibold uppercase dark:text-white lg:text-center"
                  >
                    Social Links
                  </h2>

                  <div
                    class="flex flex-wrap mt-4 lg:justify-center gap-2 sm:mt-0 mb-4"
                  >
                    <a
                      href="#"
                      class="hover:text-gray-900 dark:hover:text-white"
                    >
                      <img
                        class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                        src="{{ asset('assets/icons/facebook.png') }}"
                        alt="Facebook page"
                      />
                      <span class="sr-only">Facebook page</span>
                    </a>
                    <a
                      href="#"
                      class="hover:text-gray-900 dark:hover:text-white"
                    >
                      <img
                        class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                        src="{{ asset('assets/icons/youtube.png') }}"
                        alt="Facebook page"
                      />
                      <span class="sr-only">Youtube</span>
                    </a>
                    <a
                      href="#"
                      class="hover:text-gray-900 dark:hover:text-white"
                    >
                      <img
                        class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                        src="{{ asset('assets/icons/telegram.png') }}"
                        alt="Facebook page"
                      />
                      <span class="sr-only">Telegram</span>
                    </a>
                    <a
                      href="#"
                      class="hover:text-gray-900 dark:hover:text-white"
                    >
                      <img
                        class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                        src="{{ asset('assets/icons/www.png') }}"
                        alt="Facebook page"
                      />
                      <span class="sr-only">WWW</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <hr
              class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
            />
            <div class="flex justify-between">
              <span class="text-sm sm:text-center dark:text-gray-400"
                >© 2024 BELTEI E-Library. All Rights Reserved.
              </span>
              <span class="text-sm sm:text-center dark:text-gray-400"
                >Developed by Alphalib
              </span>
              @yield('HI')
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!-- End Footer -->

    <!-- Start JS -->
    <script src="{{ asset('assets/js/darkMode.js') }}"></script>
    <script src="{{ asset('assets/js/flowbite23.js') }} "></script>
    <script src="{{ asset('assets/js/pdfPopup.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.config.js') }}"></script>
    <!-- End JS -->
  </body>
</html>
