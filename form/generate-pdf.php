<?php
    //require_once "bootstrap.php";

    //if( !isset($_GET['id']) ) {
    //    die('invalid');
    //}
    $emp    = new \App\Model\EmpRegistration();
    $data   = $emp->find($id);

    if($data === false){
        die('Empty data...');
    }
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="<?php echo getenv('BASE_URL'); ?>site.webmanifest">
  <link rel="apple-touch-icon" href="<?php echo getenv('BASE_URL'); ?>icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo getenv('BASE_URL'); ?>css/pdf.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
    <table class="container-table">
        <tr>
            <td>
                <table class="header">
                    <tr>
                        <td class="heading" style="width: 50%"><h1>Application for Employment</h1></td>
                        <td class="note" style="width: 40%"><p>pre-employment questionnaire equal opportunity employer</p></td>
                        <td class="logo"><img src="<?php echo getenv('BASE_URL'); ?>img/logo.jpg" alt="logo"></td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td style="width: 55%">
                            <h2 class="heading">Personal Information :</h2>
                        </td>
                        <td>
                            <h2 class="heading">Date : <?php echo date('d M, Y'); ?></h2>
                        </td>
                    </tr>
                </table>
                <table class="personal-information form-table">
                    <tr>
                        <td style="width: 470px">
                            <p>Name (Last Name First Name)</p>
                            <p class="data-value"><?php echo $data['name']; ?></p>
                        </td>
                        <td>
                            <p>Social Security Number (Last 4 digit)</p>
                            <p class="data-value"><?php echo $data['ssn']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 60%">
                            <table class="under-table">
                                <tr>
                                    <td style="width: 60%">
                                        <p>Present Address</p>
                                        <p class="data-value"><?php echo $data['presentAddress']; ?></p>
                                    </td>
                                    <td>
                                        <p>City</p>
                                        <p class="data-value"><?php echo $data['presentCity']; ?></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>State</p>
                                        <p class="data-value"><?php echo $data['presentState']; ?></p>
                                    </td>
                                    <td>
                                        <p>Zip Code</p>
                                        <p class="data-value"><?php echo $data['presentZipCode']; ?></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 60%">
                            <table class="under-table">
                                <tr>
                                    <td style="width: 60%">
                                        <p>Permanent Address</p>
                                        <p class="data-value"><?php echo $data['permanentAddress']; ?></p>
                                    </td>
                                    <td>
                                        <p>City</p>
                                        <p class="data-value"><?php echo $data['permanentCity']; ?></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>State</p>
                                        <p class="data-value"><?php echo $data['permanentState']; ?></p>
                                    </td>
                                    <td>
                                        <p>Zip Code</p>
                                        <p class="data-value"><?php echo $data['permanentZipCode']; ?></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 60%">
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>Phone no.</p>
                                        <p class="data-value"><?php echo $data['phoneNumber']; ?></p>
                                    </td>
                                    <td>
                                        <p>Secondary phone no.</p>
                                        <p class="data-value"><?php echo $data['secondaryPhone']; ?></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <p>Referred by</p>
                            <p class="data-value"><?php echo $data['referredBy']; ?></p>
                        </td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td>
                            <h2 class="heading">Employment Desired :</h2>
                        </td>
                    </tr>
                </table>
                <table class="employment-desired form-table">
                    <tr>
                        <td style="width: 45%">
                            <p>position</p>
                            <p class="data-value"><?php echo $data['position']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>date you can start</p>
                                        <p class="data-value"><?php echo $data['preferredStartDate']; ?>&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>Salary desired</p>
                                        <p class="data-value"><?php echo $data['salaryDesired']; ?>&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 45%">
                            <p>Are you employed now ?</p>
                            <p class="data-value"><?php echo $data['employmentStatus']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p>If so, may we inquire of your present employer ?</p>
                            <p class="data-value"><?php echo $data['employerInquire']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 45%">
                            <p>Ever applied to this company before ?</p>
                            <p class="data-value"><?php echo $data['appliedBefore']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>when</p>
                                        <p class="data-value"><?php echo $data['whenToWork']; ?>&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>where</p>
                                        <p class="data-value"><?php echo $data['whereToWork']; ?>&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td>
                            <h2 class="heading">Education History :</h2>
                        </td>
                    </tr>
                </table>
                <table class="education-history form-table">
                    <tr>
                        <td style="width: 20%" class="color-head">
                            &nbsp;
                        </td>
                        <td style="30%" class="color-head">
                            <p>name & location of school</p>
                        </td>
                        <td style="10%" class="color-head">
                            <p>Years attended</p>
                        </td>
                        <td style="10%" class="color-head">
                            <p>Did you graduate</p>
                        </td>
                        <td style="30%" class="color-head">
                            <p>Subjects studied</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <p>High school</p>
                        </td>
                        <td style="30%">
                            <p><?php echo $data['highSchool']; ?>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['schoolYearsAttended']; ?>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['schoolGraduate']; ?>&nbsp;</p>
                        </td>
                        <td style="30%">
                            <p><?php echo $data['subjectOfSchool']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <p>college</p>
                        </td>
                        <td style="30%">
                            <p><?php echo $data['college']; ?>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['collegeYearsAttended']; ?>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['collegeGraduate']; ?>&nbsp;</p>
                        </td>
                        <td style="30%">
                            <p><?php echo $data['subjectOfCollege']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <p>trade, business or correspondence school</p>
                        </td>
                        <td style="30%">
                            <p><?php echo $data['tradeOrBusiness']; ?>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['otherYearsAttended']; ?>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['otherGraduate']; ?>&nbsp;</p>
                        </td>
                        <td style="30%">
                            <p><?php echo $data['subjectOfOther']; ?>&nbsp;</p>
                        </td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td>
                            <h2 class="heading">General Information :</h2>
                        </td>
                    </tr>
                </table>
                <table class="general-information form-table">
                    <tr>
                        <td>
                            <p>subject of special study/research work</p>
                            <p class="data-value"><?php echo $data['subjectOfSpecialStudy']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Special training</p>
                            <p class="data-value"><?php echo $data['specialTraining']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Special skills</p>
                            <p class="data-value"><?php echo $data['specialSkills']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>U.S. military or naval service</p>
                                        <p class="data-value"><?php echo $data['militaryOrNaval']; ?>&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>Rank</p>
                                        <p class="data-value"><?php echo $data['militaryOrNavalRank']; ?>&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td>
                            <h2 class="heading">Former employers :</h2>
                        </td>
                    </tr>
                </table>
                <table class="former-employers form-table">
                    <tr>
                        <td style="width: 20%" class="color-head">
                            <p>Date month & year</p>
                        </td>
                        <td style="30%" class="color-head">
                            <p>name & address</p>
                        </td>
                        <td style="10%" class="color-head">
                            <p>salary</p>
                        </td>
                        <td style="10%" class="color-head">
                            <p>position</p>
                        </td>
                        <td style="30%" class="color-head">
                            <p>reason of leaving</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>From ~ To</p>
                            <p class="data-value"><?php echo $data['empFromTo1']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['nameAndAddressEmployer1']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerSalary1']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerPosition1']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['reasonForLeaving1']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>From ~ To</p>
                            <p class="data-value"><?php echo $data['empFromTo2']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['nameAndAddressEmployer2']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerSalary2']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerPosition2']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['reasonForLeaving2']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>From ~ To</p>
                            <p class="data-value"><?php echo $data['empFromTo3']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['nameAndAddressEmployer3']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerSalary3']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerPosition3']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['reasonForLeaving3']; ?>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>From ~ To</p>
                            <p class="data-value"><?php echo $data['empFromTo4']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['nameAndAddressEmployer4']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerSalary4']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['formerPosition4']; ?>&nbsp;</p>
                        </td>
                        <td>
                            <p class="data-value"><?php echo $data['reasonForLeaving4']; ?>&nbsp;</p>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <table class="section-header ref">
                    <tr>
                        <td>
                            <h2 class="heading">Reference :</h2>
                        </td>
                    </tr>
                </table>
                <table class="reference form-table">
                    <tr>
                        <td class="color-head">
                            <p>Name</p>
                        </td>
                        <td class="color-head">
                            <p>address</p>
                        </td>
                        <td class="color-head">
                            <p>Business</p>
                        </td>
                        <td style="10%" class="color-head">
                            <p>Years Known</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo $data['refName1']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td>
                            <p><?php echo $data['refAddress1']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td>
                            <p><?php echo $data['refBusiness1']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['refYearsKnown1']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo $data['refName2']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td>
                            <p><?php echo $data['refAddress2']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td>
                            <p><?php echo $data['refBusiness2']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['refYearsKnown2']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo $data['refName3']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td>
                            <p><?php echo $data['refAddress3']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td>
                            <p><?php echo $data['refBusiness3']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                        <td style="10%">
                            <p><?php echo $data['refYearsKnown3']; ?>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td>
                            <h2 class="heading">Authorization :</h2>
                        </td>
                    </tr>
                </table>
                <span class="quote">
                    “I certify that the facts contained in this application are true and complete to the best of my knowledge and understand that, if employed,
                    falsified statements on this application shall be grounds for dismissal.
                </span>
                <span class="quote">
                    I authorize investigation of all statements contained herein and the references and employers listed above to give you any and all in-
                    formation concerning my previous employment and any pertinent information they may have, personal or otherwise, and release the
                    company from all liability for any damage that may result from utilization of such information.
                </span>
                <span class="quote">
                    I also understand and agree that no representative of the company has any authority to enter into any agreement for employment for any
                    specified period of time, or to make any agreement contrary to the foregoing, unless it is in writing and signed by an authorized company
                    representative.
                </span>
                <span class="quote">
                    This waiver does not permit the release or use of disability-related or medical information in a manner prohibited by the Americans with
                    Disabilities Act (ADA) and other relevant federal and state laws.
                </span>
                <span class="quote">
                    I understand that a consumer credit report or criminal records check may be necessary prior to my employment. If such reports are
                    required, I understand that, in compliance with federal law, the company will provide me with a written notice regarding the use of these
                    reports and will also obtain a separate written authorization from me to consent to these reports. I also understand that a poor credit
                    history or conviction will not automatically result in disqualification from employment.”
                </span>
                <span class="quote">
                    In compliance with federal law, all persons hired will be required to verify identity and eligibility to work in the United States and to com-
                    plete the required employment eligibility verification document form upon hire.
                </span>
                <table class="signature form-table">
                    <tr>
                        <td style="width: 30%">
                            <p class="top-bar padding">Date</p>
                        </td>
                        <td style="70%">
                            <p class="top-bar padding">Signature</p>
                        </td>
                    </tr>
                </table>
                <table class="signature form-table">
                    <tr>
                        <td>
                            <img class="img" src="<?php echo getenv('BASE_URL'); ?>img/donot.png" alt="do-not">
                        </td>
                    </tr>
                </table>
                <table class="signature form-table">
                    <tr>
                        <td style="width: 30%">
                            <p class="top-bar padding">Date</p>
                        </td>
                        <td style="70%">
                            <p class="top-bar padding">INTERVIEWED BY</p>
                        </td>
                    </tr>
                </table>
                <table class="section-header">
                    <tr>
                        <td>
                            <h2 class="heading">Remarks :</h2>
                        </td>
                    </tr>
                </table>
                <table class="reference form-table">
                    <tr>
                        <td>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>NEATNESS</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>CHARACTER</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td style="width: 50%">
                                        <p>PERSONALITY</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>ABILITY</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="under-table">
                                <tr>
                                    <td>
                                        <p>HIRED</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>FOR DEPT.</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>POSITION</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>WILL REPORT</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                    <td>
                                        <p>SALARY WAGES</p>
                                        <p class="data-value">&nbsp;</p>
                                        <p class="data-value">&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="signature form-table" style="margin-top: -20px">
                    <tr>
                        <td>
                            <p>Approved : </p>
                        </td>
                    </tr>
                </table>
                <table class="signature form-table">
                    <tr>
                        <td>
                            <p class="top-bar padding">EMPLOYMENT MANAGER</p>
                        </td>
                        <td>
                            <p class="top-bar padding">DEPARTMENT HEAD</p>
                        </td>
                        <td>
                            <p class="top-bar padding">GENERAL MANAGER</p>
                        </td>
                    </tr>
                </table>
                <span class="quote" style="margin-top: 10px;">
                    This application for employment is sold only for general use throughout the United States. TOPS assumes no responsibility and hereby disclaims any liability for the inclusion
                    in this form of any questions or requests for information upon which a violation of local, state, and/or federal law may be based. It is the user’s responsibility to ensure that
                    this form’s use complies with applicable laws, which change from time to time.
                </span>
            </td>
        </tr>
    </table>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo getenv('BASE_URL'); ?>js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
    <script src="<?php echo getenv('BASE_URL'); ?>js/main.js"></script>
</body>

</html>
