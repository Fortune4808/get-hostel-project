<?php if($page=='dashboard'){?>
    <div class="w-[95%] min-250px m-auto flex gap-1 mt-[20px]">
        <div class="w-[30%] h-[90px] bg-gradient-to-r from-[#582400] to-[#FF8A33] rounded flex justify-between items-center cursor-pointer hover:shadow-profile-border" onclick="_get_page('admin-module')">
            <div class="pl-[15px]">
                <p class="text-white text-2xl font-bold">820</p>
                <p class="text-white text-sm pt-[10px]">ACTIVE STAFF</p>
            </div>
            <div class="text-white text-4xl pr-[15px]"><i class="bi-people-fill"></i></div>
        </div>

        <div class="w-[30%] h-[90px] bg-gradient-to-r from-[#582400] to-[#FF8A33] rounded flex justify-between items-center cursor-pointer hover:shadow-profile-border" onclick="_get_page('hostel-module')">
            <div class="pl-[15px]">
                <p class="text-white text-2xl font-bold">450</p>
                <p class="text-white text-sm pt-[10px]">ALL HOSTELS</p>
            </div>
            <div class="text-white text-4xl pr-[15px]"><i class="bi-houses-fill"></i></div>
        </div>

        <div class="w-[30%] h-[90px] bg-gradient-to-r from-[#582400] to-[#FF8A33] rounded flex justify-between items-center cursor-pointer hover:shadow-profile-border" onclick="_get_page('publish-module')">
            <div class="pl-[15px]">
                <p class="text-white text-2xl font-bold">0</p>
                <p class="text-white text-sm pt-[10px]">FAQ</p>
            </div>
            <div class="text-white text-4xl pr-[15px]"><i class="bi-patch-question-fill"></i></div>
        </div>

        <div class="w-[30%] h-[90px] bg-gradient-to-r from-[#582400] to-[#FF8A33] rounded flex justify-between items-center cursor-pointer hover:shadow-profile-border" onclick="_get_page('publish-module')">
            <div class="pl-[15px]">
                <p class="text-white text-2xl font-bold">40</p>
                <p class="text-white text-sm pt-[10px]">BLOG</p>
            </div>
            <div class="text-white text-4xl pr-[15px]"><i class="bi-book"></i></div>
        </div>
    </div>

    <div class="w-[100%] border-b border-solid border-[#CECDCD] mt-[20px]"></div>

    <p class="pl-[25px] pt-[10px] text-[11px] text-[#424141]"><i class="bi-graph-up"></i> Showing Matrix for </p>

        <div id="chartContainer2" style="height: 265px; width: 98%; margin:auto;"></div>
        <script>renderChart()</script>
<?php }?>


