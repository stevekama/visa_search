<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=windows-1256">
    <script type="text/javascript" src="/MOIInternetTheme/js/ruxitagentjs_ICA2dfjqruv_10159190121190724.js" data-dtconfig="app=1fcdae72075d44d9|featureHash=ICA2dfjqruv|vcv=2|rdnt=1|uxrgce=1|bp=2|cuc=17519beq|dpvc=1|lastModification=1603294614890|dtVersion=10159190121190724|tp=500,50,0,1|uxdcw=1500|vs=2|agentUri=/MOIInternetTheme/js/ruxitagentjs_ICA2dfjqruv_10159190121190724.js|reportUrl=/MOIInternetTheme/js/rb_06714fab-00ca-4cd6-92fc-bcce1c6af14e|rid=RID_-1711872966|rpid=-415950253|domain=moi.gov.qa"></script>
    <SCRIPT language="JavaScript" src="../scripts/constants.js?1"></SCRIPT>
    <style>
        .SubTitle {


            font-size: 12pt;
            font-weight: bold;
            color: #000000;
            padding-right: 10px;

        }

        .SubTitleResult {


            font-size: 10pt;
            font-weight: bold;
            color: black;

        }
    </style>
    <link rel=stylesheet type=text/css href="../styles/print.css">
    <TITLE>Print Visa</TITLE>
