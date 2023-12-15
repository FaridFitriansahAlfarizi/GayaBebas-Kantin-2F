<?php
// Contoh data
$data_barang = $data['barang'];

// array(
//     array("Nama" => "Tricks Bulgogi Keripik Kentang", "Harga" => 6000, "Tersedia" => 219, "Kategori" => "Makanan", "Exp" => "26/10/2023"),
//     array("Nama" => "Choco Paradise Cookies", "Harga" => 12000, "Tersedia" => 150, "Kategori" => "Kue", "Exp" => "30/11/2023"),
//     array("Nama" => "Vanilla Dream Ice Cream", "Harga" => 25000, "Tersedia" => 50, "Kategori" => "Es Krim", "Exp" => "15/12/2023"),
// );
?>
<section class="flex flex-col fadeIn p-4 gap-2 w-full h-screen">
    <div class="flex flex-col bg-Neutral/10 rounded-[1.25rem] p-6 gap-6 h-[87%] laptop2:h-[85%]">
        <div class="flex justify-between">
            <div class="flex justify-between px-7 py-3 border border-Neutral/30 rounded-full">
                <input type="search" name="" id="cari-barang" onkeyup="cariBarang()" class="outline-none" placeholder="Cari barang">
                <img src="../public/Assets/svg/search-normal.svg" alt="search">
            </div>
            <div class="flex gap-3">
                <a href="<?= BASEURL; ?>/requestbarang">
                    <span id="request" class="flex gap-3 text-Primary-blue rounded-full cursor-pointer bg-Neutral/20 px-4 py-3 active:opacity-80">
                        <p>
                            Request Barang
                        </p>
                        <div class="bg-Primary-surface rounded-full px-[0.65rem]">1</div>
                    </span>
                </a>
                <button id="addBarang" class="addButton" onclick="addBarang()">Tambahkan</button>
            </div>
        </div>
        <!-- start grid -->
        <section class="grid grid-cols-4 gap-4 p-2 overflow-auto" id="section-barang">
            <?php foreach ($data_barang as $barang) : ?>
                <div class="flex flex-col border border-Neutral/30 rounded-3xl p-[0.2rem] div-barang">
                    <div class="flex flex-col items-center bg-Neutral/20 p-4 rounded-[1.25rem]">
                        <span class="bg-Neutral/10 px-5 py-2 rounded-full w-fit self-start"><?php echo $barang['stok']; ?>
                            Tersedia</span>
                        <img src="../public/Assets/img/jajan.png" alt="jajan" class="w-[50%]">
                    </div>
                    <div class="flex flex-col gap-3 p-4">
                        <p class="text-Neutral/100 font-semibold text-base w-full overflow-hidden whitespace-nowrap text-ellipsis p-barang">
                            <?php echo $barang['nama']; ?>
                        </p>
                        <p class="text-Primary-blue text-xl font-semibold">Rp <?php echo $barang['hrg_jual']; ?><span class="text-Neutral/50 text-xs">/pcs</span></p>
                        <div class="flex gap-1 text-Neutral/70 font-medium text-sm">
                            <p><?php echo $barang['kategori']; ?></p>
                            <img src="../public/Assets/svg/Ellipse 5.svg" alt="">
                            <p>Exp <?php echo ($barang['tgl_expire'] != NULL) ? date('d/m/Y', strtotime($barang['tgl_expire'])) : ''; ?></p>
                        </div>
                    </div>
                    <div class="flex gap-2 p-4 -mt-2 w-full">
                        <img src="../public/Assets/svg/trash.svg" alt="delete" class="deleteItem py-2 px-3 border rounded-full border-Neutral/40 cursor-pointer active:opacity-80" onclick="openDeleteBarang<?php echo $barang['id_barang']; ?>()">
                        <button class="EditItem w-full bg-Neutral/20 rounded-full text-center p-3 text-Primary-blue active:opacity-80" onclick="editBarang<?php echo $barang['id_barang']; ?>()">Edit</button>
                    </div>
                </div>
            <?php endforeach; ?>

        </section>
        <!-- end grid -->
        <!-- add Modal -->
        <div id="addModalBarang" class="fixed inset-0 items-center justify-center z-50 bg-black bg-opacity-60 hidden">
            <div class="flex flex-col modal bg-white p-8 rounded-[2rem] shadow-lg gap-8 w-[50%] laptop1:w-[62%] laptop3:w-[68%]">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-Neutral/100">Tambah Data Barang</h2>
                    <button id="closeModal" class="cursor-pointer" onclick="closeBarang()">
                        <img src="../public/Assets/svg/close.svg" alt="close">
                    </button>
                </div>
                <form id="formAdd" class="flex flex-col gap-8 justify-center items-stretch" action="<?= BASEURL; ?>/databarang/tambahDataBarang" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-8">
                        <div class="flex flex-col gap-3">
                            <label for="namaBarang" class="textInputKaryawan">Nama Barang</label>
                            <input type="text" name="nama" id="namaBarang" class="inputKaryawan" placeholder="Masukkan nama barang">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="stok" class="textInputKaryawan">Jumlah Stok</label>
                            <input type="number" name="stok" id="stok" class="inputKaryawan" placeholder="Masukkan jumlah stok">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="inputImg" class="textInputKaryawan">Upload gambar produk</label>
                            <div class="flex flex-col items-center bg-Neutral/20 border-2 border-dashed border-Primary-surface rounded-3xl gap-2 cursor-pointer">
                                <label for="inputImg" id="drop-area" class="flex flex-col justify-center items-center m-2 px-[20%] py-[2%] h-[28vh] laptop1:h-[32vh] laptop3:h-[30vh] laptop2:h-[36vh]">
                                    <img src="../public/Assets/svg/upload.svg" alt="upload">
                                    <p class="text-Neutral/80 text-center text-sm"><span class="text-Neutral/100 font-semibold underline">Pilih gambar</span> untuk
                                        diunggah
                                        atau tarik dan
                                        lepas gambar disini</p>
                                </label>
                                <input type="file" name="inputImg" id="inputImg" class="inputImg" hidden>
                            </div>
                        </div>
                        <div class="flex flex-col gap-8">
                            <div class="flex flex-col gap-3">
                                <p class="textInputKaryawan">Kategori</p>
                                <div class="flex gap-3">
                                    <label for="makanan" class="inputRadio">
                                        <input type="radio" name="kategori" id="makanan" value="Makanan">
                                        Makanan
                                    </label>
                                    <label for="minuman" class="inputRadio">
                                        <input type="radio" name="kategori" id="minuman" value="Minuman">
                                        Minuman
                                    </label>
                                    <label for="atk" class="inputRadio">
                                        <input type="radio" name="kategori" id="atk" value="ATK">
                                        ATK
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="date-input" class="textInputKaryawan">Tanggal Kadaluarsa</label>
                                <div class="flex gap-2 w-full bg-Neutral/20 pr-6 rounded-xl">
                                    <input type="text" name="date" id="date-input" class="inputKaryawan w-full" placeholder="Masukkan tanggal" onblur="blurDate()" onfocus="focusDate()">
                                    <img src="../public/Assets/svg/calendar-2.svg" alt="">
                                </div>
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="harga" class="textInputKaryawan">Harga Jual</label>
                                <div class="flex gap-2 items-baseline px-6 py-4 bg-Neutral/20 rounded-xl w-full">
                                    <span class="text-Neutral/50">
                                        Rp |
                                    </span>
                                    <!-- <input type="number" name="harga" id="inputEditHarga" class="bg-Neutral/20 outline-none w-[80%]" placeholder="Masukkan harga" oninput="formatNumber(this)"> -->
                                    <input type="number" name="harga" id="inputEditHarga" class="bg-Neutral/20 outline-none w-[80%]" placeholder="Masukkan harga">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="addButton self-end">Tambah</button>
                </form>
            </div>
        </div>
        <!-- end modal add -->
        <!-- start modal edit -->
        <?php foreach ($data_barang as $barang) : ?>
            <div id="editModalBarang<?php echo $barang['id_barang']; ?>" class="fixed inset-0 items-center justify-center z-50 bg-black bg-opacity-60 hidden">
                <div class="flex flex-col modal bg-white p-8 rounded-[2rem] shadow-lg gap-8 w-[50%] laptop1:w-[62%] laptop3:w-[68%]">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-Neutral/100">Edit Data Barang</h2>
                        <button id="closeModal" class="cursor-pointer" onclick="closeEdit<?php echo $barang['id_barang']; ?>()">
                            <img src="../public/Assets/svg/close.svg" alt="close">
                        </button>
                    </div>
                    <form id="formEdit" class="flex flex-col gap-8 justify-center items-stretch" action="<?= BASEURL; ?>/databarang/ubahDataBarangById/<?php echo $barang['id_barang']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="grid grid-cols-2 gap-8">
                            <div class="flex flex-col gap-3">
                                <label for="editNamaBarang" class="textInputKaryawan">Nama Barang</label>
                                <input type="text" name="nama" id="editNamaBarang" class="inputKaryawan" placeholder="Masukkan nama barang" value="<?php echo $barang['nama']; ?>">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="editStok" class="textInputKaryawan">Jumlah Stok</label>
                                <input type="number" name="stok" id="editStok" class="inputKaryawan" placeholder="Masukkan jumlah stok" value="<?php echo $barang['stok']; ?>">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="inputImg" class="textInputKaryawan">Upload gambar produk</label>
                                <div class="flex flex-col items-center border-2 border-dashed border-Primary-surface rounded-3xl gap-2 cursor-pointer">
                                    <label for="inputImgEdit<?php echo $barang['id_barang']; ?>" id="drop-area-edit<?php echo $barang['id_barang']; ?>" class="flex flex-col justify-center items-center m-2 px-[20%] py-[2%] h-[28vh] laptop1:h-[32vh] laptop3:h-[30vh] laptop2:h-[36vh]">
                                        <div class="flex flex-col items-start w-fit">
                                            <div class="flex justify-end w-full -mb-2 cursor-pointer" onclick="cancelUpEdit<?php echo $barang['id_barang']; ?>()">
                                                <img src="../public/Assets/svg/close.svg" alt="" class="-mr-[0.8rem]">
                                            </div>
                                            <img src="../../GayaBebas-Kantin-2F/public/Assets/img/barang/<?php echo $barang['foto']; ?>" alt="" class="px-10 py-7 bg-Neutral/20 rounded-3xl">
                                        </div>
                                    </label>
                                    <input type="file" name="inputImgEdit" id="inputImgEdit<?php echo $barang['id_barang']; ?>" class="inputImg" hidden>
                                </div>
                            </div>
                            <div class="flex flex-col gap-8">
                                <div class="flex flex-col gap-3">
                                    <p class="textInputKaryawan">Kategori</p>
                                    <div class="flex gap-3">
                                        <label for="editMakanan" class="inputRadio">
                                            <input type="radio" name="kategori" id="editMakanan" value="Makanan" <?php echo ($barang['kategori'] == 'Makanan') ? 'checked' : ''; ?>>
                                            Makanan
                                        </label>
                                        <label for="editMinuman" class="inputRadio">
                                            <input type="radio" name="kategori" id="editMinuman" value="Minuman" <?php echo ($barang['kategori'] == 'Minuman') ? 'checked' : ''; ?>>
                                            Minuman
                                        </label>
                                        <label for="editAtk" class="inputRadio">
                                            <input type="radio" name="kategori" id="editAtk" value="ATK" <?php echo ($barang['kategori'] == 'ATK') ? 'checked' : ''; ?>>
                                            ATK
                                        </label>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <label for="date-input" class="textInputKaryawan">Tanggal Kadaluarsa</label>
                                    <div class="flex gap-2 w-full bg-Neutral/20 pr-6 rounded-xl">
                                        <input type="text" name="date" id="date-input-edit" class="inputKaryawan w-full" placeholder="Masukkan tanggal" onblur="blurDate()" onfocus="focusDate()" value="<?php echo $barang['tgl_expire']; ?>">
                                        <img src="../public/Assets/svg/calendar-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <label for="harga" class="textInputKaryawan">Harga Jual</label>
                                    <div class="flex gap-2 items-baseline px-6 py-4 bg-Neutral/20 rounded-xl w-full">
                                        <span class="text-Neutral/50">
                                            Rp |
                                        </span>
                                        <!-- <input type="number" name="harga" id="inputEditHarga" class="bg-Neutral/20 outline-none w-[80%]" placeholder="Masukkan harga" oninput="formatNumber(this)"> -->
                                        <input type="number" name="harga" id="inputEditHarga" class="bg-Neutral/20 outline-none w-[80%]" placeholder="Masukkan harga" value="<?php echo $barang['hrg_jual']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="addButton self-end">Simpan</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- end modal edit -->
        <!-- start modal delete -->
        <?php foreach ($data_barang as $barang) : ?>
            <div id="deleteBarang<?php echo $barang['id_barang']; ?>" class="fixed inset-0 items-center justify-center z-50 bg-black bg-opacity-60 hidden">
                <div class="flex flex-col modal bg-white p-8 rounded-[2rem] shadow-lg gap-8 w-[20%] laptop1:w-[27%] laptop3:w-[30%]">
                    <p class="text-Neutral/100 text-xl font-semibold text-center">Apakah anda yakin ingin menghapus data
                        ini?</p>
                    <div class="flex justify-between">
                        <a href="<?= BASEURL; ?>/databarang/hapusDataBarangById/<?php echo $barang['id_barang']; ?>">
                            <button class="px-[3.25rem] py-3 text-white bg-red-600 rounded-full">Hapus</button>
                        </a>
                        <button class="px-[3.25rem] py-3 text-Neutral/100 bg-[#EEE] rounded-full" onclick="closeDeleteBarang<?php echo $barang['id_barang']; ?>()">Batal</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- end modal delete -->
    </div>
