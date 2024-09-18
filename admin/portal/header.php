<header class="fixed w-[100%] min-h-[60px] bg-gradient-to-r from-[#582400] to-[#FF8A33] z-10 flex justify-center fadeInDown animated">
    <div class="w-[95%] flex justify-between items-center">
        <div class="flex gap-[50px] items-center">
            <div class="w-[150px]"><img src="./all-images/image-pix/logo.png" alt="" title="" /></div>
            <nav data-aos="zoom-in" data-aos-duration="1500">
                <ul class="flex gap-[5px] text-white font-bold">
                    <li class="header-active py-[10px] px-[25px] bg-white bg-opacity-30 hover:bg-white hover:bg-opacity-30 rounded-[5px] cursor-pointer" onclick="_get_page('dashboard')"><i class="bi-speedometer2"></i> Dashboard</li>
                    <li class="header-active py-[10px] px-[25px] hover:bg-white hover:bg-opacity-30 rounded-[5px] cursor-pointer" onclick="_get_form_with_id('my-profile-module')"><i class="bi-person-circle"></i> My Profile</li>
                    <li class="header-active py-[10px] px-[25px] hover:bg-white hover:bg-opacity-30 rounded-[5px] cursor-pointer"><i class="bi-basket2-fill"></i> Pending Order <span class="py-[5px] px-[8px] bg-[#be1d1d] rounded-[5px]">0</span></li>
                </ul>
            </nav>
        </div>

        <div class="flex items-center gap-[15px]">
            <i class="bi-bell py-[8px] px-[12px] text-[16px] text-white hover:bg-white hover:bg-opacity-30 rounded-[5px] cursor-pointer" title="notification"><span class=""></span></i>
            <div class="w-[35px] h-[35px] rounded-[5px]"><img id="profile_picture" class="w-[100%] h-[100%] object-cover rounded-[5px]" alt="<?php echo $website_name;?> Logo" title="<?php echo $website_name;?> Logo" /></div>
        </div>
    </div>
</header>