</HEAD>
<SCRIPT language="JavaScript">
    //var myObj 	= window.dialogArguments;
    var myObj = window.opener.myObj;

    function reverseStr(str) {
        try {
            var splitext = str.split("");
            var revertext = splitext.reverse();
            return revertext.join("");
        } catch (e) {
            return str;
        }
    }

    function fillData() {


        //alert(myObj.myComBirthDateArray[0]); 
        //alert(myObj.myComBirthDateArray[1]);
        //alert(myObj.myComBirthDateArray[2]);  
        //<IMG src="/PermitForm/LinearServlet?BARCODE=<%=barCodeVisaNo%>&BAR_HEIGHT=1&ST=N&TOP_MARGIN=.0&LEFT_MARGIN=.0&WIDTH=300&CODE_TYPE=UCC128&FORMAT=JPEG&na=200&autoSize=False" />

        var htmlResult = "";

        var barCodeStr = myObj.visaNo //reverseStr(myObj.visaNo) ;	

        htmlResult += '<table  border=0 cellSpacing=6 dir=ltr cellPadding=0 align=left width=100% >';
        htmlResult += '<tr><td height=25 colspan=6><IMG src="/.moi_portal_utility/LinearServlet?BARCODE=' + barCodeStr + '&BAR_HEIGHT=1&ST=N&TOP_MARGIN=.0&LEFT_MARGIN=.0&WIDTH=300&CODE_TYPE=UCC128&FORMAT=JPEG&na=200&autoSize=False" /></td></tr>';
        htmlResult += '<tr>';
        htmlResult += '<td width =150 class=\"SubTitle\">';
        htmlResult += 'Visa Number :';
        htmlResult += '</td>';
        htmlResult += '<td width=667 align=left class=\"SubTitleResult\" >';
        htmlResult += myObj.visaNo;
        htmlResult += '</td>';
        htmlResult += '<td width=150 class=\"SubTitle\" nowrap=\"nowrap\">';
        htmlResult += 'Application Number:';
        htmlResult += '</td>';
        htmlResult += '<td width=667 align=left class=\"SubTitleResult\" >';
        htmlResult += myObj.ApplicationNumber;
        htmlResult += '</td>';
        htmlResult += '</tr>';

        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Date of Issue:';
        htmlResult += '</td>';
        htmlResult += '<td  dir=\"ltr\" align=\"left\" class=\"SubTitleResult\" >';
        htmlResult += myObj.visaIssueDate;
        htmlResult += '</td>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\"  nowrap=\"nowrap\">';
        htmlResult += 'Visa Validity :';
        htmlResult += '</td>';
        htmlResult += '<td  dir=\"ltr\" align=\"left\" class=\"SubTitleResult\" >';
        htmlResult += myObj.visaExpiryDate;
        htmlResult += '</td>';
        htmlResult += '</tr>';
        /*
        		htmlResult += '<tr>';
        		htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        		htmlResult += ' مكان الاصدار :' ;	
        		htmlResult += '</td>';
        		htmlResult += '<td  class=\"SubTitleResult\" >';
        		htmlResult += "(?)";
        		htmlResult += '</td>';
        		htmlResult += '</tr>';
         */


        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\" nowrap=\"nowrap\">';

        htmlResult += 'Description of Visa owner :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        htmlResult += myObj.visaEnglishHolder;
        htmlResult += '</td>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Visa Type :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        if (myObj.isHideEmployer == 'false') {
            htmlResult += myObj.EnglishMainVisaType + "-" + myObj.EnglishSubVisaType;
        } else {
            htmlResult += myObj.EnglishMainVisaType
        }
        htmlResult += '</td>';
        htmlResult += '</tr>';

        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Purpose of Visa :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        htmlResult += myObj.visaEnglishPurpose;
        htmlResult += '</td>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\" nowrap=\"nowrap\">';
        htmlResult += 'Duration of Residence:';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        htmlResult += myObj.StayDuration + " - " + myObj.EnglishStayTypeByCode;
        htmlResult += '</td>';
        htmlResult += '</tr>';


        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" dir=ltr class=\"SubTitle\" >';
        htmlResult += 'Name :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" colspan=\"5\" >';
        if (myObj.EnName1 != '') {
            htmlResult += myObj.EnName1 + " " + myObj.EnName2 + " " + myObj.EnName3 + " " + myObj.EnName4 + " " + myObj.EnName5;

            if (myObj.ArName1 != '') {
                htmlResult += '<tr>';
                htmlResult += '<td colspan=\"4\">'
                htmlResult += '<table align=\"right\" dir=ltr><tr>';

                htmlResult += '<td align=\"right\" dir=ltr class=\"SubTitleResult\" colspan=\"5\" >';
                htmlResult += myObj.ArName1 + " " + myObj.ArName2 + " " + myObj.ArName3 + " " + myObj.ArName4 + " " + myObj.ArName5;
                htmlResult += '<td align=\"right\" dir=rtl class=\"SubTitle\" >';
                htmlResult += '  الاســــم :';
                htmlResult += '</td>';
                htmlResult += '</tr></table>';
                htmlResult += '</td>';
                htmlResult += '</tr>';
            }
        } else {
            htmlResult += myObj.ArName1 + " " + myObj.ArName2 + " " + myObj.ArName3 + " " + myObj.ArName4 + " " + myObj.ArName5;
        }
        htmlResult += '</td>';
        htmlResult += '</tr>';



        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Nationality :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        //if( myObj.name0 != ''  )	
        htmlResult += myObj.EnNatDesc;
        //else
        //	htmlResult += myObj.natE ;

        htmlResult += '</td>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Gender :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        htmlResult += myObj.EnglishGender;
        htmlResult += '</td>';
        htmlResult += '</tr>';

        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Passport Number / Type  :';
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        htmlResult += myObj.passportNo + " " + myObj.EnglishPassportType;
        htmlResult += '</td>';
        htmlResult += '<td nowrap align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Passport Validity:';
        htmlResult += '</td>';
        htmlResult += '<td   dir=\"ltr\" align=\"left\"  class=\"SubTitleResult\" >';
        htmlResult += myObj.passportExpDate;
        htmlResult += '</td>';
        htmlResult += '</tr>';

        htmlResult += '<tr>';

        htmlResult += '<td nowrap align=\"left\" class=\"SubTitle\">';
        htmlResult += 'Date of Birth:';
        htmlResult += '</td>';
        htmlResult += '<td dir=\"ltr\" align=\"left\" class=\"SubTitleResult\" >';
        htmlResult += myObj.birthDate;
        htmlResult += '</td>';

        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        if (myObj.isHideEmployer == 'false') {
            htmlResult += 'Profession :';
        }
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" >';
        if (myObj.isHideEmployer == 'false') {
            htmlResult += myObj.EngProfession;
        }
        htmlResult += '</td>';

        htmlResult += '</tr>';

        htmlResult += '<tr>';
        htmlResult += '<td align=\"left\" class=\"SubTitle\">';
        if (myObj.isHideEmployer == 'false') {
            htmlResult += 'Sponsor Name:';
        }
        htmlResult += '</td>';
        htmlResult += '<td  class=\"SubTitleResult\" colspan=\"5\" >';
        if (myObj.isHideEmployer == 'false') {
            htmlResult += myObj.EnglishsponsorName;
        }
        htmlResult += '</td>';
        htmlResult += '</tr>';




        htmlResult += "<tr><td colspan='5'>"
        var htmlCompResults = "";

        if (myObj.myComBirthDateArray && myObj.myComBirthDateArray.length > 0) {
            htmlCompResults += '<table border=1 cellSpacing=0 dir=ltr cellPadding=0 align=left dir=\"ltr\" width=100% >';
            htmlCompResults += '<tr><td class=\"SubTitle\" colspan=3 align=center>Companions Information</td></tr>';

            htmlCompResults += '<tr><td width=15 align=center class=\"SubTitleResult\">No</td><td align=center class=\"SubTitleResult\">Name</td><td align=center class=\"SubTitleResult\">Date Of Birth</td></tr>';
            var counter = 1;
            for (i = 0; i < myObj.myComBirthDateArray.length; i++) {
                htmlCompResults += '<tr><td width=15 align=center class=\"SubTitleResult\">' + counter + '</td><td align=center class=\"SubTitleResult\">' + myObj.myComNamesArray[i] + '</td><td align=center dir=\"ltr\" class=\"SubTitleResult\">' + myObj.myComBirthDateArray[i] + '</td></tr>';
                counter++;
            }
            htmlCompResults += '</table>';
        } else {
            //htmlCompResults += "<tr><td  align=center class=\"SubTitleResult\">nothing</td></tr>" ;
        }
        htmlResult += htmlCompResults;

        var htmlSuppDocResults = "";

        if (myObj.mySupportDocEnArray && myObj.mySupportDocEnArray.length > 0) {
            htmlSuppDocResults += '<table border="1" cellSpacing="0" dir="ltr" cellPadding="4" align="left" dir="ltr" width="100%" >';

            htmlSuppDocResults += '<thead><tr style="background :#ddd; "><td align="left" class="SubTitleResult" width="50%" style="font-size:14px;">Additional documents required to present on arrival</td><td align="right" class="SubTitleResult" style="font-size:14px;">الوثائق الإضافية المطلوب إحضارها</td></tr></thead>';
            var counter = 1;
            for (i = 0; i < myObj.mySupportDocEnArray.length; i++) {
                htmlSuppDocResults += '<tbody><tr><td align="left" class="SubTitleResult" style="font-size:12px;">' + myObj.mySupportDocEnArray[i] + '</td><td align="right" dir="ltr" class="SubTitleResult" style="font-size:12px;">' + myObj.mySupportDocArArray[i] + '</td></tr></tbody>';
                counter++;
            }
            htmlSuppDocResults += '</table>';
        }

        htmlResult += htmlSuppDocResults;

        var notice = "";

        if ((myObj.visaMainCode == "41") && (myObj.visaSubCode == "01")) // (41 = عائليه) .......ffdffd(01 = "شخصيه")

        {
            notice = "<td align=left class=\"SubTitleResult\" colspan='3'>Note: Medical Examination and Extension should be undertaken within one month from the date of entry to Qatar</td>";
        }
        htmlResult += '</td></tr><tr>' + notice + '<td height=20 colspan=5 align=right></td></tr></table>';
        document.all.visaResult.innerHTML = htmlResult;
        window.print();
        //document.write(htmlResult);
    }
</SCRIPT>

<BODY onload="fillData();">

    <table width="100%">
        <tr>
            <td width="35%" height="51" valign="top">
                <p align="center"><b>STATE OF QATAR<br>
                        MINISTRY OF INTERIOR<br>
                        General Directorate of Passports</b></p>
            </td>
            <td width="29%" height="51" valign="top">
                <p align="center">

                    <IMG height=126 src="../images/Visa-logo.jpg" width=122 border=0></p>
            </td>
            <td width="36%" height="51" valign="top">
                <p align="center"><b>دولة قطر<BR> وزارة الداخلية <BR>الإدارة العامة للجوازات</b></p>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div id="visaResult" align="left">
                </div>
            </td>
        </tr>
    </table>
</BODY>

</HTML>