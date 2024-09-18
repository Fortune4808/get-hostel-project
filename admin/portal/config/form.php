
<?php if($page=='settlings-module'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="h-[55px] bg-gradient-to-r from-[#582400] to-[#FF8A33] flex justify-between items-center px-[10px]">
            <p class="text-white text-[13px] font-semibold"><i class="bi-gear-fill"></i> APP SETTINGS</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">
            <div class="w-[95%] m-auto mt-[15px] flex flex-col gap-[10px] log-div">
                <div class="w-[100%] h-[60px] bg-black bg-opacity-40 px-[10px] cursor-pointer" onclick="">
                    <div class="float-left bg-[#582400] px-[15px] py-[10px] mt-[10px] rounded-[100%] text-white"><i class="bi-pc-display"></i></div>
                    <div class="float-left flex flex-col pt-[10px] pl-[10px]">
                        <div class="text-white text-[13px] font-semibold">SYSTEM DETAILS</div>
                        <div class="text-white text-[13px]"> Manage and change system details</div>
                   </div>
                    
                    <div class="text-white text-[14px] float-right mt-[18px]"><i class="bi-chevron-right"></i></div>
                </div>

                <div class="w-[100%] h-[60px] bg-black bg-opacity-40 px-[10px] cursor-pointer" onclick="_next_page('next_2')">
                    <div class="float-left bg-[#582400] px-[15px] py-[10px] mt-[10px] rounded-[100%] text-white"><i class="bi-pc-display"></i></div>
                    <div class="float-left flex flex-col pt-[10px] pl-[10px]">
                        <div class="text-white text-[13px] font-semibold">CHANGE PASSWORD</div>
                        <div class="text-white text-[13px]"> Manage and change password</div>
                   </div>
                    
                    <div class="text-white text-[14px] float-right mt-[18px]"><i class="bi-chevron-right"></i></div>
                </div>
            </div>

            <div class="w-[90%] m-auto hidden log-div" id="next_2">
                <div class="p-[10px] mt-[15px] bg-[#FAF3F0] border border-solid border-[#F2BDA2]">
                    <p class="text-[#424141]">Enter the <span class="text-[#FF8A33] font-bold">OLD PASSWORD</span> and create your <span class="text-[#FF8A33] font-bold">NEW PASSWORD</span></p>
                </div>
                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> OLD PASSWORD:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="password" id="" placeholder="ENTER OLD PASSWORD"/>
                    </div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> NEW PASSWORD:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="password" placeholder="ENTER NEW PASSWORD"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> CONFIRMED PASSWORD:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="password" id="email" placeholder="CONFIRMED PASSWORD"/>
                    </div>

                    <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="submit" onclick="">SUBMIT <i class="bi-check2"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php }?>



<?php if($page=='new-staff-module'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="h-[55px] bg-gradient-to-r from-[#582400] to-[#FF8A33] flex justify-between items-center px-[10px]">
            <p class="text-white text-[13px] font-semibold"><i class="bi-person-plus"></i> New Staff/Admin Registration Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        
        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2]">
                    <p class="text-[#424141]">Kindly fill the form below to <span class="text-[#FF8A33] font-bold">Add New Staff/Admin</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> FULLNAME:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="fullname" placeholder="ENTER FULLNAME"/>
                    </div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> PHONE NUMBER:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="tel" id="phoneno" placeholder="ENTER PHONE NUMBER"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> EMAIL ADDRESS:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="email" id="email" placeholder="ENTER EMAIL ADDRESS"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> STAFF ROLE:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" id="role">
                            <option>Select Role</option>
                            <script>_get_role();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-[#FF8A33]"> STATUS:</label><br/>
                        <select class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" id="status">
                            <option>Select Status</option>
                            <script>_get_status();</script>
                        </select>
                    </div>

                    <button class="w-[40%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px]" title="submit" id="submit_btn" onclick="_add_new_staff()">SUBMIT <i class="bi-check2"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php }?>



