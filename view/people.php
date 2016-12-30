<?php
    include 'htmlrender/htmlrender.php';
    $obj = new HTMLrender;
    $obj->openHTML();
    $obj->header();
    $obj->openMain();
?>
<style>
th{
    padding: 10px;
}
td{
    padding:10px;
}
</style>
<script>
$(document).ready(function(){
    function goToByScroll(id){
     id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
    }

    function clearbtnone(){
        $("#btnonecontainer .btn").removeClass("btn-info");
        $("#btnonecontainer .btn").addClass("btn-success");
        $("#fac").fadeOut();
        $("#staff").fadeOut();
        $("#ugs").fadeOut();
        $("#pgs").fadeOut();
        $("#phds").fadeOut();
    }
    function clearbtntwo(btnset){
        $(btnset+" .btn").removeClass("btn-info");
        $(btnset+" .btn").addClass("btn-success");
        if(btnset=="#ugs"){
        $("#ugs div").fadeOut();}
    }
    $("#btnonecontainer .btn").click(function(){
        clearbtnone();
        $(this).removeClass("btn-success");
        $(this).addClass("btn-info");
        var idname=$(this).attr("placeholder");
        $("#"+idname).fadeIn();
        goToByScroll("hrule1"); 
    });
    $("#ugs .btn").click(function(){
        clearbtntwo("#ugs");
        $(this).removeClass("btn-success");
        $(this).addClass("btn-info");
        var idname=$(this).text();
        $("#"+idname).fadeIn();
        goToByScroll("hrule2"); 
    });
});
</script>
<!-- Structure of people
#btnonecontainer:all buttons for category of people
For each category: there is one #div
#fac,#staff,#ugs,#pgs,#phds
most of the above have anchors for batch
then there is #[batchnumber] inside which there is a table -->
                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">People</h1><!-- 
                        <h5>Written by <a href="">Name</a>, 30.04.2016</h5> -->

                       <div id="btnonecontainer">
                            <a class="btn btn-success" placeholder="fac" href="#">Faculty</a>
                            <a class="btn btn-success" placeholder="staff"  href="#">Staff</a><br>
                            <a class="btn btn-info" placeholder="ugs" href="#">UG Students</a>
                            <a class="btn btn-success" placeholder="pgs" href="#">PG Students</a>
                            <a class="btn btn-success " placeholder="phds" href="#">Ph.D Students</a>
                        </div>

                        <!--"Read more" button-->
                        <!-- <button class="btn btn-primary">Read more</button> -->
                        <hr id="hrule1">
                       <div id="fac">
                           
                       </div>
                        

                        <div id="staff">
                            
                        </div>


                        <div id="ugs" style="">
                            <a class="btn btn-success" href="#">2016</a>
                            <a class="btn btn-info" href="#">2015</a><br>
                            <a class="btn btn-success" href="#">2014</a>
                            <a class="btn btn-success" href="#">2013</a>
                            <a class="btn btn-success" href="#">2012</a>
                            <a class="btn btn-success" href="#">2011</a>
                            <hr width="60%" id="hrule2">
                            <div id="2016" style="display: none">
                                <!-- 2016 table here -->
                            </div>
                            <div id="2015" style="">
                            <table style=" padding:10px;" border="0" cellspacing="0" width="100%" cols="3">
