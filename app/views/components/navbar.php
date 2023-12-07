<nav class="flex w-full bg-Neutral/10">
    <div class="flex gap-2 items-center border-r border-b border-neutral-20 w-[15%] laptop1:w-[18%] laptop2:w-[20%] laptop3:w-[20%] p-6">
        <img src="<?= BASEURL; ?>/Assets/img/Logo Polinema.png" alt="logo" class="w-[2.5rem]">
        <div class="flex flex-col">
            <p class="text-Neutral/60 text-xs">Polinema</p>
            <p class="text-Neutral/100 text-xl font-semibold">KantinJTI</p>
        </div>
    </div>

    <div class="flex justify-between items-center p-6 w-full">
        <div>
            <p class="text-Neutral/80 text-sm"><?= date('d F Y'); ?></p>
            <p id="activeValue" class="text-Neutral/100 text-[1.75rem] font-semibold">
                Dashboard
            </p>
        </div>
        <div class="flex justify-center items-center gap-2 rounded-lg border border-neutral-30 px-4 py-4">
            <img src="<?= BASEURL; ?>/Assets/svg/user-octagon.svg" alt="user">
            <div>
                <p class="text-Neutral/100 font-semibold text-sm"><?= $_SESSION['nama']; ?></p>
                <p class="text-Neutral/60 text-xs"><?= $_SESSION['level']; ?></p>
            </div>
        </div>
    </div>
</nav>