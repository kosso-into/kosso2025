<?php

// TODO
// 필요한 DB -> 초록 심사자
$sql_abstract =    "SELECT
						*
					FROM request_abstract
					WHERE is_deleted = 'N'
                    ";

$abstract = get_data($sql_abstract);

?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-screen flex items-center justify-center flex-col">
    <div class="w-2/5">
        <p class="font-semibold mb-1 font-sans">E-mail</p>
        <input id="email" class="border p-2 border-solid w-full"/>
    </div>
    <div class="mt-2 w-2/5">
        <p class="font-semibold mb-1 font-sans">성함</p>
        <input id="name" class="border p-2 border-solid w-full"/>
    </div>
    <button id="submit" class="mt-4 py-2 px-4 bg-neutral-300 hover:bg-cyan-400 font-semibold">로그인</button>
</div>
<script>
    const emailInput = document.querySelector("#email");
    const nameInput = document.querySelector("#name");
    const submitBtn = document.querySelector("#submit");
    
    submitBtn.addEventListener("click", ()=>{
        let submitStatus = true; 

        //email input에 값이 비어있을 경우
        if(emailInput.value === ""){
            emailInput.classList.add("border-rose-600");
            emailInput.classList.add("border-2");
            submitStatus = false;
        }

        //email 조건식 
        if(emailInput.value !== ""){
            var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
            if (!regExp.test(emailInput.value)) {
                alert("이메일 형식을 확인해주세요.");
                emailInput.classList.add("border-rose-600");
                emailInput.classList.add("border-2");
                submitStatus = false;
            }
        }

        //이름의 값이 비어있을 경우
        if(nameInput.value === ""){
            nameInput.classList.add("border-rose-600");
            nameInput.classList.add("border-2");
            submitStatus = false;
        }

        if(submitStatus === true){
            window.location.href = "/main/abstract_rating2.php"

            //TODO
            //1. 심사위원 DB 에서 값 비교 
            //1-1. 심사위원이 아닐 때 -> alert
            //1-2. 심사위원이 맞을 때 -> rating2 페이지에 쿼리로 등록번호 전달 ->심사해야하는 초록 목록 보이기
        }
    })
</script>