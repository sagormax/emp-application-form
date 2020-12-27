<?php
require_once "bootstrap.php";

if( !isset($_POST['submitReg']) ){
    die('invalid');
}

$cvUniqueName = '';
if($_FILES["cv_file"]){
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["cv_file"]["name"]);
    $cvFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $cvUniqueName = time().uniqid(rand()) . '.' . $cvFileType;

    if($cvFileType != "doc" && $cvFileType != "docx" && $cvFileType != "pdf" ) {
        die("Invalid CV file type");
    }

    if (!move_uploaded_file($_FILES["cv_file"]["tmp_name"], $target_dir . $cvUniqueName)) {
        die('File upload failed. Try again later');
    }

}

$data = [
    'name'                      => realString($_POST['name']),
    'ssn'                       => realString($_POST['ssn']),
    'presentAddress'            => realString($_POST['presentAddress']),
    'presentCity'               => realString($_POST['presentCity']),
    'presentState'              => realString($_POST['presentState']),
    'presentZipCode'            => realString($_POST['presentZipCode']),
    'permanentAddress'          => realString($_POST['permanentAddress']),
    'permanentCity'             => realString($_POST['permanentCity']),
    'permanentState'            => realString($_POST['permanentState']),
    'permanentZipCode'          => realString($_POST['permanentZipCode']),
    'phoneNumber'               => realString($_POST['phoneNumber']),
    'secondaryPhone'            => realString($_POST['secondaryPhone']),
    'email'                     => realString($_POST['email']),
    'referredBy'                => realString($_POST['referredBy']),
    'position'                  => realString($_POST['position']),
    'preferredStartDate'        => realString($_POST['preferredStartDate']),
    'salaryDesired'             => realString($_POST['salaryDesired']),
    'employmentStatus'          => realString($_POST['employmentStatus']),
    'employerInquire'           => realString($_POST['employerInquire']),
    'appliedBefore'             => realString($_POST['appliedBefore']),
    'whereToWork'               => realString($_POST['whereToWork']),
    'whenToWork'                => realString($_POST['whenToWork']),
    'highSchool'                => realString($_POST['highSchool']),
    'schoolYearsAttended'       => realString($_POST['schoolYearsAttended']),
    'schoolGraduate'            => realString($_POST['schoolGraduate']),
    'subjectOfSchool'           => realString($_POST['subjectOfSchool']),
    'college'                   => realString($_POST['college']),
    'collegeYearsAttended'      => realString($_POST['collegeYearsAttended']),
    'collegeGraduate'           => realString($_POST['collegeGraduate']),
    'subjectOfCollege'          => realString($_POST['subjectOfCollege']),
    'tradeOrBusiness'           => realString($_POST['tradeOrBusiness']),
    'otherYearsAttended'        => realString($_POST['otherYearsAttended']),
    'otherGraduate'             => realString($_POST['otherGraduate']),
    'subjectOfOther'            => realString($_POST['subjectOfOther']),
    'subjectOfSpecialStudy'     => realString($_POST['subjectOfSpecialStudy']),
    'specialTraining'           => realString($_POST['specialTraining']),
    'specialSkills'             => realString($_POST['specialSkills']),
    'militaryOrNaval'           => realString($_POST['militaryOrNaval']),
    'militaryOrNavalRank'       => realString($_POST['militaryOrNavalRank']),
    'empFromTo1'                => realString($_POST['empFromTo1']),
    'nameAndAddressEmployer1'   => realString($_POST['nameAndAddressEmployer1']),
    'formerSalary1'             => realString($_POST['formerSalary1']),
    'formerPosition1'           => realString($_POST['formerPosition1']),
    'reasonForLeaving1'         => realString($_POST['reasonForLeaving1']),
    'empFromTo2'                => realString($_POST['empFromTo2']),
    'nameAndAddressEmployer2'   => realString($_POST['nameAndAddressEmployer2']),
    'formerSalary2'             => realString($_POST['formerSalary2']),
    'formerPosition2'           => realString($_POST['formerPosition2']),
    'reasonForLeaving2'         => realString($_POST['reasonForLeaving2']),
    'empFromTo3'                => realString($_POST['empFromTo3']),
    'nameAndAddressEmployer3'   => realString($_POST['nameAndAddressEmployer3']),
    'formerSalary3'             => realString($_POST['formerSalary3']),
    'formerPosition3'           => realString($_POST['formerPosition3']),
    'reasonForLeaving3'         => realString($_POST['reasonForLeaving3']),
    'empFromTo4'                => realString($_POST['empFromTo4']),
    'nameAndAddressEmployer4'   => realString($_POST['nameAndAddressEmployer4']),
    'formerSalary4'             => realString($_POST['formerSalary4']),
    'formerPosition4'           => realString($_POST['formerPosition4']),
    'reasonForLeaving4'         => realString($_POST['reasonForLeaving4']),
    'refName1'                  => realString($_POST['refName1']),
    'refAddress1'               => realString($_POST['refAddress1']),
    'refBusiness1'              => realString($_POST['refBusiness1']),
    'refYearsKnown1'            => realString($_POST['refYearsKnown1']),
    'refName2'                  => realString($_POST['refName2']),
    'refAddress2'               => realString($_POST['refAddress2']),
    'refBusiness2'              => realString($_POST['refBusiness2']),
    'refYearsKnown2'            => realString($_POST['refYearsKnown2']),
    'refName3'                  => realString($_POST['refName3']),
    'refAddress3'               => realString($_POST['refAddress3']),
    'refBusiness3'              => realString($_POST['refBusiness3']),
    'refYearsKnown3'            => realString($_POST['refYearsKnown3']),
    'cv_name'                   => $cvUniqueName,
    'mail_send'                 => 0,
    'created_at'                => date('Y-m-d H:i:s'),
];

$emp = new \App\Model\EmpRegistration();

if( $id = $emp->insert($data) ){

    $uniqueName = getenv('PDF_UNIQUE_NUMBER');
    ob_start();
    require_once "generate-pdf.php";
    $resp = ob_get_clean();
    $fileName = $uniqueName . $id . '.html';
    file_put_contents(__DIR__. '/../PDF/'.$fileName, $resp);

    header('Location: ../complete.html');
}
else {
    die('something went wrong.');
}
