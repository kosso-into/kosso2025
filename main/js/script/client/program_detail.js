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
        case 5:
            writeOneLecture(data, id, name)
            break;
        case 6:
            writeTwoLecture(data, id)
            break;
        case 11:
            writeThreeLecture(data, id)
            break;
        case 12:
            writeTwoLecture(data, id)
            break;
        case 8:
            writeSympoLecutre(data,id)
            break;
        case 16:
            writeTwoLecture(data, id)
            break;
        case 13:
            writeTwoLecture(data, id)
            break;
        case 10:
            writeTwoLecture(data, id)
            break;
        case 19:
            writeOneLecture(data, id, name)
            break;
        case 19:
            writeOneLecture(data, id, name)
            break;
    }  
}

function writeOneLecture(data, id, name){
    // console.log(Object.values(data))
    const dataList = Object.values(data);
    const plenaryWrap = document.querySelector("#plenary_lecture_1");

    const keyNote1Wrap = document.querySelector("#keynote_lecture_1");
    const keyNote2Wrap = document.querySelector("#keynote_lecture_2");

    const Breakfast1Wrap = document.querySelector("#breakfast_symposium_1");
    const Breakfast2Wrap = document.querySelector("#breakfast_symposium_2");
    const Breakfast3Wrap = document.querySelector("#breakfast_symposium_3");

    const Luncheon1Wrap = document.querySelector("#luncheon_symposium_1");
    const Luncheon2Wrap = document.querySelector("#luncheon_symposium_2");

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

    const oral1Wrap = document.querySelector("#oral_presentation_1");
    const oral2Wrap = document.querySelector("#oral_presentation_2");

    const satellite1Wrap = document.querySelector("#satellite_symposium_1");
    const satellite2Wrap = document.querySelector("#satellite_symposium_2");

    const pre1Wrap = document.querySelector("#pre_congress_symposium_1");
    const pre2Wrap = document.querySelector("#pre_congress_symposium_2");

    const special1Wrap = document.querySelector("#special_lecture_detail_1");
    const special2Wrap = document.querySelector("#special_lecture_detail_2");

    dataList[0].map((data)=>{
        const contents = document.createElement("tr");
        console.log(data)
        contents.innerHTML = `
                <td>${data.contents_start_time}-${data.contents_end_time}</td>
                <td class="bold">
                    ${data.contents_title}
                </td>
                <td class="text_r">
                    <p class="bold">${data.speaker}</p>(TBD)
                </td>

    `
        if(id === 5){
            plenaryWrap.append(contents);
        }else if(id === 19 && name === "special_lecture_1"){
            special1Wrap.append(contents);
        }else if(id === 19 && name === "special_lecture_2"){
            special2Wrap.append(contents);
        }
     
    
    })
}