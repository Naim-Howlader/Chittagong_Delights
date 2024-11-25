@extends('admin.layouts.master')
@section('main')
<div class="w-full px-6 py-6 mx-auto">
    {{--*Toast Message--}}
    @if (session('success'))
    <div class="flex justify-end mr-5">
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{session('success')}}</div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    @endif
    <!-- table 1 -->

    <div class="flex flex-wrap -mx-3">
      <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center">
            <h6 class="dark:text-white">Food Item table</h6>
            <a href="{{route('foods.create')}}">
                <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Add Item</button>
            </a>
            <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
              <i class="ni ni-collection text-2.8"></i>
            </button>
          </div>
          <div class="flex-auto px-5  pb-2 pt-5">
            <div class="p-2 overflow-x-hidden">
              <table  class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500 overflow-x-hidden">
                <thead class="align-bottom">
                  <tr>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">#SL</th>
                    {{-- <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th> --}}
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Category</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Price</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Image 1</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Image 2</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Image 3</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Short Descriotion</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Long Description</th>

                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $sl =1;
                    @endphp
                  @foreach ($foods as $food)
                  <tr>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$sl++}}</span>
                    </td>
                    {{-- <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{$food->status}}</span>
                    </td> --}}
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$food->category}}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$food->name}}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$food->price}}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <img src="{{asset($food->image1)}}" alt="" srcset="" style="width: 120px; height:80px">
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <img src="{{asset($food->image2)}}" alt="" srcset="" style="width: 120px; height:80px">
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <img src="{{asset($food->image3)}}" alt="" srcset="" style="width: 120px; height:80px">
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$food->short_description}}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$food->long_description}}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex">
                            <div>
                                <a href="{{route('foods.index')}}">
                                    <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Edit</button>
                                  </a>
                              </div>
                              <div class="px-5">
                                <a href="{{route('foods.index')}}">
                                    <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gradient-to-tl from-red-600 to-orange-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Delete</button>
                                  </a>
                              </div>
                        </div>
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card 2 -->

    <div class="flex flex-wrap -mx-3">
      <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6 class="dark:text-white">Projects table</h6>
          </div>
          <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
              <table class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                <thead class="align-bottom">
                  <tr>
                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Project</th>
                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Budget</th>
                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Completion</th>
                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap"></th>
                  </tr>
                </thead>
                <tbody class="border-t">
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="spotify" />
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,500</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex items-center justify-center">
                        <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">60%</span>
                        <div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="flex flex-col justify-center w-3/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                        <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-invision.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="invision" />
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Invision</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$5,000</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex items-center justify-center">
                        <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                        <div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                        <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-jira.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="jira" />
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Jira</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$3,400</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex items-center justify-center">
                        <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">30%</span>
                        <div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="flex flex-col justify-center h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-red-600 to-orange-600 w-3/10 whitespace-nowrap" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                        <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-slack.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="slack" />
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Slack</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$1,000</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex items-center justify-center">
                        <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">0%</span>
                        <div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="flex flex-col justify-center w-0 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                        <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-webdev.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="webdev" />
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Webdev</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$14,000</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <div class="flex items-center justify-center">
                        <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">80%</span>
                        <div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="flex flex-col justify-center w-4/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                      <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                        <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                      <div class="flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-xd.svg" class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9" alt="xd" />
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Adobe XD</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,300</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                      <div class="flex items-center justify-center">
                        <span class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                        <div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-green-600 to-lime-400 whitespace-nowrap" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                      <button class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400" aria-haspopup="true" aria-expanded="false">
                        <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @push('datatable')
  <script>
      $(function() {
          $('table').DataTable({
                  // autoWidth: true
                  responsive: true,
              })
              .columns.adjust()
              .responsive.recalc();
      })
  </script>
@endpush
@endsection