<?php if($page=='admin-module'){?>
    <div class="w-[100%] h-[55px] bg-[#EBEBEB]">
        <div class="w-[95%] m-auto flex justify-between items-center gap-[5px] text-[10px] text-[#ABABAB]">
            <select class="w-[40%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30" onchange="_all_active_staff(this.value)">
                <option value="">All Status</option>
                <option value="1">Active Staff</option>
                <option value="2">Inactive Staff</option>
            </select>
            <input class="w-[60%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30" type="text" id="search_txt" onkeyup="_all_active_staff('')" placeholder="Type here to search..." title="Type here to search"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[5px] px-[15px] border border-solid border-[#A0E5BD] flex justify-between items-center">
            <p class="text-[12px] text-[#424141]"><i class="bi-people-fill"></i> ADMINISTRATOR'S LIST</p>
            <button class="py-[5px] px-[20px] bg-[#0E4000] text-white rounded-[5px] text-[10px] hover:bg-[#475c41]" onclick="_get_form('new-staff-module')">ADD NEW STAFF <i class="bi-person-plus"></i></button>
        </div>

       <div class="w-[100%] min-h-320px mt-[15px] mb-[30px] flex justify-center flex-wrap gap-[15px]" id="fetch_all_staff">
            <script>_all_active_staff('')</script>
        </div>
    </div>
<?php }?>



<?php if($page=='customer-module'){?>
    <div class="w-[100%] h-[55px] bg-[#EBEBEB]">
        <div class="w-[95%] m-auto flex justify-between items-center gap-[5px] text-[10px] text-[#ABABAB]">
            <select class="w-[40%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30" onchange="_all_active_users(this.value)">
                <option value="">All Status</option>
                <option value="1">Active Customers</option>
                <option value="2">Inactive Customers</option>
            </select>
            <input class="w-[60%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30" type="text" id="search_txt" onkeyup="_all_active_users('')" placeholder="Type here to search..." title="Type here to search"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[5px] px-[15px] border border-solid border-[#A0E5BD] flex justify-between items-center">
            <p class="text-[12px] text-[#424141]"><i class="bi-people-fill"></i> CUSTOMER'S LIST</p>
        </div>

       <div class="w-[100%] min-h-320px mt-[15px] flex justify-center flex-wrap gap-[15px]" id="fetch_all_users">
            <script>_all_active_users('')</script>
        </div>
    </div>
<?php }?>



<?php if($page=='hostel-module'){?>
    <div class="w-[100%] h-[55px] bg-[#EBEBEB]">
        <div class="w-[95%] m-auto flex justify-between items-center gap-[5px] text-[10px] text-[#ABABAB]">
            <select class="w-[40%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30">
                <option value="">All Status</option>
                <option value="">Activated Hostel</option>
                <option value="">Suspended Hostel</option>
                <option value="">Rented Hostel</option>
            </select>
            <input class="w-[60%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30" type="text" id="search_txt" placeholder="Type here to search..." title="Type here to search"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[5px] px-[15px] border border-solid border-[#A0E5BD] flex justify-between items-center">
            <p class="text-[12px] text-[#424141]"><i class="bi-houses-fill"></i> HOSTEL'S LIST</p>
            <button class="py-[5px] px-[20px] bg-[#0E4000] text-white rounded-[5px] text-[10px] hover:bg-[#475c41]">ADD NEW HOSTEL <i class="bi-house-add-fill"></i></button>
        </div>

        <div class="w-[95%] min-h-320px m-auto mt-[15px] flex flex-wrap gap-[10px]">
            <div class="">
               
            </div>
        </div>
    </div>
<?php }?>



<?php if($page=='order-module'){?>
    <div class="w-[100%] h-[55px] bg-[#EBEBEB]">
        <div class="w-[95%] m-auto flex justify-between items-center gap-[5px] text-[10px] text-[#ABABAB]">
            <select class="w-[40%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30">
                <option value="">Paid Order</option>
                <option value="">Unpaid Order</option>
            </select>
            <input class="w-[60%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30" type="text" id="order_search_txt" placeholder="Type here to search..." title="Type here to search"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[5px] px-[15px] border border-solid border-[#A0E5BD] flex justify-between items-center">
            <p class="text-[12px] text-[#424141]"><i class="bi-basket2-fill"></i> Order Lists</p>
        </div>

        <div class="w-[95%] m-auto mt-[15px] mb-[30px] bg-white shadow-table-box-border">
           <table class="w-[100%] border-collapse">
                <thead>
                    <tr>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">SN</th>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">DATE</th>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">ORDER ID</th>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">(#)AMOUNT</th>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">ORDER STATUS</th>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">PAYMENT METHOD</th>
                        <th class="p-[12px] text-left text-[10px] font-bold text-[#333] bg-[#E1DDDA]">ACTION</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="p-[10px] text-[10px] text-[#333]">1</td>
                        <td class="p-[10px] text-[10px] text-[#333]">2023-09-18 01:01:29</td>
                        <td class=" p-[10px] text-[10px] text-[#333]"> CLN202406051207410022345645672</td>
                        <td class=" p-[10px] text-[10px] text-[#333]">N 26,000.00</td>
                        <td class="p-[10px] text-[10px] text-[#333]">PENDING</td>
                        <td class="p-[10px] text-[10px] text-[#333]">CREDIT CARD</td>
                        <td class="p-[10px] text-[10px] text-[#333]"><button class="text-white bg-[#582400] px-[10px] py-[5px] rounded-[5px]">VIEW</button></td>
                    </tr>

                    <tr>
                        <td class="p-[10px] text-[10px] text-[#333]">1</td>
                        <td class="p-[10px] text-[10px] text-[#333]">2023-09-18 01:01:29</td>
                        <td class=" p-[10px] text-[10px] text-[#333]"> CLN202406051207410022345645672</td>
                        <td class=" p-[10px] text-[10px] text-[#333]">N 26,000.00</td>
                        <td class="p-[10px] text-[10px] text-[#333]">PENDING</td>
                        <td class="p-[10px] text-[10px] text-[#333]">CREDIT CARD</td>
                        <td class="p-[10px] text-[10px] text-[#333]"><button class="text-white bg-[#582400] px-[10px] py-[5px] rounded-[5px]">VIEW</button></td>
                    </tr>
                </tbody>
           </table>
        </div>
    </div>
<?php }?>



<?php if($page=='publish-module'){?>
    <div class="w-[100%] h-[55px] bg-[#EBEBEB]">
        <div class="w-[95%] m-auto flex justify-between items-center text-[10px] text-[#ABABAB]">
            <div class="w-[100%] m-auto text-[10px] text-[#ABABAB]">
                <select class="w-[100%] h-[45px] bg-white mt-[5px] pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30">
                    <option value="" onclick="_next_page('next_1')">News & Blog</option>
                    <option value="" onclick="_next_page('next_2')">FAQ</option>
                </select>
            </div>
        </div>

        <div class="log-div" id="next_1">
            <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[5px] px-[15px] border border-solid border-[#A0E5BD] flex justify-between items-center">
                <p class="text-[12px] text-[#424141]"><i class="bi-book"></i> PUBLICATIONS / ARTICLES</p>
                <button class="py-[5px] px-[20px] bg-[#0E4000] text-white rounded-[5px] text-[10px] hover:bg-[#475c41]">CREATE A NEW ARTICLE <i class="bi-folder-plus"></i></button>
            </div>
        </div>

        <div class="log-div hidden" id="next_2">
            <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[5px] px-[15px] border border-solid border-[#A0E5BD] flex justify-between items-center">
                <p class="text-[12px] text-[#424141]"><i class="bi-patch-question-fill"></i> FAQs LIST</p>
                <button class="py-[5px] px-[20px] bg-[#0E4000] text-white rounded-[5px] text-[10px] hover:bg-[#475c41]">ADD NEW FAQ <i class="bi-folder-plus"></i></button>
            </div>
        </div>
    </div>
<?php }?>


<script>
    superplaceholder({
        el: search_txt,
            sentences: [ 'Type here to search...' ],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
</script>


<script>
    superplaceholder({
        el: order_search_txt,
            sentences: [ 'Type here to search by ORDER ID...' ],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
</script>




  