</section>
<script>
    // modal data Barang
    const modalAddBarang = document.getElementById("addModalBarang")

    const addBarang = () => {
        modalAddBarang.classList.remove('hidden')
        modalAddBarang.classList.add('flex');
    }

    const closeBarang = () => {
        modalAddBarang.classList.add('hidden');
        modalAddBarang.classList.remove('flex');
    }

    // upload
    const inputFile = document.getElementById("inputImg")
    const dropArea = document.getElementById("drop-area")
    const original = dropArea.innerHTML

    let file;


    inputFile.addEventListener("change", function() {
        file = this.files[0]
        showFile()
    })

    dropArea.addEventListener("dragover", e => {
        e.preventDefault()
    })

    dropArea.addEventListener("drop", e => {
        e.preventDefault()
        file = e.dataTransfer.files[0]
        showFile()
    })

    const cancelUp = () => {
        dropArea.innerHTML = null
        dropArea.innerHTML = original
        dropArea.parentNode.classList.add("bg-Neutral/20")
    }


    const showFile = () => {
        let fileType = file.type;
        let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
        if (validExtensions.includes(fileType)) {
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                dropArea.parentNode.classList.remove("bg-Neutral/20")
                dropArea.innerHTML = null;
                dropArea.innerHTML = `<div class="flex flex-col items-start w-fit">
                                <div class="flex justify-end w-full -mb-2 cursor-pointer" onclick="cancelUp()">
                                    <img src="../public/Assets/svg/close.svg" alt="" class="-mr-[0.8rem]">
                                </div>
                                    <img src="${fileURL}" alt="" class="px-10 py-7 bg-Neutral/20 rounded-3xl">
                                </div>`;
            }
            fileReader.readAsDataURL(file);
        } else {
            alert("This is not an Image File!");
        }
    }

    // end upload

    // start date

    const input = document.getElementById('date-input');
    const inputEdit = document.getElementById('date-input-edit');

    const focusDate = () => {
        if (input || inputEdit) {
            input.type = "date";
            inputEdit.type = "date"
        }
    };

    const blurDate = () => {
        if ((input && input.value.trim() === '') || (inputEdit && inputEdit.value.trim() === '')) {
            input.type = "text";
            inputEdit.type = "text";
        }
    };
    // start end date

    // modal edit
    <?php foreach ($data_barang as $barang) : ?>
        const edit<?php echo $barang['id_barang']; ?> = document.getElementById('editModalBarang<?php echo $barang['id_barang']; ?>')

        const editBarang<?php echo $barang['id_barang']; ?> = () => {
            edit<?php echo $barang['id_barang']; ?>.classList.remove('hidden')
            edit<?php echo $barang['id_barang']; ?>.classList.add('flex');
        }

        const closeEdit<?php echo $barang['id_barang']; ?> = () => {
            edit<?php echo $barang['id_barang']; ?>.classList.add('hidden');
            edit<?php echo $barang['id_barang']; ?>.classList.remove('flex');
        }


        let fileEdit<?php echo $barang['id_barang']; ?>;

        const imgEdit<?php echo $barang['id_barang']; ?> = document.getElementById("inputImgEdit<?php echo $barang['id_barang']; ?>")
        const dropAreaEdit<?php echo $barang['id_barang']; ?> = document.getElementById("drop-area-edit<?php echo $barang['id_barang']; ?>")

        imgEdit<?php echo $barang['id_barang']; ?>.addEventListener("change", function() {
            fileEdit<?php echo $barang['id_barang']; ?> = this.files[0]
            showFileEdit<?php echo $barang['id_barang']; ?>()
        })

        dropAreaEdit<?php echo $barang['id_barang']; ?>.addEventListener("dragover", e => {
            e.preventDefault()
        })

        dropAreaEdit<?php echo $barang['id_barang']; ?>.addEventListener("drop", e => {
            e.preventDefault()
            fileEdit<?php echo $barang['id_barang']; ?> = e.dataTransfer.files[0]
            showFileEdit<?php echo $barang['id_barang']; ?>()
        })

        const cancelUpEdit<?php echo $barang['id_barang']; ?> = () => {
            dropAreaEdit<?php echo $barang['id_barang']; ?>.innerHTML = null
            dropAreaEdit<?php echo $barang['id_barang']; ?>.innerHTML = `<img src="../public/Assets/svg/upload.svg" alt="upload">
                                        <p class="text-Neutral/80 text-center text-sm"><span class="text-Neutral/100 font-semibold underline">Pilih gambar</span> untuk
                                            diunggah
                                            atau tarik dan
                                            lepas gambar disini</p>`
            dropAreaEdit<?php echo $barang['id_barang']; ?>.parentNode.classList.add("bg-Neutral/20")
        }
        // --------------------------------------------------------------------

        const showFileEdit<?php echo $barang['id_barang']; ?> = () => {
            let fileType = fileEdit<?php echo $barang['id_barang']; ?>.type;
            let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
            if (validExtensions.includes(fileType)) {
                let fileReader = new FileReader();
                fileReader.onload = () => {
                    let fileURL = fileReader.result;
                    dropAreaEdit<?php echo $barang['id_barang']; ?>.parentNode.classList.remove("bg-Neutral/20")
                    dropAreaEdit<?php echo $barang['id_barang']; ?>.innerHTML = null;
                    dropAreaEdit<?php echo $barang['id_barang']; ?>.innerHTML = `<div class="flex flex-col items-start w-fit">
                <div class="flex justify-end w-full -mb-2 cursor-pointer" onclick="cancelUpEdit<?php echo $barang['id_barang']; ?>()">
                <img src="../public/Assets/svg/close.svg" alt="" class="-mr-[0.8rem]">
                </div>
                <img src="${fileURL}" alt="" class="px-10 py-7 bg-Neutral/20 rounded-3xl">
                </div>`;
                }
                fileReader.readAsDataURL(fileEdit<?php echo $barang['id_barang']; ?>);
            } else {
                alert("This is not an Image File!");
            }
        }
    <?php endforeach; ?>
    // end edit
    // modal delete
    <?php foreach ($data_barang as $barang) : ?>
        const deleteBarang<?php echo $barang['id_barang']; ?> = document.getElementById('deleteBarang<?php echo $barang['id_barang']; ?>')

        const openDeleteBarang<?php echo $barang['id_barang']; ?> = () => {
            deleteBarang<?php echo $barang['id_barang']; ?>.classList.remove('hidden')
            deleteBarang<?php echo $barang['id_barang']; ?>.classList.add('flex');
        }

        const closeDeleteBarang<?php echo $barang['id_barang']; ?> = () => {
            deleteBarang<?php echo $barang['id_barang']; ?>.classList.add('hidden');
            deleteBarang<?php echo $barang['id_barang']; ?>.classList.remove('flex');
        }
    <?php endforeach; ?>
    // end delete
    // function formatNumber(input) {
    //     let value = input.value.replace(/\./g, '');
    //     input.value = Number(value).toLocaleString('de-DE');
    // }
</script>

<script>
    function cariBarang() {
        var input, filter, section, items, item, title, i, txtValue;
        input = document.getElementById('cari-barang');
        filter = input.value.toUpperCase();
        section = document.getElementById('section-barang');
        items = section.getElementsByClassName('div-barang');

        for (i = 0; i < items.length; i++) {
            item = items[i];
            title = item.querySelector('p.p-barang');
            txtValue = title.textContent || title.innerText;

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        }
    }
</script>