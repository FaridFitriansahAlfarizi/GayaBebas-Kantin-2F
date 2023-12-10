<aside class="flex flex-col justify-between items-stretch p-6 w-[15%] laptop1:w-[18%] laptop2:w-[20%] laptop3:w-[20%] bg-Neutral/10 h-[88vh] laptop4:h-[85vh]">
    <div>
        <a id="dashboard" class="containerSidebar <?php echo $active == 'Dashboard' ? 'activeSidebar' : ''; ?>" href="<?= BASEURL; ?>/dashboard">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/3dcube">
                    <g id="3dcube">
                        <path id="Vector" d="M10 10.2083C9.63337 10.2083 9.26671 10.1167 8.93337 9.94167L3.50837 7.01667C3.01671 6.75001 2.70837 6.22501 2.70837 5.64167C2.70837 5.05834 3.01671 4.53334 3.50837 4.26667L8.93337 1.34167C9.60004 0.983338 10.4 0.983338 11.0584 1.34167L16.4834 4.26667C16.975 4.53334 17.2834 5.05834 17.2834 5.64167C17.2834 6.22501 16.975 6.75001 16.4834 7.01667L11.0584 9.94167C10.7334 10.125 10.3667 10.2083 10 10.2083ZM10 2.31667C9.84171 2.31667 9.67504 2.35834 9.52504 2.44167L4.10837 5.35834C3.96671 5.43334 3.95837 5.59167 3.95837 5.64167C3.95837 5.69167 3.96671 5.85001 4.10837 5.91667L9.53337 8.84167C9.83337 9 10.175 9 10.475 8.84167L15.9 5.91667C16.0334 5.84167 16.05 5.68334 16.05 5.64167C16.05 5.59167 16.0417 5.43334 15.9 5.36667L10.475 2.44167C10.325 2.35834 10.1584 2.31667 10 2.31667Z" fill="#5E51D9" />
                        <path id="Vector_2" d="M8.14996 18.9333C7.91663 18.9333 7.67496 18.875 7.45829 18.7667L2.40829 16.25C1.56663 15.825 1.04163 14.975 1.04163 14.0333V9.26667C1.04163 8.725 1.31663 8.23333 1.77496 7.95C2.24163 7.66667 2.79996 7.64167 3.28329 7.88333L8.33329 10.4C9.17496 10.825 9.69996 11.6667 9.69996 12.6167V17.3833C9.69996 17.925 9.42496 18.4167 8.96663 18.7C8.71663 18.8583 8.43329 18.9333 8.14996 18.9333ZM2.59163 8.96667C2.52496 8.96667 2.46663 8.99167 2.43329 9.00833C2.38329 9.04167 2.29163 9.11667 2.29163 9.26667V14.0333C2.29163 14.5 2.54996 14.925 2.96663 15.1333L8.00829 17.6583C8.14163 17.725 8.24996 17.675 8.29996 17.65C8.34996 17.6167 8.44163 17.5417 8.44163 17.3917V12.625C8.44163 12.1583 8.18329 11.7333 7.76663 11.525L2.72496 9C2.67496 8.975 2.63329 8.96667 2.59163 8.96667Z" fill="#5E51D9" />
                        <path id="Vector_3" d="M11.85 18.9333C11.5667 18.9333 11.2834 18.8583 11.0334 18.7C10.575 18.4167 10.3 17.925 10.3 17.3833V12.6167C10.3 11.675 10.825 10.825 11.6667 10.4L16.7084 7.875C17.1917 7.63334 17.7584 7.65834 18.2167 7.94167C18.675 8.225 18.95 8.71667 18.95 9.25834V14.025C18.95 14.9667 18.425 15.8167 17.5834 16.2417L12.5417 18.7667C12.325 18.8833 12.0834 18.9333 11.85 18.9333ZM17.4084 8.96667C17.3667 8.96667 17.325 8.975 17.275 9L12.2334 11.525C11.8167 11.7333 11.5584 12.15 11.5584 12.625V17.3917C11.5584 17.5417 11.65 17.6167 11.7 17.65C11.75 17.6833 11.8584 17.725 11.9917 17.6583L17.0334 15.1333C17.45 14.925 17.7084 14.5 17.7084 14.0333V9.26667C17.7084 9.11667 17.6167 9.04167 17.5667 9.00834C17.5334 8.99167 17.475 8.96667 17.4084 8.96667Z" fill="#5E51D9" />
                    </g>
                </g>
            </svg>

            <p class="textSidebar <?php echo $active == 'Dashboard' ? 'text-Primary-blue' : 'text-Neutral/70';  ?>">
                Dashboard
            </p>
        </a>
        <a id="dataKaryawan" class="containerSidebar" href="<?= BASEURL; ?>/datakaryawan">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/profile-2user">
                    <g id="profile-2user">
                        <path id="Vector" d="M7.63302 9.68332C7.60802 9.68332 7.59135 9.68332 7.56635 9.68332C7.52468 9.67499 7.46635 9.67499 7.41635 9.68332C4.99968 9.60832 3.17468 7.70832 3.17468 5.36666C3.17468 2.98332 5.11635 1.04166 7.49968 1.04166C9.88302 1.04166 11.8247 2.98332 11.8247 5.36666C11.8163 7.70832 9.98302 9.60832 7.65802 9.68332C7.64968 9.68332 7.64135 9.68332 7.63302 9.68332ZM7.49968 2.29166C5.80802 2.29166 4.42468 3.67499 4.42468 5.36666C4.42468 7.03332 5.72468 8.37499 7.38302 8.43332C7.43302 8.42499 7.54135 8.42499 7.64968 8.43332C9.28302 8.35832 10.5663 7.01666 10.5747 5.36666C10.5747 3.67499 9.19135 2.29166 7.49968 2.29166Z" fill="#7F7F7F" />
                        <path id="Vector_2" d="M13.783 9.79168C13.758 9.79168 13.733 9.79168 13.708 9.78334C13.3663 9.81668 13.0163 9.57501 12.983 9.23334C12.9496 8.89168 13.158 8.58334 13.4996 8.54168C13.5996 8.53334 13.708 8.53334 13.7996 8.53334C15.0163 8.46668 15.9663 7.46668 15.9663 6.24168C15.9663 4.97501 14.9413 3.95001 13.6746 3.95001C13.333 3.95834 13.0496 3.67501 13.0496 3.33334C13.0496 2.99168 13.333 2.70834 13.6746 2.70834C15.6246 2.70834 17.2163 4.30001 17.2163 6.25001C17.2163 8.16668 15.7163 9.71668 13.808 9.79168C13.7996 9.79168 13.7913 9.79168 13.783 9.79168Z" fill="#7F7F7F" />
                        <path id="Vector_3" d="M7.64134 18.7917C6.00801 18.7917 4.36634 18.375 3.12467 17.5417C1.96634 16.775 1.33301 15.725 1.33301 14.5833C1.33301 13.4417 1.96634 12.3833 3.12467 11.6083C5.62467 9.95001 9.67467 9.95001 12.158 11.6083C13.308 12.375 13.9497 13.425 13.9497 14.5667C13.9497 15.7083 13.3163 16.7667 12.158 17.5417C10.908 18.375 9.27467 18.7917 7.64134 18.7917ZM3.81634 12.6583C3.01634 13.1917 2.58301 13.875 2.58301 14.5917C2.58301 15.3 3.02467 15.9833 3.81634 16.5083C5.89134 17.9 9.39134 17.9 11.4663 16.5083C12.2663 15.975 12.6997 15.2917 12.6997 14.575C12.6997 13.8667 12.258 13.1833 11.4663 12.6583C9.39134 11.275 5.89134 11.275 3.81634 12.6583Z" fill="#7F7F7F" />
                        <path id="Vector_4" d="M15.283 17.2917C14.9913 17.2917 14.733 17.0917 14.6746 16.7917C14.608 16.45 14.8246 16.125 15.158 16.05C15.683 15.9417 16.1663 15.7333 16.5413 15.4417C17.0163 15.0833 17.2746 14.6333 17.2746 14.1583C17.2746 13.6833 17.0163 13.2333 16.5496 12.8833C16.183 12.6 15.7246 12.4 15.183 12.275C14.8496 12.2 14.633 11.8667 14.708 11.525C14.783 11.1917 15.1163 10.975 15.458 11.05C16.1746 11.2083 16.7996 11.4917 17.308 11.8833C18.083 12.4667 18.5246 13.2917 18.5246 14.1583C18.5246 15.025 18.0746 15.85 17.2996 16.4417C16.783 16.8417 16.133 17.1333 15.4163 17.275C15.3663 17.2917 15.3246 17.2917 15.283 17.2917Z" fill="#7F7F7F" />
                    </g>
                </g>
            </svg>
            <p class="textSidebar text-Neutral/70">Data
                Karyawan</p>
        </a>
        <a id="dataBarang" class="containerSidebar" href="<?= BASEURL; ?>/databarang">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/box">
                    <g id="box">
                        <path id="Vector" d="M9.99991 11.0833C9.89158 11.0833 9.78324 11.0583 9.68324 11L2.32492 6.74169C2.02492 6.56669 1.9249 6.18333 2.0999 5.88333C2.2749 5.58333 2.6499 5.48331 2.95823 5.65831L9.99991 9.73332L16.9999 5.68334C17.2999 5.50834 17.6832 5.61669 17.8582 5.90835C18.0332 6.20835 17.9249 6.59166 17.6332 6.76666L10.3249 11C10.2166 11.05 10.1082 11.0833 9.99991 11.0833Z" fill="#7F7F7F" />
                        <path id="Vector_2" d="M10 18.6334C9.65833 18.6334 9.375 18.35 9.375 18.0084V10.45C9.375 10.1084 9.65833 9.82504 10 9.82504C10.3417 9.82504 10.625 10.1084 10.625 10.45V18.0084C10.625 18.35 10.3417 18.6334 10 18.6334Z" fill="#7F7F7F" />
                        <path id="Vector_3" d="M10.0001 18.9583C9.26681 18.9583 8.54181 18.8 7.96681 18.4833L3.51681 16.0083C2.30848 15.3417 1.36682 13.7333 1.36682 12.35V7.64164C1.36682 6.2583 2.30848 4.65834 3.51681 3.98334L7.96681 1.51666C9.10847 0.883323 10.8918 0.883323 12.0335 1.51666L16.4835 3.99163C17.6918 4.6583 18.6335 6.26664 18.6335 7.64998V12.3583C18.6335 13.7417 17.6918 15.3416 16.4835 16.0166L12.0335 18.4833C11.4585 18.8 10.7335 18.9583 10.0001 18.9583ZM10.0001 2.29165C9.47514 2.29165 8.95848 2.39999 8.57515 2.60832L4.12515 5.0833C3.32515 5.5333 2.61682 6.72498 2.61682 7.64998V12.3583C2.61682 13.275 3.32515 14.475 4.12515 14.925L8.57515 17.4C9.33348 17.825 10.6668 17.825 11.4251 17.4L15.8751 14.925C16.6751 14.475 17.3835 13.2833 17.3835 12.3583V7.64998C17.3835 6.73331 16.6751 5.5333 15.8751 5.0833L11.4251 2.60832C11.0418 2.39999 10.5251 2.29165 10.0001 2.29165Z" fill="#7F7F7F" />
                        <path id="Vector_4" d="M14.1669 11.6584C13.8252 11.6584 13.5419 11.375 13.5419 11.0334V8.35005L5.94186 3.96671C5.64186 3.79171 5.54184 3.40836 5.71684 3.1167C5.89184 2.8167 6.26686 2.71668 6.56686 2.89168L14.4752 7.45838C14.6669 7.56671 14.7919 7.77502 14.7919 8.00002V11.05C14.7919 11.375 14.5085 11.6584 14.1669 11.6584Z" fill="#7F7F7F" />
                    </g>
                </g>
            </svg>

            <p class="textSidebar text-Neutral/70">Data Barang</p>
        </a>
        <a id="laporan" class="containerSidebar" href="<?= BASEURL; ?>/laporan">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/receipt">
                    <g id="receipt">
                        <path id="Vector" d="M9.99996 18.9584C9.34996 18.9584 8.71663 18.625 8.28329 18.0417L7.44163 16.9167C7.26663 16.6834 7.03329 16.55 6.78329 16.5334C6.53329 16.525 6.28329 16.6334 6.08329 16.8417L5.60829 16.4167L6.06663 16.8417C4.86663 18.125 3.94163 18.025 3.49996 17.85C3.04996 17.675 2.29163 17.1 2.29163 15.25V5.86669C2.29163 2.16669 3.35829 1.04169 6.84996 1.04169H13.15C16.6416 1.04169 17.7083 2.16669 17.7083 5.86669V15.25C17.7083 17.0917 16.95 17.6667 16.5 17.85C16.0583 18.025 15.1416 18.125 13.9333 16.8417C13.7333 16.625 13.4916 16.5084 13.225 16.5334C12.975 16.55 12.7333 16.6834 12.5583 16.9167L11.7166 18.0417C11.2833 18.625 10.65 18.9584 9.99996 18.9584ZM6.73329 15.275C6.76663 15.275 6.80829 15.275 6.84163 15.275C7.45829 15.3084 8.04163 15.6334 8.43329 16.1584L9.27496 17.2834C9.68329 17.825 10.3083 17.825 10.7166 17.2834L11.5583 16.1584C11.9583 15.6334 12.5333 15.3084 13.1583 15.275C13.775 15.2417 14.3916 15.5 14.8416 15.9834C15.475 16.6584 15.8916 16.7417 16.0333 16.6834C16.2333 16.6 16.45 16.1167 16.45 15.25V5.86669C16.45 2.85835 15.925 2.29169 13.1416 2.29169H6.84996C4.06663 2.29169 3.54163 2.85835 3.54163 5.86669V15.25C3.54163 16.125 3.75829 16.6084 3.95829 16.6834C4.09996 16.7417 4.51663 16.6584 5.14996 15.9834C5.59996 15.525 6.15829 15.275 6.73329 15.275Z" fill="#7F7F7F" />
                        <path id="Vector_2" d="M13.3333 6.45831H6.66663C6.32496 6.45831 6.04163 6.17498 6.04163 5.83331C6.04163 5.49165 6.32496 5.20831 6.66663 5.20831H13.3333C13.675 5.20831 13.9583 5.49165 13.9583 5.83331C13.9583 6.17498 13.675 6.45831 13.3333 6.45831Z" fill="#7F7F7F" />
                        <path id="Vector_3" d="M12.5 9.79169H7.5C7.15833 9.79169 6.875 9.50835 6.875 9.16669C6.875 8.82502 7.15833 8.54169 7.5 8.54169H12.5C12.8417 8.54169 13.125 8.82502 13.125 9.16669C13.125 9.50835 12.8417 9.79169 12.5 9.79169Z" fill="#7F7F7F" />
                    </g>
                </g>
            </svg>

            <p class="textSidebar text-Neutral/70">Laporan</p>
        </a>
        <a id="log" class="containerSidebar" href="<?= BASEURL; ?>/log">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/personalcard">
                    <g id="personalcard">
                        <path id="Vector" d="M14.1666 18.125H5.83329C2.15829 18.125 1.04163 17.0083 1.04163 13.3333V6.66667C1.04163 2.99167 2.15829 1.875 5.83329 1.875H14.1666C17.8416 1.875 18.9583 2.99167 18.9583 6.66667V13.3333C18.9583 17.0083 17.8416 18.125 14.1666 18.125ZM5.83329 3.125C2.84996 3.125 2.29163 3.69167 2.29163 6.66667V13.3333C2.29163 16.3083 2.84996 16.875 5.83329 16.875H14.1666C17.15 16.875 17.7083 16.3083 17.7083 13.3333V6.66667C17.7083 3.69167 17.15 3.125 14.1666 3.125H5.83329Z" fill="#7F7F7F" />
                        <path id="Vector_2" d="M15.8333 7.29169H11.6666C11.325 7.29169 11.0416 7.00835 11.0416 6.66669C11.0416 6.32502 11.325 6.04169 11.6666 6.04169H15.8333C16.175 6.04169 16.4583 6.32502 16.4583 6.66669C16.4583 7.00835 16.175 7.29169 15.8333 7.29169Z" fill="#7F7F7F" />
                        <path id="Vector_3" d="M15.8333 10.625H12.5C12.1583 10.625 11.875 10.3417 11.875 10C11.875 9.65833 12.1583 9.375 12.5 9.375H15.8333C16.175 9.375 16.4583 9.65833 16.4583 10C16.4583 10.3417 16.175 10.625 15.8333 10.625Z" fill="#7F7F7F" />
                        <path id="Vector_4" d="M15.8333 13.9583H14.1666C13.825 13.9583 13.5416 13.675 13.5416 13.3333C13.5416 12.9916 13.825 12.7083 14.1666 12.7083H15.8333C16.175 12.7083 16.4583 12.9916 16.4583 13.3333C16.4583 13.675 16.175 13.9583 15.8333 13.9583Z" fill="#7F7F7F" />
                        <path id="Vector_5" d="M7.08328 10.0333C5.90828 10.0333 4.94995 9.075 4.94995 7.9C4.94995 6.725 5.90828 5.76666 7.08328 5.76666C8.25828 5.76666 9.21662 6.725 9.21662 7.9C9.21662 9.075 8.25828 10.0333 7.08328 10.0333ZM7.08328 7.01666C6.59995 7.01666 6.19995 7.41666 6.19995 7.9C6.19995 8.38333 6.59995 8.78333 7.08328 8.78333C7.56662 8.78333 7.96662 8.38333 7.96662 7.9C7.96662 7.41666 7.56662 7.01666 7.08328 7.01666Z" fill="#7F7F7F" />
                        <path id="Vector_6" d="M10 14.2333C9.68338 14.2333 9.40838 13.9917 9.37504 13.6667C9.28338 12.7667 8.55838 12.0417 7.65004 11.9583C7.26671 11.925 6.88338 11.925 6.50004 11.9583C5.59171 12.0417 4.86671 12.7583 4.77504 13.6667C4.74171 14.0083 4.43338 14.2667 4.09171 14.225C3.75004 14.1917 3.50004 13.8833 3.53338 13.5417C3.68338 12.0417 4.87504 10.85 6.38338 10.7167C6.84171 10.675 7.30838 10.675 7.76671 10.7167C9.26671 10.8583 10.4667 12.05 10.6167 13.5417C10.65 13.8833 10.4 14.1917 10.0584 14.225C10.0417 14.2333 10.0167 14.2333 10 14.2333Z" fill="#7F7F7F" />
                    </g>
                </g>
            </svg>
            <p class="textSidebar text-Neutral/70">Log Aktivitas</p>
        </a>
    </div>
    <a href="<?= BASEURL; ?>/auth/logout">
        <button class="flex w-fit h-fit gap-3 items-center p-4 rounded-xl cursor-pointer group">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/logout">
                    <g id="logout">
                        <path id="Vector" d="M12.7 18.5583H12.5916C8.89164 18.5583 7.10831 17.1 6.79997 13.8333C6.76664 13.4917 7.01664 13.1833 7.36664 13.15C7.69997 13.1166 8.01664 13.375 8.04997 13.7167C8.29164 16.3333 9.52497 17.3083 12.6 17.3083H12.7083C16.1 17.3083 17.3 16.1083 17.3 12.7167V7.28332C17.3 3.89165 16.1 2.69165 12.7083 2.69165H12.6C9.50831 2.69165 8.27497 3.68332 8.04997 6.34998C8.00831 6.69165 7.71664 6.94998 7.36664 6.91665C7.01664 6.89165 6.76664 6.58332 6.79164 6.24165C7.07497 2.92498 8.86664 1.44165 12.5916 1.44165H12.7C16.7916 1.44165 18.5416 3.19165 18.5416 7.28332V12.7167C18.5416 16.8083 16.7916 18.5583 12.7 18.5583Z" class="fill-[#A5A5A5] group-hover:fill-red-600" />
                        <path id="Vector_2" d="M12.5001 10.625H3.01672C2.67506 10.625 2.39172 10.3417 2.39172 10C2.39172 9.65833 2.67506 9.375 3.01672 9.375H12.5001C12.8417 9.375 13.1251 9.65833 13.1251 10C13.1251 10.3417 12.8417 10.625 12.5001 10.625Z" class="fill-[#A5A5A5] group-hover:fill-red-600" />
                        <path id="Vector_3" d="M4.87503 13.4166C4.7167 13.4166 4.55837 13.3583 4.43337 13.2333L1.6417 10.4416C1.40003 10.2 1.40003 9.79997 1.6417 9.55831L4.43337 6.76664C4.67503 6.52497 5.07503 6.52497 5.3167 6.76664C5.55837 7.0083 5.55837 7.40831 5.3167 7.64997L2.9667 9.99997L5.3167 12.35C5.55837 12.5916 5.55837 12.9916 5.3167 13.2333C5.20003 13.3583 5.03337 13.4166 4.87503 13.4166Z" class="fill-[#A5A5A5] group-hover:fill-red-600" />
                    </g>
                </g>
            </svg>

            <p class="text-Neutral/60 text-base font-semibold transition duration-200 group-hover:text-red-600">Keluar
            </p>
        </button>
    </a>
</aside>