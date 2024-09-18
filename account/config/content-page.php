<?php if($page=='log-in'){?>
   
    <div class="block log-div" id="next_1">
        <p class="bg-[#F4FDF8] text-[#95A2A2] font-bold border-[#A5EAC2] border-[1px] py-[10px] px-[15px] mt-[20px]">Kindly provide your <span class="text-[#83C2E7]">Email Address</span> and <span class="text-[#83C2E7]">Password</span> sent to your email to complete registration.</p>

        <div class="mt-[20px] font-bold text-[12px] flex flex-col gap-[18px]">
            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-envelope-fill text-[#A4A6C5]"></i> EMAIL ADDRESS:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="email" id="" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>
            
            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-vinyl text-[#A4A6C5]"></i> PASSWORD:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="password" placeholder="ENTER YOUR PASSWORD"/>
            </div>

            <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="Login" onclick="">LOG-IN <i class="bi-check2"></i></button>
        </div>

        <p class="bg-[#FEF7F4] text-[#95A2A2] font-bold border-[#F5C0A5] border-[1px] py-[10px] px-[15px] mt-[10px]">Forget Password? <span class="text-[#83C2E7] cursor-pointer" onclick="_next_page('next_2')">RESET PASSWORD</span></p>
    </div>

    
    <div class="hidden log-div" id="next_2">
        <p class="bg-[#F4FDF8] text-[#95A2A2] font-bold border-[#A5EAC2] border-[1px] py-[10px] px-[15px] mt-[20px]">Kindly provide your <span class="text-[#83C2E7]">Email Address</span> to reset your password.</p>

        <div class="mt-[20px] font-bold text-[12px] flex flex-col gap-[18px]">
            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-envelope-fill text-[#A4A6C5]"></i> EMAIL ADDRESS:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="email" id="pass_email" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>
            
            <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="Login" id="submit_btn" onclick="_reset_password()">RESET PASSWORD</i></button>
        </div>

        <p class="bg-[#FEF7F4] text-[#95A2A2] font-bold border-[#F5C0A5] border-[1px] py-[10px] px-[15px] mt-[10px]">Existing User? <span class="text-[#83C2E7] cursor-pointer" onclick="_next_page('next_1')">LOG-IN HERE</span></p>
    </div>


    <div class="hidden log-div" id="next_3">
        <div class="mt-[20px] font-bold text-[12px] flex flex-col gap-[18px]">
            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-person-fill text-[#A4A6C5]"></i> FULLNAME:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="text" id="fullname" placeholder="FULLNAME"/>
            </div>

            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-telephone-fill text-[#A4A6C5]"></i> PHONE:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="tel" id="phoneno" placeholder="PHONE NUMBER"/>
            </div>

            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-envelope-fill text-[#A4A6C5]"></i> EMAIL ADDRESS:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="email" id="email_address" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>

            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-vinyl text-[#A4A6C5]"></i> PASSWORD:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="password" id="password" placeholder="ENTER YOUR PASSWORD"/>
            </div>

            <div class="w-[100%]">
                <label class="px-[10px] text-[#FF8A33]"><i class="bi-vinyl text-[#A4A6C5]"></i> CONFIRM PASSWORD:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="password" id="c_password" placeholder="CONFIRM YOUR PASSWORD"/>
            </div>
            
            <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="Signup" id="submit_btn" onclick="_user_registration()">SIGN-UP <i class="bi-check2"></i></button>
        </div>
    </div>

<?php }?>




  

