var width = Math.sqrt($("td").length)
var index =$("td").length;
var currentPositionId="16";
let a =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
    let boxes = $("td");
function getTop(position){
    if(position>width){
        return (position-width);
    }else{
        return 0;
    }
}

function getRight(position){
    if(position%width!=0){
        return (position+1);
    }else{
        return 0;
    }
}

function getBottom(position){
    if(position<=(index-width)){
        return (position+width);
    }else{
        return 0;
    }
}

function getLeft(position){
    if(position%4!=1){
        return (position-1);
    }else{
        return 0;
    }
}

function setSelect(position){//trigger by clicking on selectable class
    //change number
    let temp = $("#"+position).text();
    $(".selected").text(temp);//set text to the old one
    $("#"+position).text("");
    // console.log("==>"+$("#"+position).text())
    $(".selected").removeClass("selected");//remove old
    $("#"+position).addClass("selected");//set new one
    //set next step selectable
    // console.log("set at "+position);
    $(".selectable").off("click")
    $(".selectable").removeClass("selectable")
    let top = getTop(position);
    let right = getRight(position);
    let bottom = getBottom(position);
    let left = getLeft(position);
    // alert("T:"+top+"R:"+right+"B:"+bottom+"L:"+left)
    if(top!=0){
        // console.log("="+position+" top = "+top);
        $("#"+top).addClass("selectable");
    }
    if(right!=0){
        // console.log("="+position+" right = "+right);
        $("#"+right).addClass("selectable");
    }
    if(bottom!=0){
        // console.log("="+position+" bottom = "+bottom);
        $("#"+bottom).addClass("selectable");
    }
    if(left!=0){
        // console.log("="+position+" left = "+left);
        $("#"+left).addClass("selectable");
    }
    //check complete
    console.log("check!");
    let check = 1;
    for(i=0;i<boxes.length-1;i++){
        // console.log($(boxes[i]).text())
        // console.log((""+a[i]))
        if($(boxes[i]).text()!=(""+a[i])){
            check=0;
        }
    }
    if(check==1){
        alert("complete");
    }
    $(".selectable").click(function(event){
        // alert("click");
        // console.log($(this).attr("class"));
        setSelect(parseInt($(this).attr("id")));
    })
}

$(document).ready(function(){
    setSelect(parseInt(currentPositionId));
})

function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
  }

$("#shuffle").click(function(){
    let a =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
    shuffle(a);
    // console.log(a);
    let boxes = $("td");
    for(i=0;i<boxes.length;i++){
        $(boxes[i]).text(a[i]);
    }
    setSelect(16);
});

$("#giveup").click(function(){
    
    for(i=0;i<boxes.length;i++){
        $(boxes[i]).text(a[i]);
    }
    setSelect(16);
    // let check = 1;
    // for(i=0;i<boxes.length-1;i++){
    //     // console.log($(boxes[i]).text())
    //     // console.log((""+a[i]))
    //     if($(boxes[i]).text()!=(""+a[i])){
    //         check=0;
    //     }
    // }
    // if(check==1){
    //     alert("complete");
    // }
})