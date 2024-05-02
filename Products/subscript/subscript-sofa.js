// Lấy thông tin từ tham số URL
var urlParams = new URLSearchParams(window.location.search);
  var element = urlParams.get('element');
function swapIDs(Id1,Id2) {
    var element1 = document.getElementById(Id1);
    var element2 = document.getElementById(Id2);
    
    if (element1 && element2) {
      var tempID = element1.id;
      element1.id = element2.id;
      element2.id = tempID;
    }
}
var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");
var detail1 = document.getElementById("detail1");
var detail2 = document.getElementById("detail2");
var detail3 = document.getElementById("detail3");
// Truy cập vào các phần tử tương ứng
//Sofa
if (element === '1') {
    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
        detail1.style.display = "block";
        detail2.style.display = "none";
        detail3.style.display = "none";
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
        detail1.style.display = "none";
        detail2.style.display = "block";
        detail3.style.display = "none";
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
        detail1.style.display = "none";
        detail2.style.display = "none";
        detail3.style.display = "block";
    }
} else if (element === '2') {
    swapIDs("detail1","detail2");
    MainImg.src = "/img/sofa/sofa-2.jpg";
    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
        detail1.style.display = "block";
        detail2.style.display = "none";
        detail3.style.display = "none";
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
        detail1.style.display = "none";
        detail2.style.display = "block";
        detail3.style.display = "none";
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
        detail1.style.display = "none";
        detail2.style.display = "none";
        detail3.style.display = "block";
    }
}
else if (element === '3') {
    swapIDs("detail1","detail3");
    MainImg.src = "/img/sofa/sofa-3.jpg";
    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
        detail1.style.display = "block";
        detail2.style.display = "none";
        detail3.style.display = "none";
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
        detail1.style.display = "none";
        detail2.style.display = "block";
        detail3.style.display = "none";
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
        detail1.style.display = "none";
        detail2.style.display = "none";
        detail3.style.display = "block";
    }
}