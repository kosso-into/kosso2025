"use-strict"
function getDetail(id, name){
    $.ajax({
        url: PATH + "ajax/client/ajax_program_detail.php",
        type: "POST",
        data: {
            flag: "detail",
            idx: id //category_idx
        },
        dataType: "JSON",
        success: function (res) {
            // console.log(res.data)
            if (res.code == 200) {
                writeProgramDetail(res.data, id, name)
            } else {
                return;
            }
        }
    });
}


function writeProgramDetail(data, id, name){

    switch(id){
        case 5: //plenary_lecture
            writeOneLecture(data, id, name)
            break;
        case 6: //keynote_lecture
            writeTwoLecture(data, id)
            break;
        case 11: //Breakfast_lecture
            writeThreeLecture(data, id)
            break;
        case 12: //luncheon_lecture
            writeTwoLecture(data, id)
            break;
        case 8: //symposium
            writeSympoLecutre(data,id)
            break;
        case 16: //oral_presentation
            writeTwoLecture(data, id)
            break;
        case 13: //satellite_symposuim
            writeTwoLecture(data, id)
            break;
        case 10: //pre_congress
            writeTwoLecture(data, id)
            break;
        case 19: //special_symposium
            writeOneLecture(data, id, name)
            break;
    }  
}

//프로그램 표가 하나일 경우
function writeOneLecture(data, id, name){
    // console.log(Object.values(data))
    const dataList = Object.values(data);

    const plenaryWrap = document.querySelector("#plenary_lecture_1");

    const special1Wrap = document.querySelector("#special_lecture_detail_1");
    const special2Wrap = document.querySelector("#special_lecture_detail_2");

    plenaryWrap.innerHTML = "";
    special1Wrap.innerHTML = "";
    special2Wrap.innerHTML = "";

    dataList[0].map((data)=>{
        const contents = document.createElement("tr");
        const speakerName = data.speaker?.split("(")[0];
        const speakerOrg = data.speaker?.split("(")[1].split(")")[0];

        if(data.speaker){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else{
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }
        
        if(id === 5){
            plenaryWrap.append(contents);
        }else if(id === 19 && name === "special_lecture_1"){
            special1Wrap.append(contents);
        }else if(id === 19 && name === "special_lecture_2"){
            special2Wrap.append(contents);
        }
     
    
    })
}

//프로그램 표가 두개일 경우
function writeTwoLecture(data, id){
    const dataList = Object.values(data);

    const keyNote1Wrap = document.querySelector("#keynote_lecture_1");
    const keyNote2Wrap = document.querySelector("#keynote_lecture_2");

    const Luncheon1Wrap = document.querySelector("#luncheon_symposium_1");
    const Luncheon2Wrap = document.querySelector("#luncheon_symposium_2");

    const oral1Wrap = document.querySelector("#oral_presentation_1");
    const oral2Wrap = document.querySelector("#oral_presentation_2");

    const satellite1Wrap = document.querySelector("#satellite_symposium_1");
    const satellite2Wrap = document.querySelector("#satellite_symposium_2");

    const pre1Wrap = document.querySelector("#pre_congress_symposium_1");
    const pre2Wrap = document.querySelector("#pre_congress_symposium_2");

    keyNote1Wrap.innerHTML = "";
    keyNote2Wrap.innerHTML = "";

    Luncheon1Wrap.innerHTML = "";
    Luncheon2Wrap.innerHTML = "";

    oral1Wrap.innerHTML = "";
    oral2Wrap.innerHTML = "";

    satellite1Wrap.innerHTML = "";
    satellite2Wrap.innerHTML = "";

    pre1Wrap.innerHTML = "";
    pre2Wrap.innerHTML = "";

    dataList[0].map((data)=>{
        const contents = document.createElement("tr");
        const speakerName = data.speaker?.split("(")[0];
        const speakerOrg = data.speaker?.split("(")[1].split(")")[0];
        //console.log(data)
     
        if(data.speaker){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else{
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }
        if(id === 6){
            keyNote1Wrap.append(contents);
        }else if(id === 12){
            Luncheon1Wrap.append(contents);
        }else if(id === 16){
            oral1Wrap.append(contents);
        }else if(id === 13){
            satellite1Wrap.append(contents);
        }else if(id === 10){
            pre1Wrap.append(contents);
        }
    })

    dataList[1].map((data)=>{
        const contents = document.createElement("tr");
        const speakerName = data.speaker?.split("(")[0];
        const speakerOrg = data.speaker?.split("(")[1].split(")")[0];
        //console.log(data)
  
        if(data.speaker){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else{
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }
        if(id === 6){
            keyNote2Wrap.append(contents);
        }else if(id === 12){
            Luncheon2Wrap.append(contents);
        }else if(id === 16){
            oral2Wrap.append(contents);
        }else if(id === 13){
            satellite2Wrap.append(contents);
        }else if(id === 10){
            pre2Wrap.append(contents);
        }
    })
}

//프로그램 표가 세개일 경우
function writeThreeLecture(data, id){
        // console.log(Object.values(data))
        const dataList = Object.values(data);
    
        const Breakfast1Wrap = document.querySelector("#breakfast_symposium_1");
        const Breakfast2Wrap = document.querySelector("#breakfast_symposium_2");
        const Breakfast3Wrap = document.querySelector("#breakfast_symposium_3");
    
        Breakfast1Wrap.innerHTML = "";
        Breakfast2Wrap.innerHTML = "";
        Breakfast3Wrap.innerHTML = "";
    
        dataList[0].map((data)=>{
            const contents = document.createElement("tr");
            const speakerName = data.speaker?.split("(")[0];
            const speakerOrg = data.speaker?.split("(")[1].split(")")[0];
            //console.log(data)
         
        if(data.speaker){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else{
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }
        Breakfast1Wrap.append(contents);
        })

        dataList[1].map((data)=>{
            const contents = document.createElement("tr");
            const speakerName = data.speaker?.split("(")[0];
            const speakerOrg = data.speaker?.split("(")[1].split(")")[0];
            //console.log(data)
           
        if(data.speaker){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else{
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }
        Breakfast2Wrap.append(contents);
        })

        dataList[2].map((data)=>{
            const contents = document.createElement("tr");
            const speakerName = data.speaker?.split("(")[0];
            const speakerOrg = data.speaker?.split("(")[1].split(")")[0];
            //console.log(data)
           
        if(data.speaker){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else{
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }
        Breakfast3Wrap.append(contents);
        })
}

//symposium program
function writeSympoLecutre(data, id){
        // console.log(Object.values(data))
        const dataList = Object.values(data);
    
        const symposium1Wrap = document.querySelector("#symposium_1");
        const symposium2Wrap = document.querySelector("#symposium_2");
        const symposium3Wrap = document.querySelector("#symposium_3");
        const symposium4Wrap = document.querySelector("#symposium_4");
        const symposium5Wrap = document.querySelector("#symposium_5");
        const symposium6Wrap = document.querySelector("#symposium_6");
        const symposium7Wrap = document.querySelector("#symposium_7");
        const symposium8Wrap = document.querySelector("#symposium_8");
        const symposium9Wrap = document.querySelector("#symposium_9");
        const symposium10Wrap = document.querySelector("#symposium_10");
        const symposium11Wrap = document.querySelector("#symposium_11");
        const symposium12Wrap = document.querySelector("#symposium_12");
    
        symposium1Wrap.innerHTML = "";
        symposium2Wrap.innerHTML = "";
        symposium3Wrap.innerHTML = "";
        symposium4Wrap.innerHTML = "";
        symposium5Wrap.innerHTML = "";
        symposium6Wrap.innerHTML = "";
        symposium7Wrap.innerHTML = "";
        symposium8Wrap.innerHTML = "";
        symposium9Wrap.innerHTML = "";
        symposium10Wrap.innerHTML = "";
        symposium11Wrap.innerHTML = "";
        symposium12Wrap.innerHTML = "";

        const numList = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
        numList.map((num, i)=>{
            dataList[i].map((data, j)=>{
                const contents = document.createElement("tr");
                const speakerName = data.speaker?.split("(")[0];
                const speakerOrg = data.speaker?.split("(")[1].split(")")[0];
                //console.log(data)
            
        if(data.speaker && j !== 3){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${speakerName}</p>(${speakerOrg})
            </td>

`
        }else if(!data.speaker && j !== 3){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold"></p>
            </td>

`
        }else if(j === 3){
            contents.innerHTML = `
            <td>${data.contents_start_time}-${data.contents_end_time}</td>
            <td class="bold">
                ${data.contents_title}
            </td>
            <td class="text_r">
                <p class="bold">${data.speaker}</p>
            </td>

`
        }
            eval(`symposium${num}Wrap`).append(contents);        
            })
        })
       
}


