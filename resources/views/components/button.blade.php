<a {{ $attributes->merge(['class'=>'relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md cursor-pointer 
                          hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 
                          dark:text-gray-300 dark:bg-gray-800
                          dark:border-gray-600 dark:hover:bg-gray-700']) }} >
   
    {{ $slot }}
</a>