<?php if($page=='admin-profile-module'){?>
    <div class="absolute h-screen w-[90%] right-[5%] top-[55px] bg-white animated fadeInUp">
        <div class="h-[55px] bg-gradient-to-r from-[#582400] to-[#FF8A33] flex justify-between items-center px-[10px]">
            <p class="text-white text-[13px] font-semibold"><i class="bi-person-fill"></i> ADMINISTRATOR'S PROFILE</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">
            <div class="w-[100%] h-[150px] bg-profile-background bg-cover"></div>
            <div class="w-[90%] m-auto mt-[-50px]">
                
                <div class="w-[100px] h-[100px] border-[2px] border-white float-left rounded-[7px]" id="pictureBox">
                    <input type="file" id="fileInput" accept="image/jpeg, image/jpg" style="display: none;" />
                    <label for="fileInput">
                        <img class="w-full h-full object-cover rounded-[5px]" alt="Profile Picture" title="Profile Picture" id="profile_url" style="width: 100px; height: 100px; object-position: top;"/>
                    </label>
                </div>

                <div class="w-[calc(100%-110px)] float-right text-[#999]">
                    <p class="text-[25px] text-white font-bold" id="fullname">xxxx</p>
                    <p class="text-[11px] p-[20px] pl-[0px]">STATUS: <strong id="staff_status">xxx</strong> | LAST LOGIN DATE: <strong id="login_date">xxxx</strong></p>
                </div>
            </div>

            <div class="w-[90%] m-auto mt-[150px] mb-[150px]">
                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] border-b border-[#FF8A33]">BASIC INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> SURNAME:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="staff_surname" placeholder="SURNAME"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> OTHER NAMES:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="" placeholder="OTHER NAMES"/>
                    </div>
                </div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF BIRTH:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="date" id=""/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> GENDER:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            <option value=""></option>
                            <option value="">MALE</option>
                            <option value="">FEMALE</option>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> RELIGION AFFILIATION</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            <option value=""></option>
                            <option value="">CHRISTIANITY</option>
                            <option value="">ISLAMIC</option>
                            <option value="">OTHERS</option>
                        </select>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">CONTACT INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> NATIONALITY:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" placeholder="NATIONALITY" id=""/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                       </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STATE OF ORIGIN::</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> LOCAL GOVT. AREA:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            
                        </select>
                    </div>
                </div>
                <div class="w-[100%]">
                    <label class="px-[15px] text-gray-500"> RESIDENTIAL ADDRESS:</label><br/>
                    <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="" placeholder="OTHER NAMES"/>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> EMAIL ADDRESS:</label><br/>
                       <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="email" readonly="readonly" id="staff_email" placeholder="EMAIL ADDRESS"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                       </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> PHONE NUMBER:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="tel" id="staff_phoneno" placeholder="PHONE NUMBER"/>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">ACCOUNT INFORMATION</div>
                
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STAFF ID:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="staff_id" placeholder="STAFF ID"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> POST:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="" placeholder="POST"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF REGISTRATION:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="date" placeholder="DATE OF REGISTRATION"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> LAST LOGIN DATE:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="last_login_date" placeholder="LAST LOGIN DATE"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">REGISTRAR INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STAFF ID:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="registrar_id" placeholder="REGISTRAR STAFF ID"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> FULLNAME:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="registrar_fullname" placeholder="REGISTRAR FULLNAME"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">ADMINISTRATIVE INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER ROLE:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" id="role">
                            <script>_get_role();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER STATUS:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" id="status">
                            <script>_get_status();</script>
                        </select>
                    </div>
                </div>
                <button class="min-w-[150px] bg-[#FF8A33] hover:bg-[#444444] text-white p-[15px] rounded-[5px] float-right mt-[10px]" title="" onclick="">UPDATE PROFILE <i class="bi-check2"></i></button>
            </div>
        </div>

        <script>_get_staff_profile('<?php echo $ids?>');</script>

        <script src="<?php echo $website_url ?>/admin/portal/src/js/upload-image.js" type="text/javascript"></script>
    </div>
<?php }?>




