@extends('admin.layouts.master')
@section('main')
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
            <div class="flex items-center justify-between">
              <div>
                <p class="mb-0 dark:text-white/80">Create Food Item</p>
              </div>
              <div>
                <a href="{{route('foods.index')}}">
                    <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">All Items</button>
                  </a>
              </div>
            </div>
          </div>
          <div class="flex-auto p-6">
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Item Information</p>
            <form action="{{route('foods.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                    <label for="category" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Item Category</label>
                    <select id="category" name="category" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                    <option selected disabled>Choose a Category</option>
                    <option @if (old('category')=='Burger') selected @endif value="Burger">Burger</option>
                    <option @if (old('category')=='Pizza') selected @endif value="Pizza">Pizza</option>
                    <option @if (old('category')=='Biriyani') selected @endif value="Biriyani">Biriyani</option>
                    <option @if (old('category')=='Drinks') selected @endif value="Drinks">Drinks</option>
                    </select>
                    @error('category')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Item Name</label>
                  <input type="text" value="{{old('name')}}" name="name" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  @error('name')
                  <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="short_description" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Short Description</label>
                  <textarea name="short_description" id="short_description" cols="30" rows="5" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">{{old('short_description')}}</textarea>
                  @error('short_description')
                  <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                    <label for="long_description" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Long Description</label>
                    <textarea name="long_description" id="long_description" cols="30" rows="5" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">{{old('long_description')}}</textarea>
                    @error('long_description')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
              </div>
            </div>
            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Price Information</p>
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                <div class="mb-4">
                  <label for="price" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Item Price</label>
                  <input type="text" name="price" value="{{old('price')}}" id="price" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  @error('price')
                  <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
                </div>
              </div>
            </div>
            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Item Images</p>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                  <div class="mb-4">
                    <label for="image1" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Item Page Image</label>
                    <input type="file" name="image1"  id="image1" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    @error('image1')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                  <div class="mb-4">
                    <label for="image2" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Details Page Image 1</label>
                    <input type="file" name="image2" id="image2"  class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    @error('image2')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                  <div class="mb-4">
                    <label for="image3" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Details Page Image 2</label>
                    <input type="file" name="image3" id="image3" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    @error('image3')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Create</button>
            </form>
          </div>
        </div>
      </div>


    </div>
@endsection
