"use strict"

async function getInstagram(){
    const userId = "7052682134824525";
    const token = "IGQWRNc3pTcnNGWnExQkJFU0dWOW9Qd3NNSVlpd2FuazdmZAHdyVGJUdFJROXdDTzJIZAnlKVUVtX2tJTDJiTGljRjBUWnpqRFdaU3BTS3BKVmdSNzl6clItdmJlazRMb1BURkdiTjNsdlhEUQZDZD";
    const url = `https://graph.instagram.com/${userId}/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=${token}`
    const response = await fetch(url);
    const jsonData = await response.json();

    writePhoto(jsonData.data)
}

function writePhoto(dataList){
    const photoWrap = document.querySelector(".photo_list")
    photoWrap.innerHTML = "";
    console.log(dataList)
    dataList.map((data, i)=>{
        const contents = document.createElement("li");
        //console.log(data)
        contents.innerHTML = `
        <div class='img_wrap' data-index=${i}>
            <img src=${data.media_url} width='100%' height='100%'>
        </div>
    `
    photoWrap.append(contents);   
    })
}

getInstagram();