<?php if($page=='my-profile-module'){?>
    <div class="absolute h-screen w-[90%] right-[5%] top-[55px] bg-white animated fadeInUp">
        <div class="h-[55px] bg-gradient-to-r from-[#582400] to-[#FF8A33] flex justify-between items-center px-[10px]">
            <p class="text-white text-[13px] font-semibold"><i class="bi-person-fill"></i> ADMINISTRATOR'S PROFILE</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">
            <div class="w-[100%] h-[150px] bg-profile-background bg-cover"></div>
            <div class="w-[90%] m-auto mt-[-50px]">
                <div class="w-[100px] h-[100px] border-[2px] border-white float-left rounded-[7px]" id="pictureBox">
                    <input type="file" id="fileInput" accept="image/jpeg, image/jpg" style="display: none;" />
                    <label for="fileInput">
                        <img id="profile_url" class="w-full h-full object-cover rounded-[5px]" alt="Profile Picture" title="Profile Picture" style="width: 100px; height: 100px; object-position: top;"/>
                    </label>
                </div>

                <div class="w-[calc(100%-110px)] float-right text-[#999]">
                    <p class="text-[25px] text-white font-bold" id="staff_profile">xxxx</p>
                    <p class="text-[11px] p-[20px] pl-[0px]">STATUS: <strong id="status_name">XXXX</strong> | LAST LOGIN DATE: <strong id="last_login">xxxx</strong></p>
                </div>
            </div>

            <div class="w-[90%] m-auto mt-[150px] mb-[150px] pb-[50px]">
                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] border-b border-[#FF8A33]">BASIC INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> SURNAME:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="surname" placeholder="SURNAME"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> OTHER NAMES:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="" placeholder="OTHER NAMES"/>
                    </div>
                </div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF BIRTH:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="date" id=""/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> GENDER:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            <option value=""></option>
                            <option value="">MALE</option>
                            <option value="">FEMALE</option>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> RELIGION AFFILIATION</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            <option value=""></option>
                            <option value="">CHRISTIANITY</option>
                            <option value="">ISLAMIC</option>
                            <option value="">OTHERS</option>
                        </select>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">CONTACT INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> NATIONALITY:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" placeholder="NATIONALITY" id=""/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                       </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STATE OF ORIGIN::</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> LOCAL GOVT. AREA:</label><br/>
                        <select class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]">
                            
                        </select>
                    </div>
                </div>
                <div class="w-[100%]">
                    <label class="px-[15px] text-gray-500"> RESIDENTIAL ADDRESS:</label><br/>
                    <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" id="" placeholder="OTHER NAMES"/>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> EMAIL ADDRESS:</label><br/>
                       <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="email" readonly="readonly" id="email_address" placeholder="EMAIL ADDRESS"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                       </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> PHONE NUMBER:</label><br/>
                        <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="tel" id="phoneno" placeholder="PHONE NUMBER"/>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">ACCOUNT INFORMATION</div>
                
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STAFF ID:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="staff_id" placeholder="STAFF ID"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> POST:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="" placeholder="POST"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF REGISTRATION:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="date" placeholder="DATE OF REGISTRATION"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> LAST LOGIN DATE:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="last_login_date" placeholder="LAST LOGIN DATE"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-[#FF8A33] pl-[10px] pb-[15px] mt-[50px] border-b border-[#FF8A33]">ADMINISTRATIVE INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER ROLE:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="role" placeholder="USER ROLE"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER STATUS:</label><br/>
                        <div class="relative flex items-center">
                            <input class="w-[100%] my-[8px] py-[15px] px-[20px] bg-white outline-none focus:border-[#FF8A33] focus:border-[1px] border-[1px] rounded-[5px]" type="text" readonly="readonly" id="status" placeholder="USER STATUS"/>
                            <i class="bi-lock-fill absolute right-3 text-[#FF8A33]"></i>
                        </div>
                    </div>
                </div>
                <button class="min-w-[150px] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] rounded-[5px] float-right mt-[10px] mb-[100px]" title="" onclick="">UPDATE PROFILE <i class="bi-check2"></i></button>
            </div>
        </div>
        <script>
            var staff_id = sessionStorage.getItem('staff_id');
            _get_staff_login(staff_id);
        </script>

        <script src="<?php echo $website_url ?>/admin/portal/src/js/upload-image.js" type="text/javascript"></script>
    </div>
<?php }?>


