
function getDetail(id, name){
    $.ajax({
        url: PATH + "ajax/client/ajax_program_detail.php",
        type: "POST",
        data: {
            flag: "detail_2",
            idx: id //category_idx
        },
        dataType: "JSON",
        success: function (res) {
            if (res.code == 200) {
                editArray(res.data, id, name)
            } else {
                return;
            }
        }
    });
}

/** menu li 클릭할 경우 ul clear */
function clearUl(){
    const programUl = document.querySelector(".program_detail_ul");
    programUl.innerHTML = "";
}

function editArray(data, id){
    for (let key in data) {
      const value = data[key]
      writeProgramView(key, Object.values(value), id)
    }
  }

function writeProgramView(room, dataList, id){ 
    
    const programUl = document.querySelector(".program_detail_ul");

    let inner = "";
    let trClass = "";
    
    trClass = findTrClass(id);

    dataList.map((data) => {
        let programTr = "";
        // console.log(data)
        
        /** program tr 만들기 */
        data.map((t, i)=>{
            const speakerName = t.speaker?.split("(")[0];
            const speakerOrg = t.speaker?.split("(")[1]?.split(")")[0];
            //symposium && 패널토의
            if(id === 8 && i === 3){
                programTr += `
                <tr>
                    <td>${t.contents_start_time}-${t.contents_end_time}</td>
                    <td class="bold">${t.contents_title}</td>
                    <td class="text_r">
                        <p style="white-space:pre;">${t.speaker}</p>
                    </td>
                </tr>
            `
            //speaker가 없을 경우 undefined 출력 방지 위해 삼항연산자 사용
            }else{
                programTr += `
                    <tr>
                        <td>${t.contents_start_time}-${t.contents_end_time}</td>
                        <td class="bold">${t.contents_title}</td>
                        <td class="text_r">
                            <p class="bold">${speakerName}</p>${speakerOrg ? `(${speakerOrg})` : ""}
                        </td>
                    </tr>
                `
            }
        })

        const programChairperson = data[0].chairpersons;
        let chairpersonHtml = "";
        //좌장이 2명일 경우
        if(programChairperson.includes(",")){
            chairpersonHtml = `
            <p><span class="bold">Chairpersons : ${programChairperson.split(",")[0].split("(")[0]}</span>(${programChairperson.split(",")[0].split("(")[1]?.split(")")[0]}),
                <span class="bold">${programChairperson.split(",")[1].split("(")[0]}</span>(${programChairperson.split(",")[1].split("(")[1]?.split(")")[0]})
            </p> 
            `
            //좌장이 1명일 경우
        }else{
            chairpersonHtml = `
                <p><span class="bold">Chairperson : ${programChairperson.split("(")[0]}</span>(${programChairperson.split("(")[1]?.split(")")[0]})</p> 
            `
        }

        inner += ` 
                    <div class="table_wrap detail_table_common x_scroll">
                        <table class="c_table detail_table">
                            <colgroup>
                                <col class="col_date">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr class=${trClass} onclick="toggleTr(event)">
                                    <td>${data[0].start_time.split(' ')[1]} - ${data[0].end_time}</td>
                                    <td>
                                        <p class="font_20 bold">${data[0].program_name}</p>
                                        ${chairpersonHtml}
                                        ${data[0].preview ? '<button class="btn gray2_btn program_detail_btn" onclick="preview(event)">세션소개</button>' : ''}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="program_detail_td">
                                        <ul>
                                            <li style="white-space: pre-line;">${data[0].preview}</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="on">
                                        <div>
                                            <table class="c_table detail_table padding_0">
                                                <colgroup>
                                                    <col class="col_date">
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    ${programTr}
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `
            });

           
         /** 날짜와 룸 정보 헤더 */
         const dashDay = dataList[0][0].start_time?.split(" ")[0];
         const day = `${dashDay?.split("-")[1]}월 ${dashDay?.split("-")[2]}일`
         const contents = document.createElement("li")    
         contents.innerHTML += `
                <div class="program_header">
                    <p class="font_16 bold">${room}</p>
                    <span class="font_16 bold">${day}</span>
                </div>
                ${inner}
         `
         programUl.append(contents);
}

function preview(event){
    event.preventDefault();
    event.stopPropagation();
    const target = event.target.parentElement.parentElement.nextElementSibling.firstElementChild;
    // 'on' 클래스를 가지고 있는지 여부 확인
    const hasOnClass = target.classList.contains('on');

    // 'on' 클래스를 추가하거나 제거
    if (hasOnClass) {
        target.classList.remove('on');
    } else {
        target.classList.add('on');
    }
}

function toggleTr(event){
    const target = event.target.parentElement.parentElement?.nextElementSibling.nextElementSibling;
        // style.display 값을 확인하고 토글
        if (target.style.display !== 'none') {
            target.style.display = 'none';
        } else {
            target.style.display = '';
        }
}

function findTrClass(id){

    //5, 6 => "pink_bg";
    //16, 19, 20 => "light_orange_bg";
    //11, 12, 13 => "sky_bg"
    //8 =>"green_bg"
    //10 => "purple_bg";

    switch(id){
        case 5 :  case 6 : 
        return "pink_bg";
        break;

        case 16 :  case 19 :  case 20 :
            return "light_orange_bg";
            break;
        
        case 11 :  case 12 :  case 13 :
            return "sky_bg";
            break;

        case 8 : 
            return "green_bg";
            break;

        case 10 :
            return "purple_bg";
            break;
    }
}
