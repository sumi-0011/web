
let addBt = document.getElementById('addBt');
let changeBt = document.getElementById('changeBt');

window.onload = function() {
    addBt.addEventListener("click", addList);
    var ol_list = document.getElementById('olist').children;
   for(var i=0;i<ol_list.length;i++) {
       ol_list[i].addEventListener("click",deleteList)  ;
   }
    changeBt.addEventListener("click",changeList);
}

function addList() {
    var temp = document.getElementById('addText').value;
    if(temp != "") {
        var list = document.createElement('li');
        list.className = 'ol_list';
        list.innerHTML = temp;
        document.getElementById('olist').appendChild(list);
        document.getElementById('addText').value = '';
    }
}
function deleteList(event) {
    alert("Are you really going to remove?");
    $(event.target).remove();
}
function changeList() {
    var num = document.getElementById("changeNum").value;
    var text = document.getElementById('changeText').value;

    var list = document.getElementById('olist').children[num-1];
    list.innerHTML = text;
     

}
//event.target.parentNode.children[1].innerHTML = changeTask;
