<?php require_once('../init/initialization.php');
$visa = new Visa();
$visa_number = htmlentities($_GET['visa_number']);
$nationality = htmlentities($_GET['nationality']);
$current_visa = $visa->find_visa_by_visa_number_and_nationality($visa_number, $nationality);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=windows-1256">

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
    <link rel=stylesheet type=text/css href="<?php echo public_url(); ?>css/print.css">
    <TITLE>Print Visa</TITLE>
</HEAD>

<BODY onload="window.print()">

    <table width="100%">
        <tr>
            <td width="35%" height="51" valign="top">
                <p align="center"><b>STATE OF QATAR<br>
                        MINISTRY OF INTERIOR<br>
                        General Directorate of Passports</b></p>
            </td>
            <td width="29%" height="51" valign="top">
                <p align="center">

                    <IMG height=126 src="<?php echo public_url(); ?>storage/logo/Visa-logo.jpg" width=122 border=0></p>
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
    <table border=0 cellSpacing=6 dir=ltr cellPadding=0 align=left width=100%>
        <tr>
            <td height=25 colspan=6><IMG src="<?php echo public_url(); ?>storage/images/LinearServlet.jpg" /></td>
        </tr>';
        <tr>
            <td width=150 class="SubTitle">Visa Number :</td>
            <td width=667 align=left class="SubTitleResult"><?php echo htmlentities($current_visa['visa_number']); ?></td>
            <td width=150 class="SubTitle" nowrap="nowrap">Application Number: </td>
            <td width=667 align=left class="SubTitleResult"><?php echo htmlentities($current_visa['visa_number']); ?></td>
        </tr>

        <tr>
            <td align="left" class="SubTitle">Date of Issue:</td>
            <td dir="ltr" align="left" class="SubTitleResult">
                <?php echo htmlentities($current_visa['date_issue']); ?>
            </td>
            <td align="left" class="SubTitle" nowrap="nowrap">Visa Validity :</td>
            <td dir="ltr" align="left" class="SubTitleResult">
                <?php echo htmlentities($current_visa['visa_validity']); ?>
            </td>
        </tr>

        <tr>
            <td align="left" class="SubTitle" nowrap="nowrap">Description of Visa owner :</td>
            <td class="SubTitleResult">
                <?php echo htmlentities($current_visa['description']); ?>
            </td>
            <td align="left" class="SubTitle">Visa Type : </td>
            <td class="SubTitleResu">
                <?php echo htmlentities($current_visa['visa_type']); ?>
            </td>
        </tr>

        <tr>
            <td align="left" class="SubTitle">Purpose of Visa :</td>
            <td class="SubTitleResult">
                <?php echo htmlentities($current_visa['purpose_for_visa']); ?>
            </td>
            <td align="left" class="SubTitle" nowrap="nowrap">
                Duration of Residence:
            </td>
            <td class="SubTitleResult">
                <?php echo htmlentities($current_visa['duration_residence']); ?>
            </td>
        </tr>

        <tr>
            <td align="left" dir=ltr class="SubTitle">Name : </td>
            <td class="SubTitleResult" colspan="5">
                <?php echo htmlentities($current_visa['fullnames']); ?>
            </td>
        </tr>

        <tr>
            <td align="left" class="SubTitle">
                Nationality :
            </td>
            <td class="SubTitleResult">
                <?php echo htmlentities($current_visa['nationality']); ?>
            </td>
            <td align="left" class="SubTitle">
                Gender :
            </td>
            <td class="SubTitleResult">
                <?php echo htmlentities($current_visa['gender']); ?>
            </td>
        </tr>

        <tr>
            <td align="left" class="SubTitle">
                Passport Number / Type :
            </td>
            <td class="SubTitleResult">
                <?php echo htmlentities($current_visa['passport_number']); ?>
            </td>
            <td nowrap align="left" class="SubTitle">
                Passport Validity:
            </td>
            <td dir="ltr" align="left" class="SubTitleResult">
                <?php echo htmlentities($current_visa['visa_validity']); ?>
            </td>
        </tr>

    </table>

</BODY>

</HTML>