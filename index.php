<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/d5c5f87881.js" crossorigin="anonymous"></script>

    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>
</head>

<body>

    <!-- component -->
    <div class="relative flex justify-center items-center">

        <button onclick="showMenu(true)"
            class="">Open</button>

        <div id="menu" class="w-full h-full bg-gray-900 bg-opacity-80 top-0 fixed sticky-0">
            <div class="2xl:container  2xl:mx-auto py-3 flex justify-center items-center">
               <!-- main -->
                <div
                    class="mx-auto relative flex flex-col justify-center items-center bg-white p-7">
                    
                  
                    <!--add log in container  -->
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4">
                           <div
                              class="
                              max-w-[525px]
                              mx-auto
                              text-center
                              bg-white
                              rounded-lg
                              relative
                              overflow-hidden
                              py-16
                              px-10
                              sm:px-12
                              md:px-[60px]
                              "
                              >
                              <div class="mb-10 -mt-1 md:mb-14 text-center w-3/5 mx-auto">
                                 <a
                                    href="javascript:void(0)"
                                    class="inline-block w-full mx-auto"
                                    >
                                 <img src="logo-logo.png" alt="logo" />
                                 </a>
                              </div>
                              <form>
                                 <div class="mb-6">
                                    <input
                                       type="text"
                                       placeholder="Email"
                                       class="
                                       w-full
                                       rounded-md
                                       border
                                       bordder-[#E9EDF4]
                                       py-3
                                       px-5
                                       bg-white
                                       text-base text-body-color
                                       placeholder-[#ACB6BE]
                                       outline-none
                                       focus-visible:shadow-none
                                       focus:border-teal-600
                                       "
                                       />
                                 </div>
                                 <div class="mb-6">
                                    <input
                                       type="password"
                                       placeholder="Password"
                                       class="
                                       w-full
                                       rounded-md
                                       border
                                       bordder-[#E9EDF4]
                                       py-3
                                       px-5
                                       bg-[#FCFDFE]
                                       text-base text-body-color
                                       placeholder-[#ACB6BE]
                                       outline-none
                                       focus-visible:shadow-none
                                       focus:border-teal-600
                                       "
                                       />
                                 </div>
                                 <div class="mb-10">
                                    <input
                                       type="submit"
                                       value="Sign In"
                                       class="
                                       w-full
                                       rounded-md
                                       border
                                       bordder-primary
                                       py-3
                                       px-5
                                       bg-teal-700
                                       text-base text-white
                                       cursor-pointer
                                       hover:bg-opacity-90
                                      
                                       transition
                                       "
                                       />
                                 </div>
                              </form>
                              <p class="text-base mb-6 text-slate-500">Connect With</p>
                              <ul class="flex justify-between -mx-2 mb-12">
                                 <li class="px-2 w-full">
                                    <a
                                       href="javascript:void(0)"
                                       class="
                                       flex
                                       h-11
                                       items-center
                                       justify-center
                                       rounded-md
                                       bg-[#4064AC]
                                       hover:bg-opacity-90
                                       "
                                       >
                                       <svg
                                          width="10"
                                          height="20"
                                          viewBox="0 0 10 20"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                          >
                                          <path
                                             d="M9.29878 8H7.74898H7.19548V7.35484V5.35484V4.70968H7.74898H8.91133C9.21575 4.70968 9.46483 4.45161 9.46483 4.06452V0.645161C9.46483 0.290323 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.80645 3.18262 4.48387V7.29032V7.93548H2.62912H0.747223C0.359774 7.93548 0 8.29032 0 8.80645V11.129C0 11.5806 0.304424 12 0.747223 12H2.57377H3.12727V12.6452V19.129C3.12727 19.5806 3.43169 20 3.87449 20H6.47593C6.64198 20 6.78036 19.9032 6.89106 19.7742C7.00176 19.6452 7.08478 19.4194 7.08478 19.2258V12.6774V12.0323H7.66596H8.91133C9.2711 12.0323 9.54785 11.7742 9.6032 11.3871V11.3548V11.3226L9.99065 9.09677C10.0183 8.87097 9.99065 8.6129 9.8246 8.35484C9.76925 8.19355 9.52018 8.03226 9.29878 8Z"
                                             fill="white"
                                             />
                                       </svg>
                                    </a>
                                 </li>
                                 <li class="px-2 w-full">
                                    <a
                                       href="javascript:void(0)"
                                       class="
                                       flex
                                       h-11
                                       items-center
                                       justify-center
                                       rounded-md
                                       bg-[#1C9CEA]
                                       hover:bg-opacity-90
                                       "
                                       >
                                       <svg
                                          width="22"
                                          height="16"
                                          viewBox="0 0 22 16"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                          >
                                          <path
                                             d="M19.5516 2.75538L20.9 1.25245C21.2903 0.845401 21.3968 0.53229 21.4323 0.375734C20.3677 0.939335 19.3742 1.1272 18.7355 1.1272H18.4871L18.3452 1.00196C17.4935 0.344423 16.429 0 15.2935 0C12.8097 0 10.8581 1.81605 10.8581 3.91389C10.8581 4.03914 10.8581 4.22701 10.8935 4.35225L11 4.97847L10.2548 4.94716C5.7129 4.82192 1.9871 1.37769 1.38387 0.782779C0.390323 2.34834 0.958064 3.85127 1.56129 4.79061L2.76774 6.54403L0.851613 5.6047C0.887097 6.91977 1.45484 7.95303 2.55484 8.7045L3.5129 9.33072L2.55484 9.67515C3.15806 11.272 4.50645 11.9296 5.5 12.18L6.8129 12.4932L5.57097 13.2446C3.58387 14.4971 1.1 14.4031 0 14.3092C2.23548 15.6869 4.89677 16 6.74194 16C8.12581 16 9.15484 15.8748 9.40322 15.7808C19.3387 13.7143 19.8 5.8865 19.8 4.32094V4.10176L20.0129 3.97652C21.2194 2.97456 21.7161 2.44227 22 2.12916C21.8935 2.16047 21.7516 2.22309 21.6097 2.2544L19.5516 2.75538Z"
                                             fill="white"
                                             />
                                       </svg>
                                    </a>
                                 </li>
                                 <li class="px-2 w-full">
                                    <a
                                       href="javascript:void(0)"
                                       class="
                                       flex
                                       h-11
                                       items-center
                                       justify-center
                                       rounded-md
                                       bg-[#D64937]
                                       hover:bg-opacity-90
                                       "
                                       >
                                       <svg
                                          width="18"
                                          height="18"
                                          viewBox="0 0 18 18"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                          >
                                          <path
                                             d="M17.8477 8.17132H9.29628V10.643H15.4342C15.1065 14.0743 12.2461 15.5574 9.47506 15.5574C5.95916 15.5574 2.8306 12.8821 2.8306 9.01461C2.8306 5.29251 5.81018 2.47185 9.47506 2.47185C12.2759 2.47185 13.9742 4.24567 13.9742 4.24567L15.7024 2.47185C15.7024 2.47185 13.3783 0.000145544 9.35587 0.000145544C4.05223 -0.0289334 0 4.30383 0 8.98553C0 13.5218 3.81386 18 9.44526 18C14.4212 18 17.9967 14.7141 17.9967 9.79974C18.0264 8.78198 17.8477 8.17132 17.8477 8.17132Z"
                                             fill="white"
                                             />
                                       </svg>
                                    </a>
                                 </li>
                              </ul>
                              <a
                                 href="javascript:void(0)"
                                 class="
                                 text-base
                                 inline-block
                                 mb-2
                                 text-slate-500
                                 hover:underline hover:text-teal-800
                                 "
                                 >
                              Forget Password?
                              </a>
                              <p class="text-base text-slate-500">
                                 Not a member yet?
                                 <a
                                    href="javascript:void(0)"
                                    class="text-teal-800 font-semibold hover:underline"
                                    >
                                 Sign Up
                                 </a>
                              </p>
                              <div>
                                 <span class="absolute top-1 right-1">
                                    <svg
                                       width="40"
                                       height="40"
                                       viewBox="0 0 40 40"
                                       fill="none"
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <circle
                                          cx="1.39737"
                                          cy="38.6026"
                                          r="1.39737"
                                          transform="rotate(-90 1.39737 38.6026)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="1.39737"
                                          cy="1.99122"
                                          r="1.39737"
                                          transform="rotate(-90 1.39737 1.99122)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="13.6943"
                                          cy="38.6026"
                                          r="1.39737"
                                          transform="rotate(-90 13.6943 38.6026)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="13.6943"
                                          cy="1.99122"
                                          r="1.39737"
                                          transform="rotate(-90 13.6943 1.99122)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="25.9911"
                                          cy="38.6026"
                                          r="1.39737"
                                          transform="rotate(-90 25.9911 38.6026)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="25.9911"
                                          cy="1.99122"
                                          r="1.39737"
                                          transform="rotate(-90 25.9911 1.99122)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="38.288"
                                          cy="38.6026"
                                          r="1.39737"
                                          transform="rotate(-90 38.288 38.6026)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="38.288"
                                          cy="1.99122"
                                          r="1.39737"
                                          transform="rotate(-90 38.288 1.99122)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="1.39737"
                                          cy="26.3057"
                                          r="1.39737"
                                          transform="rotate(-90 1.39737 26.3057)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="13.6943"
                                          cy="26.3057"
                                          r="1.39737"
                                          transform="rotate(-90 13.6943 26.3057)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="25.9911"
                                          cy="26.3057"
                                          r="1.39737"
                                          transform="rotate(-90 25.9911 26.3057)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="38.288"
                                          cy="26.3057"
                                          r="1.39737"
                                          transform="rotate(-90 38.288 26.3057)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="1.39737"
                                          cy="14.0086"
                                          r="1.39737"
                                          transform="rotate(-90 1.39737 14.0086)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="13.6943"
                                          cy="14.0086"
                                          r="1.39737"
                                          transform="rotate(-90 13.6943 14.0086)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="25.9911"
                                          cy="14.0086"
                                          r="1.39737"
                                          transform="rotate(-90 25.9911 14.0086)"
                                          fill="#fde047"
                                          />
                                       <circle
                                          cx="38.288"
                                          cy="14.0086"
                                          r="1.39737"
                                          transform="rotate(-90 38.288 14.0086)"
                                          fill="#fde047"
                                          />
                                    </svg>
                                 </span>
                                 <span class="absolute left-1 bottom-1">
                                    <svg
                                       width="29"
                                       height="40"
                                       viewBox="0 0 29 40"
                                       fill="none"
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <circle
                                          cx="2.288"
                                          cy="25.9912"
                                          r="1.39737"
                                          transform="rotate(-90 2.288 25.9912)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="14.5849"
                                          cy="25.9911"
                                          r="1.39737"
                                          transform="rotate(-90 14.5849 25.9911)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="26.7216"
                                          cy="25.9911"
                                          r="1.39737"
                                          transform="rotate(-90 26.7216 25.9911)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="2.288"
                                          cy="13.6944"
                                          r="1.39737"
                                          transform="rotate(-90 2.288 13.6944)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="14.5849"
                                          cy="13.6943"
                                          r="1.39737"
                                          transform="rotate(-90 14.5849 13.6943)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="26.7216"
                                          cy="13.6943"
                                          r="1.39737"
                                          transform="rotate(-90 26.7216 13.6943)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="2.288"
                                          cy="38.0087"
                                          r="1.39737"
                                          transform="rotate(-90 2.288 38.0087)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="2.288"
                                          cy="1.39739"
                                          r="1.39737"
                                          transform="rotate(-90 2.288 1.39739)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="14.5849"
                                          cy="38.0089"
                                          r="1.39737"
                                          transform="rotate(-90 14.5849 38.0089)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="26.7216"
                                          cy="38.0089"
                                          r="1.39737"
                                          transform="rotate(-90 26.7216 38.0089)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="14.5849"
                                          cy="1.39761"
                                          r="1.39737"
                                          transform="rotate(-90 14.5849 1.39761)"
                                          fill="#0f766e"
                                          />
                                       <circle
                                          cx="26.7216"
                                          cy="1.39761"
                                          r="1.39737"
                                          transform="rotate(-90 26.7216 1.39761)"
                                          fill="#0f766e"
                                          />
                                    </svg>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                   <!-- end login container -->
                   
                    <button onclick="showMenu(true)"
                        class="text-gray-800 dark:text-gray-400 absolute top-8 right-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                        aria-label="close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    


    <script src="sign-in-js.js"></script>

</body>

</html>