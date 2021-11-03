<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <!-- Styles -->
        
    </head>
    <body class="antialiased bg-gray-400">

        <section class="md:col-span-3 flex flex-wrap md:flex-nowrap items-center bg-gray-800 shadow-lg  py-6 md:py-4 px-6 md:pr-5 space-y-4 md:space-y-0 md:space-x-8"><h2 class="flex-none"><span class="sr-only">Tailwind UI</span><svg xmlns="http://www.w3.org/2000/svg" width="188" height="28" fill="none" viewBox="0 0 188 28" class="w-40 h-auto"><path fill="#16BDCA" d="M22 2c-5.333 0-8.667 2.667-10 8 2-2.667 4.333-3.667 7-3 1.522.38 2.609 1.484 3.813 2.706C24.773 11.696 27.043 14 32 14c5.333 0 8.667-2.667 10-8-2 2.667-4.333 3.667-7 3-1.521-.38-2.609-1.484-3.813-2.706C29.227 4.304 26.957 2 22 2zM12 14c-5.333 0-8.667 2.667-10 8 2-2.667 4.333-3.667 7-3 1.521.38 2.609 1.484 3.813 2.706C14.773 23.696 17.043 26 22 26c5.333 0 8.667-2.667 10-8-2 2.667-4.333 3.667-7 3-1.521-.38-2.609-1.484-3.813-2.706C19.227 16.304 16.957 14 12 14z"></path><path fill="#FFF" d="M60.26 11.12V8h-3.72V3.8l-3.24.96V8h-2.76v3.12h2.76v7.2c0 3.9 1.98 5.28 6.96 4.68v-2.91c-2.46.12-3.72.15-3.72-1.77v-7.2h3.72zM74.463 8v2.13c-1.14-1.56-2.91-2.52-5.25-2.52-4.08 0-7.47 3.42-7.47 7.89 0 4.44 3.39 7.89 7.47 7.89 2.34 0 4.11-.96 5.25-2.55V23h3.24V8h-3.24zm-4.74 12.3c-2.7 0-4.74-2.01-4.74-4.8s2.04-4.8 4.74-4.8 4.74 2.01 4.74 4.8-2.04 4.8-4.74 4.8zM83.1 5.75c1.14 0 2.07-.96 2.07-2.07 0-1.14-.93-2.07-2.07-2.07-1.14 0-2.07.93-2.07 2.07 0 1.11.93 2.07 2.07 2.07zM81.48 23h3.24V8h-3.24v15zm7.002 0h3.24V1.1h-3.24V23zm24.282-15l-2.94 10.35L106.704 8h-3.09l-3.15 10.35L97.554 8h-3.42l4.71 15h3.18l3.15-10.11 3.12 10.11h3.18l4.71-15h-3.42zm7.426-2.25c1.14 0 2.07-.96 2.07-2.07 0-1.14-.93-2.07-2.07-2.07-1.14 0-2.07.93-2.07 2.07 0 1.11.93 2.07 2.07 2.07zM118.57 23h3.24V8h-3.24v15zm14.892-15.39c-2.04 0-3.66.75-4.65 2.31V8h-3.24v15h3.24v-8.04c0-3.06 1.68-4.32 3.81-4.32 2.04 0 3.36 1.2 3.36 3.48V23h3.24v-9.21c0-3.9-2.4-6.18-5.76-6.18zM154.59 2v8.13c-1.14-1.56-2.91-2.52-5.25-2.52-4.08 0-7.47 3.42-7.47 7.89 0 4.44 3.39 7.89 7.47 7.89 2.34 0 4.11-.96 5.25-2.55V23h3.24V2h-3.24zm-4.74 18.3c-2.7 0-4.74-2.01-4.74-4.8s2.04-4.8 4.74-4.8 4.74 2.01 4.74 4.8-2.04 4.8-4.74 4.8z"></path><path fill="#FFF" fill-rule="evenodd" d="M171 4h10a4 4 0 014 4v10a4 4 0 01-4 4h-10a4 4 0 01-4-4V8a4 4 0 014-4zm-6 4a6 6 0 016-6h10a6 6 0 016 6v10a6 6 0 01-6 6h-10a6 6 0 01-6-6V8zm12.816 7.293c0 2.114-1.596 3.402-3.752 3.402-2.142 0-3.738-1.288-3.738-3.402V8.7h1.918v6.44c0 .952.504 1.666 1.82 1.666s1.82-.714 1.82-1.666V8.7h1.932v6.594zm2.021 3.206V8.7h1.932v9.8h-1.932z" clip-rule="evenodd"></path></svg></h2><p class="flex-auto text-white text-lg font-medium">Beautiful UI components, crafted by the creators of Tailwind&nbsp;CSS</p><a href="https://tailwindui.com/components" class="flex-none bg-white hover:bg-gray-100 transition-colors duration-200 text-gray-900 font-semibold rounded-lg py-3 px-4">Browse components</a></section>
            <!-- Container -->
            <div class="container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1635883536659-ba39faa95b00?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="pt-4 text-2xl text-center">File uploader!</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" id="myform" action="{{route('form.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                            Name
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-blue-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            name = "name"
                                            id="id_name"
                                            type="text"
                                            placeholder="Name"
                                        />
                                        @error('name')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                            Email
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-blue-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            name="email"
                                            id="id_email"
                                            type="text"
                                            placeholder="Email"
                                        />
                                        @error('email')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Description
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-blue-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="description"
                                        id="id_description"
                                        type="text"
                                        placeholder="Description"
                                    />
                                    @error('description')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                                <div class="mb-4 md:flex md:justify-center">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                            Birth Year
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-blue-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            name="birth_year"
                                            id="id_birth"
                                            type="text"
                                            placeholder="Birth Year"
                                        />
                                        @error('birth_year')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Upload file
                                    </label>
                                             
                                    <input
                                        class="placeholder-blue-400 w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border-blue-500 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="file_upload"
                                        id="id_file"
                                        type="file"
                                        placeholder="Description"
                                         
                                    />
                                    @error('file_upload')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                        @enderror
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="submit" >
                                        Submit
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="#" style="display:none"
                                    >
                                        Forgot Password?
                                    </a>
                                </div>
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="./index.html" style="display:none"
                                    >
                                        Already have an account? Login!
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
        function submitform()
        {
            document.getElementById("myform").submit();
        }
        </script>
    </body>
</html>
