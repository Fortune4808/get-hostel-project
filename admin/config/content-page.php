<?php if($page=='log-in'){?>
   
    <div class="block log-div" id="next_1">
        <h2 class="mt-[10px] text-[22px] font-bold text-white"><i class="bi-person-circle"></i> Administrative Log-in <br /><hr class="w-[40%] mt-[10px] border border-[#FF8A33]" /></h2>
        
        <div class="mt-[20px] text-[12px] flex flex-col gap-[15px]" id="login-info">
            <div class="w-[100%]">
                <label class="px-[10px] text-white"><i class="bi-envelope-fill"></i> EMAIL ADDRESS:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="email" id="login_email" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>
    
            <div class="w-[100%]">
                <label class="px-[10px] text-white"><i class="bi-lock-fill"></i> PASSWORD:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="password" id="login_pass" placeholder="ENTER YOUR PASSWORD"/>
            </div>

            <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="Login" id="submit_btn" onclick="_log_in()">LOG-IN <i class="bi-check2"></i></button>

            <p class="bg-[#7C4D3D] bg-opacity-50 text-white font-bold border-[#E76B2E] border-[1px] py-[10px] px-[15px] rounded">Forget Password? <span class="text-[#DCB2B5] cursor-pointer" onclick="_next_page('next_2')">RESET PASSWORD</span></p>
        </div>
    </div>

    
    <div class="hidden log-div" id="next_2">
    <h2 class="mt-[10px] text-[22px] font-bold text-white"><i class="bi-lock-fill"></i> Reset Password <br /><hr class="w-[40%] mt-[10px] border border-[#FF8A33]" /></h2>
        <div class="mt-[20px] text-[12px] flex flex-col gap-[15px]">
            <div class="w-[100%]">
                <label class="px-[10px] text-white"><i class="bi-envelope-fill"></i> Provide Email Address:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="email" id="pass_email" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>

            <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="proceed" id="submit_button" onclick="_reset_password()">Proceed <i class="bi-arrow-right"></i></button>

            <p class="bg-[#7C4D3D] bg-opacity-50 text-white font-bold border-[#E76B2E] border-[1px] py-[10px] px-[15px] rounded">Existing User? <span class="text-[#DCB2B5] cursor-pointer" onclick="_next_page('next_1')">LOG-IN HERE</span></p>
        </div>
    </div>

<?php }?>




  

