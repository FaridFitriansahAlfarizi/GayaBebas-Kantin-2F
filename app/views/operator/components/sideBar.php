<aside
    class="flex flex-col justify-between items-stretch p-6 w-[15%] laptop1:w-[18%] laptop2:w-[20%] laptop3:w-[20%] bg-Neutral/10 h-[88vh] laptop4:h-[85vh]">
    <div>
        <a id="transaksi" class="containerSidebar <?php echo $active == 'Transaksi' ? 'activeSidebar' : ''; ?>"
            href="<?= BASEURL; ?>/operatortransaksi">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/bag-2">
                    <g id="bag-2">
                        <path id="Vector"
                            d="M13.75 7.19167C13.4083 7.19167 13.125 6.90833 13.125 6.56667V5.41667C13.125 4.54167 12.75 3.69167 12.1 3.1C11.4417 2.5 10.5917 2.225 9.69167 2.30833C8.19167 2.45 6.875 3.98333 6.875 5.58333V6.39167C6.875 6.73333 6.59167 7.01667 6.25 7.01667C5.90833 7.01667 5.625 6.73333 5.625 6.39167V5.575C5.625 3.33333 7.43333 1.26667 9.575 1.05833C10.825 0.941667 12.025 1.33333 12.9417 2.175C13.85 3 14.375 4.18333 14.375 5.41667V6.56667C14.375 6.90833 14.0917 7.19167 13.75 7.19167Z"
                            fill="#5E51D9" />
                        <path id="Vector_2"
                            d="M12.5001 18.9583H7.50009C3.65009 18.9583 2.93343 17.1667 2.75009 15.425L2.12509 10.4333C2.03343 9.53334 2.00009 8.24167 2.87509 7.275C3.62509 6.44167 4.86676 6.04167 6.66676 6.04167H13.3334C15.1418 6.04167 16.3834 6.45 17.1251 7.275C17.9918 8.24167 17.9668 9.53334 17.8751 10.4167L17.2501 15.425C17.0668 17.1667 16.3501 18.9583 12.5001 18.9583ZM6.66676 7.29167C5.25843 7.29167 4.29176 7.56667 3.80009 8.11667C3.39176 8.56667 3.25843 9.25834 3.36676 10.2917L3.99176 15.2833C4.13343 16.6167 4.50009 17.7167 7.50009 17.7167H12.5001C15.5001 17.7167 15.8668 16.625 16.0084 15.3L16.6334 10.2917C16.7418 9.27501 16.6084 8.58334 16.2001 8.12501C15.7084 7.56667 14.7418 7.29167 13.3334 7.29167H6.66676Z"
                            fill="#5E51D9" />
                        <path id="Vector_3"
                            d="M12.85 10.9583C12.3833 10.9583 12.0083 10.5833 12.0083 10.125C12.0083 9.66667 12.3833 9.29167 12.8416 9.29167C13.3 9.29167 13.675 9.66667 13.675 10.125C13.675 10.5833 13.3083 10.9583 12.85 10.9583Z"
                            fill="#5E51D9" />
                        <path id="Vector_4"
                            d="M7.01672 10.9583C6.55005 10.9583 6.17505 10.5833 6.17505 10.125C6.17505 9.66667 6.55005 9.29167 7.00838 9.29167C7.46672 9.29167 7.84172 9.66667 7.84172 10.125C7.84172 10.5833 7.47505 10.9583 7.01672 10.9583Z"
                            fill="#5E51D9" />
                    </g>
                </g>
            </svg>


            <p class="textSidebar <?php echo $active == 'Transaksi' ? 'text-Primary-blue' : 'text-Neutral/70';  ?>">
                Transaksi
            </p>
        </a>
        <a id="requestBarang" class="containerSidebar" href="<?= BASEURL; ?>/operatorrequestbarang">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/box">
                    <g id="box">
                        <path id="Vector"
                            d="M9.99991 11.0833C9.89158 11.0833 9.78324 11.0583 9.68324 11L2.32492 6.74169C2.02492 6.56669 1.9249 6.18333 2.0999 5.88333C2.2749 5.58333 2.6499 5.48331 2.95823 5.65831L9.99991 9.73332L16.9999 5.68334C17.2999 5.50834 17.6832 5.61669 17.8582 5.90835C18.0332 6.20835 17.9249 6.59166 17.6332 6.76666L10.3249 11C10.2166 11.05 10.1082 11.0833 9.99991 11.0833Z"
                            fill="#7F7F7F" />
                        <path id="Vector_2"
                            d="M10 18.6334C9.65833 18.6334 9.375 18.35 9.375 18.0084V10.45C9.375 10.1084 9.65833 9.82504 10 9.82504C10.3417 9.82504 10.625 10.1084 10.625 10.45V18.0084C10.625 18.35 10.3417 18.6334 10 18.6334Z"
                            fill="#7F7F7F" />
                        <path id="Vector_3"
                            d="M10.0001 18.9583C9.26681 18.9583 8.54181 18.8 7.96681 18.4833L3.51681 16.0083C2.30848 15.3417 1.36682 13.7333 1.36682 12.35V7.64164C1.36682 6.2583 2.30848 4.65834 3.51681 3.98334L7.96681 1.51666C9.10847 0.883323 10.8918 0.883323 12.0335 1.51666L16.4835 3.99163C17.6918 4.6583 18.6335 6.26664 18.6335 7.64998V12.3583C18.6335 13.7417 17.6918 15.3416 16.4835 16.0166L12.0335 18.4833C11.4585 18.8 10.7335 18.9583 10.0001 18.9583ZM10.0001 2.29165C9.47514 2.29165 8.95848 2.39999 8.57515 2.60832L4.12515 5.0833C3.32515 5.5333 2.61682 6.72498 2.61682 7.64998V12.3583C2.61682 13.275 3.32515 14.475 4.12515 14.925L8.57515 17.4C9.33348 17.825 10.6668 17.825 11.4251 17.4L15.8751 14.925C16.6751 14.475 17.3835 13.2833 17.3835 12.3583V7.64998C17.3835 6.73331 16.6751 5.5333 15.8751 5.0833L11.4251 2.60832C11.0418 2.39999 10.5251 2.29165 10.0001 2.29165Z"
                            fill="#7F7F7F" />
                        <path id="Vector_4"
                            d="M14.1669 11.6584C13.8252 11.6584 13.5419 11.375 13.5419 11.0334V8.35005L5.94186 3.96671C5.64186 3.79171 5.54184 3.40836 5.71684 3.1167C5.89184 2.8167 6.26686 2.71668 6.56686 2.89168L14.4752 7.45838C14.6669 7.56671 14.7919 7.77502 14.7919 8.00002V11.05C14.7919 11.375 14.5085 11.6584 14.1669 11.6584Z"
                            fill="#7F7F7F" />
                    </g>
                </g>
            </svg>

            <p class="textSidebar text-Neutral/70">Request Barang</p>
        </a>
        <a id="requestStock" class="containerSidebar" href="<?= BASEURL; ?>/operatorrequeststock">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/convert-3d-cube">
                    <g id="convert-3d-cube">
                        <path id="Vector"
                            d="M12.5001 18.9583C12.2751 18.9583 12.0667 18.8333 11.9584 18.6417C11.8501 18.45 11.8501 18.2083 11.9667 18.0167L12.8417 16.5583C13.0167 16.2583 13.4001 16.1667 13.7001 16.3417C14.0001 16.5167 14.0917 16.9 13.9167 17.2L13.6917 17.575C15.9917 17.0334 17.7167 14.9667 17.7167 12.5C17.7167 12.1583 18.0001 11.875 18.3417 11.875C18.6834 11.875 18.9667 12.1583 18.9667 12.5C18.9584 16.0583 16.0584 18.9583 12.5001 18.9583Z"
                            fill="#5E51D9" />
                        <path id="Vector_2"
                            d="M1.66675 8.12508C1.32508 8.12508 1.04175 7.84175 1.04175 7.50008C1.04175 3.94175 3.94175 1.04175 7.50008 1.04175C7.72508 1.04175 7.93341 1.16675 8.04174 1.35842C8.15008 1.55009 8.15008 1.79175 8.03341 1.98342L7.15841 3.44175C6.98341 3.74175 6.60008 3.83343 6.30008 3.65843C6.00008 3.48343 5.90842 3.10007 6.08342 2.80007L6.30842 2.42506C4.00842 2.96673 2.28342 5.03341 2.28342 7.50008C2.29175 7.84175 2.00841 8.12508 1.66675 8.12508Z"
                            fill="#5E51D9" />
                        <path id="Vector_3"
                            d="M14.7332 6.25002C14.6249 6.25002 14.5166 6.22504 14.4166 6.1667L11.1082 4.25C10.8082 4.075 10.7082 3.69169 10.8832 3.39169C11.0582 3.09169 11.4416 2.99167 11.7332 3.16667L14.7332 4.90002L17.7082 3.17501C18.0082 3.00001 18.3916 3.10836 18.5582 3.40003C18.7332 3.70003 18.6249 4.08334 18.3332 4.25834L15.0416 6.15836C14.9499 6.2167 14.8416 6.25002 14.7332 6.25002Z"
                            fill="#5E51D9" />
                        <path id="Vector_4"
                            d="M14.7334 9.64147C14.3917 9.64147 14.1084 9.35814 14.1084 9.01647V5.61646C14.1084 5.27479 14.3917 4.99146 14.7334 4.99146C15.0751 4.99146 15.3584 5.27479 15.3584 5.61646V9.01647C15.3584 9.36647 15.0751 9.64147 14.7334 9.64147Z"
                            fill="#5E51D9" />
                        <path id="Vector_5"
                            d="M14.7333 9.79158C14.35 9.79158 13.9583 9.70825 13.65 9.53325L11.65 8.4249C11 8.06657 10.5083 7.22494 10.5083 6.48327V4.36657C10.5083 3.61657 11 2.78327 11.6583 2.4166L13.6583 1.30825C14.275 0.966585 15.2 0.966585 15.825 1.30825L17.825 2.4166C18.475 2.77493 18.9666 3.61656 18.9666 4.35823V6.47493C18.9666 7.22493 18.475 8.05823 17.825 8.41656L15.825 9.52491C15.5 9.70824 15.1166 9.79158 14.7333 9.79158ZM14.2583 2.39158L12.2583 3.49992C12.0083 3.64159 11.7583 4.06655 11.7583 4.34989V6.46659C11.7583 6.75825 12.0083 7.18327 12.2583 7.3166L14.2583 8.43324C14.5 8.56658 14.9666 8.56658 15.2083 8.43324L17.2083 7.32489C17.4583 7.18323 17.7083 6.75826 17.7083 6.47493V4.35823C17.7083 4.06656 17.4583 3.6416 17.2083 3.50826L15.2083 2.39992C14.9666 2.25825 14.4916 2.25824 14.2583 2.39158Z"
                            fill="#5E51D9" />
                        <path id="Vector_6"
                            d="M5.26669 15.4165C5.15835 15.4165 5.05001 15.3915 4.95001 15.3332L1.64168 13.4165C1.34168 13.2415 1.24168 12.8582 1.41668 12.5582C1.59168 12.2582 1.97501 12.1582 2.26668 12.3332L5.26669 14.0665L8.24168 12.3415C8.54168 12.1665 8.92502 12.2749 9.09168 12.5665C9.26668 12.8665 9.15835 13.2498 8.86668 13.4248L5.57501 15.3249C5.48335 15.3832 5.37502 15.4165 5.26669 15.4165Z"
                            fill="#5E51D9" />
                        <path id="Vector_7"
                            d="M5.2666 18.8082C4.92493 18.8082 4.6416 18.5249 4.6416 18.1832V14.7832C4.6416 14.4415 4.92493 14.1582 5.2666 14.1582C5.60827 14.1582 5.8916 14.4415 5.8916 14.7832V18.1832C5.8916 18.5332 5.6166 18.8082 5.2666 18.8082Z"
                            fill="#5E51D9" />
                        <path id="Vector_8"
                            d="M5.26675 18.9583C4.88342 18.9583 4.49175 18.875 4.18342 18.7L2.18341 17.5916C1.53341 17.2333 1.04175 16.3916 1.04175 15.65V13.5333C1.04175 12.7833 1.53341 11.9499 2.18341 11.5916L4.18342 10.4833C4.80009 10.1416 5.73341 10.1416 6.35008 10.4833L8.35009 11.5916C9.00009 11.9499 9.49175 12.7916 9.49175 13.5333V15.65C9.49175 16.4 9.00008 17.2333 8.34174 17.5999L6.34175 18.7083C6.04175 18.875 5.65842 18.9583 5.26675 18.9583ZM4.79175 11.5583L2.79175 12.6666C2.54175 12.8083 2.29175 13.2333 2.29175 13.5166V15.6333C2.29175 15.925 2.54175 16.35 2.79175 16.4833L4.79175 17.5916C5.03341 17.7249 5.50008 17.7249 5.74175 17.5916L7.74174 16.4833C7.99174 16.3416 8.24175 15.9166 8.24175 15.6333V13.5166C8.24175 13.2249 7.99174 12.8 7.74174 12.6666L5.74175 11.5499C5.50841 11.4249 5.03341 11.4249 4.79175 11.5583Z"
                            fill="#5E51D9" />
                    </g>
                </g>
            </svg>

            <p class="textSidebar text-Neutral/70">Request Stock</p>
        </a>
        <a id="laporan" class="containerSidebar" href="<?= BASEURL; ?>/operatorlaporan">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/receipt">
                    <g id="receipt">
                        <path id="Vector"
                            d="M9.99996 18.9584C9.34996 18.9584 8.71663 18.625 8.28329 18.0417L7.44163 16.9167C7.26663 16.6834 7.03329 16.55 6.78329 16.5334C6.53329 16.525 6.28329 16.6334 6.08329 16.8417L5.60829 16.4167L6.06663 16.8417C4.86663 18.125 3.94163 18.025 3.49996 17.85C3.04996 17.675 2.29163 17.1 2.29163 15.25V5.86669C2.29163 2.16669 3.35829 1.04169 6.84996 1.04169H13.15C16.6416 1.04169 17.7083 2.16669 17.7083 5.86669V15.25C17.7083 17.0917 16.95 17.6667 16.5 17.85C16.0583 18.025 15.1416 18.125 13.9333 16.8417C13.7333 16.625 13.4916 16.5084 13.225 16.5334C12.975 16.55 12.7333 16.6834 12.5583 16.9167L11.7166 18.0417C11.2833 18.625 10.65 18.9584 9.99996 18.9584ZM6.73329 15.275C6.76663 15.275 6.80829 15.275 6.84163 15.275C7.45829 15.3084 8.04163 15.6334 8.43329 16.1584L9.27496 17.2834C9.68329 17.825 10.3083 17.825 10.7166 17.2834L11.5583 16.1584C11.9583 15.6334 12.5333 15.3084 13.1583 15.275C13.775 15.2417 14.3916 15.5 14.8416 15.9834C15.475 16.6584 15.8916 16.7417 16.0333 16.6834C16.2333 16.6 16.45 16.1167 16.45 15.25V5.86669C16.45 2.85835 15.925 2.29169 13.1416 2.29169H6.84996C4.06663 2.29169 3.54163 2.85835 3.54163 5.86669V15.25C3.54163 16.125 3.75829 16.6084 3.95829 16.6834C4.09996 16.7417 4.51663 16.6584 5.14996 15.9834C5.59996 15.525 6.15829 15.275 6.73329 15.275Z"
                            fill="#7F7F7F" />
                        <path id="Vector_2"
                            d="M13.3333 6.45831H6.66663C6.32496 6.45831 6.04163 6.17498 6.04163 5.83331C6.04163 5.49165 6.32496 5.20831 6.66663 5.20831H13.3333C13.675 5.20831 13.9583 5.49165 13.9583 5.83331C13.9583 6.17498 13.675 6.45831 13.3333 6.45831Z"
                            fill="#7F7F7F" />
                        <path id="Vector_3"
                            d="M12.5 9.79169H7.5C7.15833 9.79169 6.875 9.50835 6.875 9.16669C6.875 8.82502 7.15833 8.54169 7.5 8.54169H12.5C12.8417 8.54169 13.125 8.82502 13.125 9.16669C13.125 9.50835 12.8417 9.79169 12.5 9.79169Z"
                            fill="#7F7F7F" />
                    </g>
                </g>
            </svg>

            <p class="textSidebar text-Neutral/70">Laporan</p>
        </a>
        <a id="log" class="containerSidebar" href="<?= BASEURL; ?>/operatorlog">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="vuesax/outline/personalcard">
                    <g id="personalcard">
                        <path id="Vector"
                            d="M14.1666 18.125H5.83329C2.15829 18.125 1.04163 17.0083 1.04163 13.3333V6.66667C1.04163 2.99167 2.15829 1.875 5.83329 1.875H14.1666C17.8416 1.875 18.9583 2.99167 18.9583 6.66667V13.3333C18.9583 17.0083 17.8416 18.125 14.1666 18.125ZM5.83329 3.125C2.84996 3.125 2.29163 3.69167 2.29163 6.66667V13.3333C2.29163 16.3083 2.84996 16.875 5.83329 16.875H14.1666C17.15 16.875 17.7083 16.3083 17.7083 13.3333V6.66667C17.7083 3.69167 17.15 3.125 14.1666 3.125H5.83329Z"
                            fill="#7F7F7F" />
                        <path id="Vector_2"
                            d="M15.8333 7.29169H11.6666C11.325 7.29169 11.0416 7.00835 11.0416 6.66669C11.0416 6.32502 11.325 6.04169 11.6666 6.04169H15.8333C16.175 6.04169 16.4583 6.32502 16.4583 6.66669C16.4583 7.00835 16.175 7.29169 15.8333 7.29169Z"
                            fill="#7F7F7F" />
                        <path id="Vector_3"
                            d="M15.8333 10.625H12.5C12.1583 10.625 11.875 10.3417 11.875 10C11.875 9.65833 12.1583 9.375 12.5 9.375H15.8333C16.175 9.375 16.4583 9.65833 16.4583 10C16.4583 10.3417 16.175 10.625 15.8333 10.625Z"
                            fill="#7F7F7F" />
                        <path id="Vector_4"
                            d="M15.8333 13.9583H14.1666C13.825 13.9583 13.5416 13.675 13.5416 13.3333C13.5416 12.9916 13.825 12.7083 14.1666 12.7083H15.8333C16.175 12.7083 16.4583 12.9916 16.4583 13.3333C16.4583 13.675 16.175 13.9583 15.8333 13.9583Z"
                            fill="#7F7F7F" />
                        <path id="Vector_5"
                            d="M7.08328 10.0333C5.90828 10.0333 4.94995 9.075 4.94995 7.9C4.94995 6.725 5.90828 5.76666 7.08328 5.76666C8.25828 5.76666 9.21662 6.725 9.21662 7.9C9.21662 9.075 8.25828 10.0333 7.08328 10.0333ZM7.08328 7.01666C6.59995 7.01666 6.19995 7.41666 6.19995 7.9C6.19995 8.38333 6.59995 8.78333 7.08328 8.78333C7.56662 8.78333 7.96662 8.38333 7.96662 7.9C7.96662 7.41666 7.56662 7.01666 7.08328 7.01666Z"
                            fill="#7F7F7F" />
                        <path id="Vector_6"
                            d="M10 14.2333C9.68338 14.2333 9.40838 13.9917 9.37504 13.6667C9.28338 12.7667 8.55838 12.0417 7.65004 11.9583C7.26671 11.925 6.88338 11.925 6.50004 11.9583C5.59171 12.0417 4.86671 12.7583 4.77504 13.6667C4.74171 14.0083 4.43338 14.2667 4.09171 14.225C3.75004 14.1917 3.50004 13.8833 3.53338 13.5417C3.68338 12.0417 4.87504 10.85 6.38338 10.7167C6.84171 10.675 7.30838 10.675 7.76671 10.7167C9.26671 10.8583 10.4667 12.05 10.6167 13.5417C10.65 13.8833 10.4 14.1917 10.0584 14.225C10.0417 14.2333 10.0167 14.2333 10 14.2333Z"
                            fill="#7F7F7F" />
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
                        <path id="Vector"
                            d="M12.7 18.5583H12.5916C8.89164 18.5583 7.10831 17.1 6.79997 13.8333C6.76664 13.4917 7.01664 13.1833 7.36664 13.15C7.69997 13.1166 8.01664 13.375 8.04997 13.7167C8.29164 16.3333 9.52497 17.3083 12.6 17.3083H12.7083C16.1 17.3083 17.3 16.1083 17.3 12.7167V7.28332C17.3 3.89165 16.1 2.69165 12.7083 2.69165H12.6C9.50831 2.69165 8.27497 3.68332 8.04997 6.34998C8.00831 6.69165 7.71664 6.94998 7.36664 6.91665C7.01664 6.89165 6.76664 6.58332 6.79164 6.24165C7.07497 2.92498 8.86664 1.44165 12.5916 1.44165H12.7C16.7916 1.44165 18.5416 3.19165 18.5416 7.28332V12.7167C18.5416 16.8083 16.7916 18.5583 12.7 18.5583Z"
                            class="fill-[#A5A5A5] group-hover:fill-red-600" />
                        <path id="Vector_2"
                            d="M12.5001 10.625H3.01672C2.67506 10.625 2.39172 10.3417 2.39172 10C2.39172 9.65833 2.67506 9.375 3.01672 9.375H12.5001C12.8417 9.375 13.1251 9.65833 13.1251 10C13.1251 10.3417 12.8417 10.625 12.5001 10.625Z"
                            class="fill-[#A5A5A5] group-hover:fill-red-600" />
                        <path id="Vector_3"
                            d="M4.87503 13.4166C4.7167 13.4166 4.55837 13.3583 4.43337 13.2333L1.6417 10.4416C1.40003 10.2 1.40003 9.79997 1.6417 9.55831L4.43337 6.76664C4.67503 6.52497 5.07503 6.52497 5.3167 6.76664C5.55837 7.0083 5.55837 7.40831 5.3167 7.64997L2.9667 9.99997L5.3167 12.35C5.55837 12.5916 5.55837 12.9916 5.3167 13.2333C5.20003 13.3583 5.03337 13.4166 4.87503 13.4166Z"
                            class="fill-[#A5A5A5] group-hover:fill-red-600" />
                    </g>
                </g>
            </svg>

            <p class="text-Neutral/60 text-base font-semibold transition duration-200 group-hover:text-red-600">Keluar
            </p>
        </button>
    </a>
</aside>
