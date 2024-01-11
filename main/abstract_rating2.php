<?php
include_once('./include/head.php');

// TODO
// 필요한 DB -> 초록 심사자, 초록
$sql_abstract =    "SELECT
						*
					FROM request_abstract
					WHERE is_deleted = 'N'
                    ";

$abstract = get_data($sql_abstract);

?>
<style>
    #modal{
        background-color: #FFF;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999999999;
    }
    table th, table td{
        word-break: keep-all;
    }

    .button{
        background-color: #ddd;
        padding: 4px 8px;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-screen flex items-center justify-center flex-col px-10">
    <h1 class="font-semibold text-2xl font-sans">포스터구연발표(Poster oral seesion) 채점표</h1>
    <div class="mt-10">
        <table class="border border-solid">
            <tr class="border border-solid">
                <td class="border border-solid py-2 px-4" colspan="3">심사위원정보</td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">파트구분</td>
                <td class="border border-solid py-2 px-4">성함</td>
                <td class="border border-solid py-2 px-4">소속</td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4"> 초록 카테고리 </td>
                <td class="border border-solid py-2 px-4"> 심사위원 성함 </td>
                <td class="border border-solid py-2 px-4"> 심사위원 소속 </td>
            </tr>
        </table>
    </div>
    <div class="mt-10">
        <table class="border border-solid">
            <tr class="border border-solid">
                <td class="border border-solid py-2 px-4">No.</td>
                <td class="border border-solid py-2 px-4">Abstract No.</td>
                <td class="border border-solid py-2 px-4">Presenter No.</td>
                <td class="border border-solid py-2 px-4">Affiliation</td>
                <td class="border border-solid py-2 px-4">Country</td>
                <td class="border border-solid py-2 px-4">Abstract Title</td>
                <td class="border border-solid py-2 px-4"></td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">1</td>
                <td class="border border-solid py-2 px-4">PP2-5</td>
                <td class="border border-solid py-2 px-4">신수정</td>
                <td class="border border-solid py-2 px-4">인투온</td>
                <td class="border border-solid py-2 px-4">대한민국</td>
                <td class="border border-solid py-2 px-4"><p onclick="openAbstract()" class="link underline">title</p></td>
                <td class="border border-solid py-2 px-4"><button class="rating button" data-id="PP2-5">채점하기</button></td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">1</td>
                <td class="border border-solid py-2 px-4">PP2-5</td>
                <td class="border border-solid py-2 px-4">신수정</td>
                <td class="border border-solid py-2 px-4">인투온</td>
                <td class="border border-solid py-2 px-4">대한민국</td>
                <td class="border border-solid py-2 px-4"><a href="/main/download/abstract/TBD.pdf" target="_blank" class="link underline">title</a></td>
                <td class="border border-solid py-2 px-4"><button class="rating button" data-id="PP2-6">채점하기</button></td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">1</td>
                <td class="border border-solid py-2 px-4">PP2-5</td>
                <td class="border border-solid py-2 px-4">신수정</td>
                <td class="border border-solid py-2 px-4">인투온</td>
                <td class="border border-solid py-2 px-4">대한민국</td>
                <td class="border border-solid py-2 px-4"><a href="/main/download/abstract/TBD.pdf" target="_blank" class="link underline">title</a></td>
                <td class="border border-solid py-2 px-4"><button class="rating button" data-id="PP2-7">채점하기</button></td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">1</td>
                <td class="border border-solid py-2 px-4">PP2-5</td>
                <td class="border border-solid py-2 px-4">신수정</td>
                <td class="border border-solid py-2 px-4">인투온</td>
                <td class="border border-solid py-2 px-4">대한민국</td>
                <td class="border border-solid py-2 px-4"><a href="/main/download/abstract/TBD.pdf" target="_blank" class="link underline">title</a></td>
                <td class="border border-solid py-2 px-4"><button class="rating button" data-id="PP2-8">채점하기</button></td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">1</td>
                <td class="border border-solid py-2 px-4">PP2-5</td>
                <td class="border border-solid py-2 px-4">신수정</td>
                <td class="border border-solid py-2 px-4">인투온</td>
                <td class="border border-solid py-2 px-4">대한민국</td>
                <td class="border border-solid py-2 px-4"><a href="/main/download/abstract/TBD.pdf" target="_blank" class="link underline">title</a></td>
                <td class="border border-solid py-2 px-4"><button class="rating button" data-id="PP2-9">채점하기</button></td>
            </tr>
        </table>
    </div>

    <div class="modal_background" style="display: none;"></div>
    <div id="modal" style="display: none;" class="p-4">
        <table>
            <tr>
                <th class="border border-solid py-2 px-4">연구의 창의성<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">방법의 타당성<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">결과의 영향력<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">발표의 우수성<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">COI</th>
                <th class="border border-solid py-2 px-4">총점<br/>(40점)</th>
                <th class="border border-solid py-2 px-4">채점</th>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">
                    <select id="select1" onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                <select id="select2" onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                <select id="select3" onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                    <select id="select4"  onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                    <select id="select5"  onchange="getSum()" >
                        <option value="N" selected>X</option>
                        <option value="Y">O</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4" id="sum">4</td>
                <td class="border border-solid py-2 px-4"><button id="completed" class="button">채점 완료</button></td>
            </tr>
        </table>
        <div>
            <h6 class="p-2 font-semibold">[현장 심사 안내]</h6>
            <p class="p-2">1. 초록의 발표자 또는 공저자인 경우 COI에 O로 체크하신 후 해당 초록에 대한 심사는 심사에서 제외하여 주십시오.</p>
            <p class="p-2">2. 각 심사 항목은 각각 10점 만점입니다. 각 항목의 중간 점수를 5점으로 고려하시어 심사를 진행하여 주십시오.</p>
            <p class="p-2">3. 동점자 최소화를 위해 변별력 있게 점수를 부여해 주십시오.</p>
            <p class="p-2">4. Poster oral 수상 예정 인원: 30명 (양일 기준, 5개 분야별 10인 발표)</p>
        </div>
    </div>
  
    <button id="submit" class="mt-10 py-2 px-4 bg-neutral-300 hover:bg-cyan-400 font-semibold">제출하기</button>
</div>
<script>
   const rateBtnList = document.querySelectorAll(".rating");
   const modal = document.querySelector("#modal");
    const modalBackground = document.querySelector(".modal_background");
    const completedBtn = document.querySelector("#completed");
    const sumTd = document.querySelector("#sum");
    const submitBtn = document.querySelector("#submit");

    //채점하기 버튼 클릭 이벤트
   rateBtnList.forEach((btn)=>{
        btn.addEventListener("click", (e)=>{
            showModal(e)
        })
   })

   //modal 채점 완료 버튼 이벤트
   completedBtn.addEventListener("click", ()=>{
       console.log(modal.dataset.id) // 채점 초록 번호
       console.log(sumTd.innerText) // 점수
     
       modal.style.display = "none";
       modalBackground.style.display = "none";

       rateBtnList.forEach((btn)=>{
            if(modal.dataset.id === btn.dataset.id){
                btn.innerText = "채점완료";
                btn.style.background = "rgb(59 130 246)"
            }
       })

       //TODO
       //1. 점수(sumTd.innerText) db에 입력하기(key = modal.dataset.id)
   })

   submitBtn.addEventListener("click", ()=>{
        let submitStatus = true;
        rateBtnList.forEach((btn)=>{
            if(btn.innerText !== "채점완료"){
                btn.style.background = "rgb(225 29 72)";
                submitStatus = false;
            }
        })
        
        if(submitStatus === false){
            alert("채점을 완료해주세요.")
        }else{
            if (window.confirm("채점을 제출하시겠습니까?")) {
                alert("채점을 해주셔서 감사합니다.")
                window.location.href = "/main/abstract_rating.php"
            }
        }
   })

   //modal show function
   function showModal(e){
       modal.style.display = "";
       modalBackground.style.display = "";
       modal.dataset.id = e.target.dataset.id;
   }

   //점수 합계 구하는 함수
   function getSum(){

        const select1 =  document.querySelector("#select1");
        const select2 =  document.querySelector("#select2");
        const select3 =  document.querySelector("#select3");
        const select4 =  document.querySelector("#select4");
        const select5 =  document.querySelector("#select5");

        const value1 =  select1.options[select1.selectedIndex].value;
        const value2 =  select2.options[select2.selectedIndex].value;
        const value3 =  select3.options[select3.selectedIndex].value;
        const value4 =  select4.options[select4.selectedIndex].value;
        const value5 =  select5.options[select5.selectedIndex].value;

        if(value5 === "N"){
            sumTd.innerText = value1*1 + value2*1 + value3*1 + value4*1;
        }else if(value5 === "Y"){
            sumTd.innerText = 0;
        }
   }

   function openAbstract(){
        window.open("https://kosso.org/main/download/abstract/TBD.pdf",'ChildWindow', 'width=400,height=300')
   }
</script>