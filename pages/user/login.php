<section class="container py-8 flex justify-center">

    <div class="w-full max-w-xs">
        <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4" method="post" action>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       name="email" id="email" type="email" placeholder="email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                       name="password" id="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
            </div>
            <div class="flex items-center justify-between">
                <input class="w-5/12 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" value="Sign in">
                <div class="text-right">
                    <a class="inline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                    <a class="inline font-bold text-sm text-blue-500 hover:text-blue-800" href="register">
                        register?
                    </a>
                </div>
            </div>
        </form>

    </div>
</section>
