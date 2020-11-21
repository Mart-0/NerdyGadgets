<?php $error_messages = isset($_SESSION['form']['error_messages']) ? (object)$_SESSION['form']['error_messages'] : [] ?>
<?php Checkout::noItemsInCart(); ?>

<div class="flex justify-center">
    <div class="overflow-hidden rounded-lg shadow-lg mb-8 max-w-lg">

        <div class="leading-tight flex flex-grid grid-cols-2 gap-4 p-2 md:p-4 bg-white">
            <div>
                <form action= method="POST">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">

                        <?php print $GLOBALS['t']['firstname'] ?>
                    
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php print isset($error_messages->firstname) ? 'border-red-500' : 'border-gray-200' ?>"
                        name="firstname" id="grid-first-name" type="text"
                        value="<?php isset($_SESSION['form']["firstname"]) ? print($_SESSION['form']["firstname"]) : '' ?>">

                    <?php if (isset($error_messages->firstname)) { ?>

                    <p class="text-red-500 text-xs italic"><?php print $error_messages->firstname ?></p>

                <?php } ?>

                </form>
            </div>
            <div>
                <form action= method="POST">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">

                        <?php print $GLOBALS['t']['firstname'] ?>
                    
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php print isset($error_messages->firstname) ? 'border-red-500' : 'border-gray-200' ?>"
                        name="firstname" id="grid-first-name" type="text"
                        value="<?php isset($_SESSION['form']["firstname"]) ? print($_SESSION['form']["firstname"]) : '' ?>">

                    <?php if (isset($error_messages->firstname)) { ?>

                    <p class="text-red-500 text-xs italic"><?php print $error_messages->firstname ?></p>

                <?php } ?>

                </form>
            </div>
        
            <!-- <form action method="POST" class="w-full max-w-lg">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-first-name">
                            <?php print $GLOBALS['t']['firstname'] ?>
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php print isset($error_messages->firstname) ? 'border-red-500' : 'border-gray-200' ?>"
                               name="firstname" id="grid-first-name" type="text"
                               value="<?php isset($_SESSION['form']["firstname"]) ? print($_SESSION['form']["firstname"]) : '' ?>">

                        <?php if (isset($error_messages->firstname)) { ?>

                            <p class="text-red-500 text-xs italic"><?php print $error_messages->firstname ?></p>

                        <?php } ?>

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-last-name">
                            <?php print $GLOBALS['t']['lastname'] ?>
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php print isset($error_messages->lastname) ? 'border-red-500' : 'border-gray-200' ?>"
                               name="lastname" id="grid-last-name" type="text"
                               value="<?php isset($_SESSION['form']["lastname"]) ? print($_SESSION['form']["lastname"]) : '' ?>">

                        <?php if (isset($error_messages->lastname)) { ?>

                            <p class="text-red-500 text-xs italic"><?php print $error_messages->lastname ?></p>

                        <?php } ?>

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-password">
                            E-mailadress
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php print isset($error_messages->email) ? 'border-red-500' : 'border-gray-200' ?>"
                               name="email" id="grid-email" type="text"
                               value="<?php isset($_SESSION['form']["email"]) ? print($_SESSION['form']["email"]) : '' ?>">

                        <?php if (isset($error_messages->email)) { ?>

                            <p class="text-red-500 text-xs italic"><?php print $error_messages->email ?></p>

                        <?php } ?>

                        <p class="text-gray-600 text-xs italic"></p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-password">
                            Telefoonnummer
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php print isset($error_messages->phonenumber) ? 'border-red-500' : 'border-gray-200' ?>"
                               name="phonenumber" placeholder="06-12345678" id="grid-phonenumber" type="tel"
                               pattern="[06]{2}-[0-9]{8}"
                               value="<?php isset($_SESSION['form']["phonenumber"]) ? print($_SESSION['form']["phonenumber"]) : '' ?>">

                        <?php if (isset($error_messages->phonenumber)) { ?>

                            <p class="text-red-500 text-xs italic"><?php print $error_messages->phonenumber ?></p>

                        <?php } ?>

                    </div>
                </div>
                <div class="flex md:items-center justify-between">
                    <a href="/cart"
                       class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                       type="button">Terug</a>
                    <input class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                           name="submit" type="submit" value="Doorgaan">
                </div>
            </form> -->
        </div>
    </div>
</div>