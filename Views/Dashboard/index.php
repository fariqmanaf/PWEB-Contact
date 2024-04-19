<?php
require_once __DIR__. '/../../Model/contact.php';
require_once __DIR__. '/../../Model/addContact.php';
$arr = Contact::select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style3.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> 
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="../src/output.css">
    <script src="dashboard.js"></script>
</head>
<body class="bg-gray-100">
    <script type="module" src="app.js"></script>
    <header class="header flex justify-between">
    <div class="header1 flex flex-col mt-1  0 ml-36">
      <p class="text-2xl font-bold mt-4">Welcome Back, Fariq👋</p>
      <p class="text-sm text-slate-400">Start your journey here</p>
    </div>
    <div class="header2 flex mt-10 mr-12 gap-6">
      <input type="text" id="search-navbar" class="block h-12 w-full p-2 ps-10 text-sm text-gray-900 border border-transparent rounded-xl bg-gray-50 focus:ring-indigo-600 focus:border-indigo-600 dark:bg-gray-200 dark:border-transparent dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-gray-400 dark:focus:border-indigo-600" placeholder="Search...">
      <img src="https://source.unsplash.com/random/300x300" class="h-12 w-12 border rounded-xl border-gray-400 p-1 hover:border-indigo-600" alt="human">
      <img src="https://source.unsplash.com/random/300x300/?man" class="h-12 w-12 border rounded-xl border-gray-400 p-1 hover:border-indigo-600" alt="human">
      <div class="h-12 w-12 rounded-xl border text-center flex justify-center items-center bg-gray-200 hover:border-indigo-600"><p class="p-1 w-12 font-semibold">+3</p></div>
    </div>
    </header>
    <!--  -->
    <main class="main flex mt-7">
    <!-- main1 -->
        <div class="main1 w-2/3">
            <div class="title flex justify-between w-11/12 mb-6 px-3">
            <p class="ml-32 text-base font-bold">Your Contact</p>
            <button id="add" class="w-32 bg-indigo-600 hover:bg-indigo-800 text-white text-sm border rounded-xl -ml-60">+ Add Contact</button>
            <div class="nextpre text-base gap-4 font-medium flex -mr-4">
                <a href="" class="">Previous</a>
                <p class="text-gray-400">|</p>
                <a href="" class="text-indigo-600">Next</a>
            </div>
        </div>
        <div class="ml-32 mr-12 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead id="col" class="text-xs bg-indigo-600 uppercase text-white">                 
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Photo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No HP
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Owner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody id="col-gen">
                <?php
                    for ($i = 0; $i < count($arr['id_user']); $i++){
                ?>
                    <tr class="odd:bg-transparent border-b" data-id="<?= $i+1 ?>" data-photo="<?= $arr['photo'][$i] ?>" data-owner="<?= $arr['owner'][$i] ?>" data-no-hp="<?= $arr['no_hp'][$i] ?>">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                            <?= $i+1 ?>
                        </td>
                        <td class="px-6 py-4">
                            <img src="<?= $arr['photo'][$i] ?>" class="h-12 w-12 border rounded-xl border-gray-400 p-1 hover:border-indigo-600" alt="human">
                        </td>
                        <td class="px-6 py-4">
                            <?= $arr['no_hp'][$i] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $arr['owner'][$i] ?>
                        </td>
                        <td class="px-6 py-4">
                            <button id="button-<?= $i+1 ?>" class="p-1 bg-indigo-600 text-white w-18 border rounded-lg hover:bg-indigo-800" onclick="displayContact(<?= $i+1 ?>)">Overview</button>
                        </td>
                    </tr>
                <?php
                    }
                ?>   
            </tbody>
        </table>
    </div>
    </div>
    <!-- main2 -->
    <div class="main2 w-1/3 mr-10">
        <div class="overview container rounded-2xl shadow-lg flex flex-col items-center">
            <div class="head rounded-t-2xl bg-indigo-600 h-12 w-full flex items-center justify-center"><p class="text-white font-semibold">Overview</p></div>
            <div id="overview-append">
                <!-- append overview -->
                <?php for ($i = 0; $i < count($arr['id_user']); $i++){ ?>
                    <div id="overview-<?= $i+1 ?>" class="overview-content hidden flex flex-col items-center gap-4 mt-6">
                        <img src="<?= $arr['photo'][$i] ?>" class="w-32 border rounded-xl border-gray-400 p-1 hover:border-indigo-600" alt="human">
                        <p class="font-semibold text-gray-700 mt-4"><?= $arr['owner'][$i] ?></p>
                        <p class="text-sm font-medium text-gray-700"><?= $arr['no_hp'][$i] ?></p>
                    </div>
                    <div id="button-overview-<?= $i+1 ?>" class="button-overview hidden mt-6 flex justify-center flex-col gap-4 font-semibold">
                        <button class="text-indigo-600 border-indigo-600 border w-80 h-10 rounded-xl hover:bg-indigo-600 hover:text-white">Chat Contact</button>
                        <button onclick="showUpdateModal(<?= $i+1 ?>)" id="edit-button-<?= $i+1 ?>" class="text-yellow-600 border-yellow-600 border w-80 h-10 rounded-xl hover:bg-yellow-600 hover:text-white">Edit Contact</button>
                        <button class="text-red-600 border bg-transparent border-red-600 w-80 h-10 rounded-xl hover:bg-red-700 hover:text-white">Delete Contact</button>
                    </div>
                <?php } ?>

                <!--  -->
                <div id="nothing" class="nothing mt-52">
                    <p class="text-sm">Nothing Here! Choose your contact to see them</p>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!--  -->
    <aside class="shadow-lg absolute top-0 w-20 bg-white h-screen rounded-r-3xl flex flex-col items-center">
        <img src="/resources/logo2.png" alt="logo" class="mx-auto h-10 w-auto mt-12">
        <div class="aside1 flex flex-col justify-center items-center gap-8 mt-14">
            <a href="" class="home hover:bg-indigo-600 border border-transparent p-1.5 rounded-xl"><span class="tooltiptext">Home</span><img width="28" class="hover:invert" height=auto src="https://img.icons8.com/parakeet-line/48/home.png" alt="home"/></a>
            <a href="" class="home hover:bg-indigo-600 border border-transparent p-1.5 rounded-xl"><span class="tooltiptext">Calendar</span><img width="28" class="hover:invert" height=auto src="https://img.icons8.com/parakeet-line/48/calendar--v1.png" alt="calendar--v1"/></a>
            <a href="" class="home hover:bg-indigo-600 border border-transparent p-1.5 rounded-xl"><span class="tooltiptext">Bag</span><img width="28" class="hover:invert" height=auto src="https://img.icons8.com/pastel-glyph/64/red-purse--v2.png" alt="red-purse--v2"/></a>
            <a href="" class="home hover:bg-indigo-600 border border-transparent p-1.5 rounded-xl"><span class="tooltiptext">Task</span><img width="28" class="hover:invert" height=auto src="https://img.icons8.com/ios/50/checked-2--v1.png" alt="checked-2--v1"/></a>
        </div>
        <div class="aside2 flex flex-col justify-center items-center gap-6 mt-32">
            <a href="" class="home hover:bg-indigo-600 border border-transparent p-1.5 rounded-xl"><span class="tooltiptext">Profile</span><img class="hover:invert" width="28" height=auto src="https://img.icons8.com/ios/50/gender-neutral-user--v1.png" alt="settings--v1"/></a>
            <a href="/Views/Login/index.php" class="home hover:bg-red-600 border border-transparent p-1.5 rounded-xl"><span class="tooltiptext">Logout</span><img class="hover:invert" width="26" height=auto src="https://img.icons8.com/ios/50/logout-rounded-left.png" alt="logout-rounded-left"/></a>
        </div>
    </aside>
    <!--  -->
    <div id="modal-content" class="modal-content hidden absolute top-40 left-[25%]">
        <div class="modal-overlay flex flex-col bg-white p-6 rounded-2xl shadow-xl">
            <div class="modal-header">
                <span id="close" class="close cursor-pointer">&times;</span>
                <h2 class="text-center text-indigo-600 font-bold text-lg mb-3">Add Contact</h2>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" class="flex flex-col items-center gap-2 text-sm">
                    <label for="photo">Masukkan Link Foto</label>
                    <input type="text" id="photo" name="photo" class="rounded-full border-transparent bg-gray-200">
                    <label for="no-hp">No HP</label>
                    <input type="text" id="no-hp" name="no_hp" class="rounded-full border-transparent bg-gray-200">
                    <label for="owner">Owner</label>
                    <input type="text" id="owner" name="owner" class="rounded-full border-transparent bg-gray-200 mb-5">
                    <button type="submit" class="p-2 w-44 bg-indigo-600 rounded-2xl text-white font-semibold">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- edit form -->
    <div id="modal-edit" class="modal-edit hidden absolute top-40 left-[25%]">
        <div class="modal-overlay flex flex-col bg-white p-6 rounded-2xl shadow-xl">
            <div class="modal-header">
                <span id="close-update" class="close cursor-pointer">&times;</span>
                <h2 class="text-center text-indigo-600 font-bold text-lg mb-3">Edit Contact</h2>
            </div>
            <div class="modal-body">
                <form action="" class="flex flex-col items-center gap-2 text-sm">
                    <label for="photo">Masukkan Link Foto</label>
                    <input type="text" id="photo-edit" name="photo-edit" class="rounded-full border-transparent bg-gray-200">
                    <label for="no-hp">No HP</label>
                    <input type="text" id="no-hp-edit" name="no-hp-edit" class="rounded-full border-transparent bg-gray-200">
                    <label for="owner">Owner</label>
                    <input type="text" id="owner-edit" name="owner-edit" class="rounded-full border-transparent bg-gray-200 mb-5">
                    <button type="submit" class="p-2 w-44 bg-indigo-600 rounded-2xl text-white font-semibold">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!--  -->
</body>
<script>
    const modal = document.getElementById('modal-content');
    const close = document.getElementById('close');
    const addContact = document.getElementById('add');

    console.log(addContact);

    addContact.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    close.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>
</html>