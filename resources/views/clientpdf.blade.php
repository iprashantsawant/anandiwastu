<html>

<header>
        <meta charset="utf-8">
        <style>
       @font-face {
            font-family: 'Mangal';
            src: url("{{ storage_path('fonts/mangal.ttf') }}") format("truetype");
            font-weight: 300; 
            font-style: normal; 
        }
        @font-face {
            font-family: 'MangalBold';
            src: url("{{ storage_path('fonts/mangalb.ttf') }}") format("truetype");
        }
        .avtitle{
            font-family: "MangalBold";
            text-align: center;
            text-decoration: underline;
        }
       p,span{font-family: 'Mangal'; font-size: 14px; margin: 0; }
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding:4px;
            word-wrap: break-word;
        }
        .logo{
                height:70px;
                margin:4px 8px 4px 8px;
        }
        .photo{
                height:100px;
                margin:4px 8px 4px 8px;
        }
        .page-break {
            page-break-after: always
        }
        .avrules{
            width: 100%;
        }
        .avsign{
            float: right;
            height: 100px;
        }
    </style>
</header>

<body>
    
    <table style="width:100%;margin-bottom:10px" >
            <tr >
            
                <td style="width:25%;text-align:center"> <img class="logo" src="{{public_path('imgs/logo.png')}}"></td>
                <td style="width:50%;text-align:center">
                                       <b>ANANDI VASTU</b><br>
                                       <small>“SATYATA” CHANADAN NAGAR, NAGAR ROAD,<br>
                                       PUNE 14</small>
                </td>
                <td style="width:25%;">Doc.No:AV/FO/CRC/01<br>
                                        Ref No.<br>
                                        Eff.Date:23.03.2012<br>
                                        Page No:1/1<br>
                </td>
            </tr>
    </table>
    <table style="width:100%;" >
        <tr >
            <td style="width:20%;"><b>Name</b></td>
            <td style="width:20%;">{{$data->name}}</td>
            <td style="width:20%;">&nbsp;{{is_null($data->name2)?'':$data->name2}}</td>
            <td style="width:20%;">&nbsp;{{is_null($data->name3)?'':$data->name3}}</td>
            <td style="width:20%;">&nbsp;{{is_null($data->name4)?'':$data->name4}}</td>
        </tr>
        <tr>
            <td><b>Date of Birth</b></td>
            <td>{{is_null($data->dob)?'':$data->dob}}</td>
            <td>{{is_null($data->dob2)?'':$data->dob2}}</td>
            <td>{{is_null($data->dob3)?'':$data->dob3}}</td>
            <td>{{is_null($data->dob4)?'':$data->dob4}}</td>
        </tr>
        <tr>
            <td><b>Birth Time</b></td>
            <td>{{is_null($data->tob)?'':$data->tob}}</td>
            <td>{{is_null($data->tob2)?'':$data->tob2}}</td>
            <td>{{is_null($data->tob3)?'':$data->tob3}}</td>
            <td>{{is_null($data->tob4)?'':$data->tob4}}</td>
        </tr>
        <tr>
            <td><b>Birth Place</b></td>
            <td>{{is_null($data->pob)?'':$data->pob}}</td>
            <td>{{is_null($data->pob2)?'':$data->pob2}}</td>
            <td>{{is_null($data->pob3)?'':$data->pob3}}</td>
            <td>{{is_null($data->pob4)?'':$data->pob4}}</td>
        </tr>
        <tr>
            <td><b>Address</b></td>
            <td>{{is_null($data->address)?'':$data->address}}</td>
            <td>{{is_null($data->address2)?'':$data->address2}}</td>
            <td>{{is_null($data->address3)?'':$data->address3}}</td>
            <td>{{is_null($data->address4)?'':$data->address4}}</td>
        </tr>
        <tr>
            <td><b>Contact No</b></td>
            <td>{{is_null($data->mobile)?'':$data->mobile}}</td>
            <td>{{is_null($data->mobile2)?'':$data->mobile2}}</td>
            <td>{{is_null($data->mobile3)?'':$data->mobile3}}</td>
            <td>{{is_null($data->mobile4)?'':$data->mobile4}}</td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td>{{is_null($data->email)?'':$data->email}}</td>
            <td>{{is_null($data->emai2l)?'':$data->email2}}</td>
            <td>{{is_null($data->email3)?'':$data->email3}}</td>
            <td>{{is_null($data->email4)?'':$data->email4}}</td>
        </tr>

    </table>
   
    <!-- <div class="page-break"></div> -->
    <br>
    <br> 
    <!-- <table style="width:100%;margin-bottom:10px" >
            <tr >
                <td style="width:25%;text-align:center"> <img class="logo" src="{{public_path('imgs/logo.png')}}"></td>
                <td style="width:50%;text-align:center">
                                       <b>ANANDI VASTU</b><br>
                                       <small>“SATYATA” CHANADAN NAGAR, NAGAR ROAD,<br>
                                       PUNE 14</small>
                </td>
                <td style="width:25%;">Doc.No:AV/FO/CRC/01<br>
                                        Ref No.<br>
                                        Eff.Date:23.03.2012<br>
                                        Page No:1/1<br>
                </td>
            </tr>
    </table> -->
    <!-- <div class="avtitle">आनंदी वास्तू संस्थेच्या अटी व नियमावली </div> -->
    <!-- <p>
        
        <br>१) कोणत्याही व्यक्तीने अपॉइंटमेंट असल्या शिवाय गुरुजींना भेटण्याचा आग्रह करू नये.
        <br>२) वेळोवेळी व्यवस्थापनाकडून नक्की केलेली फी व वस्तूंचे दर यांची आकारणी केली जाते. त्या बाबतीत विश्वासाने सहकार्य करावे.
        <br>३) ज्योतिषशास्त्र किंवा वास्तुशास्त्र मार्गदर्शन हे आपण दिलेल्या माहितीच्या आधारे ती बरोबर दिली आहे. असे मानून सल्ला दिला जातो. उदा: पत्रिका, जन्मवेळ, जन्मतारीख, जागेचा नकाशा त्यातील दाखवलेल्या दिशा इत्यादी.
        <br>४) आपणाकडून विचारलेल्या सर्व बाबींचे मार्गदर्शन/उत्तर किंवा सांगितलेले उपाय हे गुरुजींनी पुरातन, धर्मशास्त्र ज्योतिषशास्त्र, वास्तुशास्त्र पारंपरिक रीती-परंपरा यांचा केलेला यथोचित अभ्यासाच्या निकशातून तसेच आतापरेंत बऱ्याच ज्योतिषांनी, वास्तुतज्ञांनी घेतलेल्या अनुभव सिद्धी इत्यादींच्या आधारे जास्तीतजास्त शक्यतांचे वर्णन असते त्यामुळे ते सर्वाना सामान अनुभूतिकारक ठरविलच असे कोणतेही विधान आमचे कडून केले जात नाही याची सर्वांनी नोंद घ्यावी.
        <br>५) श्री पिंपळकर गुरुजींच्या मार्गदर्शनामुळे किंवा त्यांनी सुचवलेल्या उपायांमुळे नौकरी मिळणे, संतान प्राप्ती होणे, धनप्राप्ती होणे कोणतेही विधान केले जात नाही. सदर बाबी, म्हणजे आपण विचारलेल्या प्रश्नांची उत्तर व त्या संधर्बातील जास्तीत जास्त शक्यतांचा उललेख असतो आमच्या कडे कोणत्याही आजारांचे औषध दिले जात नाही.
        <br>६) आमच्या कडून पुरवल्या जाणाऱ्या वस्तू या ग्राहकांच्या सोयींसाठी, त्यांच्या मागणी वरूनच प्राचीन शास्त्रात उल्लेख असलेल्या सकारात्मक ऊर्जा निर्माण करणाऱ्या वस्तू या स्वरूपात दिल्या जाता. जास्तीत जास्त काळजी घेऊन उपलब्ध करून दिल्या जातात. त्यामुळे त्यांचा सुद्धा सर्वाना त्यांच्या अपेक्षे नुसारच फायदा होईलच असे कोणतेही विधान आमच्या कडून केले जात नाहीत.
        <br>७) काही संधर्भात उपाय म्हणून सुचवलेल्या वस्तू येथे किंवा अन्य सामुग्री या आमच्या कडे उपलब्ध असतात. याचा अर्थ आमच्या कडूनच घ्याव्यात असा बिलकुल आग्रह नसतो.
        <br>८) आपणाकडून आकारली गेलेली कॉन्स्लटिंग फी हि एक वेळेची एक सीटिंगची आकारली जाते त्यामुळे आपल्या प्रश्नांची दिलेली उत्तरे नीट समजावून घ्यावीत नंतर सदर बाबीत शंकांचे निरसन फोनवर प्रत्यक्ष भेटून पात्रांद्वारे आगर ऑनलाईन केले जात नाही. कारण पत्रिका, जन्मतारखा, नकाशाची प्रत वैगरे रेकॉर्ड आमच्या कडे ठेवले जात नाही.
        <br>९) एकदा आकारलेले फी किंवा वास्तुसाठीची रक्कम हि कोणत्याही कारणास्तव परत केली जाणार नाही, याची कृपया नोंद घ्यावी.
        <br>१०) नियमावली किंवा इतर कोणतीही शंका असल्यास निर्भीड पणे, खुलासा घेऊन पूर्ण आत्म विश्वासाने गुरुजींचे कडून मार्गदर्शन घ्यावे व या बाबतीत/बाबींमुळे भविष्यात होणारे गैरसमज व मनस्ताप टाळावेत.
        <br>११) वर्तवलेले भविष्य अथवा उपाय कोणत्याही प्रकारच्या विद्या, पंथ, धर्म, अंधश्रद्धा यांचे समर्थन करणारे नसून कोणत्याही यंत्र, मंत्र, व वस्तू यांच्या आधारे चमत्कार, भाग्योदय व तत्सम प्रकारांच्या प्रसार करण्याच्या हेतू नाही व तसा कोणताही दावा नाही. वर्तवलेले भविष्य १००% खरे होते असा कोणताही दावा आम्ही व आमची संस्था करत नाही. आपल्याला आंपल्या श्रद्धे नुसार फळ मिळेल.
        <br>१२) धागे-दोरे, अंगार-धुपार, जारण-मरण, जादू-टोणा, लिंबू-नारळ, अशा कोणत्याही गोष्टि आमच्या कडून दिल्या जात नाही'आगर कोणत्याही अंधश्रद्धा पसरवणे या गोष्टींचे समर्पण/मार्गदर्शन/उल्लेख केला जात नाही. ज्योतिष वाक्याच्या आधारे संततीचे लिंग बद्दल / त्या संदर्भातले औषध/मार्गदर्शन किंवा लिंग परीक्षण अशा गोष्टी आम्ही करत नाही आणि तसे आम्ही मार्गदर्शन देत नाही.
        <br>१३) आनंदी वास्तू करिता देण्यात आलेली फी/चार्जेस मला मान्य असून त्या बाबतीत मला पूर्णतः माहिती मिळालेली आहे आणि ते मला १००% मान्य व काबुल आहे.
        
        <br>वरील सर्व नियम व व्यवस्थापक कडील नियमावली मी स्वतः श्री व सौ. {{$data->name}}
        वाचली असून मला सर्व नियम मान्य व कबूल आहेत. तसेच सदरची नियमावली कोणत्याही प्रकारचे नशापाणी न करता शांत डोक्याने पूर्ण नियमावलीला बांधील आहे याची मला जाणीव आहे. आनंदी वास्तू हि पूर्णपणे प्राचीन शास्त्राचा आधार घेऊन मार्गदर्शन करणारी संस्था असून मी माझ्या मनात व कोणतीही गुणांची/फळांची अपेक्षा न ठेवता श्री आनंद पिंपळकर यांच्याकडे मार्गदर्शन घेण्यासाठी आलो/आली आहे.
        <br>
        <br><br>
        <table style="width:100%;border:none" >
            <tr >
                <td style="width:50%;text-align:center;border:none"> 
                    <p>फोटो</p>
                    <img class="photo" src="{{$data->photo}}">
                </td>
                <td style="width:50%;text-align:center;border:none">
                <p>अंगठा</p> 
                <img class="photo" src="{{$data->fingerprint}}"></td>
            </tr>
        </table>
        <span style="float: right;margin-right:250px">सही:</span> <br><br>
        <span  style="float: right;margin-right:250px"> नाव/पत्ता:</span>
        </p> -->
        <img class="avrules" src="{{public_path('imgs/p1.png')}}">
        <img class="avrules" src="{{public_path('imgs/p2.0.png')}}">
        <img class="avrules" src="{{public_path('imgs/p2.1.png')}}">
        <img class="avrules" src="{{public_path('imgs/p2.2.png')}}">
       
        <table style="width:100%;border:none" >
            <tr >
                <td style="width:50%;text-align:center;border:none"> 
                    <p>फोटो</p>
                    <img class="photo" src="{{$data->photo}}">
                </td>
                <td style="width:50%;text-align:center;border:none">
                <p>अंगठा</p> 
                <img class="photo" src="{{$data->fingerprint}}"></td>
            </tr>
        </table>
        <div class="mrow">
        <img class="avsign" src="{{public_path('imgs/p3.png')}}">
        </div>
</body>

</html>