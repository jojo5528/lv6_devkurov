<template>
<main id="top">
    <nav class="navbar" :class="[(scrolledNav ? 'shadow bg-white text-gray-800' : 'text-white')]">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="nav-brand">
                <a href="#top" v-smooth-scroll="{offset:-100}"><logo/> {{app.title}}</a>
            </div>

            <div class="block lg:hidden pr-4">
                <button @click="toggleNav()" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <div class="nav-item" :class="[(hideNav ? 'hidden' : null)]">
                <ul class="justify-end">
                    <li v-for="(menu, index) in navbar.menu" :key="index" :class="[activeMenu===menu.ref ? 'active':null]">
                        <a :href="menu.href" :target="menu.target" :ref="menu.ref" :class="menu.css" v-if="menu.target">{{menu.txt}}</a>
                        <a :href="menu.href" :ref="menu.ref" :class="menu.css" v-smooth-scroll="{offset:-100}" v-else>{{menu.txt}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <div class="container mt-24 px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center" ref="body">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left z-10">
            <p class="uppercase w-full">
                {{ app.title }} คืออะไร ?
            </p>
            <h1 class="my-3 leading-tight">
                Gaming Webdev!
            </h1>
            <p class="leading-normal text-2xl mb-8">
                บริการรับทำเว็บไซต์เกมออนไลน์ด้วยเทคโนโลยีที่ใช้พัฒนาตามเทรนด์สากล!
            </p>
            <p class="text-small m-0 p-0">
                ที่เน้นรับเว็บเกมเนื่องจากทำเป็นลักษณะ freelance ทำคนเดียวซึ่งจะตาม support เท่าที่ทำได้ อีกทั้งมีลักษณะการทำงานเป็นงานอดิเรก
                จึงไม่ได้คิดที่จะรับงานประเภท official ครับ
            </p>

            <a class="btn mt-3 mx-auto lg:mx-0" href="#whyus" v-smooth-scroll="{offset:-50}">
                ทำไมต้องเรา <i class="fas fa-question"></i>
            </a>
        </div>

        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 px-5 text-center z-10">
            <img class="w-full filter-grayscale" src="images/gaming.svg" alt="gaming">
        </div>

    </div>

    <div class="relative lg:-mt-24 border-0 z-0">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                    <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                    <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                </g>
            </g>
        </svg>
    </div>

    <section id="whyus" class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h1 class="w-full leading-tight my-2 text-center text-gray-800">
                ทำไมต้องเรา ?
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-gray-800 leading-none mb-3">
                        พัฒนาด้วยโครงสร้างระบบ MVC
                    </h3>
                    <p class="text-gray-600 mb-8">
                        สร้างเว็บแอพพลิเคชั่นตามมารฐานการพัฒนาระบบ MVC(Model,View,Controller).
                        <br>
                        เพื่อให้ลูกค้าสามารถนำไปใช้งานแก้ไขปรับแต่งได้สะดวก
                        <br>
                        อีกทั้งยังสามารถจัดหาทีมนักพัฒนาเพื่อแก้ไขระบบได้ภายหลัง เนื่องจากมีรูปแบบการเขียนที่เป็นสากล
                    </p>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <img class="w-full" src="images/mvc.svg" alt="MVC">
                </div>
            </div>

            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <img class="w-full" src="images/tech.svg" alt="Tech Stack">
                </div>
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <div class="align-middle">
                        <h3 class="text-gray-800 leading-none mb-3">
                            พัฒนาด้วยเทคโนโลยีชั้นนำ
                        </h3>
                        <p class="text-gray-600 mb-8">
                            เราพัฒนาเว็บแอพพลิเคชั่นด้วยเทคโนโลยีหลังบ้านที่หลากหลาย เช่น Laravel,Codeigniter ซึ่งเป็น Framework ของ PHP
                            สามารถติดตั้งลงใน Shared Hosting ได้อย่างง่ายดาย
                            <br>
                            นอกจากนี้ยังใช้ VueJS,Bootstrap,TailwindCSS และอื่นๆ
                            ในส่วนของ Frontend ซึ่งทำให้ตัวเว็บไซต์มีความทันสมัยและมีความสามารถตามมาตรฐานของเว็บแอพพลิเคชั่นในปัจจุบัน
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="job" ref="job_section" class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">

            <h1 class="w-full my-2 leading-tight text-center text-gray-800">รูปแบบงานที่รับ</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-gray-200 rounded-t rounded-b-none overflow-hidden shadow pt-3 px-3">
                    <h5 class="text-gray-800 px-6">เว็บไซต์เกมออนไลน์.</h5>
                    <p class="text-gray-800 text-base px-6 mt-3 mb-5">
                        เว็บไซต์สำหรับเกมมิ่ง เน้นความสามารถในการแสดงข้อมูล
                        และมีระบบ UCP จัดการข้อมูลภายในตัว
                    </p>
                </div>
                <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow px-6">
                    <div class="flex items-center justify-start p-5">
                        <a class="btn" href="#price" v-smooth-scroll="{offset:-50}">อัตราค่าบริการ</a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-gray-200 rounded-t rounded-b-none overflow-hidden shadow pt-3 px-3">
                    <h5 class="text-gray-800 px-6">เว็บแอพพลิเคชั่นประเภท UCP.</h5>
                        <p class="text-gray-800 text-base px-6 mt-3 mb-5">
                            เว็บแอพพลิเคชั่นสำหรับจัดการข้อมูลในฐานข้อมูลอย่างเป็นระบบ.
                            เน้นการออกแบบที่เป็นทางการและใช้งานได้ง่าย
                        </p>
                </div>
                <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow px-6">
                    <div class="flex items-center justify-center p-5">
                        <a class="btn" href="#price" v-smooth-scroll="{offset:-50}">อัตราค่าบริการ</a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-gray-200 rounded-t rounded-b-none overflow-hidden shadow pt-3 px-3">
                    <h5 class="text-gray-800 px-6">เว็บบอร์ด ข่าวสาร CMS</h5>
                    <p class="text-gray-800 text-base px-6 mt-3 mb-5">
                        เว็บไซต์ที่มีระบบจัดการเนื้อหาภายในตัวเอง หรือ เว็บเกมออนไลน์ที่ต้องการระบบเนื้อหา.
                        อาจเลือกใช้ระบบ CMS เช่น PhpBB, Discuz เป็นต้น<br>
                        หรือหากเป็นเว็บเกมออนไลน์ที่ต้องการระบบเนื้อหาข่าวสารก็สามารถจัดทำขึ้นได้โดยใช้ laravel
                    </p>
                </div>
                <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow px-6">
                    <div class="flex items-center justify-end p-5">
                        <a class="btn" href="#price" v-smooth-scroll="{offset:-50}">อัตราค่าบริการ</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="price" ref="price_section" class="bg-gray-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
            <h1 class="w-full my-2 leading-tight text-center text-gray-800">อัตราค่าบริการ</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">

                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4"
                    :class="[(price.mark)?'sm:-mt-6 shadow-lg z-10':null]"
                    v-for="(price, index) in priceData" :key="index">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"
                        :class="[(price.mark)?null:'text-gray-600']">
                        <h3 class="p-8 text-center"
                            :class="[(price.mark)?'w-full':'border-b-4']">
                            {{price.title}}
                        </h3>
                        <div v-if="price.mark" class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                        <ul class="w-full text-left text-sm" :class="[(price.mark)?'text-base font-bold':'text-sm']">
                            <li class="border-b py-4 px-10"
                                v-for="(desc, descIDX) in price.desc" :key="descIDX">
                                <i class="fas fa-check text-green-500" v-if="desc.allow"></i>
                                <i class="fas fa-times text-red-500" v-else></i>
                                {{desc.txt}}
                            </li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6"
                        :class="[(price.mark)?'bg-indigo-100':'bg-gray-100']">
                        <div class="w-full pt-6 font-bold text-center"
                            :class="[(price.mark)?'text-4xl':'text-3xl text-gray-600']">
                            {{formatNumber(price.price)}} THB
                            <span class="text-base align-middle"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="flex items-center justify-center">
                            <a class="btn" href="#contactus" v-smooth-scroll="{offset:-50}">ติดต่องาน</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="#f4f5f7">
                    <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                    <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                    </g>
                </g>
            </g>
        </g>
    </svg>

    <section id="contactus" class="container mx-auto text-center py-6 mb-12">
        <h1 class="w-full my-2 leading-tight text-center text-white">ติดต่อเรา <i class="fas fa-phone"></i></h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 leading-tight px-6">สามารถติดต่อได้ทางลิงก์โซเชียลมีเดียด้านล่างได้เลยครับ!</h3>
    </section>

    <footer class="bg-white">
        <div class="container mx-auto  px-8">
            <div class="w-full flex flex-col md:flex-row py-6">

                <div class="flex-1 mb-6">
                    <a href="#top" v-smooth-scroll="{offset:-100}"
                        class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl">
                        <logo/>
                        {{ app.title }}
                    </a>
                    <p class="text-gray-800 text-sm mt-3">
                        <span class="block text-gray-500 font-bold">Alias นามแฝง</span>
                        <span class="block" v-for="(name, index) in aliasData" :key="index">{{name}}</span>
                    </p>
                    <p>
                        <a href="#top" v-smooth-scroll="{offset:-100}"
                            class="mt-3 no-underline hover:underline text-gray-500 hover:text-orange-500 transition duration-300">
                            devkurov.in.th&copy;2019
                        </a>
                    </p>
                </div>

                <div class="flex-1">
                    <p class="uppercase text-gray-500">Policy <span class="text-sm">นโยบาย</span></p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <button
                                @click="showTerm()"
                                class="no-underline hover:underline text-gray-800 hover:text-orange-500 transition duration-300">
                                Term ข้อตกลง
                            </button>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <button
                                @click="showPrivacy()"
                                role="button"
                                class="no-underline hover:underline text-gray-800 hover:text-orange-500 transition duration-300">
                                Privacy ความเป็นส่วนตัว
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="flex-1">
                    <p class="uppercase text-gray-500">Social <span class="text-sm">โซเชียล</span></p>
                    <ul class="list-reset">
                        <li class="inline-block mr-2 md:block md:mr-0 text-4xl" v-for="(contact, key) in socialData" :key="key">
                            <a :href="contact.url" :title="key" target="_blank"
                                class="no-underline hover:underline text-gray-800 hover:text-orange-500 transition duration-300">
                                <i :class="contact.icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</main>
</template>

<script>
const numeral = require("numeral");
export default {
    data(){
        return{
            scrolledNav: false,
            hideNav: true,
            app:{title: 'DevKurov',},
            navbar:{
                hide: true, scrolled: false,
                menu:[
                    {txt: 'หน้าหลัก', href: '#top', ref: 'home'},
                    {txt: 'รูปแบบงานที่รับ', href: '#job', ref: 'job'},
                    {txt: 'อัตราค่าบริการ', href: '#price', ref: 'price'},
                    //{txt: 'ผลงาน', href: '#portfolio', ref: 'portfolio'},
                    {txt: 'ติดต่องาน', href: '#contactus', ref: 'contactus', css: 'btn'},
                ],
            },
            priceData:[
                {
                    title: 'Gaming',
                    price: 1000,
                    desc:[
                        {txt: 'Project Sourcecode', allow: true},
                        {txt: 'ดูแลซัพพอร์ท 1 เดือน', allow: true},
                        {txt: 'ระบบ UCP / CMS (ตามสั่ง)', allow: true},
                        {txt: 'โดเมน + โฮสติ้ง', allow: false},
                    ],
                },
                {
                    title: 'UCP',
                    price: 800,
                    mark: true,
                    desc:[
                        {txt: 'Project Sourcecode', allow: true},
                        {txt: 'ดูแลซัพพอร์ท 1 เดือน', allow: true},
                        {txt: 'ช่องทางการชำระเงิน', allow: false},
                        {txt: 'โดเมน + โฮสติ้ง', allow: false},
                    ],
                },
                {
                    title: 'CMS',
                    price: 2000,
                    desc:[
                        {txt: 'Project Sourcecode', allow: true},
                        {txt: 'ดูแลซัพพอร์ท 1 เดือน', allow: true},
                        {txt: 'ระบบ CMS', allow: true},
                        {txt: 'โดเมน + โฮสติ้ง', allow: false},
                    ],
                },
            ],
            socialData:{
                facebook: {icon: 'fab fa-facebook', url: '//facebook.com/joza1999',},
                line: {icon: 'fab fa-line', url: '//line.me/ti/p/~tunti.gg',},
                github: {icon: 'fab fa-github', url: '//github.com/jojo5528',},
                //youtube: {icon: 'fab fa-youtube', url: '//youtube.com/',},
            },
            aliasData:['Devkurov (เดฟคุรอฟ)', 'jojo5528', 'MaTazTa'],
            activeMenu: 'home',
        }
    },
    methods:{
        showTerm(){
            this.$swal({
                icon: 'info',
                title: '<strong><u>Term <small>ข้อตกลง</small></u></strong>',
                html: '<ol class="text-left list-decimal">' +
                    '<li>การว่าจ้างงานจะมีการจ่ายมัดจำส่วนหนึ่งก่อนเริ่มทำงาน</li>' +
                    '<li>การยกเลิกงานระหว่างจัดทำ จะไม่คืนเงินมัดจำเต็มจำนวน <strong>(อาจคืนส่วนหนึ่งหรือไม่คืน)</strong></li>' +
                    '<li>การแก้ไขงานก่อนตกลงรับมอบงานพร้อมชำระเงินสามารถทำได้ตลอดและยังไม่ถือเป็นช่วงเวลาดูแลสนับสนุน</li>' +
                    '<li>หลังชำระเงินเสร็จสิ้นและรับมอบงานแล้วจะถือว่าเข้าสู่ช่วงดูแลสนับสนุนตามระยะเวลาที่ได้ตกลงกัน</li>' +
                    '<li>การดูแลสนับสนุนจะเป็นไปตามที่ได้ตกลงกันไว้ในตอนว่าจ้างเท่านั้น</li>' +
                    '<li>การได้รับผลงานมาโดยวิธีอื่นที่ไม่ใช่จากการว่าจ้าง ผู้พัฒนาขอสงวนสิทธิ์ไม่ให้การสนับสนุนใดๆ</li>' +
                    '<li>การนำผลงานไปจำหน่าย แจกจ่ายหรือส่งมอบต่อผู้อื่นไม่ว่าทางใด หากไม่ได้รับอนุญาตทางผู้พัฒนาขอสงวนสิทธิ์ไม่ให้การสนับสนุนใดๆ</li>' +
                    '<li>การนำผลงานไปใช้โดยไม่ได้รับอนุญาต ผู้พัฒนาจะไม่ถือมีส่วนเกี่ยวข้องและไม่ให้การสนับสนุนใดๆ</li>' +
                    '<li>ผู้พัฒนาขอสงวนสิทธิ์ในการเปลี่ยนแปลงรายละเอียด ราคา การบริการต่างๆโดยไม่แจ้งให้ทราบล่วงหน้า</li>' +
                    '</ol>',
            });
        },
        showPrivacy(){
            this.$swal({
                icon: 'info',
                title: '<strong><u>Privacy <small>นโยบายความเป็นส่วนตัว</small></u></strong>',
                html: '<ol class="text-left list-decimal">' +
                    '<li>ผู้พัฒนามีการรับงานในลักษณะของงานอดิเรก ไม่มีจุดประสงค์ในเชิงพาณิชย์แท้จริง</li>' +
                    '<li>ผู้พัฒนาจะไม่มีการเปิดเผยข้อมูลส่วนตัวของผู้ว่าจ้างแต่อย่างใด</li>' +
                    '<li>การนำผลงานไปใช้โดยผิดกฎหมายหรือละเมิดกฎหมายใดๆ ผู้พัฒนาไม่มีส่วนเกี่ยวข้องใดๆทั้งสิ้นกับเจ้าของผู้ใช้ผลงานนั้น</li>' +
                    '<li>ผู้พัฒนาเน้นกลุ่มเป้าหมายที่ชุมชนเซิฟเวอร์เกมออนไลน์ต่างๆเป็นหลัก โดยอาจมีกลุ่มอื่นบ้างแต่จะไม่มีการรับงานเกี่ยวข้องกับระบบพนันใดๆทั้งสิ้น</li>' +
                    '<li>ข้อมูลเกี่ยวกับระบบทุกอย่างที่ผู้ว่าจ้างได้มอบให้ไว้จะไม่มีการเปิดเผยใดๆอย่างเด็ดขาด และไม่มีผู้อื่นได้รับรู้เนื่องจากผู้พัฒนาจัดทำทั้งหมดด้วยตนเอง</li>' +
                    '<li>เว็บไซต์นี้จดโดเมน .in.th สำหรับส่วนบุคคล มีการยืนยันตัวตนอย่างถูกต้องและผู้พัฒนามีตัวตนอยู่จริง</li>' +
                    '</ol>',
            });
        },
        toggleNav(){
            this.hideNav = !this.hideNav;
            if(!this.hideNav){
                this.scrolled = true;
            }else{
                this.updateScroll();
            }
        },
        updateScroll(){
            const job = this.$refs.job_section;
            const price = this.$refs.price_section;

            this.scrollPos = window.scrollY;
            if(this.scrollPos > 10 || !this.hideNav){
                this.scrolledNav = true;
            }else{
                this.scrolledNav = false;
            }

            if(this.scrollPos > (price.offsetTop - 200)){
                this.activeMenu = 'price';
            }else if(this.scrollPos > (job.offsetTop - 200)){
                this.activeMenu = 'job';
            }else{
                this.activeMenu = 'home';
            }
        },
        formatNumber(value){
            return numeral(value).format('0,0');
        },
    },
    mounted(){
        window.addEventListener('scroll', this.updateScroll);
    },
}
</script>
