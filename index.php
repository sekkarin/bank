<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bank</title>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body class="bg-slate-200">
    <?php
    $json = file_get_contents("./src/databank.json");
    // print_r(json_decode($json));
    $data_bank = json_decode($json);
    ?>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
            </svg>
            <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Docs
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Examples
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                    Blog
                </a>
            </div>
            <div>
                <a href="#"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto">
        <form action="./src/pages/detaillPayment.php" method="post">
            <div class="container">
                <p class="text-lg text-gray-800 mt-5 mb-5">เลือกธนาคาร</p>
                <select id="bank" name="bank"
                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>เลือกธนาคาร</option>
                    <?php
                    foreach ($data_bank as $value) {
                        ?>
                        <option value="<?= $value->id ?>">
                            <?= $value->bank_name ?>
                        </option>

                    <?php } ?>
                </select>
            </div>
            <hr class="bg-red-400 h-1 border">
            <div class="container">
                <p class="text-lg text-gray-800 mt-5 mb-5">รายละเอียด</p>

                <form>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">First name</label>
                            <input name="first_name" type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required>
                        </div>
                        <div>
                            <label for="last_name"
                                
                                class="block mb-2 text-sm font-medium text-gray-900 ">Last name</label>
                            <input name="last_name" type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Doe" required>
                        </div>
                        <div>
                            <label for="amount"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Amount</label>
                            <input name="amount" type="number" id="amount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Flowbite" required>
                        </div>
                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Phone
                                number</label>
                            <input name="phone" type="tel" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="123-45-678"  >
                        </div>
                    
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                            address</label>
                        <input name="email" type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required>
                    </div>
                    
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input name="remember" id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 ">I agree
                            with the <a href="#" class="text-blue-600 hover:underline dark:text-teal-700">การชำระเงิน</a>.</label>
                    </div>
                    <button
                    id="subbtn" name="subbtn" type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </form>
        <!-- <hr class="bg-red-400 h-1 border mt-5 mb-5"> -->
    </div>
</body>

</html>