<tbody>
<tr>
<th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Name</th> <th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Roll No.</th>
</tr>
<tr>
<td>Abhishek&nbsp;</td>
<td>1501CS01</td>
</tr>
<tr>
<td>Abhishek Agrawal</td>
<td>1501CS02</td>
</tr>
<tr>
<td>Abhishek Kumar</td>
<td>1501CS03</td>
</tr>
<tr>
<td>Ajay Deshmukh</td>
<td>1501CS04</td>
</tr>
<tr>
<td>Anand Raj</td>
<td>1501CS06</td>
</tr>
<tr>
<td>Ananda Mazumder</td>
<td>1501CS07</td>
</tr>
<tr>
<td>Anupam Singhal</td>
<td>1501CS08</td>
</tr>
<tr>
<td>Arinjaya Khare</td>
<td>1501CS09</td>
</tr>
<tr>
<td>Ashish Raj</td>
<td>1501CS10</td>
</tr>
<tr>
<td>Ashutosh Drolia</td>
<td>1501CS11</td>
</tr>
<tr>
<td>Ashutosh Dubey</td>
<td>1501CS12</td>
</tr>
<tr>
<td>Ashutosh Kumar</td>
<td>1501CS13</td>
</tr>
<tr>
<td>Avinash Kumar</td>
<td>1501CS14</td>
</tr>
<tr>
<td>Ayush Mishra</td>
<td>1501CS15</td>
</tr>
<tr>
<td>Ayush Sharma</td>
<td>1501CS16</td>
</tr>
<tr>
<td>B.Sandeep Srivastav</td>
<td>1501CS17</td>
</tr>
<tr>
<td>Chirag Wadhera</td>
<td>1501CS18</td>
</tr>
<tr>
<td>Dasaradhi Chandra Vadhan</td>
<td>1501CS19</td>
</tr>
<tr>
<td>Deepak Verma</td>
<td>1501CS20</td>
</tr>
<tr>
<td>Himanshu Barua</td>
<td>1501CS21</td>
</tr>
<tr>
<td>Jai Tatia</td>
<td>1501CS22</td>
</tr>
<tr>
<td>Karanam Mahidhar</td>
<td>1501CS23</td>
</tr>
<tr>
<td>Korra Ravinder</td>
<td>1501CS24</td>
</tr>
<tr>
<td>Kshitij Susheel Jauhri</td>
<td>1501CS25</td>
</tr>
<tr>
<td>Kulkarni Malhar Sanjay</td>
<td>1501CS26</td>
</tr>
<tr>
<td>Lavudya Santhosh Kumar</td>
<td>1501CS27</td>
</tr>
<tr>
<td>Moolchandra Mridul</td>
<td>1501CS28</td>
</tr>
<tr>
<td>Nabeel Qaiser</td>
<td>1501CS29</td>
</tr>
<tr>
<td>Nerella Jona Solomon</td>
<td>1501CS30</td>
</tr>
<tr>
<td>Pedgaonkar Rushikesh Shamsundar</td>
<td>1501CS31</td>
</tr>
<tr>
<td>Pradeep Kumar</td>
<td>1501CS32</td>
</tr>
<tr>
<td>Pranav Mutharia</td>
<td>1501CS33</td>
</tr>
<tr>
<td>Praveen Singh Dhaked</td>
<td>1501CS34</td>
</tr>
<tr>
<td>Raghav Jindal</td>
<td>1501CS35</td>
</tr>
<tr>
<td>Rijul Dhir</td>
<td>1501CS36</td>
</tr>
<tr>
<td>Saharsh Singh</td>
<td>1501CS37</td>
</tr>
<tr>
<td>Sahil Mansoori</td>
<td>1501CS38</td>
</tr>
<tr>
<td>Sahil Sharma</td>
<td>1501CS39</td>
</tr>
<tr>
<td>Saikat Sarkar</td>
<td>1501CS40</td>
</tr>
<tr>
<td>Shinku&nbsp;</td>
<td>1501CS41</td>
</tr>
<tr>
<td>Skand Gupta</td>
<td>1501CS42</td>
</tr>
<tr>
<td>Suvom Das</td>
<td>1501CS43</td>
</tr>
<tr>
<td>Syed Arbaaz Qureshi</td>
<td>1501CS44</td>
</tr>
<tr>
<td>Thatiparthi Chaithanya Reddy</td>
<td>1501CS45</td>
</tr>
<tr>
<td>Unnikrishnan.A.S&nbsp;</td>
<td>1501CS46</td>
</tr>
<tr>
<td>Vaibhav Sisodiya</td>
<td>1501CS47</td>
</tr>
<tr>
<td>Varun Garg</td>
<td>1501CS48</td>
</tr>
<tr>
<td>Vijay Kumar</td>
<td>1501CS49</td>
</tr>
<tr>
<td>Yogendra Singh Idapachi</td>
<td>1501CS50</td>
</tr>
</tbody>
</table></div>
<div id="2014" style="display: none">
<table border="0" cellspacing="0" width="100%" cols="3">
<tbody>
<tr>
<th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Name</th> <th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Roll No.</th>
</tr>
<tr>
<td valign="bottom" width="331">ABHINAY   PALADUGU</td>
<td valign="bottom" width="76">1401CS01</td>
</tr>
<tr>
<td valign="bottom" width="331">ABHISHEK   JAISWAL</td>
<td valign="bottom" width="76">1401CS02</td>
</tr>
<tr>
<td valign="bottom" width="331">AMAN   PRAKASH</td>
<td valign="bottom" width="76">1401CS04</td>
</tr>
<tr>
<td valign="bottom" width="331">AWANISH   KUMAR DAS</td>
<td valign="bottom" width="76">1401CS05</td>
</tr>
<tr>
<td valign="bottom" width="331">BADETI   SATHYAPRAKASH</td>
<td valign="bottom" width="76">1401CS06</td>
</tr>
<tr>
<td valign="bottom" width="331">BHUKYA   KOUSHIK RAJ</td>
<td valign="bottom" width="76">1401CS07</td>
</tr>
<tr>
<td valign="bottom" width="331">BORA   RAGHU RAM REDDY</td>
<td valign="bottom" width="76">1401CS08</td>
</tr>
<tr>
<td valign="bottom" width="331">BORA   UDAY</td>
<td valign="bottom" width="76">1401CS09</td>
</tr>
<tr>
<td valign="bottom" width="331">BOREDDY   VISHNUKANTH REDDY</td>
<td valign="bottom" width="76">1401CS10</td>
</tr>
<tr>
<td valign="bottom" width="331">BUSIREDDY   GANESH REDDY</td>
<td valign="bottom" width="76">1401CS11</td>
</tr>
<tr>
<td valign="bottom" width="331">CHINNAPUREDDY   VINILESWAR REDDY</td>
<td valign="bottom" width="76">1401CS12</td>
</tr>
<tr>
<td valign="bottom" width="331">CHIRAG   SONI</td>
<td valign="bottom" width="76">1401CS13</td>
</tr>
<tr>
<td valign="bottom" width="331">EDITHAL   S S VIGNESH</td>
<td valign="bottom" width="76">1401CS14</td>
</tr>
<tr>
<td valign="bottom" width="331">GAGAN   KUMAR</td>
<td valign="bottom" width="76">1401CS15</td>
</tr>
<tr>
<td valign="bottom" width="331">GENOM   LEGO</td>
<td valign="bottom" width="76">1401CS16</td>
</tr>
<tr>
<td valign="bottom" width="331">GOPAL   KUMAR</td>
<td valign="bottom" width="76">1401CS17</td>
</tr>
<tr>
<td valign="bottom" width="331">HINGE   MITHILESH SUSHEEL</td>
<td valign="bottom" width="76">1401CS18</td>
</tr>
<tr>
<td valign="bottom" width="331">JITENDRA   KUMAR</td>
<td valign="bottom" width="76">1401CS19</td>
</tr>
<tr>
<td valign="bottom" width="331">KAVURI   KAVYA</td>
<td valign="bottom" width="76">1401CS20</td>
</tr>
<tr>
<td valign="bottom" width="331">KONDA   TAPASYA</td>
<td valign="bottom" width="76">1401CS21</td>
</tr>
<tr>
<td valign="bottom" width="331">LAXMAN   KUMAR PRABHAKAR</td>
<td valign="bottom" width="76">1401CS22</td>
</tr>
<tr>
<td valign="bottom" width="331">MADDU   JEEVAN SURYA</td>
<td valign="bottom" width="76">1401CS24</td>
</tr>
<tr>
<td valign="bottom" width="331">MAYANK   GOYAL</td>
<td valign="bottom" width="76">1401CS25</td>
</tr>
<tr>
<td valign="bottom" width="331">MIRYALA   SAISREE REDDY</td>
<td valign="bottom" width="76">1401CS26</td>
</tr>
<tr>
<td valign="bottom" width="331">MRITUNJAY   KUMAR</td>
<td valign="bottom" width="76">1401CS27</td>
</tr>
<tr>
<td valign="bottom" width="331">NAMAN   AGARWAL</td>
<td valign="bottom" width="76">1401CS28</td>
</tr>
<tr>
<td valign="bottom" width="331">NEWTON   KUMAR</td>
<td valign="bottom" width="76">1401CS29</td>
</tr>
<tr>
<td valign="bottom" width="331">PATIL   SHREYAS SUDESH</td>
<td valign="bottom" width="76">1401CS30</td>
</tr>
<tr>
<td valign="bottom" width="331">POGIRI   VENKATA SAI CHAKRADHAR</td>
<td valign="bottom" width="76">1401CS31</td>
</tr>
<tr>
<td valign="bottom" width="331">POOJARI   VENKATESH</td>
<td valign="bottom" width="76">1401CS32</td>
</tr>
<tr>
<td valign="bottom" width="331">PRALAY   RAMTEKE</td>
<td valign="bottom" width="76">1401CS33</td>
</tr>
<tr>
<td valign="bottom" width="331">PRANJALI   KOKARE</td>
<td valign="bottom" width="76">1401CS34</td>
</tr>
<tr>
<td valign="bottom" width="331">PRASHANT</td>
<td valign="bottom" width="76">1401CS35</td>
</tr>
<tr>
<td valign="bottom" width="331">PRATEEK   SHARMA</td>
<td valign="bottom" width="76">1401CS36</td>
</tr>
<tr>
<td valign="bottom" width="331">PRINCE   RAHEJA</td>
<td valign="bottom" width="76">1401CS37</td>
</tr>
<tr>
<td valign="bottom" width="331">RAJDEEP   GUPTA</td>
<td valign="bottom" width="76">1401CS38</td>
</tr>
<tr>
<td valign="bottom" width="331">RAPETI   SUBHANG</td>
<td valign="bottom" width="76">1401CS39</td>
</tr>
<tr>
<td valign="bottom" width="331">ROHAN   RATHI</td>
<td valign="bottom" width="76">1401CS40</td>
</tr>
<tr>
<td valign="bottom" width="331">S   SUBRAMANIYAM</td>
<td valign="bottom" width="76">1401CS41</td>
</tr>
<tr>
<td valign="bottom" width="331">SANTE   KUSHAL SANTHOSH</td>
<td valign="bottom" width="76">1401CS42</td>
</tr>
<tr>
<td valign="bottom" width="331">SHENDURWADKAR   DNYANESHWAR DIGAMBARRAO</td>
<td valign="bottom" width="76">1401CS43</td>
</tr>
<tr>
<td valign="bottom" width="331">SHIFONA   GARG</td>
<td valign="bottom" width="76">1401CS44</td>
</tr>
<tr>
<td valign="bottom" width="331">SHUBHAM   KUMAR VERMA</td>
<td valign="bottom" width="76">1401CS45</td>
</tr>
<tr>
<td valign="bottom" width="331">SUSHANT   KUMAR</td>
<td valign="bottom" width="76">1401CS46</td>
</tr>
<tr>
<td valign="bottom" width="331">TANMAY   DAS</td>
<td valign="bottom" width="76">1401CS47</td>
</tr>
<tr>
<td valign="bottom" width="331">VIPIN   MAVI</td>
<td valign="bottom" width="76">1401CS48</td>
</tr>
<tr>
<td valign="bottom" width="331">VISHAL   SOLANKI</td>
<td valign="bottom" width="76">1401CS49</td>
</tr>
<tr>
<td valign="bottom" width="331">ANUPAM DAS</td>
<td valign="bottom" width="76">1401CS52</td>
</tr>
</tbody>
</table>
</div>
<div id="2013" style="display: none">
<table border="0" cellspacing="0" width="100%" cols="3">
<tbody>
<tr>
<th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Name</th> <th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Roll No.</th>
</tr>
<tr>
<td align="left" valign="top">ABHISHEK KUMAR TIWARI</td>
<td align="left" valign="top">1301CS01</td>
</tr>
<tr>
<td align="left" valign="top">ADITYA GUPTA</td>
<td align="left" valign="top">1301CS02</td>
</tr>
<tr>
<td align="left" valign="top">ADITYA GUPTA</td>
<td align="left" valign="top">1301CS03</td>
</tr>
<tr>
<td align="left" valign="top">AGNI BESH CHAUHAN</td>
<td align="left" valign="top">1301CS04</td>
</tr>
<tr>
<td align="left" valign="top">AKSHAY MOHAN</td>
<td align="left" valign="top">1301CS05</td>
</tr>
<tr>
<td align="left" valign="top">ALOK KUMAR</td>
<td align="left" valign="top">1301CS06</td>
</tr>
<tr>
<td align="left" valign="top">ALOK PATWAL</td>
<td align="left" valign="top">1301CS07</td>
</tr>
<tr>
<td align="left" valign="top">ANAND KUMAR</td>
<td align="left" valign="top">1301CS08</td>
</tr>
<tr>
<td align="left" valign="top">ANISH RAWEL SOY</td>
<td align="left" valign="top">1301CS09</td>
</tr>
<tr>
<td align="left" valign="top">ANKIT KUMAR</td>
<td align="left" valign="top">1301CS10</td>
</tr>
<tr>
<td align="left" valign="top">ANUSHRUT S HANDE</td>
<td align="left" valign="top">1301CS11</td>
</tr>
<tr>
<td align="left" valign="top">ARINDAM BANERJEE</td>
<td align="left" valign="top">1301CS12</td>
</tr>
<tr>
<td align="left" valign="top">ASHUTOSH KUMAR TRIPATHI</td>
<td align="left" valign="top">1301CS13</td>
</tr>
<tr>
<td align="left" valign="top">BHOYAR ASHWIN ASHOK</td>
<td align="left" valign="top">1301CS14</td>
</tr>
<tr>
<td align="left" valign="top">DHRUV JHORAR</td>
<td align="left" valign="top">1301CS15</td>
</tr>
<tr>
<td align="left" valign="top">DHRUV UPADHYAY</td>
<td align="left" valign="top">1301CS16</td>
</tr>
<tr>
<td align="left" valign="top">DON KURIAN DENNIS</td>
<td align="left" valign="top">1301CS17</td>
</tr>
<tr>
<td align="left" valign="top">GANNI SRI SANJEEVINI DEVI</td>
<td align="left" valign="top">1301CS18</td>
</tr>
<tr>
<td align="left" valign="top">HARSHIT</td>
<td align="left" valign="top">1301CS19</td>
</tr>
<tr>
<td align="left" valign="top">HIMANSHU GARG</td>
<td align="left" valign="top">1301CS20</td>
</tr>
<tr>
<td align="left" valign="top">HIMANSHU PARMAR</td>
<td align="left" valign="top">1301CS21</td>
</tr>
<tr>
<td align="left" valign="top">K TEJRAM</td>
<td align="left" valign="top">1301CS22</td>
</tr>
<tr>
<td align="left" valign="top">KALAHASTI VENKATA ABHISHEKH</td>
<td align="left" valign="top">1301CS23</td>
</tr>
<tr>
<td align="left" valign="top">KULDEEP MEENA</td>
<td align="left" valign="top">1301CS24</td>
</tr>
<tr>
<td align="left" valign="top">KUNTAL DAS</td>
<td align="left" valign="top">1301CS25</td>
</tr>
<tr>
<td align="left" valign="top">M. ASHRIT KUMAR</td>
<td align="left" valign="top">1301CS26</td>
</tr>
<tr>
<td align="left" valign="top">MANU KUMAR SHARMA</td>
<td align="left" valign="top">1301CS27</td>
</tr>
<tr>
<td align="left" valign="top">MAYANK ARYA</td>
<td align="left" valign="top">1301CS28</td>
</tr>
<tr>
<td align="left" valign="top">NAVEEN KUMAR M G</td>
<td align="left" valign="top">1301CS29</td>
</tr>
<tr>
<td align="left" valign="top">PADMA RAM MEG</td>
<td align="left" valign="top">1301CS30</td>
</tr>
<tr>
<td align="left" valign="top">PALLAMPARTHI SAI SHANDEEP REDDY</td>
<td align="left" valign="top">1301CS31</td>
</tr>
<tr>
<td align="left" valign="top">PARIKSHIT SARASWAT</td>
<td align="left" valign="top">1301CS32</td>
</tr>
<tr>
<td align="left" valign="top">PRATEEK MOHANTY</td>
<td align="left" valign="top">1301CS33</td>
</tr>
<tr>
<td align="left" valign="top">RAHUL ARYA</td>
<td align="left" valign="top">1301CS34</td>
</tr>
<tr>
<td align="left" valign="top">RAJKISHOR RANJAN KUMAR</td>
<td align="left" valign="top">1301CS35</td>
</tr>
<tr>
<td align="left" valign="top">RAMAYAN KUMAR</td>
<td align="left" valign="top">1301CS36</td>
</tr>
<tr>
<td align="left" valign="top">RAVI SONAM</td>
<td align="left" valign="top">1301CS37</td>
</tr>
<tr>
<td align="left" valign="top">RITIK PRASAD MATHUR</td>
<td align="left" valign="top">1301CS38</td>
</tr>
<tr>
<td align="left" valign="top">SAGAR KUMAR VERMA</td>
<td align="left" valign="top">1301CS39</td>
</tr>
<tr>
<td align="left" valign="top">SANDIP MANDAL</td>
<td align="left" valign="top">1301CS40</td>
</tr>
<tr>
<td align="left" valign="top">SHEIK SAMEERUDDIN</td>
<td align="left" valign="top">1301CS41</td>
</tr>
<tr>
<td align="left" valign="top">SUMIT ASTHANA</td>
<td align="left" valign="top">1301CS42</td>
</tr>
<tr>
<td align="left" valign="top">SUNNY NARAYAN</td>
<td align="left" valign="top">1301CS43</td>
</tr>
<tr>
<td align="left" valign="top">VINAY KUMAR CHAUDHARY</td>
<td align="left" valign="top">1301CS44</td>
</tr>
<tr>
<td align="left" valign="top">VINAY KUMAR YADAV</td>
<td align="left" valign="top">1301CS45</td>
</tr>
<tr>
<td align="left" valign="top">VISHAL CHAUHAN</td>
<td align="left" valign="top">1301CS46</td>
</tr>
<tr>
<td align="left" valign="top">VUPPU SAI TEJA</td>
<td align="left" valign="top">1301CS47</td>
</tr>
</tbody>
</table>
</div>
<div id="2012" style="display: none">
<table border="0" cellspacing="0" width="100%" cols="3">
<tbody>
<tr>
<th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Name</th> <th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Roll No.</th>
</tr>
<tr>
<td align="left" valign="top">AJIT MAHESH SAHU</td>
<td align="left" valign="top">1201CS01</td>
</tr>
<tr>
<td align="left" valign="top">ANKIT LAMBA</td>
<td align="left" valign="top">1201CS02</td>
</tr>
<tr>
<td align="left" valign="top">ANUBHAV JOSHI</td>
<td align="left" valign="top">1201CS03</td>
</tr>
<tr>
<td align="left" valign="top">ANUSHA KANDAVALLI</td>
<td align="left" valign="top">1201CS04</td>
</tr>
<tr>
<td align="left" valign="top">ANWESH SINHA RAY</td>
<td align="left" valign="top">1201CS05</td>
</tr>
<tr>
<td align="left" valign="top">ASHISH BHUKER</td>
<td align="left" valign="top">1201CS06</td>
</tr>
<tr>
<td align="left" valign="top">AYUSH KUMAR</td>
<td align="left" valign="top">1201CS07</td>
</tr>
<tr>
<td align="left" valign="top">BHOOKYA VINAYAK</td>
<td align="left" valign="top">1201CS08</td>
</tr>
<tr>
<td align="left" valign="top">CHERUPALLY SAIRAM</td>
<td align="left" valign="top">1201CS09</td>
</tr>
<tr>
<td align="left" valign="top">DIVYANSH SINGH</td>
<td align="left" valign="top">1201CS10</td>
</tr>
<tr>
<td align="left" valign="top">DONTHIRI SASHIDHAR</td>
<td align="left" valign="top">1201CS11</td>
</tr>
<tr>
<td align="left" valign="top">DOSAPATI VINOD</td>
<td align="left" valign="top">1201CS12</td>
</tr>
<tr>
<td align="left" valign="top">DUVVURU YASWANTH</td>
<td align="left" valign="top">1201CS13</td>
</tr>
<tr>
<td align="left" valign="top">GURPINDER SINGH RANDHAWA</td>
<td align="left" valign="top">1201CS14</td>
</tr>
<tr>
<td align="left" valign="top">HUKAMI MEENA</td>
<td align="left" valign="top">1201CS15</td>
</tr>
<tr>
<td align="left" valign="top">HUMA FARHEEN</td>
<td align="left" valign="top">1201CS16</td>
</tr>
<tr>
<td align="left" valign="top">K RISHITA</td>
<td align="left" valign="top">1201CS17</td>
</tr>
<tr>
<td align="left" valign="top">KUMAR SAURAV SINHA</td>
<td align="left" valign="top">1201CS18</td>
</tr>
<tr>
<td align="left" valign="top">KUNAL SHUBHAM</td>
<td align="left" valign="top">1201CS19</td>
</tr>
<tr>
<td align="left" valign="top">MANVEE</td>
<td align="left" valign="top">1201CS20</td>
</tr>
<tr>
<td align="left" valign="top">MUKESH MEENA</td>
<td align="left" valign="top">1201CS21</td>
</tr>
<tr>
<td align="left" valign="top">NARESH</td>
<td align="left" valign="top">1201CS22</td>
</tr>
<tr>
<td align="left" valign="top">NERELLA HARSHINI</td>
<td align="left" valign="top">1201CS23</td>
</tr>
<tr>
<td align="left" valign="top">OJAS MANGALVEDHEKAR</td>
<td align="left" valign="top">1201CS24</td>
</tr>
<tr>
<td align="left" valign="top">POTDAR RUSHIKESH RAVINDRA</td>
<td align="left" valign="top">1201CS25</td>
</tr>
<tr>
<td align="left" valign="top">PRASAD AYUSH SURENDRA</td>
<td align="left" valign="top">1201CS26</td>
</tr>
<tr>
<td align="left" valign="top">RANAT GHOSH</td>
<td align="left" valign="top">1201CS27</td>
</tr>
<tr>
<td align="left" valign="top">ROHAN GUPTA</td>
<td align="left" valign="top">1201CS28</td>
</tr>
<tr>
<td align="left" valign="top">SACHIN JANGIR</td>
<td align="left" valign="top">1201CS29</td>
</tr>
<tr>
<td align="left" valign="top">SARBPREET</td>
<td align="left" valign="top">1201CS30</td>
</tr>
<tr>
<td align="left" valign="top">SATYANSHU SHUKLA</td>
<td align="left" valign="top">1201CS31</td>
</tr>
<tr>
<td align="left" valign="top">SHASHANK SINGH</td>
<td align="left" valign="top">1201CS32</td>
</tr>
<tr>
<td align="left" valign="top">SOURABH BHAGAT</td>
<td align="left" valign="top">1201CS33</td>
</tr>
<tr>
<td align="left" valign="top">UTKARSH GUPTA</td>
<td align="left" valign="top">1201CS34</td>
</tr>
<tr>
<td align="left" valign="top">V MANISH KUMAR</td>
<td align="left" valign="top">1201CS35</td>
</tr>
<tr>
<td align="left" valign="top">VAIBHAV PANDEY</td>
<td align="left" valign="top">1201CS36</td>
</tr>
<tr>
<td align="left" valign="top">VIKAS JINDAL</td>
<td align="left" valign="top">1201CS37</td>
</tr>
<tr>
<td align="left" valign="top">VINAY KUMAR</td>
<td align="left" valign="top">1201CS38</td>
</tr>
<tr>
<td align="left" valign="top">YOGESH PATEL</td>
<td align="left" valign="top">1201CS39</td>
</tr>
</tbody>
</table>
</div>
<div id="2011" style="display: none">
<table border="0" cellspacing="0" width="100%" cols="3">
<tbody>
<tr>
<th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Name</th> <th bgcolor="#4f5457" width="30%" style="color: #ffffff;">Roll No.</th>
</tr>
<tr>
<td align="left" valign="top">Achintya Bhatnagar</td>
<td align="left" valign="top">1101CS01</td>
</tr>
<tr>
<td align="left" valign="top">Akash Garg</td>
<td align="left" valign="top">1101CS02</td>
</tr>
<tr>
<td align="left" valign="top">Akhil Sehrawat</td>
<td align="left" valign="top">1101CS03</td>
</tr>
<tr>
<td align="left" valign="top">Akshay Verma</td>
<td align="left" valign="top">1101CS04</td>
</tr>
<tr>
<td align="left" valign="top">Amar Sharma</td>
<td align="left" valign="top">1101CS05</td>
</tr>
<tr>
<td align="left" valign="top">Ankish Gupta</td>
<td align="left" valign="top">1101CS06</td>
</tr>
<tr>
<td align="left" valign="top">Anupam Jena</td>
<td align="left" valign="top">1101CS07</td>
</tr>
<tr>
<td align="left" valign="top">Arun Pandey</td>
<td align="left" valign="top">1101CS08</td>
</tr>
<tr>
<td align="left" valign="top">Ayush Jain</td>
<td align="left" valign="top">1101CS09</td>
</tr>
<tr>
<td align="left" valign="top">Balaji Krishnan</td>
<td align="left" valign="top">1101CS10</td>
</tr>
<tr>
<td align="left" valign="top">Chandra Mohana Rao Pinninti</td>
<td align="left" valign="top">1101CS11</td>
</tr>
<tr>
<td align="left" valign="top">Chouti Roseleen</td>
<td align="left" valign="top">1101CS12</td>
</tr>
<tr>
<td align="left" valign="top">Devender Verma</td>
<td align="left" valign="top">1101CS13</td>
</tr>
<tr>
<td align="left" valign="top">Dheerendra Kumar Meena</td>
<td align="left" valign="top">1101CS14</td>
</tr>
<tr>
<td align="left" valign="top">Divyansh Guwalani</td>
<td align="left" valign="top">1101CS15</td>
</tr>
<tr>
<td align="left" valign="top">Dontaraboina Manasa Veena</td>
<td align="left" valign="top">1101CS16</td>
</tr>
<tr>
<td align="left" valign="top">Gaurav Suman</td>
<td align="left" valign="top">1101CS17</td>
</tr>
<tr>
<td align="left" valign="top">Goruputi Bilahari</td>
<td align="left" valign="top">1101CS18</td>
</tr>
<tr>
<td align="left" valign="top">Kandula Srikanth Reddy</td>
<td align="left" valign="top">1101CS19</td>
</tr>
<tr>
<td align="left" valign="top">Karan Kumar</td>
<td align="left" valign="top">1101CS20</td>
</tr>
<tr>
<td align="left" valign="top">Karthik Gopalakrishnan</td>
<td align="left" valign="top">1101CS21</td>
</tr>
<tr>
<td align="left" valign="top">Kuldeep Kaushik</td>
<td align="left" valign="top">1101CS22</td>
</tr>
<tr>
<td align="left" valign="top">Kundan Kumar</td>
<td align="left" valign="top">1101CS23</td>
</tr>
<tr>
<td align="left" valign="top">Narava Chandra Kiran</td>
<td align="left" valign="top">1101CS24</td>
</tr>
<tr>
<td align="left" valign="top">Prabhakaran S</td>
<td align="left" valign="top">1101CS25</td>
</tr>
<tr>
<td align="left" valign="top">Prashant Shaw</td>
<td align="left" valign="top">1101CS26</td>
</tr>
<tr>
<td align="left" valign="top">Rahul Kumar</td>
<td align="left" valign="top">1101CS27</td>
</tr>
<tr>
<td align="left" valign="top">Rajesh Shedolkar</td>
<td align="left" valign="top">1101CS28</td>
</tr>
<tr>
<td align="left" valign="top">Sachin Kumar</td>
<td align="left" valign="top">1101CS29</td>
</tr>
<tr>
<td align="left" valign="top">Sarvagya Kumar</td>
<td align="left" valign="top">1101CS30</td>
</tr>
<tr>
<td align="left" valign="top">Saswat Raj</td>
<td align="left" valign="top">1101CS31</td>
</tr>
<tr>
<td align="left" valign="top">Savaram Naga Hitesh</td>
<td align="left" valign="top">1101CS32</td>
</tr>
<tr>
<td align="left" valign="top">Shahil Pusarla</td>
<td align="left" valign="top">1101CS33</td>
</tr>
<tr>
<td align="left" valign="top">Tapender Singh Yadav</td>
<td align="left" valign="top">1101CS34</td>
</tr>
<tr>
<td align="left" valign="top">Tarun Kumar Bhukya</td>
<td align="left" valign="top">1101CS35</td>
</tr>
<tr>
<td align="left" valign="top">Tushar Chavhan</td>
<td align="left" valign="top">1101CS36</td>
</tr>
<tr>
<td align="left" valign="top">Vadlapatla Sneha</td>
<td align="left" valign="top">1101CS37</td>
</tr>
<tr>
<td align="left" valign="top">Vamsi Krishna Akella</td>
<td align="left" valign="top">1101CS38</td>
</tr>
<tr>
<td align="left" valign="top">Kaushik Nandan</td>
<td align="left" valign="top">1101CS40</td>
</tr>
</tbody>
</table>
</div>
            </div>


                    </div>
                    <!--/.Post-->
					<hr>
                    
<?php 
    $obj->mainlClose();
    $obj->sbopen();
    $obj->loginwidget();
    $obj->tickerwidget();
    $obj->quicklinks();
    $obj->sideclose();
    $obj->footer();
?>