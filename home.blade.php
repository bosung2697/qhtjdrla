<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"><title>test</title>
    <style type = "text/css">
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}

        #second_row{
            border-top: solid #d6d6d6;
            border-bottom: solid #d6d6d6;
            display:grid;
            grid-template-columns: 75% 25%;
            font-size: 30px;
            font-weight: bolder;
        }

        #acc_asset{
            border-right: 5px dashed #31619e;
            text-align: center;
            padding: 80px;
        }
        #hello{
            width:100%;
            background-color: #31619e;
            color:white;
            text-align:center;
            font-size:57px;
            padding:30px;
            margin-bottom: 25px;
            text-shadow: 0.1em 0.1em 4px #333;
        }
        table{
            width:100%;
        }
        td{
            border-collapse:collapse;
            border:1px solid white;
            background-color: #31619e;
            color:white;
            text-align:center;
            padding: 57px 10px;
            font-size:30px;
            font-weight:bold;
            width:25%;
        }
        #info{
            display:grid;
            grid-template-columns: 33.3% 33.3% 33.3%;
            text-align:center;
            margin:30px;

        }
        #info1{
            display:grid;
            grid-template-columns: 33.3% 33.3% 33.3%;
            text-align:center;
            font-size: 44px;
        }
        .circle{
            width:167px;
            height:170px;
            border-radius: 50%;
            margin:30px;
        }
        .inner-circle{
            margin:0px;
            width:140px;
            height:145px;
            border-radius:50%;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        #orange1{
            border:14px solid #ed7352;
        }

        #orange{
            border:14px solid #f4a587;
        }#purple1{
             border:14px solid #574b9d;
         }

        #purple{
            border:14px solid #8f82bc;
        }#blue1{
             border:14px solid #6e81b3;
         }

        #blue{
            border:14px solid #a1a9cc;
        }

    </style>
</head>
<body style="width:100%; height:100%">
<div id="hello" > 모두다던져! </div>
<div class="w3-content w3-display-container" style="width:100%; height:500px">
    <img class="mySlides" src="\img\myschool.png" style="width:100%; height:450px">
    <img class="mySlides" src="\img\myschool1.png" style="width:100%; height:450px">
    <img class="mySlides" src="\img\myschool2.png" style="width:100%; height:450px">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <span class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</span>
        <span class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div></div>
<div style="width: 100%; border-top: 1px solid grey; border-bottom: 1px solid grey; padding: 21px"><span style="font-size:45px; font-weight: 900">영업라인업     </span><span style="font-size:40px; font-weight:600">
        사업장 명 </span><span style="font-size: 21px; font-weight: bold">/고객명/영업 상태</span></div>
<div id="second_row"><div id="acc_asset" style="font-size:30px">나의 누적 금액<br><b style="font-size:54px">10,000,000원</b></div><div><p style="padding-left:10px">진행 중인<br>영업 정보</p></div></div>
<table>
    <tr><td>마이페이지</td><td>공지 사항</td><td>영업의 팁</td><td>자유 게시판</td></tr>
    <tr><td>영업 수익 조회</td><td>영업 정보 등록</td><td>영업 정보 확인</td><td>출근 신청</td></tr>
</table>

<div id="info">
    <div class="circle" id="orange" ><div class="inner-circle" id="orange1" style="font:25px bolder"><strong>휘뚜루마뚜루</strong></div></div>
    <div class="circle" id="purple"><div class="inner-circle" id="purple1" style="font:25px bolder"><strong>휘뚜루휘뚜루</strong></div></div>
    <div class="circle" id="blue"><div class="inner-circle" id="blue1" style="font:25px bolder"><strong>마뚜루마뚜루</strong></div></div>
</div>

<div id="info1">
    <div><strong>등록된 정보</strong></div>
    <div><strong>누적 계약금</strong></div>
    <div><strong>영업사원 수</strong></div>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";
    }
</script>

</body>
</html>


